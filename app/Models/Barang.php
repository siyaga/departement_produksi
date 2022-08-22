<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'm_barang';
    protected $fillable = [
        'kode', 'nama', 'harga'
    ];

    public function salesDet()
    {
        return $this->hasMany(SalesDet::class, 'barang_id');
    }
}
