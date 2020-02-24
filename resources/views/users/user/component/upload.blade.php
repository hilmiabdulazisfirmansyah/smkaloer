<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Pilih Gambar
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath">
   <input type="hidden" name="id" value="{{ auth()->user()->id }}">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;">