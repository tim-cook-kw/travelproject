<?php

namespace Modules\Book\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {   
        $booking = DB::table('booking')
        ->join('transaksi', 'booking.id_transaksi', '=', 'transaksi.id_transaksi')
        ->join('pelanggan','transaksi.id_pelanggan','=','pelanggan.id_pelanggan')
        ->join('bangku','transaksi.id_bangku','=','bangku.id_bangku')
        ->join('product','transaksi.id_product','=','product.id_product')
        ->join('user','pelanggan.id_user','=','user.id_user')
        ->get();
        
     return view('book::booking',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('book::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $booking = DB::table('booking')
            ->join('transaksi', 'transaksi.id', '=', 'transaksi.id_transaksi')
            ->join('booking', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('book::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('book::edit');
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
