<?php
 session_start();
 include ('database.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head lang="en">
  <title>Egypt Train</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

<div class="container">
	 <div id="header">

	 <input type="button" value="=" id="btn" onclick="func()">
	 <p id="demo"></p>
	 
	  <p>Egypt Train-قطارات مصر</p>
	 </div>

         <div id="main">

          <?php
          include ('search.php');
          ?>
		<script>
		  function func()
		  {
			  alert('Degrees: -first class - second class  -third class');
		  }
 </script>
         </div>

</div>

</body>

</html>
