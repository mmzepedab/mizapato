<?PHP
 
  $organization = "Amazing SHOE'S";
  $description = "Zapato casual para damas temporada verano 2012";
  $thumb = "images/1tshoe1.jpg";
  $brand = "Channel";
  $style = "Casual";
  
  ###############################################################################################
  #									Get all sizes from an array									#	 			
  ###############################################################################################
  $size = array(11, 21, 31, 14, 75, 4, 5, 6, 7, 7, 20, 7, 7);
  $sizeLength = count($size);
  $sizeText = "";
  for($i=0; $i<$sizeLength; $i++){
		$sizeText = $sizeText."<size>".$size[$i]."</size>";	
  } 
  
  $price = "512.75";
  
  ###############################################################################################
  #									Get all colors from an array								#	 			
  ###############################################################################################
  $color = array("Azul", "Dorado", "Morado", "Celeste", "Verde", "Cafe", "Gris", "Amarillo");
  $colorLength = count($color);
  $colorText = "";
  for($i=0; $i<$colorLength; $i++){
		$colorText = $colorText."<color>".$color[$i]."</color>";	
  }

  $likeLink = "http://caminohn.com";
  
  $content = "<shoes>";
  
  for($i=0; $i<3; $i++){
		$content = $content."<shoe>
		<organization>$organization</organization>
		<description>$description</description>
		<thumb>$thumb</thumb>
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