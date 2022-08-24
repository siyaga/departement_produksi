@extends('layouts.main')


@section('container')
<form method="post" action="/sales/add" class="">

    <h5>Transaksi</h5>
    <div class="form-group row ">
        <label for="staticEmail" class="col-sm-1 col-form-label">No</label>
        <div class="col-sm-1 col-md-3">
            <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="No Transaksi" name="sales_id" disabled readonly value="{{ $datenow.$bilangan.$salesFindId}}">
        </div>
      </div>
      <div class="form-group row ">
        <label for="staticEmail" class="col-sm-1 col-form-label">Tanggal</label>
        <div class="col-sm-1 col-md-3">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            <input type="date" class="form-control datepicker" id="text" aria-describedby="emailHelp" placeholder="Tanggal" name="tgl" value="{{ $datenow }}">
        </div>
      </div>
      <h5>Customer</h5>
      <div class="form-group row ">
        <label for="select" class="col-sm-1 col-form-label">Kode</label>
        <div class="col-sm-1 col-md-3">
        <select class="form-select" id="selectCustomer" name="kode_customer" onchange="update()" >
            @foreach ($Customer as $c )
            @if (old('kode_customer') === $c->kode_customer)
            <option value="{{ $c->kode }}" >{{ $c->kode }}</option>
            
            @endif
            @endforeach

        </select>
     
        </div>
    </div>
        <div class="form-group row ">
          <label for="name" class="col-sm-1 col-form-label">Nama</label>
          <div class="col-sm-1 col-md-5">
              <input type="text" class="form-control" id="nama" aria-describedby="Nama" placeholder="Nama" name="name"  value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group row ">
            <label for="name" class="col-sm-1 col-form-label">Telp</label>
            <div class="col-sm-1 col-md-3">
                <input type="text" class="form-control" id="telp" aria-describedby="noTelp" placeholder="No Telephone" name="telp" value="{{ old('telp') }}">
            </div>
          </div>
      

<!-- mainbody -->
<h1>List Detail Sales : </h1>
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" data-whatever="">Tambah Barang</button>
<table class="table table-dark table-bordered table-sm">
    <thead>
            <tr>
            <th rowspan="2" class="th-sm" scope="col">Action</th>
            <th rowspan="2"class="th-sm" scope="col">No</th>
            <th rowspan="2"class="th-sm" scope="col">Kode Barang</th>
            <th rowspan="2"class="th-sm" scope="col">Nama Barang</th>
            <th rowspan="2"class="th-sm" scope="col">Qty</th>
            <th rowspan="2"class="th-sm" scope="col">Harga Bandrol</th>
            <th colspan="2"class="th-sm" scope="col">Diskon</th>
            <th rowspan="2"class="th-sm" scope="col">Harga Diskon</th>
            <th rowspan="2"class="th-sm" scope="col">Total</th>
        </tr>
            <tr>
                <th class="th-sm" scope="col">%</th>
                <th class="th-sm" scope="col">(Rp)</th>
            </tr>
                
            
            
        </tr>
    </thead>
    <tbody>
        <tr> 
           
            @foreach ($salesDetails as $s)
            <td> <a href="/myforum/edit/" class="btn btn-warning ml-1 badge mt-2"><i
                        class="bi bi-pencil-square"></i>
                    Update</a>
                <br />
                <a href="/myforum/delete/" class="btn btn-danger badge mt-2"
                    onclick="return confirm('yakin Anda Menghapus Forum tentang  ?')"><i
                        class="bi bi-trash-fill"></i>
                    Delete</a></td> 
            <th scope="row">{{ $i++; }}</th>
            <td>{{ $s->barang_id }}</td>
            <td>{{ $s->nama_barang }}</td>
            <td>{{ $s->qty }}</td>
            <td>{{ $s->harga_bandrol }} </td>
            <td>{{ round($s->diskon_pct) }}% </td>
            <td>{{ $s->diskon_nilai }}</td>
            <td>{{ $s->harga_diskon }} </td>
            <td>{{ $s->total }} </td>
            @endforeach
        </tr>
        </tr>
        <tr>

        </tr>
    </tbody>
</table>
    <div class="text-xs-right">
    <div class="form-group row ">
        <label for="name" class="col-sm-2 col-form-label">Sub Total</label>
        <div class="col-sm-1 col-md-6">
            <input type="text" class="form-control" id="text" aria-describedby="Nama" placeholder="Sub Total" name="name" disabled>
        </div>
      </div>
      <div class="form-group row ">
        <label for="name" class="col-sm-2 col-form-label">Diskon</label>
        <div class="col-sm-1 col-md-6">
            <input type="text" class="form-control" id="text" aria-describedby="Nama" placeholder="Diskon" name="diskon"
            value="{{ old('diskon') }}">
        </div>
      </div>
      <div class="form-group row ">
          <label for="name" class="col-sm-2 col-form-label">Ongkir</label>
          <div class="col-sm-1 col-md-6">
              <input type="text" class="form-control" id="text" aria-describedby="noTelp" placeholder="Ongkir" name="ongkir" value="{{ old('ongkir') }}">
          </div>
        </div>
        <div class="form-group row ">
            <label for="name" class="col-sm-2 col-form-label">Total Bayar</label>
            <div class="col-sm-1 col-md-6">
                <input type="text" class="form-control" id="text" aria-describedby="Nama" placeholder="Total Bayar" name="total" disabled>
            </div>
     
          

</div>
</div>
<div class="w-100"></div>
<div class="container text-center">
    <div class="row">
        <div class="col-sm">
            <button class="btn btn-primary" type="submit">Simpan Teransaksi</button>
        </div>

        <div class="col-sm">
            <button class="btn btn-primary" type="reset">batal</button>
        </div>
        

 
    

</div>
  </div>

</form>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama Barang :</label>
                <div >
                <select class="form-select" id="select" name="kode_customer" >
                    @foreach ($Barang as $b )
                    @if (old('kode') === $b->kode)
                    <option value="{{ $b->nama }}" selected>{{ $b->nama }}</option>
                    @endif
                    @endforeach
        
                </select>
        
            </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Kode Barang :</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Harga Barang :</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Tambah Barang</button>
        </div>
      </div>
    </div>
  </div>
@endsection
