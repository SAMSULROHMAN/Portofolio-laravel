<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        $produks = Produk::all()->paginate(5);
        return view('produk.index', compact('produks'))
                    ->with('i',(request()->input('page',1) -1)*5);*/
        $produks = Produk::oldest()->paginate(5);
        return view('produk.index',compact('produks'))
                    ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'Kode' => 'required',
            'Nama' => 'required',
            'Merk' => 'required',
            'Harga' => 'required'
        ]);

        Produk::create($request->all());
        return redirect()->route('produk.index')
                        ->with('success','new Produk created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        return view('produk.detail', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit',compact('produk'));
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
            'Kode' => 'required',
            'Nama' => 'required',
            'Merk' => 'required',
            'Harga' => 'required'
        ]);

        $produk = Produk::find($id);
        $produk->Kode = $request->get('Kode');
        $produk->Nama = $request->get('Nama');
        $produk->Merk = $request->get('Merk');
        $produk->Harga = $request->get('Harga');
        $produk->save();
        return redirect()->route('produk.index')
                            ->with('success','Produk  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk.index')
                        ->with('success','Produk deleted successfully');
    }

    public function pdf() {

        $pdf=Produk::all();
        $pdf=PDF::loadView('produk.pdf',compact('pdf'));
        return $pdf->stream('DataProduk.pdf');
        //return view('produk.pdf');
    }
}
