@extends('layouts.main')


@section('container')
<div class="container">
    <div class="row">
        <h1 class="page-header">Edit Barang</h1>
        <!-- Menampilkan Error Pada Penginputan-->


    </div>
</div>

<form method="post" action="/barang/{{ $barang->id }}" class="mt-4" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="kode" class="form-label">Kode Barang</label>
        <input type="text" class="form-control" id="kode" aria-describedby="kode" name="kode"
            value="{{ old('kode', $barang->kode) }}" required placeholder="Kode">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama"
            value="{{ old('nama', $barang->nama) }}" required placeholder="Nama">
    </div>
    <div class="mb-3">
        <label for="Harga" class="form-label">Harga</label>
        <input type="Harga" class="form-control" id="Harga" aria-describedby="Harga" name="harga" placeholder="Harga"
            value="{{ old('harga', $barang->harga) }}" required>
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
</form>
<div class="container">
</div>
@endsection