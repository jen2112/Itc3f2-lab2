<div class="modal" id="inserting">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Upload Music</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/insert" method="post">
            <br>
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="ID" name="ID">
            <input type="File" name="File" required>
            <br><br>
            <label>Artist:</label>
            <input type="text" name="Artist" placeholder="Artist" required>
            <br><br>
            <label>Title:</label>
            <input type="text" name="MusicName" placeholder="Name" required><br>
            <br>
            <br>
            <button type="submit" class="btn btn-success" name="insert">Insert</button>
          </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>