<?php

namespace App\Http\Controllers;

use App\Models\model_barang;

use Illuminate\Http\Request;

class controller_cud extends Controller
{
    // ambil data seluruhnya
    public function getAll()
    {
        $query = model_barang::select('id', 'nama', 'stok', 'harga');
        $query = $query->get();
        return view('dash', ['barang' => $query]);
    }

    // inputkan barang ke database
    public function input(Request $req)
    {
        //berita::create($req->all());

        model_barang::insert([
            'nama' => $req->nama,
            'stok' => $req->stok,
            'harga' => $req->harga,
        ]);

        return redirect('/dash');
    }

    public function delete(Request $req)
    {
        //berita::create($req->all());

        model_barang::where('id', $req->id)->delete();

        return redirect('/dash');
    }

    public function update($id)
    {
        $query = model_barang::select('id', 'nama', 'stok', 'harga');
        $query = $query->WHERE('id', $id)->get();
        return view('form_update', ['barang' => $query]);
    }

    public function proses_update(Request $id)
    {
        model_barang::where('id', $id->id)->update([
            'nama' => $id->nama,
            'stok' => $id->stok,
            'harga' => $id->harga,
        ]);
        return redirect('/dash');
    }
}
