<?php
include 'connection/connection.php';
$name = $_POST['name'];
$pnum = $_POST['pnum'];
$email = $_POST['email'];
$address = $_POST['address'];
$pickup_d = $_POST['pickup_d'];
$pickup_t = $_POST['pickup_t'];
$description = $_POST['description'];

if($name==null || $email==null || $pnum==null){
    echo"Please fill all the reqired information";
}
else {
    
        $qry= "INSERT INTO pickup(name, pnum, email, address, date, time, description)
         VALUES ('$name', '$pnum', '$email','$address','$pickup_d','$pickup_t','$description')";
    
    mysqli_query($con,$qry) or die(mysqli_error($con));
    header("location:pickup.php");
}
?>
