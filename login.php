<html>
<title> log in </title>
<link rel="stylesheet" href="style.css">
<body>

<div class="form-container">
<form name="frmUser" method="post" action="login_action.php" align="center">
<h3 align="center">Enter Login Details</h3>
 
 <input type="text" name="user_name" placeholder="Username">
 <br>
 
<input type="password" name="password"  placeholder="Password">
<br><br>
<input type="submit" name="submit" value="Submit" class="btn">
<input type="reset">
</form>
</body>
</div>
</html>






<style>
.form-container{
    min-height:100%;
    width:100%;
    display: flex;
    align-items: center;
    justify-content: center;
    
    background-size: cover;
    backgorun-position: center;
    prespective:1000px;
}
.form-container form{
    height:450px;
    width:350px;
    background-color:silver;
    text-align: center;
    align-items: center;
    border-radius:4px;
    box-shadow: 0 5px black;
    border-top: 1px solid black;
    border-left: 1px solid black;
    backdrop:blur(10px);
    trandform-style:preseve-3d;
}
.form-container form h3{
    font-size:30px;
    padding: 30px 0;
    color: black;
    letter-spacing:2px;
}
.form-container form input{
    outline: none;
    border: none;
    height: 40px;
    width: 80%;
    background-color: rgb(0,0,0,.1);
    color: black;
    box-shadow:0 0 5px 10px rgba(0,0,0,.5)inset;
    font-size: 17px;
    paddind: 0 10px;
    margin:15px 0;
    border-radius:15px;
}


</style>