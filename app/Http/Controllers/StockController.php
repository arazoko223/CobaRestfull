<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockBarang;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = StockBarang::all();
        return view('stoock.index', compact('stoock'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stoock.create');
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
            'nama_barang'=>'required',
            'tanggal_update'=>'required',
            'tipe_produk'=>'required',
            'stok'=>'required',
            'warna'=>'required',
            'ukuran'=>'required'
        ]);
        $stocks = new StockBarang([
            'nama_barang' => $request->get('nama_barang'),
            'tanggal_update' => $request->get('tanggal_update'),
            'tipe_produk' => $request->get('tipe_produk'),
            'stok' => $request->get('stok'),
            'warna' => $request->get('warna'),
            'ukuran' => $request->get('ukuran')
        ]);
        $stocks->save();
        return redirect('stoock.index')->with('success', 'Contact saved!');
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
    public function edit($id)
    {
        $stocks = StockBarang::find($id);
        return view('stoock.edit', compact('stoock'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang'=>'required',
            'tanggal_update'=>'required',
            'tipe_produk'=>'required',
            'stok'=>'required',
            'warna'=>'required',
            'ukuran'=>'required'
        ]);
        $stocks = StockBarang::find($id);
        $stocks->nama_barang =  $request->get('nama_barang');
        $stocks->tanggal_update = $request->get('tanggal_update');
        $stocks->tipe_produk = $request->get('tipe_produk');
        $stocks->job_title = $request->get('job_title');
        $stocks->warna = $request->get('warna');
        $stocks->ukuran = $request->get('ukuran');
        $stocks->save();
        return redirect('stoock.index')->with('success', 'Data updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stocks = StockBarang::find($id);
        $stocks->delete();
        return redirect('stoock.index')->with('success', 'Data deleted!');
    }
}
