<script type="text/javascript">
	var doc = new jsPDF();
	var specialElementHandlers = {'#editor': function (element, renderer) {return true;}};

	function DescargarPdf(html){
		doc.fromHTML($(html).html(), 15, 15, {
        	'width': 170,
            'elementHandlers': specialElementHandlers
    	});
    	doc.save('file.pdf');
	}
</script>