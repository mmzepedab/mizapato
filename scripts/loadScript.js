/***************************************************************************************************/
/*						Funcion para cargar los scripts de forma dinamica 						   */
/***************************************************************************************************/

function loadScript(){
	var head= document.getElementsByTagName('head')(0);
/***************************************************************************************************/
/*			Cargar el script de doLoad.js y luego llamar el metodo load en index.php     		   */
/***************************************************************************************************/
	if(window.location == _ROOT+'/'|| window.location == _ROOT+'/#'){	
	var script= document.createElement('script');
	script.addEventListener(
		'load',
		function (evt) {
		// handle load here e.g. call whatever function you want to call
		load();
		},
		false
		)
	script.type= 'text/javascript';
	//alert(_ROOT+'/scripts/doLoad.js');   
	script.src = _ROOT+'/scripts/doLoad.js';
	head.appendChild(script);
	}
	
	//Import Jquery framework form source on the web
	var script= document.createElement('script');
	script.type= 'text/javascript';
	script.src = 'http://code.jquery.com/jquery-latest.js';
	head.appendChild(script);
	
	//Import Thickbox script, which makes a pop up image from a thumbnail
	var script= document.createElement('script');
	script.type= 'text/javascript'; 
	script.src = _ROOT+'/scripts/thickbox.js';
	head.appendChild(script);
	
	//Import FadeInOut script, makes disapear an reaper every offer
	var script= document.createElement('script');
	script.type= 'text/javascript';
	script.src = _ROOT+'/scripts/fadeInOut.js';
	head.appendChild(script);
	
	
	
		/*	
		<script type='text/javascript' src='scripts/fadeInOut.js'></script>
		<script type='text/javascript' src='scripts/thickbox.js'></script>
		<script src='http://code.jquery.com/jquery-latest.js'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>*/

}