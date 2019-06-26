<?php

include ('define.php');

class database
{
 private $Host=host;
 private $User=user;
 private $Pass=password;
 private $database=dbname;

 function __construct()
 {
  $this->pdo=new PDO("mysql:host=".$this->Host.";dbname=".$this->database,$this->User,$this->Pass,
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
 }

 function getRows($query,$params=array()) 
 {
  $stmt=$this->pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->fetchAll();
 }

 function getRow($query,$params=array())
 {
  $stmt=$this->pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->fetch();
 }
 function myExec($query)
 {
  return $this->pdo->exec($query);
 }

}
$db=new database;
?>
