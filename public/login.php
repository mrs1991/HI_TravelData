<?php
//include('loginsession.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: DataEntry.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>
<head>
<link rel="stylesheet" type="text/css" href="TravelSite.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>NHS GMTS Accomodation Booking Log-In</title>
</head>

    <body>
    <form class="form-style-5" action="loginsession.php" method="POST" >
  
    <h1>NHS GMTS Accomodation Booking Log-In</h1>
    <br>
      <fieldset style="width: 50%; margin:auto">
    <p><strong>Please enter your credentials below. </strong> </p>
    <br />
    <p style="text-align: center">Username: <input id="name" name="username" type="text" max-length="100" style="width: 200px"></p>
    <br />
    <p style="text-align: center">Password: <input id="password" name="password" type="text" max-length="100" style="width: 200px"></p>
    <input type="submit"/>
   <br />
   <p> If you do not know your username and/or password, please check your email, that failing, contact rosanna.shackleton@nhs.net</p>
    </fieldset>

 <br>
 
  </form>
  
    </body>

</html>