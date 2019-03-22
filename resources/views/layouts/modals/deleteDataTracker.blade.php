<!-- Modal -->
<div id="deleteData" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h1 class="modal-title">Delete this registered?</h1></center>
      </div>
      <div class="modal-body">
        <form action="{{url('adp/deleteTracker')}}" id="delete" method="post"  enctype="multipart/form-data">
          <center>
            @csrf
            <input type="hidden" id="deleteid" name="id">
            <button type="submit" class="btn btn-primary">YES</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
          </center>
        </form>         
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>