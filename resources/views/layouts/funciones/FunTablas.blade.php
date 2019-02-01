<script type="text/javascript">
	var counter = 1;

function tabladinamica(id){
    $.noConflict();
	var table = $('#'+id).DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
    table.buttons().container()
        .appendTo( '#'+id+'_wrapper .col-sm-6:eq(0)' );	
}
function addfila(table){
	var t = $('#'+table).DataTable();

    
        t.row.add( [
            counter +'<a href="javascript::void()" onclick="quitar('+counter+')">Quitar</a>',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5',
            counter +'.6',
            counter +'.7',
            counter +'.9'
        ] ).draw( false );
 
        counter++;
}
</script>

