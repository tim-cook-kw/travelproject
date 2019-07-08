<?php

namespace Modules\Transaksi\Http\Controllers;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use QrCode;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()

    {
        $a = DB :: table('transaksi')->get();
        return view('transaksi::index', compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('transaksi::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('transaksi::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('transaksi::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $generate = Str::random(6);
         $qr =  QrCode::generate($generate, '../public/images/qrcode/'.$generate);
        $trasaction = DB::table('transaksi')->where('id_transaksi',$request->id)->update([
            'status'=> $request->Status,

            ]);
        if ($request->Status == 'success') {
            DB::table('booking')->insert([
                'id_transaksi' => $request->id,
                'nomor_booking' => $generate,
                'qrcode' => $qr
            ]);

            $table = DB::table('booking')
            ->join('transaksi','transaksi.id_transaksi','=','booking.id_transaksi')
            ->join('pelanggan','pelanggan.id_pelanggan','=','transaksi.id_pelanggan')
            ->join('user','pelanggan.id_user','=','user.id_user')
            ->where('transaksi.id_transaksi',$request->id)->first();

            $data = array('kode_booking'=> $table->nomor_booking ,'nama'=> $table->email);

            Mail::send('transaksi::mail', $data, function($message) use ($table) {
            $message->to($table->email, 'Tutorials Point')->subject('Laravel HTML Testing Mail');
             $message->from('pt_travel_travelan@travel.com','Admin Travel Pantek');
         });
        }
        return redirect()->back();
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
    public function invoice($id)
    {
        $table = DB::table('booking')
        ->join('transaksi','transaksi.id_transaksi','=','booking.id_transaksi')
        ->join('pelanggan','pelanggan.id_pelanggan','=','transaksi.id_pelanggan')
        ->join('user','pelanggan.id_user','=','user.id_user')
        ->join('bangku','transaksi.id_bangku','=','bangku.id_bangku')
        ->join('product','product.id_product','=','transaksi.id_product')
        ->where('transaksi.id_transaksi',$id)->first();
        $data = array('nama'=> $table->nama_pelanggan,'qty'=>$table->qty,
        'total'=> $table->total_harga,'nomor_bangku'=>$table->nomor_bangku
        ,'email'=>$table->email,'nama_product' => $table->nama_brand);
        Mail::send('transaksi::invoice', $data, function($message) use ($table) {
        $message->to($table->email, 'Tutorials Point')->subject('Laravel HTML Testing Mail');
         $message->from('pt_travel_travelan@travel.com','Admin Travel Pantek');
     });
    }
}
