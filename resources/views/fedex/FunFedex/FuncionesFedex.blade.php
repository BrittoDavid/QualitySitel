<script type="text/javascript">

/*FUNCION PARA COLOCAR LOS AGENTES*/
function darAgent(coach,url)
{	
	data = {"coach":coach};
    funantes = new Array(inputcargando);
    funciones = new Array(cargarSel,inputcargando);
    parametros = {"fb1p1":"esperar1","fb1p2":"initial","f1p1":"ajaxdata","f1p2":"roster","f2p1":"esperar1","f2p2":"none"};
    ajaxPost(url,data,funciones,parametros,funantes);
}

/*LE MOSTRAMOS AL USUARIO EL ADP DEL AGENTE*/
function darAdp(adp,input,inputPhp,option)
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
