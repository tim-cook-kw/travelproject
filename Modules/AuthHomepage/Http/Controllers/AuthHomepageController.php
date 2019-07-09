<?php

namespace Modules\AuthHomepage\Http\Controllers;

use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AuthHomepage\Entities\AuthHomeModel;

class AuthHomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    
    {
        return view('authhomepage::login');
    }

    public function indexregister()
    
    {
        return view('authhomepage::register');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('authhomepage::create');
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
        return view('authhomepage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('authhomepage::edit');
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

    public function homepage(){
        return view('authhomepage::homepage');
    }


    public function loginpost(Request $request){
       $email = $request->email;
       $password = $request->password;
       $data = AuthHomeModel::where('email',$email)->first();
       if($data){
        if(Hash::check($password ,$data->password)){
            Session::put('id_user',$data->id_user); 
            Session::put('id_roles',$data->id_roles); 
            Session::put('email',$data->email); 
            Session::put('login',TRUE);
            return redirect('/home');
        } else{
            return redirect()->back()->with('alert','Password or Email Undefined !');    
        }    
    } else{
        return redirect()->back()->with('alert','Password atau Email Undefined !');    
        }
    } 

    public function logout(){
        Session::flush();
        return redirect('/authhomepage/login')->with('alert','You Have Logout');
    }

    public function register_post(Request $request)
    {
      $register = new AuthHomeModel;
      $register->email = $request->input('email');
      $register->id_roles = '1';
      $register->token = '1';
      $register->status = 'aktif';
      $register->password = Hash::make($request->password);
      $register->save();
      return redirect('/authhomepage/login');
    }
}
