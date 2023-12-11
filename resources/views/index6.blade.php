@extends('master6')

@section('title', 'Kategori')

@section('konten')
<form action="/kategori/pilih" method="POST">
    @csrf
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection
