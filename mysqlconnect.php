<?php

$dbuser = 'mysqlkurs';
$dbpass = 'KC00iT8s0NOSpl5S';
$dbname = 'mysql_kurs';
// Hier käme der Link zum Host
$dbhost = '...';

$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
//var_dump($pdo);

$query = $pdo->prepare("SELECT * FROM buecher");
var_dump($query);
$query->execute();
echo "<ol>";
while($book = $query->fetch()){
    //var_dump($book);
    echo "<li>".$book['titel'] . "</li><br>";
}
echo "</ol>";
?>
<footer>
    <p><a href="insert.php">Neues Buch</a> <a href="mysqlconnect.php">Buchliste</a></p>
</footer>