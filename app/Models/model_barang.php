<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['id', 'nama', 'stok', 'harga'];
}
