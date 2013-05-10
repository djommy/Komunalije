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
	<?php 
		$date = date('m/Y', time());
		var_dump($date);
		mysql_connect('localhost', 'root', 'root');
		mysql_select_db('comunalije');
		if(!empty($_POST)) {
			foreach ($_POST as $id => $iznos) {
				mysql_query("INSERT INTO `racuni` (`komunalije_id`, `iznos`, `placeno`, `datum`) values('" . $id . "', '" . $iznos . "', '0', '" . $date . "')") or die(mysql_error());
			}
		}
		
	?>
	<h1><center>Racuni</center></h1>
	<form id="racuni" name="racuni" method="POST">
		<table cellspacing="30" border="1">
			<tr>
				<th>Ime</th><th>Racun</th>
			</tr>
		<?php 
			$racuni = array();
			$racuniQuery = mysql_query("SELECT * FROM `racuni` where `datum`=" . $date);
			
			while($rac = mysql_fetch_assoc($racuniQuery)) {
				$racuni[] = $rac;
			}
			var_dump($racuni);
			$comunalije = mysql_query("SELECT * FROM `comunalije`") or die(mysql_error());
			while($com = mysql_fetch_assoc($comunalije)) {
		?>
			<tr>
				<td><?php echo $com['name']; ?></td>
				<td>
					<input type="text" name="<?php echo $com['id']; ?>" value="<?php echo empty($racuni[$com['id']])? '': $racuni[$com['id']]; ?>" />
				</td>
			</tr>
		<?php
			}
		?>
		</table>
		<input type="submit" value="Sacuvaj" />
	</form>
</body>
</html>