<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat";

   // $con = new mysqli($host,$user,$pass,$db_name);

   try {

       $pdo = new PDO("mysql:host = $host;dbname=$db_name","$user","$pass");

       $pdo->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

       $pdo->exec('SET NAMES "utf8"');

   } catch (PDOException $e) {

       throw $e;

       exit();
   }


?>
