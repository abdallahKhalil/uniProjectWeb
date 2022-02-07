<?php
session_start();
include 'connection/connection.php';
if(count($_POST)>0) {
    $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["password"] = $row['password']; // create a session for the name of the user
            } else {
            echo "Invalid Username or Password!";
            }
        }
        if(isset($_SESSION["user_name"])) {
    header("Location:show.php"); // direct the user to the index page  - Success
    }

?>