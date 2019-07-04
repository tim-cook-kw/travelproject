<?php

namespace Modules\Logindasboard\Http\Controllers;
use Modules\Logindasboard\Entities\Login;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Hash;
use Session;
class LogindasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('logindasboard::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('logindasboard::create');
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
        return view('logindasboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('logindasboard::edit');
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
    public function register_index()
    {
        return view('logindasboard::register');
    }
    public function register_post(Request $request)
    {
      $register = new Login;
      $register->email = $request->email;
      $register->id_roles = '1';
      $register->token = '1';
      $register->status = 'aktif';
      $register->password = Hash::make($request->password);
      $register->save();
      return redirect('logindasboard');
    }
    public function login(Request $request)
    {
       $email = $request->email;
       $password = $request->password;
       $data = Login::where('email',$email)->first();
       if($data){
        if(Hash::check($password ,$data->password)){
            Session::put('id_user',$data->id_user); 
            Session::put('id_roles',$data->id_roles); 
            Session::put('email',$data->email); 
            Session::put('login',TRUE);
            return redirect('homepage');
        } else{
            return redirect()->back()->with('alert','Password atau Email, Salah !');    
        }    
    } else{
        return redirect()->back()->with('alert','Password atau Email, Salah !');    
        }
    }   
        public function logout()
      {
        Session::flush();
        return redirect('logindasboard')->with('alert','Kamu sudah logout');

    }
   
}
