<div id="users" class="btn-group" style="width: 100%;">
<button id="uSiswa" type="button" class="btn btn-info" style="border-right: 2px solid grey;">Siswa</button>

<button id="uOrtu" type="button" class="btn btn-info d-none" style="border-right: 2px solid grey;">Orang Tua Siswa</button>


<button id="uGuru" type="button" class="btn btn-info" style="border-right: 2px solid grey;">Guru</button>

<button id="uAlumni" type="button" class="btn btn-info d-none">Alumni</button>
</div>


	


@include('form/form/regSiswa')
@include('form/form/regOrtu')
@include('form/form/regGuru')
@include('form/form/regAlumni')
