<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        // eloquent => Products->get();
        $product = DB::table('products')->paginate(5);
        return view('products', compact('product'));
    }
    
    public function tambahProduk(){
        return view('tambahproducts');
    }

    public function store(Request $request) {
        // Products->create(['kode_barang' => $request->kode_barang,]);
        DB::table('products')->insert([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'harga_barang' => $request->harga_barang
        ]);
        return redirect('products')->with('success', 'Berhasil Menyimpan Products Baru');
    }
    public function edit($id)
    {
        $barang = DB::table('products')->where('kode_barang', $id)->first();
        return view('editproduct', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        $barang = DB::table('products')->where('kode_barang', $id)->first();
        /*eloquent
        Products::update
        */
        $update = DB::table('products')->where('kode_barang', $id)->update([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'harga_barang' => $request->harga_barang,
        ]);

        return redirect()->route('products')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id) {
        $barang = DB::table('products')->where('kode_barang', $id)->first();
        DB::table('products')->where('kode_barang', $id)->delete();
        return redirect()->route('products')->with('success', 'Data berhasil dihapus!');
    }
    // form edit diakses di 200.100.0.73/laravel/dashboard.txt
}