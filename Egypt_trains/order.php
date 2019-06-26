<?php
  include ('database.php');
 if(isset($_POST['offer']))
 {
    $first=$_POST['where'];
    $second=$_POST['go'];
    $toto=$_POST['chose'];
    
    $ress=$db->getRows("SELECT * FROM The_Order",array());
	
    if(isset($ress))
    {
        ?>
      <script>
       alert('success data');
       </script>
       <?php
    }
    else
    {
       ?>
       <script>
       alert('please Enter correct data');
       </script>
       <?php
        header("Location:index.php");

    }
 }

 ?>
 <head>
 <link rel="stylesheet" href="order.css">
 </head>
 <body>
 <div class="container">
	 <div id="header">

	 <input type="button" value="=" id="btn">
	  <p>Egypt Train</p>
	 </div>

 </div>
<table>
<tr>
        
      <th>الدرجة</th>
	   <th>السرعة</th>
	  <th>المدة</th>
	   <th>وصول</th>
	   <th>قيام</th>
	   <th>قطار</th>
</tr>
<?php
 foreach($ress as $res)
 {
     if($res['do_station']==$first && $res['access_station']==$second && $res['degree']==$toto)
     {
?>
<tr>

<td><?php echo $res['degree']; ?></td>
<td><?php echo " كم/س".$res['velocity']; ?></td>
<td><?php echo $res['period']; ?></td>
<td><?php echo "ص".$res['end']; ?></td>
<td><?php echo "ص".$res['start']; ?></td>
<td><?php echo $res['id']; ?></td>
</tr>
 <?php
 }
 
 }
 ?>
 
 <?php  echo "<font color='white' size='20px' weight='bold'>From ".$first." To ".$second; ?> 

</table>
<a href='index.php'>GO TO Home</a>
</body>
