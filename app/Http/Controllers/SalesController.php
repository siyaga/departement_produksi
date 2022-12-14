<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;
use Carbon\Carbon;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sales = Sales::all();
        return view('sales', [
            "title" => "Sales",
            "sales" => $sales,
            "i" =>  1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesRequest $request)
    {
        $request->validate([
            'kode' => 'required',
            'tgl' => 'required',
            'cust_id' => 'required',
            'subtotal' => 'required',
            'diskon' => 'required',
            'ongkir' => 'required',
            'total_bayar' => 'required'
        ]);
        $data = $request->all();
        $sales = new Sales();
        $sales->kode->$data['kode'];
        $sales->tgl->Carbon::now();
        $sales->cust_id->$data['cust_id'];
        $sales->subtotal->$data['subtotal'];
        $sales->diskon->$data['diskon'];
        $sales->ongkir->$data['ongkir'];
        $sales->total_bayar->$data['total_bayar'];

        $sales->create();
        return redirect('/sales')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesRequest  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesRequest $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
