<?php

namespace Modules\Satuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Satuan\Entities\Modelsatuan;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $modelsatuan = Modelsatuan::all(); //Menampilkan Seluruh Data
        return view('satuan::index',['satuan' => $modelsatuan]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('satuan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $modelsatuan = new Modelsatuan();
        $modelsatuan->nama_satuan =  $request->nama_satuan; //namatabel = nama form
        $modelsatuan->save();
        return redirect()->route('satuan.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('satuan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $modelsatuan = Modelsatuan::find($id);
        return view('satuan::edit',['satuan'=>$modelsatuan]);
        //dd($modelsatuan);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $modelsatuan = Modelsatuan::find($id);
        $modelsatuan->nama_satuan =  $request->nama_satuan; //namatabel = nama form
        $modelsatuan->save();
        return redirect()->route('satuan.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $modelsatuan = Modelsatuan::find($id);
        $modelsatuan->delete();
        return redirect()->route('satuan.index');
    }
}
