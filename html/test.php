<?php
echo '<h3 style="color:#069">Resultat du connection avec la base de données: </h3>';
$host='database';
$dbname='magento';
$port='3306';
$user='root';
$password='root';

try{
   $bdd = new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$password);
}catch(PDOException $e){
   die('<h2 style="color:red">Erreur : '.$e->getMessage()."</h2>");
}
echo '<h1 style="color:green">Correct</h1>';
?>