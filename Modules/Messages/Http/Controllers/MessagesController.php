<?php

namespace Modules\Messages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Messages\Entities\Pesan;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('messages::index');
    }

    public function send(Request $request)
    {
        //dd($request);
        $data = new Pesan($request->all());
        $data->id_pesan = null;
        $data->id_customer = null;
        $data->save();

        if ($data) {
            return redirect()->route('pesan.show');
        } else {
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('messages::create');
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
    public function show()
    {
        $pesans = Pesan::all();
        return view('messages::index', compact('pesans'));

        // $pesans = DB::collection('pesans')->raw('id_pesan', 'id_customer', 'pesan');

        // return view('messages::show', ['pesan' => $pesans]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('messages::edit');
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
    public function destroy($_id)
    {
        $pesans = Pesan::find($_id);
        $pesans->delete();
        return redirect('messages::index')->with('success','Car has been  deleted');
    }
}
