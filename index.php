
<?php 
    include_once "header.php";
?>
<body>
    <div class="wrapper" id="login-form">
        <section class="form signup">
            <header>Realtime WeChat</header>
             <form method="get" action="" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" class="" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
            </section>
        </div>
        <!-- jkjnkn -->
        
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>

        
        <!-- <script>
            var x = document.getElementById('login');
            var y = document.getElementById('register');
            var z = document.getElementById('btn');
            function register () {
                x.style.left = '-400px';
                y.style.left = '50px';
                z.style.left = '110px';
            }
            
            function login() {
                x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
        
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            } else {
                // ....
            }
        }
    </script> -->
    </body>
    </html>