@extends('layouts.main')


@section('container')
<div class="container">
    <div class="row">
        <h1 class="page-header">Tambah Customer</h1>
        <!-- Menampilkan Error Pada Penginputan-->


    </div>
</div>

<form method="POST" action="/customer/{{ $customer->id }}" class="mt-4" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="kode" class="form-label">Kode Customer</label>
        <input type="text" class="form-control" id="kode" aria-describedby="kode" name="kode"
            value="{{ old('kode', $customer->kode) }}" required placeholder="Kode">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Customer</label>
        <input type="text" class="form-control" id="nama" aria-describedby="nama" name="name"
            value="{{ old('name', $customer->name) }}" required placeholder="Nama">
    </div>
    <div class="mb-3">
        <label for="Telepon" class="form-label">No Telepon</label>
        <input type="Telepon" class="form-control" id="Telepon" aria-describedby="Telepon" name="telp" placeholder="Telepon"
            value="{{ old('telp', $customer->telp) }}" required>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="container">
</div>
@endsection