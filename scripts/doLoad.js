//Jquery 
//$(document).ready(function(){
function load(){ 
   
   if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	xmlhttp.onreadystatechange=function()
	{
		
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//alert(xmlhttp.responseText);
			//alert("Hey");
			x=xmlhttp.responseXML.documentElement.getElementsByTagName("shoe");
			content = "";
			//for(p=1; p<=3; p++){
			for (i=0;i<x.length;i++){
				var organization = x[i].getElementsByTagName("organization")[0].firstChild.nodeValue;
				var description = x[i].getElementsByTagName("description")[0].firstChild.nodeValue;
				thumb = x[i].getElementsByTagName("thumb")[0].firstChild.nodeValue;
				brand = x[i].getElementsByTagName("brand")[0].firstChild.nodeValue; 
				style = x[i].getElementsByTagName("style")[0].firstChild.nodeValue; 
				
				var size = new Array();
				var sizeLength = x[i].getElementsByTagName("size").length;
				
				for(j=0; j<sizeLength; j++){
					size[j] = x[i].getElementsByTagName("size")[j].firstChild.nodeValue;					
				}
				
				// Obtener los numeros mayores y menores del arreglo de tamaño de los zapatos
				Array.prototype.max = function() {
					return Math.max.apply(null, this)
				}				
				Array.prototype.min = function() {
					return Math.min.apply(null, this)
				}				
				var sizeMin = Math.min.apply(null, size);
				var sizeMax = Math.max.apply(null, size);
				// Fin de (Obtener los numeros mayores y menores del arreglo de tamaño de los zapatos)
				var sizeText = sizeMin+" - "+sizeMax;
				//alert(textSize);
				
				price = x[i].getElementsByTagName("price")[0].firstChild.nodeValue;				
				
				var color = new Array();
				var colorLength = x[i].getElementsByTagName("color").length;
				var colorText = "";
				for(j=0; j<colorLength; j++){
					color[j] = x[i].getElementsByTagName("color")[j].firstChild.nodeValue;
					if(j != (colorLength - 1)){
						colorText += color[j]+", ";
					}else{
						colorText += color[j]+".";
					}
				}
				//Obtener el texto de los colores de zapatos con la primera letra mayuscula y las demas minusculas
				colorText = colorText.toLowerCase();
				colorText = colorText.charAt(0).toUpperCase() + colorText.substr(1);
				likeLink = x[i].getElementsByTagName("likeLink")[0].firstChild.nodeValue; 
				//Fin Obtener el texto de los colores de zapatos con la primera letra mayuscula y las demas minusculas
				//alert(organization+description+thumb+brand+style+size[0]+size[1]+price+color[0]+color[1]+likeLink);
				
				content += "<div id='column1Inside'>\
								<div id='column1Offer1'>\
									<a id='offerXButton' href='#' title='Mostrar otro' ></a>\
									<span class='offerTitle'><a href='#'>"+organization+"</a></span><br/>\
									<span class='offerDescription'>"+description+"</span>\
									<div id='offerImage'>\
									<a href='images/shoe1.jpg' title='Zapato casual para dama' class='thickbox'><img src='"+thumb+"' alt='Single Image' title='"+description+"'/></a>\
									<!-- <img src='images/shoe1Test.jpg' alt='Shoe1'/> -->\
									</div>\
									<div id='offerInfo'>\
									<div id='offerInfo1'>\
									<b>Marca:</b> "+brand+"\
									<b>Estilo:</b> "+style+"<br/>\
									<b>Tallas:</b> "+sizeText+"<br/>\
									<b>Precio:</b>  L."+price+"<br/>\
									</div>\
									<div id='offerInfo2'>\
									<b>Colores:</b> "+colorText+"<br/>\
									</div>\
									<div id='fb-root'></div><script src='http://connect.facebook.net/es_ES/all.js#appId=128033597279288&amp;xfbml=1'></script><fb:like href='"+likeLink+"' send='false' width='50' show_faces='false' font=''></fb:like>\
									</div>\
								</div>\
							</div>";
				
						//alert(content);					
						
			}
			//}
				
			//Walk-around para cargar los scripts sin esto no funcionaria---------------------
						var thickboxScript = document.createElement("script");
						thickboxScript.type="text/javascript";
						thickboxScript.src = "scripts/thickbox.js";
						document.body.appendChild(thickboxScript);
						
						var fadeInOutScript = document.createElement("script");
						fadeInOutScript.type="text/javascript";
						fadeInOutScript.src = "scripts/fadeInOut.js";
						document.body.appendChild(fadeInOutScript);
						
						var facebookScript = document.createElement("script");
						facebookScript.type="text/javascript";
						facebookScript.src = "http://connect.facebook.net/en_US/all.js";
						document.body.appendChild(facebookScript);
			//--------------------------------------------------------------------------------
			
			
		//document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		
		}
		document.getElementById('column1').innerHTML  = content;
	}
		
	
	xmlhttp.open("GET","shoe.xml",true);
	xmlhttp.send();
	
	
	
//});
} 


function firstLoad(){
	load();			
	//setTimeout('createOffer1()', 100);
	setTimeout("", 500);
	//createOffer1();
	
}




/*
function load(){
	//setTimeout('doLoad()', 2000);
	doLoad();
}


function doLoad(){
	//var content1 = 'hola';
	var content = "<a id='offerXButton' href='#' title='Mostrar otro' ></a>\
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
						</div>";
	document.getElementById('column1Offer1').innerHTML  = content;
						

}*/

