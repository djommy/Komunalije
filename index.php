<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
  <style>
	table {
		margin: 0 auto;
	}	
	
  </style>
  
</head>
<body>
	<h1><center>Calculator comunalija</center></h1>
	<table cellspacing="30" border="1">
		<tr>
			<th>Ime</th><th>Dug</th><th>Tekuce stanje</th><th>Ukupno</th>
		</tr>
	<?php 
		mysql_connect('localhost', 'root', 'root');
		mysql_select_db('comunalije');
		$comunalije = mysql_query("SELECT * FROM `comunalije`") or die(mysql_error());
		while($com = mysql_fetch_assoc($comunalije)) {
	?>
		<tr>
			<td><?php echo $com['name']; ?></td>
			<td><?php echo $com['debt']; ?></td>
			<td><?php echo $com['current']; ?></td>
			<td><?php echo $com['total']; ?></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</html>