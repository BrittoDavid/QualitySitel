
<!-- Modal -->
<div id="crear_ciudad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <center>  <h1 class="modal-title">Crear Producto</h1></center>
      </div>
      <div class="modal-body">
<form action="#" id="form_ciudad" method="get"  enctype="multipart/form-data">
        <div class="body"><br><br><br>
          <h2 class="card-inside-title"></h2>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row clearfix">
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">Depto</span>
                <div class="form-line">
                  <select id="depto_select" class="form-control" name="data[]">
                    <option value="">Seleccione</option>
   
                  </select>
                </div>
              </div>
            </div> 
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Nombre Ciudad</span>
                <div class="form-line">
                  <input type="text" name="text_ciudad" id="text_ciudad" class="form-control">
                  <input type="hidden" id="token" value="{{ csrf_token() }}">
                </div>
              </div>
            </div>                                            
            
              <center>                 
                <a class="btn btn-success" href="#" onclick="registrarCiudad()" id="boton_ciudad" data-url="/funciones/registrarciu"><img  id="esperar1" width="20em" src="{{ asset('img/cargando/4.gif') }}" style="display: none"> Registrar Ciudad</a></center>
            </div>
                   </div>  
          </form> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>