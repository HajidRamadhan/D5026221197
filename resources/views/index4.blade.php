@extends('master4')
@section('title','Database_obat')

@section('judul_halaman')
	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/obat/tambah4"> + Tambah Obat Baru</a>

	<br/>
	<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>kodeobat</th>
			<th>merkobat</th>
			<th>stockobat</th>
			<th>tersedia</th>
		</tr>
		@foreach($obat as $p)
        <tr>
			<td>{{ $p->kodeobat }}</td>
			<td>{{ $p->merkobat}}</td>
			<td>{{ $p->stockobat }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
		</tr>
        @endforeach
    </table>
@endsection
