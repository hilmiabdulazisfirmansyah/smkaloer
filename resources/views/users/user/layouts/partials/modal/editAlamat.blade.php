<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }

  .form-control, .input-group{
    margin-bottom: 3vh;
  }

</style>

<div class="modal fade" id="editAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Edit Alamat</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">

          @include('users.user.layouts.partials.form.alamatSiswa')

        </div>
      </div>
    </div>

