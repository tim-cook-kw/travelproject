<?php

namespace Modules\Payment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('payment::payment');
    }
    public function selectPayment(){

        return view('payment::select-method');
    }
    public function checkOut(){
        DB::table('transaksi')->insert([
            'id_bangku'=>null,
            'id_product'=>1,
            'id_pelanggan'=>1,
            'qty'=>2,
            'total_harga'=>2500000,
            'bukti_transaksi'=>'',
            'status'=>'pending',
            'tanggal_keberangkatan'=>'2019-07-03',
            'tanggal_pulang'=>'2019-08-01',
            'id_promo'=>null,
            'dari'=>'tangerang',
            'ke'=>'bali'
        ]);
        $id = DB::getPdo()->lastInsertId();
        return redirect()->route('index.checkout', ['id' => $id]);
    }
    public function indexCheckOut($id){
        $checkOut= DB::table('transaksi')->where('id_transaksi', $id)->first();
        return view( 'payment::checkout', compact('checkOut'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('payment::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('payment::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('payment::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
