<?php 
    $conn = mysqli_connect("localhost", "root", "", "forum" );
    if (!$conn) {
        echo "Datebase connected" . mysqli_connect_error();
    }
    // echo "This is ";
?>