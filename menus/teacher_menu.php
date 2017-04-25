
<!DOCTYPE html>
<html>
    <head>
      <title>JAMK T.E.S</title>
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>

   <body>
   
      <header>
        <img src="jamk-logo.png" alt="Jamk logo">
      </header>
      
      <nav>
        <ul>
            <li><a href="url">Opinnäyte</a></li>
            <li><a href="url">Arviointi</a></li>
        <?php 
        echo "<li><a href='/../login/Logout.php'>Logout</a></li>"  ?>
        </ul>
      </nav>
      
      <main>
          
      <div class="container">
  <h2 style="text-align:center;">ARVIOITAVAT</h2>
          <div class="two">
  <button type="button" id="triangle-up" data-toggle="collapse" data-target="#demo"></button>
          </div>
  <div id="demo" class="collapse">
  
  
  <?php
    // Starting the session
    session_start();
    // Initiating connection to the database
    $teacher = $_SESSION['login_user']; 
    $host = "127.0.0.1";
    $user = "bodka";
    $pass = "";
    $db = "bodka";
    $port = 3306;
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

// Finding the students whose thesis the Supervisor is the primary supervisor of
$query = "SELECT * FROM Thesis WHERE Super1 = '$teacher';";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $Student = $row['Student'];
  $query = "SELECT * FROM Student WHERE Id = '$Student';";
  $result2 = mysqli_query($connection, $query);
  while ($row2 = mysqli_fetch_assoc($result2)) //Loop used to fetch students from the thesis table based on primary supervision and displayed on the menu
  {
    $_SESSION['student_id'] = $row2['Id'];
    $student = $_SESSION['student_id'];
    echo "<form method ='get' action = '../ARVIOINTI/evaluation_tool.php>";
    echo "<div class='tunnus'>";
    echo "<p class='one'>" .$row2['Id']. " " .$row2['Name'].  " <a href='../ARVIOINTI/evaluation_tool.php'><button class='button1' name='".$row2['Id']."' type='submit' form='form1' value='".$student."'>arvioi</button></a> <button class='button1'  type='submit' form='form1' value='Submit'>View Thesis</button> </p>";
    echo "</div>";
    echo "</form>";
  }
}
// Finding the students whose thesis the Supervisor is the secondary supervisor of
$query2 = "SELECT * FROM Thesis WHERE Super2 = '$teacher';";
$result2 = mysqli_query($connection, $query2);
while ($row = mysqli_fetch_assoc($result2)) {
  $Student = $row['Student'];
  $query = "SELECT * FROM Student WHERE Id = '$Student';";
  $result2 = mysqli_query($connection, $query);
  while ($row2 = mysqli_fetch_assoc($result2)) //Loop used to fetch students from the thesis table based on secondary supervision and displayed on the menu
  {
    $_SESSION['student_id'] = $row2['Id'];
    $student = $_SESSION['student_id'];
    echo "<form method ='post' action = '../ARVIOINTI/evaluation_tool.php>";
    echo "<div class='tunnus'>";
    echo "<p class='one'>" .$row2['Id']. " " .$row2['Name'].  " <a href='../ARVIOINTI/evaluation_tool.php'><button class='button1' name='".$row2['Id']."' type='submit' form='form1' value='".$student."'>arvioi</button></a> <button class='button1'  type='submit' form='form1' value='Submit'>View Thesis</button> </p>";
    echo "</div>";
    echo "</form>";
    }
  }


?>
  </div>
</div>
          
      

     

          
      </main>
       
      <footer>
         © 2017 Tean BODKA ©. Kaikki oikeudet pidätetään.
      </footer>
   

    </body>
    
</html>