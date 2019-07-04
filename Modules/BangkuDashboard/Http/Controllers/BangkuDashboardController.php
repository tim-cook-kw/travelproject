<?php

namespace Modules\BangkuDashboard\Http\Controllers;
use Modules\BangkuDashboard\Entities\Bangku;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class BangkuDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $bangku = DB::table('bangku')->join('product', 'product.id_product', '=', 'bangku.id_product')->select('bangku.*','product.nama_product')->get();
        return view('bangkudashboard::index',compact('bangku'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $data = DB::table('product')->get();
        return view('bangkudashboard::create',['product' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

       $bangku = new Bangku;
       $bangku->id_product = $request ->id_product;
       $bangku->nomor_bangku = $request->nomor_bangku;
       $bangku->save ();
       return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('bangkudashboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('bangkudashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $bangku = Bangku::where('id_bangku',$id);
        $bangku->nomor_bangku = $request->nomor_bangku;
        $bangku->save();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $bangku = Bangku::where('id_bangku',$id);
        $bangku -> delete();
        return redirect()->back();
    }
}
