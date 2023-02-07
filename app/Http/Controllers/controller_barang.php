<?php

namespace App\Http\Controllers;

use App\Models\model_barang;

use Illuminate\Http\Request;

class controller_barang extends Controller
{
    // ambil data seluruhnya
    public function getAll()
    {
        $query = model_barang::select('id', 'nama', 'stok', 'harga');
        $query = $query->get();
        return view('tampil_barang', ['barang' => $query]);
    }
}
