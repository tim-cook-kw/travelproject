<div id="modaledit" class="modal fade" role="dialog"> 
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bangku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="edit" method="post">
      @csrf
  <div class="form-group">
  <label for="exampleFormControlInput1">Nama Product</label>
  <select name="product" class="form-control" id="sel1">
        <option value="2">garuda</option>
      </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Bangku</label>
    <input type="text" name="nomor_bangku" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Bangku">
  </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">ADD</button>
      </div>    
      </form>
    </div>
  </div>
</div>