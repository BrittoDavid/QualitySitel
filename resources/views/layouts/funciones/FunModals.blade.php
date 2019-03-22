<script type="text/javascript">
	/*FUNCION PARA ABRIR MODALES GENERAL*/
	function abrirmodal(id)
	{
    	jQuery('#'+id).modal('show');
	}

	/*FUNCION PARA ABRIR EL MODAL PARA ELIMINAR UN REGISTRO*/
	function abrirmodalDelete(id,id_data)
	{
    	jQuery('#'+id).modal('show');
    	$('#deleteid').val(id_data);
	}

	/* FUNCION PARA CERRAR MODALES */
	function cerrarmodal(data){
    	$("#"+data[0]).modal("hide");
	}   	
</script>