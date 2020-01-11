<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }
</style>

<div class="modal fade" id="editKehadiranGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Edit Kehadiran Guru</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">
        <form action="{{ url('/update/kehadiran') }}" method="POST">
          
          @csrf
          <input id="user_id" type="hidden" name="user_id" value="">
          @include('users/user/layouts/partials/modal/widget/widgetKehadiranUser')
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

