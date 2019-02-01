    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
   

<script type="text/javascript">
	function CambiarTexto(id){
		$("#"+id[0]).text(id[1]);
	}
	function CambiarValor(id){
		$("#"+id[1]).val(id[0]);
	}
	function CambiarHtml(id){
		$("#"+id[1]).html(id[0]);
	}		
  /*PLASMAR FACTURA EN UN DIV OCULTO*/

  function PlasmarHtml(id,url){
        $.ajax({
      url : url,
            type : "post",
            data : {"_token":"{{ csrf_token() }}","data":id},  
            success:function(datos){
            	abrirmodal("comprobantemodal");
              $("#plasmar").html(datos);
              $("#ur").attr("href","/comprobantes/comprobantepdf?data="+id);
              $("#ur").attr("download","fi2.pdf");
              
            }
        })  	
  
  } 	
</script>