<?PHP
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
	
 
  //$organization = "Amazing SHOE'S";
  //$description = "Zapato casual para damas temporada verano 2012";
  //$thumb = "images/1tshoe1.jpg";
  //$brand = "Channel";
  //$style = "Casual";
  
  ###############################################################################################
  #									Get all sizes from an array									#	 			
  ###############################################################################################
  /*$size = array(11, 21, 31, 14, 75, 4, 5, 60, 899, 7, 7, 20, 7, 7);
  $sizeLength = count($size);
  $sizeText = "";
  for($i=0; $i<$sizeLength; $i++){
		$sizeText = $sizeText."<size>".$size[$i]."</size>";	
  }* 
  
  //$price = "512.75";
  
  ###############################################################################################
  #									Get all colors from an array								#	 			
  ###############################################################################################
  /*$color = array("Azul", "Dorado", "Morado", "Celeste", "Verde", "Cafe", "Gris", "Amarillo");
  $colorLength = count($color);
  $colorText = "";
  for($i=0; $i<$colorLength; $i++){
		$colorText = $colorText."<color>".$color[$i]."</color>";	
  }*/

  //$likeLink = "http://caminohn.com";
  
  $content = "<shoes>";
  
  while($row = mysql_fetch_assoc($result)){
		$idShoe = $row["idshoe"];
		$organization = $row["organization"];
		$description = $row["description"];
		$thumbnail = $row["thumbnail"];
		$brand = $row["brand"];
		$style = $row["style"];
		$price = $row["price"];
		$likeLink = $row["likeLink"];
		
		$query = "SELECT size.size FROM size AS size, shoesize AS shoesize WHERE shoesize.idshoe = $idShoe AND shoesize.idsize= size.idsize";
		$sizes = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$sizeText = "";
		$numRows = mysql_num_rows($sizes);
		if($numRows > 0){
			while($size = mysql_fetch_assoc($sizes)){
				$sizeText = $sizeText."<size>".$size["size"]."</size>";
			}
		}else{
			$sizeText = "<size>Ninguna</size>";
		}
		
		$query = "SELECT color.name FROM color AS color, shoecolor AS shoecolor WHERE shoecolor.idshoe = $idShoe AND shoecolor.idcolor = color.idcolor";
		$colors = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$colorText = "";
		while($color = mysql_fetch_assoc($colors)){
			$colorText = $colorText."<color>".$color["name"]."</color>";
		}
		
		
		$content = $content."<shoe>
		<organization>$organization</organization>
		<description>$description</description>
		<thumb>$thumbnail</thumb>
		<brand>$brand</brand>
		<style>$style</style>
		<sizes>$sizeText</sizes>
		<price>$price</price>
		<colors>$colorText</colors>
		<likeLink>$likeLink</likeLink>
	</shoe>";
  }
  $content = $content."</shoes>";
  
header('Content-Type: text/xml');  
echo '<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>' . "\n";
echo $content;

?>