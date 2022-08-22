@extends('layouts.main')


@section('container')

<!-- mainbody -->
<h1>List Sales : </h1>


<a href="/sales/add" class="btn btn-primary mt-3 mb-3"><i class="bi bi-plus-square"></i> Tambah Teransaksi</a>
<table id="dtBasicExample" class="table table-dark table-bordered table-sm">
    <thead>
        <tr>
            <th class="th-sm" scope="col">No</th>
            <th class="th-sm" scope="col">No Transaksi</th>
            <th class="th-sm" scope="col">Tanggal</th>
            <th class="th-sm" scope="col">Nama Costumer</th>
            <th class="th-sm" scope="col">Sub Total</th>
            <th class="th-sm" scope="col">Diskon</th>
            <th class="th-sm" scope="col">Ongkir</th>
            <th class="th-sm" scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           
            @foreach ($sales as $s)
                
            <td>{{ $i++; }}</td>
            <td>{{ $s->kode }}</td>
            <td>{{ $s->tgl }}</td>
            <td>{{ $s->cust_id }}</td>
            <td>{{ $s->subtotal }} </td>
            <td>{{ $s->diskon }}</td>
            <td>{{ $s->ongkir }} </td>
            <td>{{ $s->total_bayar }} </td>
            @endforeach
        </tr>
        </tr>
        <tr>

        </tr>
    </tbody>
</table>

@endsection
