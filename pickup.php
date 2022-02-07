<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loundry Lab PickUp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="head">
        <img src="img/laundrylabNobackground.png" width="100%" height="600" vertical-align="middle" id="logo">
      <!-- Navbar  -->
        <div class="navbar" style="bottom:-16px">
           <a href="main.php" class="navbtn">Home</a>
           <a href="prices.php" class="navbtn">Prices</a>
           <a href="contactus.php" class="navbtn">Contact</a>
           <a href="pickup.php" class="navbtn">Schedual PickUp</a>
        </div>
 </header>
 <div class="containe">
 <form method="post" action="action.php" id="message">
     <table width = "80%">
        <h2>Fill The below</h2>
        <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="First & last Name" required</td>
            </tr>
            <tr>
                <td>Phone number:</td>
                <td><input type="tel" name="pnum" placeholder="00961xxxxxx" required</td>
            </tr>

            <tr>
                <td>Email Address:</td>
                <td><input type="text" name="email" placeholder="Email@htomail.com" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" placeholder="City / State / Postal Code" ></td>
            </tr>

            <tr>
                <td>Pick Up Date:</td>
                <td><input type="date" name="pickup_d" ></td>
            </tr>
            <tr>
                <td>Pick Up Time:</td>
                <td><input type="time" name="pickup_t" ></td>
            </tr>

            <tr>
                <td>Description of the clothes:</td>
                <td><textarea rows = "5" cols = "60" name = "description">
            Enter details here...
                   </textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Schedual" class="btn"></td>
            </tr>

</table>
</form>
    
</body>
</html>