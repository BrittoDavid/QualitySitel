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



/*VERIFICAMOS LAS OPCIONES PARA SACAR EL SCORE EN FEDEX*/
function verifedex(evento,input)
{
	//Sacamos el texto de la opcion escogida por el QA
	option = evento.value;
	document.getElementById(input).value = option;
	//llamamos la funcion del score
	scorefedex();
}


/*FUNCION CON LA CUAL IREMOS SUMANDO EL PUNTAJE DEL EGENTE DE LA CAMPAÑA DE FEDEX*/
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


/*VERIFICAMOS LAS OPCIONES PARA SACAR EL SCORE EN ADP*/
function veriadp(evento,value,inputA,inputB)
{	
	//cogemos el valor que vale el items
	valor = document.getElementById(value).value;
	//Recogemos que opción escogio el auditor 
	option = evento.value;
	id = evento.id;
	alert(id);
	//Dependiendo la opción se realizan diferentes acciones
	if (option == "Yes") 
	{
		document.getElementById(inputA).value = valor;
		document.getElementById(inputB).value = valor;

	}else if (option == "No") 
	{
		document.getElementById(inputA).value = 0;
		document.getElementById(inputB).value = valor;

	} else 
	{
		document.getElementById(inputA).value = 0;
		document.getElementById(inputB).value = 0;

	}

	scoreadp();
}

/*FUNCION CON LA CUAL IREMOS SUMANDO EL PUNTAJE DEL EGENTE DE LA CAMPAÑA DE ADP*/
function scoreadp()
{
	//Esta funcion se activa cuando el usuario elige un opcion de cualquier select
	$("select").change(function()
	{

       //variables con las cuales obtenemos el porcentaje
       var scr = 0;
       var puntosTotales = 0;
       var puntosObtenidos = 0;

       //sumamos todos los puntos totales que puede sacar el agente
       $( ".sumPoss" ).each(function( index ) {

       		if ($(this).val() == "AF") 
       		{
       			$(this).val(0);
       		}

  			puntosTotales += parseInt($(this).val(), 10);

		});

       //sumamos todos los puntos obtenidos que va sacando el agente
       $( ".sumObt" ).each(function( index ) {

       		if ($(this).val() == "AF") 
       		{
       			puntosObtenidos = 0;
       			return false;
       		}

  			puntosObtenidos += parseInt($(this).val(), 10);

		});

       // si ambos parametros son iguales a 0 hacemos que el porcentaje sea igual a 0 para evitar errores
       if (puntosTotales == 0 && puntosObtenidos == 0) 
       {
       		scr = 0;

       		//Sino pues sacamos el porcentaje
       }else
       {
       		scr =   parseFloat((puntosTotales/ puntosObtenidos) * 100 );
       }
      

       //Dependiendo el valor de "scr" colocamos que se muestre
       	if (scr == 100) 
		{	
			$("#scoreqa").val(scr + "%");
			$("#scoreqaPHP").val(scr + "%");
			//document.qa.scoreqa.style.color='green';
		}else if (scr == 0) 
		{	
			$("#scoreqa").val(0);
			$("#scoreqaPHP").val(0);
			//document.qa.scoreqa.style.color='black';	
		}else 
		{	
			var n = scr.toFixed(2);
			$("#scoreqa").val(n + "%");
			$("#scoreqaPHP").val(n + "%");
			//document.qa.scoreqa.style.color='red';
		}

		//Guardamos los valores en dichas input tipo text con disable para mostrarlos en la vista
		$("#possible").val(puntosTotales);
	  	$("#obtained").val(puntosObtenidos);

	  	//Guardamos los valores en dichas input tipo hidden para mandalos a los controladores
	  	$("#possiblePHP").val(puntosTotales);
	  	$("#obtainedPHP").val(puntosObtenidos);
    });
}
