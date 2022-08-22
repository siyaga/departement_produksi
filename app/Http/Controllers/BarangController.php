<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {


        $barangSemua = Barang::all();
        return view('barang', [
            "title" => "Barang",
            "Barang" => $barangSemua,
            "i" => 1

        ]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique',
            'nama' => 'required',
            'harga' => 'required'
        ]);

        $input = $request->all();
        Barang::create($input);
        return redirect('/barang')->with('success', 'Barang berhasil di tambahkan');
    }
    public function create()
    {
        return view('baranginput');
    }
}
