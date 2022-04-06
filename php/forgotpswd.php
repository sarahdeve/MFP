<?php
    // session_start();
    require("config.php");

    if (isset($_POST['send-reset-link'])) {
        $query = "SELECT * FROM `password reset` WHERE `email` = '$_POST[email]'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "run";
        }else {
            echo "<script>
                    alert('Cannot run query');
                    window.location.href='index.php';
                </script>";
        }
    }