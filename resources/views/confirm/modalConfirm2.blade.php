<div class="modal fade" id="modal-Studentdel">
    <div class="modal-dialog" style="margin-top: 30vh;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="font-size:2rem;">Confirmation</h4>
        </div>
        <div class="modal-body">
          
            {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> --}}
            <h5 style="font-size:2rem;"><i class="icon fa fa-info"></i> Opsxx !</h5>
            <p style="font-size:2rem;">If you delete this data, you will no longer to view this data.</p>
            <p style="font-size:2rem;"> Are you sure ? &hellip;</p>
          
          
        </div>
        <form method="POST" action="{{ route('DestroyStud',$student->id) }}">
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