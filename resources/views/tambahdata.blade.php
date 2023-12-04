@extends('master3')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class = "form-horizontal" role="form">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "id" class = "col-sm-2 control-label">id</label>
            <div class = "col-sm-10">
               <input name="id" type = "number" class = "form-control" id = "id" placeholder = "Masukkan id">
            </div>
         <div class = "form-group">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
               <input name="nrp" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan NRP">
            </div>
         </div>
         <div class = "form-group">
            <label for = "nilai_angka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
               <input name="nilai_angka" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nilai Angka">
            </div>
         </div>
         <div class = "form-group">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-10">
               <input name="sks" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan SKS">
            </div>
         </div>
		<input type="submit" value="Submit Nilai" class="btn btn-primary">
	</form>
</body>
</html>
@endsection
