
<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message
if (isset($_POST['Submit'])) {
if (empty($_POST['LoginId']) || empty($_POST['LoginPassword'])) {
$error = "Username or Password is invalid";
    } else {
        // Variables for connecting to the mysql database
        $host = "127.0.0.1";
        $user = "bodka";
        $pass = "";
        $db = "bodka";
        $port = 3306;
        // Establishing mysql connection
        $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
        $Login = $_POST['LoginId'];
        $Pass = $_POST['LoginPassword'];
        $LoginCheck1 = "SELECT * FROM Student WHERE Id = '$Login';";
        $LoginCheck2 = "SELECT * FROM Supervisor WHERE Id = '$Login';";
        $LoginCheck3 = "SELECT * FROM Client WHERE Id = '$Login';"; 
        // Querying the 3 databases
        $Result1 = mysqli_query($connection, $LoginCheck1);
        $Result2 = mysqli_query($connection, $LoginCheck2);
        $Result3 = mysqli_query($connection, $LoginCheck3);
        // Attatching the query results to variables
        $PasswordCheck1 = mysqli_fetch_assoc($Result1);
        $PasswordCheck2 = mysqli_fetch_assoc($Result2);
        $PasswordCheck3 = mysqli_fetch_assoc($Result3);
        // Discerning which type of user is trying to login
        // Student
        if (md5($Pass) == $PasswordCheck1['Password'])
        {
    	    echo "<br>Login successful!";
    	    $_SESSION['login_user'] = $Login;
    	    $Logged = true;
        } else {
    	    echo "<br>Wrong Login information!";
        }
        // Supervisor (Teacher)
        if (md5($Pass) == $PasswordCheck2['Password'] && !$Logged)
        {
    	    echo "<br>Login successful!";
    	    $_SESSION['login_user'] = $Login;
    	    $Logged = true;
    	    header("location: ../menus/teacher_menu.php");
        } else {
    	    echo "<br>Wrong Login information!";
        }
        // Client
            if (md5($Pass) == $PasswordCheck3['Password'] && !$Logged)
        {
    	    echo "<br>Login successful!";
    	    $_SESSION['login_user'] = $Login;
    	    $Logged = true;
        } else {
        	echo "<br>Wrong Login information!";
        }
    }
}
?>