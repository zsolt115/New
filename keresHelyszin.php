    <?php
include_once 'header.php';

?>

<section class="main-container">
    <div class="main-wrapper" align="center">
        <h2 class="tpfk">Tanulmányi Programokon Kívüli Tevékenységek Listája</h2>

    <?php
    
echo "<table style='border: solid 3px black;'>";
echo "<tr><th>Felhasználónév</th><th>Cím</th><th>Helyszín</th><th>Leírás</th><th>Kép</th><th>Kategória</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:3px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $search = $_POST['helyszin'];

    $stmt = $conn->prepare("SELECT tpkt_user, tpkt_cim, tpkt_helyszin, tpkt_leiras, tpkt_kep, tpkt_kategoria FROM userinfo WHERE tpkt_helyszin = '$search'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

    ?>
    <form class="feltoltes-form" action="listazas.php" method="POST">
    <button type="submit" name="back">Vissza</button>
</form>
        <?php 
if (isset($_POST['back'])){
    include_once 'listazas.php';
}
    ?>
    </div>
</section>

<?php
    include_once 'footer.php';
?>