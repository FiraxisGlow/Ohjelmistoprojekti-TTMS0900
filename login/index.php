<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: /../menus/teacher_menu.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>JAMK T.E.S</title>
  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
<header>
        <img src="jamk-logo.png" alt="Jamk logo">
      </header>
    <nav>
        <ul>
            
        </ul>
      </nav>
  
<form   method="post"
        action="">
  <div class="group">
    <input type="text" name="LoginId"><span class="highlight"></span><span class="bar"></span>
    <label>Tunnus</label>
  </div>
  <div class="group">
    <input type="password" name="LoginPassword"><span class="highlight"></span><span class="bar"></span>
    <label>Salasana</label>
  </div>
  <button type="submit" name="Submit" value="Login" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

  <footer>
      © 2017 Tean BODKA ©. Kaikki oikeudet pidätetään.
  </footer>

</body>
</html>