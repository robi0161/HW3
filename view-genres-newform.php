<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGenreModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="newGenreModal" tabindex="-1" aria-labelledby="newGenreModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newGenreModalLabel">New genre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
           <div class="mb-3">
             <label for="gName" class="form-label">Genre Name</label>
             <input type="text" class="form-control" id="gName" name="gName">
           </div>
           <div class="mb-3">
             <label for="gDesc" class="form-label">Genre Description</label>
             <input type="text" class="form-control" id="gDesc" name="gDesc">
           </div>
            <input type ="hidden" name="actionType" value="Add">
           <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
