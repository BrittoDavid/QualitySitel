function onKeyPressBlockChars(e,numero)
{       
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    reg = /\d|\./;
    if (numero.indexOf(".")!=-1 && keychar=="."){
      return false;
    }else{
      return reg.test(keychar);
    }         
}

function calculaPorcentajes(numero,cantidad)
{
   var result =(numero / cantidad ) * 100;
   var porcentaje = result.toFixed(2);
   document.getElementById("porcentaje").value= porcentaje;
}


function calculaDiferencia(numero,cantidad)
{
   document.getElementById("diferencia").value= cantidad - numero;
}


//Desahilitamos la tecla enter para que solo se registre presionando el boton
function enter()
{
  window.addEventListener("keypress", function(event){
    if (event.keyCode == 13){
        event.preventDefault();
    }
  }, false);
}