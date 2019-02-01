<!-- Modal -->
<div id="crear_depto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <center>  <h1 class="modal-title">Crear Departamento</h1></center>
      </div>
      <div class="modal-body">
<form action="#" data-url="/funciones/registrardepto" id="formdepto" method="get" enctype="multipart/form-data">
        <div class="body"><br><br><br>
          <h2 class="card-inside-title"></h2>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row clearfix">
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Nombre Depto</span>
                <div class="form-line">
                  <input type="text"  class="form-control date" id="nombredepto">
                </div>
              </div>
            </div>                                
            
              <center><a class="btn btn-success" href="#" id="botondepto" onclick="registrarDepto()">Registrar Depto</a></center>
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
