<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $kategori = Category::All();
        return view('category::index',['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $kategori = new Category();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('category.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $kategori = Category::findOrFail($id);
        $kategori->delete();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $kategori = Category::findOrFail($id);
        return view('category::edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Category::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        
        $kategori = Category::findOrFail($id);
        $kategori->delete();
        return redirect()->back();
    }
}
