<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDet extends Model
{
    use HasFactory;
    protected $table = 't_sales_det';
    protected $fillable = [
        'sales_id', 'barang_id', 'harga_bandrol', 'qty', 'diskon_pct', 'diskon_nilai', 'harga_diskon', 'total'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function sales()
    {
        return $this->belongsTo(Sales::class);
    }
}
