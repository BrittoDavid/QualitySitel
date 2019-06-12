<script>
//Colocamos el formato de H (Horas formato de 24 horas):m(minutos):s(segundos)
function formatTime()
{
	//$.noConflict();
	//$('#time').timepicker({ 'timeFormat': 'H:m:s' });
}

function sectionImpacted(value)
{
	var option = value.value
	if (option == "Compliance") 
	{
		$('.Compliance').css("display", "inline");
		$('.Identification').css("display", "none");
		$('.Resolution').css("display", "none");
		$('.Card').css("display", "none");
		$('.t1').css("display", "none");

	}else if (option == "Identification") 
	{
		$('.Compliance').css("display", "none");
		$('.Identification').css("display", "inline");
		$('.Resolution').css("display", "none");
		$('.Card').css("display", "none");
		$('.t1').css("display", "none");
	}
	else if (option == "Resolution") 
	{
		$('.Compliance').css("display", "none");
		$('.Identification').css("display", "none");
		$('.Resolution').css("display", "inline");
		$('.Card').css("display", "none");
		$('.t1').css("display", "none");
	}
	else if (option == "Card Holder advocacy") 
	{
		$('.Compliance').css("display", "none");
		$('.Identification').css("display", "none");
		$('.Resolution').css("display", "none");
		$('.Card').css("display", "inline");
		$('.t1').css("display", "none");

	}else if (option == "T1 to T2 Consult")
	{
		$('.Compliance').css("display", "none");
		$('.Identification').css("display", "none");
		$('.Resolution').css("display", "none");
		$('.Card').css("display", "none");
		$('.t1').css("display", "inline");

	}else
	{
		$('.Compliance').css("display", "none");
		$('.Identification').css("display", "none");
		$('.Resolution').css("display", "none");
		$('.Card').css("display", "none");
		$('.t1').css("display", "none");
	}
}


/*FUNCION PARA COLOCAR LOS AGENTES*/
function darAgentAdp(coach,url)
{	
	data = {"coach":coach};
    funantes = new Array(inputcargando);
    funciones = new Array(cargarSel,inputcargando);
    parametros = {"fb1p1":"esperar2","fb1p2":"initial","f1p1":"ajaxdata","f1p2":"roster","f2p1":"esperar2","f2p2":"none"};
    ajaxPost(url,data,funciones,parametros,funantes);
}

/*LE MOSTRAMOS AL USUARIO EL ADP DEL AGENTE*/
function darIdAdp(adp,input,inputPhp,option)
{	
	if (option == "yes") 
	{
		document.getElementById(input).value = adp;
		document.getElementById(inputPhp).value = adp;
	}else
	{
		document.getElementById(input).value = "";
		document.getElementById(inputPhp).value = adp;
	}
	
}	



</script>