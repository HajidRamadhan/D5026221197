@extends('master4')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Obat</h3>

	<a href="/obat"> Kembali</a>

	<br/>
	<br/>

	<form action="/obat/store" method="post" class = "form-horizontal" role="form">
		{{ csrf_field() }}
         <div class = "form-group">
            <label for = "merkobat" class = "col-sm-2 control-label">Merk Obat</label>
            <div class = "col-sm-10">
               <input name="merkobat" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Merk Obat">
            </div>
         </div>
         <div class = "form-group">
            <label for = "stockobat" class = "col-sm-2 control-label">Stock Obat</label>
            <div class = "col-sm-10">
               <input name="stockobat" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Stock Obat">
            </div>
         </div>
         <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">tersedia</label>
            <div class = "col-sm-10">
               <input name="tersedia" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Tersedia">
            </div>
         </div>
		<input type="submit" value="Submit Obat" class="btn btn-primary">
	</form>
</body>
</html>
@endsection
