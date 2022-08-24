<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {


        $barangSemua = Barang::all();
        return view('barang.index', [
            "title" => "Barang",
            "Barang" => $barangSemua,
            "i" => 1

        ]);
    }



    public function store(Request $request)
    {
        $validatorData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required'
        ]);

        Barang::create($validatorData);
        return redirect('/barang')->with('success', 'Barang berhasil di tambahkan');
    }
    public function create()
    {
        return view('barang.create', ["title" => "Tambah Barang"]);
    }
    public function update(Request $request, Barang $barang)
    {
        $validatorData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required'
        ]);
        Barang::where('id', $barang->id)->update($validatorData);
        return redirect('/barang')->with('success', 'Barang berhasil di Update');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', ['barang' => $barang, 'title' => 'Edit Barang']);
    }
}
