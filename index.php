<?php
	//echo "Hola";
?>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:fb='http://www.facebook.com/2008/fbml'> 
	<head> 
		<title>Shoe</title>
		<link rel='stylesheet' href='styles/thickbox.css' type='text/css' media='screen' />
		<link rel='stylesheet' type='text/css' href='styles/reset.css'>
		<link rel='stylesheet' type='text/css' href='styles/styles.css'>
		<script src='http://code.jquery.com/jquery-latest.js'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
		<script type='text/javascript' src='scripts/thickbox.js'></script>
		<script type='text/javascript' src='scripts/doLoad.js'></script>		
		<script type='text/javascript' src='scripts/jquery.js'></script>
		<script type='text/javascript' src='scripts/imageTest.js'></script>
		
	</head> 
	
	<body> 
	<div id='container'>
		<div id='header'>
			<div id='logoHeader'></div>
			
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
						<a id='offerXButton' href='#' title='Mostrar otro' ></a>\
						<span class='offerTitle'><a href='#'>Zapatos Ymas</a></span><br/>\
						<span class='offerDescription'>Zapato casual para damas temporada verano 2012</span>\
							<div id='offerImage'>\
							<a href='images/shoe1.jpg' title='Zapato casual para dama' class='thickbox'><img src='images/tshoe1.jpg' alt='Single Image' title='Zapato casual para dama'/></a>\
							<!-- <img src='images/shoe1Test.jpg' alt='Shoe1'/> -->\
							</div>\
							<div id='offerInfo'>\
							<div id='offerInfo1'>\
							<b>Marca:</b> Channel\
							<b>Estilo:</b> Casual<br/>\
							<b>Tallas:</b> 5 - 9<br/>\
							<b>Precio:</b> L.500.00<br/>\
							</div>\
							<div id='offerInfo2'>\
							<b>Colores:</b> Blanco, negro, mas.<br/>\
							</div>\
							<div id='fb-root'></div><script src='http://connect.facebook.net/es_ES/all.js#appId=128033597279288&amp;xfbml=1'></script><fb:like href='http://caminohn.com' send='false' width='50' show_faces='false' font=''></fb:like>\
						</div>
					</div>
				</div>

				
				
				<div id='column1Inside'>
					<div id='column1Offer2'>
						
						<a id='offerXButton' href='#' title='Mostrar otro' ></a>
						<span class='offerTitle'><a href='#'>Multizapatos</a></span><br/>
						<span class='offerDescription'>Zapato formal para dama en varios tamaños y colores, para este verano e invierno totalmente adecuados para cualquier ocacion</span>					
						<div id='offerXButton'></div>
						<div id='offerImage'><img src='images/shoe2Test.jpg' alt='Shoe2' /></div>
						<div id='offerInfo'>
							<div id='offerInfo1'>
							<b>Marca:</b> Channel
							<b>Estilo:</b> Casual<br/>
							<b>Tallas:</b> 5 - 9<br/>
							<b>Precio:</b> L.500.00<br/>	
							</div>
							<div id='offerInfo2'>
							<b>Colores:</b> Blanco, negro, mas.<br/>
							</div>
							<div id='fb-root'></div><script src='http://connect.facebook.net/en_US/all.js#appId=128033597279288&amp;xfbml=1'></script><fb:like href='http://caminohn.com' send='false' width='50' show_faces='false' font=''></fb:like>
						</div>
					
					</div>
				</div>
				
				
				<div id='column1Inside'>
					<div id='column1Offer3'>
						<a id='offerXButton' href='#' title='Mostrar otro' ></a>
						<span class='offerTitle'><a href='#'>Estilos Shoes</a></span><br/>
						<span class='offerDescription'>Zapato casual para damas temporada verano 2012</span>
						<div id='offerXButton'></div>
						<div id='offerImage'><img src='images/shoe3Test.jpg' alt='Shoe3' /></div>
						<div id='offerInfo'>
						<div id='offerInfo1'>
							<b>Marca:</b> Channel
							<b>Estilo:</b> Casual<br/>
							<b>Tallas:</b> 5 - 9<br/>
							<b>Precio:</b> L.500.00<br/>	
							</div>
							<div id='offerInfo2'>
							<b>Colores:</b> Blanco, negro, mas.<br/>
							</div>
							<div id='fb-root'></div><script src='http://connect.facebook.net/en_US/all.js#appId=128033597279288&amp;xfbml=1'></script><fb:like href='http://caminohn.com' send='false' width='50' show_faces='false' font=''></fb:like>
						</div>
					</div>
				</div>
				
			</div> 
			<div id='column2'>
			
			<!-- <a href='images/single.jpg' title='Zapato casual para dama' class='thickbox'><img src='images/single_t.jpg' alt='Single Image' title='Zapato casual para dama'/></a> -->
			</div>
			<div id='column3'>
				<div id='column3Inside'>
					<div id='column3Offer1'>
						<a id='offerXButton' href='#' title='Mostrar otro' ></a>
						<div id='offerBgHeader' class='offerTitle'>
							<a href='#'>Tiendas Carrion Outlet</a>
						</div>
						<div id='offerImageColumn3'><img src='images/carrion.jpg' alt='Shoe3' /></div>
						<div id='column3OfferDescription'>Tiendas Carrion somos primeros en todo, si quiere encontrar las mejores ofertas en zapatos no dude en visitaronos</div>
					</div>
				</div>
				
				
				<div id='column3Inside'>
					<div id='column3Offer1'>
						<a id='offerXButton' href='#' title='Mostrar otro' ></a>
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