<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
session_start();
    $stmt = $conn->prepare("INSERT INTO userinfo (tpkt_user, tpkt_cim, tpkt_helyszin, tpkt_leiras, tpkt_kep, tpkt_kategoria)
    VALUES (:uid, :cim, :helyszin, :leiras, :kep, :kategoria)");
    $stmt->bindParam(':uid', $uid);
    $stmt->bindParam(':cim', $cim);
    $stmt->bindParam(':helyszin', $helyszin);
    $stmt->bindParam(':leiras', $leiras);
    $stmt->bindParam(':kep', $kep);
    $stmt->bindParam(':kategoria', $kategoria);

    //$t_uid = $conn->prepare("SELECT user_uid FROM users");
    $uid=$_SESSION['u_uid'];
    $cim = $_POST['cim'];
    $helyszin = $_POST['helyszin'];
    $leiras = $_POST['leiras'];
    $kep = $_POST['kep'];
    $kategoria = $_POST['kategoria'];

    $stmt->execute();
   
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>