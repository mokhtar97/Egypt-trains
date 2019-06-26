<?php
include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS The_Order(
      id int(11) not null auto_increment primary key,
      start decimal not null,
      end decimal not null,
      period decimal not null,
      velocity decimal not null,
      do_station varchar(250) not null,
      access_station varchar(250) not null,
	  degree varchar(50) not null);";
	  
      $db->myExec($tbl);
	  
	  $insert="INSERT INTO The_Order VALUES
               (1,5,10,5,120,'Qena','Assiut','first'),
			   (2,3,9,6,110,'Qena','Assiut','Second'),
				  (3,2,10,8,100,'Qena','Cairo','first'),
				   (4,5,8,3,90,'Qena','Sohag','third'),
				   (5,8,10,2,80,'Sohag','Assiut','second'),
				    (6,3,8,5,120,'Asswan','Qena','first'),
					 (7,4,10,6,110,'Asswan','Assiut','second'),
					 (8,7,12,5,120,'Qena','Assiut','first');";
					 
	  $db->myExec($insert);
	  	    ٍ
?>
