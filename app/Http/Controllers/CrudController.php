<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')->get();
        return view ('index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => "required|min:3",
            'ket' => "required|min:5",
            'harga' => "required|integer",
            'jumlah' => "required|numeric"
        ]);

        Produk::create([
            'nama_produk' => $request->nama,
            'keterangan' => $request->ket,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/')->with(['success' => 'Data Berhasil Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $item)
    {
        return view ('edit', compact('item'));
        // dd($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $item)
    {
        // dd($request);
        $item->update([
            'nama' => $request->nama,
            'keterangan' => $request->ket,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);
        return redirect('/')->with(['success' => 'Data Berhasil diudah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $item)
    {
        $item->delete();
        return redirect('/')->with(['success' => 'Data Berhasil Hapus']);
    }
}
