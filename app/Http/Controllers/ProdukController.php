<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Produk;
use App\Toko;
use Auth;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $tokos = Toko::where('user_id', Auth::user()->id)->get();
        
        return view('admin.list-toko', compact('tokos'));
    }

    public function show($id){
        
        $tokos = Toko::find($id);
        return view('admin.produk-list', compact('tokos'));
    }

    public function create(){

        return view('admin.create-barang');
    }

    public function destroy($id){
        
        $produk = Produk::find($id);
        $produk->delete();
       
        return view('admin.produk-list', compact('produk'));
    }

    public function edit($id){

        $produk = Produk::find($id);

        return view('admin.edit-barang', compact('produk'));
    }

    public function update(Request $request,$id){
        // $toko = Toko::find($id);
        $produk = Produk::find($id);
        $produk->nama_barang = $request->nama_barang;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->hargasatuan = $request->hargasatuan;
        $produk->save();
        // $produk->update(request(['nama_barang','stok','harga','hargasatuan']));
        
        return view('admin.edit-barang', compact('produk'));
        
    }

    public function store(Request $request){
        
        $produk = new Produk;
        $produk->nama_barang = $request->nama_barang;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->hargasatuan = $request->hargasatuan;
        $produk->toko_id = $request->toko_id;
        $produk->save();
        // Produk::create($request->all());
        return view('admin.create-barang', compact('produk'));
        
    }
    
    // public function store(Request $request,$id)
    // {
    //     // Validate the request...

    //     $toko = Toko::find($id);
    //     $toko->$produk;
    //     $produk = new Produk;

    //     $produk->user_id = $request->$id;
    //     $produk->nama_barang = $request->nama_barang;
    //     $produk->stok = $request->stok;
    //     $produk->harga = $request->harga;
    //     $produk->hargasatuan = $request->hargasatuan;

    //     $produk->save();

    //     return view('/produk', compact('produk'));
    // }
}
