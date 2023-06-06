<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuController extends Controller
{
    function tambah_barang(){
        return view('tambah_barang');
    }

    function input_barang(request $request){
        $user = new User;
        $user->nama_barang     = $request->nama_barang;
        $user->harga_barang    = $request->harga_barang;
        $user->jumlah_barang    = $request->jumlah_barang;
        $user->stok_barang    = $request->stok_barang;
        $user->save();
        return redirect('/tampil_barang');
    }

    function tampil_barang(){
        $data = User::all();
        return view('data_barang', compact (['data']));
    }

    function hapus_barang($id){
        $data = User::whereId($id)->delete();
        return redirect('/tampil_barang');
    }

    function edit_barang($id){
        $data = User::whereId($id)->first();
        return view('edit_barang', compact(['data']));
    }

    function update_barang($id,Request $request){
        $data = User::whereId($id)->first();
        $data -> nama_barang = $request->nama_barang;
        $data ->harga_barang = $request->harga_barang;
        $data ->jumlah_barang = $request ->jumlah_barang;
        $data ->stok_barang = $request ->stok_barang;
        $data -> save();
        return redirect('/tampil_siswa  ');
    }
}