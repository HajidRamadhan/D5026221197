@extends('master3')
@section('title','Database_Pegawai')

@section('judul_halaman')
	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambahdata"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>nilai_angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $k)
		<tr>
			<td>{{ $k->id }}</td>
			<td>{{ $k->nrp }}</td>
			<td>{{ $k->nilai_angka }}</td>
			<td>{{ $k->sks }}</td>
            <td>
            @if ( $k->nilai_angka >= 81)
                A
            @elseif ($k->nilai_angka >= 61 && $k->nilai_angka <= 80)
                B
            @elseif ($k->nilai_angka >= 41 && $k->nilai_angka <= 60)
                C
            @elseif ($k->nilai_angka <= 40)
                D
            @else
                Invalid grade
            @endif
            </td>
            <td>
                {{$k->nilai_angka * $k->sks}}
            </td>
        </tr>
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection
