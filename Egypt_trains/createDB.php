<?php
include ('define.php');

function CreateDB($name)
{
 try
 {
   $db=new PDO("mysql:host=".host,user,password);
   $db->exec("CREATE DATABASE IF NOT EXISTS $name");
 }
 catch(Exception $e)
 {
  die("ERROR :".$e->getMessage());
 }
}
CreateDB(dbname);
?>
