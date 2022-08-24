@extends('layouts.main')


@section('container')

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
     
@endif

<!-- mainbody -->
<h1>List Barang : </h1>
<a href="/barang/create" class="btn btn-primary mt-3 mb-3"><i class="bi bi-plus-square"></i> Tambah Data Barang</a>


<!-- Membuat tabel menggunakan bootstrap -->
<table class="table table-dark table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th scope="col text-center">Action</th>
            <th scope="col">No</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Barang as $barang)
     <tr>
       <tr>
            <td>
                <!-- Menambahkan update dan delete  -->
                <a href="/barang/{{ $barang->id }}/edit" class="btn btn-warning ml-1"><i
                        class="bi bi-pencil-square"></i>
                    Update</a>
                
                
            </td>

            <th>{{ $i++; }}</th>
            <td>{{ $barang->kode }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->harga }}</td>
       
        </tr>
        </tr>
      
        @endforeach
    </tbody>
</table>

@endsection