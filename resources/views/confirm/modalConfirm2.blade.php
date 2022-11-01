<div class="modal fade" id="modal-Studentdel">
    <div class="modal-dialog" style="margin-top: 30vh;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="font-size:2rem;">Deleting . . . . . </h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-info"></i> Opsxx !</h5>
            If you delete this data, you will no longer to view this data.
            <p style="font-size:1rem;"> Are you sure ? &hellip;</p>
          </div>
          
        </div>
        <form method="POST" action="{{ route('admin.DestroyStudentAccount',$student->id) }}">
            <div class="modal-footer">
            {{ method_field('DELETE') }}
            <input class="btn btn-primary" type ="submit" VALUE="Yes"></input>
            
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>