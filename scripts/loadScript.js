function loadScript(){
	var headID = document.getElementsByTagName("head")[0];         
	var newScript = document.createElement('script');
	newScript.type = 'text/javascript';
	newScript.src = 'doLoad.js';
	alert('No llego hasta aqui');
	headID.appendChild(newScript);
	doLoad();

}