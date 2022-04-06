<?php 
    // session_start();
    // if (isset($_SESSION['unique_id'])) {
    //     header("location: users.php");
    // }
?> 
<?php 
    session_start();
    include_once "header.php";
    // include_once "php/forgotpswd.php";
?>
<body>
<div class="wrapper">
        <section class="form forgotpswd">
            <header>Realtime WeChat</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email">
                    </div>                   
                    <div class="field button">
                        <input type="submit" name="send" class="send-reset-link" value="SEND LINK">
                    </div>
                </form>
        </section>
    </div>

    <script src="javascript/forgotpswd.js"></script
</body>
</html>