<script type="text/javascript">
	function subirImagenAjax()
	{
		data = {"file":$('#photo')[0].files[0]};
		
    	var url = "/funciones/subirArchivoAjax";
    	funantes = new Array(inputcargando);
    	funciones = new Array(monstrarImagen,inputcargando);
    	parametros = {"fb1p1":"esperar2","fb1p2":"initial","f1p1":"ajaxdata","f1p2":"foto_perfil","f2p1":"esperar2","f2p2":"none"};
    	ajaxPost(url,data,funciones,parametros,funantes); 		
	}

	function monstrarImagen(url,id)
	{
		$("#"+id).attr("src",url);
	}
</script>