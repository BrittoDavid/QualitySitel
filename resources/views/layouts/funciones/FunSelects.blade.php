<script type="text/javascript">
/*FUNCION PARA CARGAR SELECTS, SE RESIVE EN EL DATA[0] EL HTML PARA EL SELECT
*/
	function cargarSel(data){
    	$("#"+data[1]).html(data[0]);
  	}
/*FUNCION PARA AUTO SELECIONAR UNA OPCIÓN DEL SELECT, id = identificador del selec, y el valor del option a colocar el select debe estar cargado con el dato a llamar
*/  	
function autoselect(id,valor){
	$("#"+id).val(valor);
}
</script>