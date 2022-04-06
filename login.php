<?php 
    // session_start();
    // if (isset($_SESSION['unique_id'])) {
    //     header("location: users.php");
    // }
?> 
<?php 
    include_once "header.php";
?>
<body>
<div class="wrapper">
        <section class="form login">
            <header>Realtime WeChat</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" class="" value="Continue to Chat">
                    </div>
                    <div class="forgot-btn">
                        <button type="button"><a href="forgot-password.php">Forgot Password?</a></button>
                    </div>
                </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
    <script src="javascript/forgotpswd.js"></script>

</body>
</html>