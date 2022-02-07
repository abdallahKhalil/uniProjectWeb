<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Laundry Lab</title>
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
 <div class="wrrapWall">

<img src="img/wall.jpg" width="100%" height="600" vertical-align="middle">
  
</div>
<div class="wrrapWall">

<img src="img/wall2.jpg" width="100%" height="600" vertical-align="middle">
   
</div>
<div class="wrrapWall">

<img src="img/wall3.jpg" width="100%" height="600" vertical-align="middle">
   
</div>
<div class="wrrapWall">

<img src="img/wall4.jpg" width="100%" height="600" vertical-align="middle">
   
</div> 

    <footer>
    <div class="container"  >
    <h2 class="aboutUs">About Us</h2>
    <p class="opacity"><i>We love to give the best services</i></p>
    <p class="txtAbout">Our purpose is to provide the best services</p>
    
  </div>
        
    </footer wi>
    <script type="text/javascript">
     // Automatic Slideshow - change image every 4 seconds
       var myIndex = 0;
       carousel();

       function carousel() {
          var i;
          var x = document.getElementsByClassName("wrrapWall");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
          myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
             x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 4000);    
}


    </script>
</body>
</html>