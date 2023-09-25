<div class="modal" id="CreatePlaylist">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create New Playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/save" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="MusicId" name="MusicId">
            <input  name="playlist" class="form-control" >
            <br>
              

           
            <input type="submit" name="Save">
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
