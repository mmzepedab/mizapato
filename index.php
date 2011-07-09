<?php
	//echo "Hola";
?>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:fb='http://www.facebook.com/2008/fbml'> 
	<head> 
		<title>Shoe</title>
		<link rel='stylesheet' href='styles/thickbox.css' type='text/css' media='screen'></link>
		<link rel='stylesheet' type='text/css' href='styles/reset.css'></link>
		<link rel='stylesheet' type='text/css' href='styles/styles.css'></link>
		<script type='text/javascript' src='scripts/loadScript.js'></script>	
		<script type='text/javascript' src='scripts/constants.js'></script>
	</head> 
	
	<body onload='loadScript();'>

	<div id='container'>
		<div id='header'>
			<div id='logoHeader'><a href="#" onclick='load();'><img src='images/logoHeader.png' alt='mizapato_logo'></img></a></div>
			
			<div id='navigationBar'>
			
			<div id='searchHeader'>
			<div id='navigationMenu'>
				<ul id='pageNavigation'>
					<li class='navigationCategory'><a href='#'>Categorias</a></li>
					<li class='navigationCategory'><a href='#'>Marcas</a></li>
					<li class='navigationCategory'><a href='#'>Tamaños</a></li>
					<li class='navigationCategory'><a href='#'>Colores</a></li>
				</ul>
			</div>
			<input class='inputSearchHeader' type='text'>
			<div id='buttonSearchHeader'></div>	
			</div>
			<div id='facebookLogin'>
			<div id='fb-root'></div>
				<script src='http://connect.facebook.net/en_US/all.js'></script>
				<script>
					FB.init({ 
					appId:'YOUR_APP_ID', cookie:true, 
					status:true, xfbml:true 
					});
				</script>
				<fb:login-button>Accede con tu facebook</fb:login-button>
			</div>
			
			
			</div>
			<!-- <div id='searchHeader'>
			<input class='inputSearchHeader' type='text'>
			<div id='buttonSearchHeader'></div>	
			<div id='borrame'>Hola</div>			
			</div> -->
			
		</div>
		<div id='content'>
			
			<div id='column1'>
				<div id='column1Inside'>
					<div id='column1Offer1'>
						<div id='offerLoadingImage'><img src='loader.gif' alt='loading_image'></img></div> 
					</div>
				</div>
			</div>
			
			<div id='column2'>
			
			<!-- <a href='images/single.jpg' title='Zapato casual para dama' class='thickbox'><img src='images/single_t.jpg' alt='Single Image' title='Zapato casual para dama'/></a> -->
			</div>
			<div id='column3'>
				<div id='column3Inside'>
					<div id='column3Offer1'>
						<div id='offerLoadingImage'><img src='loader.gif' alt='loading_image'></img></div>
					</div>
				</div>
				
				
				
				

			</div>
		</div>
		<div id='footer'>Footer</div>
	</div> 
	</body> 
	
</html>


