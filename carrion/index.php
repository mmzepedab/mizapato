<?php
	//echo "Hola";
?>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:fb='http://www.facebook.com/2008/fbml'> 
	<head> 
		<title>Shoe</title>
		<link rel='stylesheet' href='styles/thickbox.css' type='text/css' media='screen'/>
		<link rel='stylesheet' type='text/css' href='styles/reset.css'/>
		<link rel='stylesheet' type='text/css' href='styles/styles.css'/>
		<script src='http://code.jquery.com/jquery-latest.js'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
		<script type='text/javascript' src='/scripts/doLoad.js'></script>	
		<script type='text/javascript' src='/scripts/jquery.js'></script>
		<script type='text/javascript' src='/scripts/thickbox.js'></script>
		<script type='text/javascript' src='/scripts/fadeInOut.js'></script>
			
		
		
		
	</head> 
	
	<body onLoad='load();'> 
	<div id='container'>
		<div id='header'>
			<div id='logoHeader'><a href="#" onClick='load();'><img src='../images/logoHeader.png' alt='mizapato_logo'></img></a></div>
			
			<div id='navigationBar'>
			
			<div id='searchHeader'>
			<div id='navigationMenu'>
				<ul id='pageNavigation'>
					<li id='navigationCategory'><a href='#'>Categorias</a></li>
					<li id='navigationCategory'><a href='#'>Marcas</a></li>
					<li id='navigationCategory'><a href='#'>Tamaños</a></li>
					<li id='navigationCategory'><a href='#'>Colores</a></li>
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
						<div id='offerLoadingImage'><img src='loader.gif'></div> 
					</div>
				</div>
			</div>
			
			<div id='column2'>
			
			<!-- <a href='images/single.jpg' title='Zapato casual para dama' class='thickbox'><img src='images/single_t.jpg' alt='Single Image' title='Zapato casual para dama'/></a> -->
			</div>
			<div id='column3'>
				<div id='column3Inside'>
					<div id='column3Offer1'>
						<a id='organizationXButton' href='#' title='Mostrar otro' ></a>
						<div id='offerBgHeader' class='offerTitle'>
							<a href='#'>Tiendas Carrion Outlet</a>
						</div>
						<div id='offerImageColumn3'><img src='images/carrion.jpg' alt='Shoe3' /></div>
						<div id='column3OfferDescription'>Tiendas Carrion somos primeros en todo, si quiere encontrar las mejores ofertas en zapatos no dude en visitaronos</div>
					</div>
				</div>
				
				
				<div id='column3Inside'>
					<div id='column3Offer1'>
						<a id='organizationXButton' href='#' title='Mostrar otro' ></a>
						<div id='offerBgHeader' class='offerTitle'>
							<a href='#'>Mendel's la moda esta aqui</a>
						</div>
						<div id='offerImageColumn3'><img src='images/carrion.jpg' alt='Shoe3' /></div>
						<div id='column3OfferDescription'>Desde este viernes 31 hasta el martes 23 tendremos promociones de 25, 30 y 50% en todos los estilos de zapato para dama, ven y visitanos.</div>
					</div>				
				</div>
				
				
				<div id='column3Inside'>
				
				
				</div>
			</div>
		</div>
		<div id='footer'>Footer</div>
	</div> 
	</body> 
	
</html>