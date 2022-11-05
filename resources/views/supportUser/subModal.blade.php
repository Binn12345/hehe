  
  {{-- LOGOUT --}}
  
  <div class="modal fade" id="modal-defaultsss">
    <div class="modal-dialog" style="margin-top: 30vh;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Log out?</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to log out?&hellip;</p>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" >Yes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  
  