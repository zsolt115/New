<?php

$dbserverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$dbname = "loginsystem";

$conn = mysqli_connect( $dbserverName , $dbuserName , $dbpassword , $dbname );
/*
try {
    $conn = new PDO("mysql:host=$dbserverName;dbname=$dbname", $dbuserName, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    include_once 'signup.inc.php'

    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
*/