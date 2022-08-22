@extends('layouts.main')


@section('container')

{{-- @if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
    
@endif --}}

<!-- mainbody -->
<h1>List Customer : </h1>
<a href="/customerinput" class="btn btn-primary mt-3 mb-3"><i class="bi bi-plus-square"></i> Tambah Data Barang</a>


<!-- Membuat tabel menggunakan bootstrap -->
<table class="table table-dark table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th scope="col text-center">Action</th>
            <th scope="col">No</th>
            <th scope="col">Kode Customer</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">No Telephone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
       <tr>
        @foreach ($Customer as $c)
            
    
            <td>
                <!-- Menambahkan update dan delete  -->
                <a href="/databarang/edit/" class="btn btn-warning ml-1"><i
                        class="bi bi-pencil-square"></i>
                    Update</a>
                <a href="/databarang/delete/" class="btn btn-danger"
                    onclick="return confirm('yakin Anda Menghapus <%=// databarang.nama %>?')"><i
                        class="bi bi-trash-fill"></i>
                    Delete</a>
            </td>

            <th>{{ $i++; }}</th>
            <td>{{ $c->kode }}</td>
            <td>{{ $c->name }}</td>
            <td>{{ $c->telp }}</td>
            @endforeach
        </tr>
        </tr>
        <tr>

        </tr>
    </tbody>
</table>

@endsection