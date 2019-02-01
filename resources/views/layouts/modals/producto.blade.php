<!-- Modal -->
<div id="crear_producto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center>  <h1 class="modal-title">Crear Producto</h1></center>
      </div>
      <div class="modal-body">
        <form action="{{ url('productos/postregistro') }}" method="POST" enctype="multipart/form-data">
          <div class="body"><br><br><br>
            <h2 class="card-inside-title"></h2>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row clearfix">
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-addon">Nombre</span>
                  <div class="form-line">
                    <input type="text"  class="form-control date" name="nombre" id="nombre_producto">
                  </div>
                </div>
              </div>                                
              <center><a href="#" class="btn btn-success" onclick="registrarProducto('/productos/registrarcat')"><img  id="esperar2" width="20em" src="{{ asset('img/cargando/4.gif') }}" style="display: none">  Registrar</a></center>
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