<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $product = DB::table('product')->join('kategori', 'product.id_kategori', '=', 'kategori.id_kategori')
        ->join('satuan', 'product.id_satuan', '=', 'satuan.id_satuan')
        ->select('product.*', 'satuan.nama_satuan', 'kategori.nama_kategori')->get();
         return view('product::index', ['product' => $product]);
        //dd($product);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $satuan=DB::table("satuan")->get();
        $kategori=DB::table("kategori")->get();
        return view('product::create', ['satuan' => $satuan ,'kategori' => $kategori ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $productobject = new Products();
        $productobject->nama_product=$request->nama_product;
        $productobject->id_satuan=$request->id_satuan;
        $productobject->id_kategori=$request->id_kategori;
        $productobject->nama_brand=$request->nama_brand;
        $productobject->status=$request->status;
        $productobject->total_seat=$request->total_seat;
        $productobject->harga=$request->harga;
        $productobject->deskripsi=$request->deskripsi;
        $productobject->tanggal_available = date('Y-m-d H:i:s');
        $productobject->save();
        return redirect()->route("product.index");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $satuan=DB::table("satuan")->get();
        $kategori=DB::table("kategori")->get();
        $product=Products::find($id);
        return view('product::edit', ['satuan' => $satuan ,'kategori' => $kategori ,'products' => $product]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $productobject = Products::find($id);
        $productobject->nama_product=$request->nama_product;
        $productobject->id_satuan=$request->id_satuan;
        $productobject->id_kategori=$request->id_kategori;
        $productobject->nama_brand=$request->nama_brand;
        $productobject->status=$request->status;
        $productobject->total_seat=$request->total_seat;
        $productobject->harga=$request->harga;
        $productobject->deskripsi=$request->deskripsi;
        $productobject->tanggal_available = date('Y-m-d H:i:s');
        $productobject->save();
        return redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $productobject = Products::find($id);
        $productobject->delete();
        return redirect()->route("product.index");
    }
}
