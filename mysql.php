<?php
	$link =  mysql_connect('localhost', 'root', 'Q1w2e3r4t5');
	if (!$link) {
		die('No pudo conectarse: ' . mysql_error());
	}
	
	$dbname = 'mizapato';
	mysql_select_db($dbname);

	$query = 'SELECT * FROM shoe';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	echo "<table>\n";
		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo "\t<tr>\n";
			foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
			}
		}
	echo "</table>\n";
?>