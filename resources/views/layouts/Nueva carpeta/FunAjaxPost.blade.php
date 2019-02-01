<script type="text/javascript">
	 /* ENVIAR AJAX CON FUNCIONE BEFORE Y SUCCESS PARAMETROS
     URL(STRING) RESIVE LA URL DONDE SE EJECUTARA EL AJAX, DATA LA INFORMACION QUE SE ENVIA POR 
     AJAX(OBJETO), FUNCIONES(ARRAY) ENVIA LAS FUNCIONES QUE SE EJECUTARAN DESPUES DE REALIZADA 
     LA PETICIÓN,PARAMETROS(OBJETO) RESIVE LOS PARAMETROS DE LAS FUNCIONS CON SU RESPECTIVA NOMENCALTURA PAR ALAS FUNCIONES DESPUES DE LA PETICION SERIA "f1" REFERENCIANDO LA FUNCION EN LA POSICION DEL ARREY(FUNCIONES) Y "fb1" PARA LAS FUNCIONES QUE SEJECUTAN ANTES DE LA PETICION AMBOS SEGUIDOS DEL NUEMRO DE SU PARAMETRO P1, P2 ..., FUNANTES(ARRAY) CON LAS FUNCIONES QUE SE JECUTARAN ANTES DE ENVIAR LA PETICIÓN.
  */
  function ajaxPost(url,data,funciones,parametros,funantes){
          $.ajax({
            url : url,
            type : "post",
            data : {"_token":"{{ csrf_token() }}","data":data},
                beforeSend: function() {
                // FOR DONDE RECOREMOS EL NUEMERO DE FUNCIONES ANTES DE LA PETICION
                for(x = 0; x < funantes.length;x++){
                  // COJEMOS EL INDICE DE LOS PARAMETROS
                    indicesP = Object.keys(parametros);
                    // ARREGLO PARA INCLUIR LOS PARAMETROS DE LA FUNCIONç
                    var param = new Array();
                    //DEFINE LA POSICION DEÑ ARRAY QUE CONTIENE LOS PARAMETROS 
                    var y = 0;
                    // FOR PARA RECORRER LOS INDICES DE LOS PARAMETROS
                    for(i = 0; i < indicesP.length;i++){              
                    // ESTRAEMOS EL INDICE DE COMPARACIÓN PARA SABER SI ES LA FUNCION    
                      if( "fb"+(x+1) == indicesP[i].substr(0,3)){
                        // DEFINE LA FUNCION QUE HAY QUE EJECUTAR
                        var esta = x;
                        //PREGUNTAMOS SI DEBEMOS MANDAR LOS RESULTADOS DEL AJAX
                        if(parametros[indicesP[i]] == "ajaxdata"){
                          //INCLUIMOS EL PARAMETRO
                            param[y] = datos;
                            //AUMENTAMOS EL INDICE PARA LOS PARAMETROS
                            y++;
                        }else{
                            //INCLUIMOS EL PARAMETRO
                            param[y] = parametros[indicesP[i]];
                            //AUMENTAMOS EL INDICE PARA LOS PARAMETROS
                            y++;
                        }
                      }
                    }
                    // GUARDAMOS EN UNA VARIABLE LA FUNCION A JECUTAR
                    var fun = funantes[esta];
                    // EJECUTAMOS LA FUNCION CON SUS PARAMETROS
                    fun(param);
                  }                                 
                },
            success:function(datos){
              // FOR DONDE RECOREMOS EL NUEMERO DE FUNCIONES DESPUES DE LA PETICION
              for(x = 0; x < funciones.length;x++){
                 // COJEMOS EL INDICE DE LOS PARAMETROS
                indicesP = Object.keys(parametros);
                // ARREGLO PARA INCLUIR LOS PARAMETROS DE LA FUNCIONç
                var param = new Array();
                // DEFINE EL INDICE DELOS PARAMETROS
                var y = 0;
                // RECORREMOS LOS LOS INDICES DE LOS PARAMETROS
                for(i = 0; i < indicesP.length;i++){
                  // EVALUAMOS SI ES LA FUNCION A JECUTAR
                  if( x+1 == parseInt(indicesP[i].substr(1,1))){
                      // PREGUNTAMOS SI MANDAMOS LA REPSUESTA DEL AJAX
                    if(parametros[indicesP[i]] == "ajaxdata"){
                      // INCLUIMOS LA RESPUESTA DEL AJAX
                        param[y] = datos;
                        // AVANZAMOS EN POSICIONES DE LOS PARAMETROS
                        y++;
                    }else{
                      // INCLUIMOS APRAMETROS ENVIADOS POR FUNCION
                        param[y] = parametros[indicesP[i]];
                        // AVANZAMOS EN POSICIONES DE LOS PARAMETROS
                        y++;
                    }
                  }
                }
                // GUARDAMOS EN UNA VARIABLE LA FUNCION A JECUTAR
                var fun = funciones[x];
                // LLAMAMOS LA FUNCION CON SU PARAMETROS
                fun(param);
              }          
                
            }
        })
  }
</script>