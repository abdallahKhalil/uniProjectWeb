<?php
include 'connection/connection.php';
$name = $_POST['name'];
$pnum = $_POST['pnum'];
$email = $_POST['email'];
$date = date('Y-m-d');

$description = $_POST['description'];

if($name==null || $email==null || $pnum==null){
    echo"Please fill all the reqired information";
}
else {
    
        $qry= "INSERT INTO message(name, pnum, email, description, date) 
        VALUES ('$name', '$pnum', '$email', '$description', '$date')";
    
    mysqli_query($con,$qry) or die(mysqli_error($con));
    header("location:contactus.php");
}
?>