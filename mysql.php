<?php
	$link =  mysql_connect('localhost', 'root', 'Q1w2e3r4t5');
	if (!$link) {
		die('No pudo conectarse: ' . mysql_error());
	}
	
	$dbname = 'mizapato';
	mysql_select_db($dbname);
	//for($i=0; $i<3; $i++){

	
	//SELECT sh.idshoe, org.name AS organization, sh.description, sh.thumbnail, br.name AS brand, st.name AS style, sh.price, sh.likeLink FROM shoe AS sh, organization AS org, brand AS br, style AS st WHERE sh.idshoe = 2
	/*SELECT DISTINCT sh.idshoe, org.name AS organization, sh.description, sh.thumbnail, br.name AS brand, st.name AS style, sh.price, 
	sh.likeLink FROM shoe AS sh, organization AS org, brand AS br, style AS st ORDER BY rand() LIMIT 3*/
	
	$query = "SELECT DISTINCT sh.idshoe, org.name AS organization, sh.description, sh.thumbnail, br.name AS brand, st.name AS style, sh.price, 
	sh.likeLink FROM shoe AS sh, organization AS org, brand AS br, style AS st ORDER BY rand() LIMIT 3";
	//echo $query;
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
		
		while($row = mysql_fetch_assoc($result)){
			echo $row["idshoe"];
			echo $row["organization"];
			echo $row["description"];
			echo $row["thumbnail"];
			echo $row["brand"];
			echo $row["style"];
			echo $row["price"];
			echo $row["likelink"];
			echo "<br/>";
		}
		

	
?>