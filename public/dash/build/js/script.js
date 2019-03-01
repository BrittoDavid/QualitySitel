/*VARIABLES GLOBALES DE LAS FUNCIONES*/

//sitetitle
var body = $("body");
var site_title = $("#site_title");



/* ESTA FUNCION COLOCAMOS EL TITULO AL MENU DEPENDIENDO COMO SE ENCUENTRE ESTE MISMO*/
function siteTitle()
{
	if (body.hasClass('nav-md')) 
	{
		site_title.text('QT');
	}else
	{
		site_title.text('Quality Tools');
	}
}

/*FUNCION PARA MINIMIZAR Y MAXIMIZAR EL PANEL DONDE SE ENCUENTRA EN FORMULARIO DE LOS MONITOREOS*/
function panelminimize(form)
{
	$("form").slideToggle();
	$("q").toggleClass("fa-minus fa-plus");
}


/*FUNCION CON EL CUAL DESABILITAMOS EL BOTON DE ENTER*/

function enter()
{
	window.addEventListener("keypress", function(event){
		if (event.keyCode == 13){
	    	event.preventDefault();
		}
	}, false);
}

/*FUNCION PARA PONER LA FECHA DEL DIA QUE SE REALICE DICHO MONITOREO*/
function evolucionDate()
{	
	//obtenemos la fecha
	n =  new Date();
	//Año
	y = n.getFullYear();
	//Mes
	m = n.getMonth() + 1;
	//Día
	d = n.getDate();

	document.qa.audit_date.value = m + "/" + d + "/" + y;		
}


/*VERIFICAMOS LAS OPCIONES PARA SACAR EL SCORE EN FEDEX*/
function verifedex(evento,input)
{
	//Sacamos el texto de la opcion escogida por el QA
	option = evento.value;
	document.getElementById(input).value = option;
	//llamamos la funcion del score
	scorefedex();
}


/*FUNCION CON LA CUAL IREMOS SUMANDO EL PUNTAJE DEL EGENTE*/
function scorefedex()
{	
	$
	//esta se activa apenas se realice un cambio en cualquier select
	$("select").change(function()
	{	
       // Funcion con las cual ponemos la fecha actual del monitoreo
       // evolucionDate();

       //variables con las cuales obtenemos la suma total
       var scr = 0;

       //sumamos todos los puntos del formulario
       $( ".sumPoss" ).each(function( index ) {

       		if ($(this).val() == "AF") 
       		{
       			scr = 0;
       			return false;
       		}

  			scr += parseInt($(this).val(), 10);

		});
      	

       //Mostramos el score que va sacando el agente
		$("#scoreqa").val(scr);
		$("#scoreqaPHP").val(scr);
		//alertify.success(scr);
    });
}

