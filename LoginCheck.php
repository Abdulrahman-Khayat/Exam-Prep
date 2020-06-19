<?php
   session_start();
   include "connect/connect.php";
   
   $_SESSION["userID"];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $chekcSQL = "SELECT * FROM users WHERE User_email = '$email' AND password = '$pwd'";
    $result = mysqli_query($conn, $chekcSQL);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION["userID"] = $row["User_ID"];
        header("location:student/dashboard.php");
    }
    else{
        header("location:login.html");
    }


?>