<?php

namespace App\Http\Controllers;

use App\Models\SalesDet;
use App\Http\Requests\StoreSalesDetRequest;
use App\Http\Requests\UpdateSalesDetRequest;
use App\Models\Customer;
use App\Models\Barang;
use App\Models\Sales;

class SalesDetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salesDetail = SalesDet::all();
        $salesCheck = Sales::find();

        $customerDetail = Customer::all();
        $barang = Barang::all();
        return view('sales_detail', [
            "title" => "Sales Tambah",
            "salesDetails" => $salesDetail,
            "i" => 1,
            "Customer" => $customerDetail,
            "Barang" => $barang
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
     * @param  \App\Http\Requests\StoreSalesDetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesDetRequest $request)
    {
        $validatorData = $request->validate([
            'sales_id' => 'required',
            'barang_id' => 'required',
            'harga_bandrol' => 'required',
            'qty' => 'required',
            'diskon_pct' => 'required',
            'diskon_nilai' => 'required',
            'harga_diskon' => 'required',
            'total' => 'required',
        ]);


        return redirect('/sales')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesDet  $salesDet
     * @return \Illuminate\Http\Response
     */
    public function show(SalesDet $salesDet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesDet  $salesDet
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesDet $salesDet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesDetRequest  $request
     * @param  \App\Models\SalesDet  $salesDet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesDetRequest $request, SalesDet $salesDet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesDet  $salesDet
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesDet $salesDet)
    {
        //
    }
}
