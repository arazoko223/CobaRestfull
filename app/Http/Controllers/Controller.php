<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;





     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = StockBarang::all();
        return view('index', compact('stock_barang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_new');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
        $contact = StockBarang::find($id);
        return view('edit', compact('stock_barang'));
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
            'tipe_produk'=>'required'
            'stok'=>'required'
            'warna'=>'required'
            'ukuran'=>'required'
        ]);
        $contact = StockBarang::find($id);
        'nama_barang' => $request->get('nama_barang'),
        'tanggal_update' => $request->get('tanggal_update'),
        'tipe_produk' => $request->get('tipe_produk'),
        'stok' => $request->get('stok'),
        'warna' => $request->get('warna'),
        'ukuran' => $request->get('ukuran')
        $contact->save();
        return redirect('/stock_barang')->with('success', 'Contact updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = StockBarang::find($id);
        $contact->delete();
        return redirect('/stock_barang')->with('success', 'Contact deleted!');
    }
}
