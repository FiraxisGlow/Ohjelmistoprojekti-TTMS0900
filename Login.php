<form   method="post"
        action="Login.php">
    
    Input student login details:<br><input type="text" name="LoginId"><br>
    Password:<br><input type="text" name="LoginPassword"><br>
    <input type="radio" name="Selection" value="Student">Student
    <input type="radio" name="Selection" value="Supervisor">Supervisor
    <input type="radio" name="Selection" value="Client">Client<br>
    <input type="submit" value="Login"><br><br>
    
</form>

<?php

    $host = "127.0.0.1";
    $user = "bodka";
    $pass = "";
    $db = "bodka";
    $port = 3306;
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    if (!isset($_POST['LoginId'])) exit();
    {
        $Login = $_POST['LoginId'];
        $Pass = $_POST['LoginPassword'];
        $Selection = $_POST['Selection'];
    
        if ($Selection == "Student")
        {
            $LoginCheck = "SELECT * FROM Student WHERE Id = '$Login';";
            $Result = mysqli_query($connection, $LoginCheck);
            $PasswordCheck = mysqli_fetch_assoc($Result);
        
            if (md5($Pass) == $PasswordCheck['Password'])
                {
                     echo "<br><p>Login successful!</p><br>";
                } else {
                    echo "<br><p>Wrong login information!</p>";
                    /*echo "<br>Your hash was: " .md5($Pass);
                    echo "<br>Correct hash was: " .$PasswordCheck['Password'];*/
                }
        } else if ($Selection == "Supervisor") {
        
            $LoginCheck = "SELECT * FROM Supervisor WHERE Id = '$Login';";
            $Result = mysqli_query($connection, $LoginCheck);
            $PasswordCheck = mysqli_fetch_assoc($Result);
        
            if (md5($Pass) == $PasswordCheck['Password'])
                {
                     echo "<br><p>Login successful!</p><br>";
                } else {
                    echo "<br><p>Wrong login information!</p>";
                }
        } else if ($Selection == "Client") {
        
            $LoginCheck = "SELECT * FROM Client WHERE Id = '$Login';";
            $Result = mysqli_query($connection, $LoginCheck);
            $PasswordCheck = mysqli_fetch_assoc($Result);
        
            if (md5($Pass) == $PasswordCheck['Password'])
                {
                     echo "<br><p>Login successful!</p><br>";
                } else {
                    echo "<br><p>Wrong login information!</p>";
                }
        }
    };
    
    /*
    --- Taulukosta haku esimerkki ---
    $query = "SELECT * FROM Student";
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['Id'] . " and the name is: " . $row['Name'] . " and the Pass Hash is: " . $row['Password'];
    };
    
    --- Taulukkoon tallennus esimerkki ---
    $Register = "INSERT INTO Student (Id, Password, Name) VALUES ('K666', '441c5c073e834e716a2d4cf6ddce7a9f', 'Joukkelis Poukkelis')";
        if ($connection->query($Register) === true)
        {
            echo "Jouko created successfully";
        } else {
            echo "Error";
        }
    */
?>