<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        # code...let check if the users email is valid or not
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            # code...if email is valid lets check if that email is already exist in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) { //if email already exist
                echo "$email - This email already exist!!";
            } else {
                # code...lets check users upload file or not
                if (isset($_FILES['image'])) {
                    # code...if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded image name
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder
                                                            // $img_type = $_FILES['image']['type']; //getting user uploaded image type
                                                            ///let's explode image and get the last extension like jpeg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //here we get the extension of an users ploaded files 

                    $extensions = ['png', 'jpeg', 'jpg'];
                    if (in_array($img_ext, $extensions) === true) {
                        $time = time(); //this will return us the current time
                                        //we need this time cus when a user upload thir image into our folder we rename file with current time
                                        //so all the image file will have a unique name
                        //let's move the user uploaded img the particular folder
                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)) {
                            $status = "Active now"; //once user signed up then the user will be active now
                            $random_id = rand(time(), 10000000);//creating random id for users

                            //let's insert all users data inside the table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                                                        VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if ($sql2) {
                               $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                               if (mysqli_num_rows($sql3) > 0) {
                                   $row = mysqli_fetch_assoc($sql3);
                                   $_SESSION['unique_id'] = $row['unique_id']; 
                                   echo "Success";
                               }
                            } else {
                                echo "Something went wrong!";
                            }
                         }
                    } else {
                        echo "Please select an Image file - jpg, jpeg, png!";
                    }
                } else {
                    echo "Please select an Image file!";
                }
            }       
        } else {
            echo "$email - This is not a valid email";
        }
    } else {
        echo "All input field are required";
    }
?>