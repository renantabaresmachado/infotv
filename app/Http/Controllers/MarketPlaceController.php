<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketPlace;
use App\User;

class MarketPlaceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('marketplace/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $what = array(' ', '.', '-', "'", '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º');
        $by = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
        $cnpjCpf = str_replace($what, $by, $request->input('cnpjCpf'));
        $mkp = MarketPlace::where('cnpjCpf', $cnpjCpf)->first();
        if ($mkp) {

            \Session::flash('message', [
                'msg' => 'Ops já existe um cadastro nesse CPF/CNPJ, verifique os dados!',
                'class' => "alert alert-warning"
            ]);
           return back()->withInput();
            
        } else {
            $mkp = MarketPlace::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'site' => $request->input('site'),
                'cnpjCpf' => $cnpjCpf
            ]);
            User::create([
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'market_place_id' => $mkp->id,
                
            ]);
            \Session::flash('message', [
                'msg' => 'OK Estabelecimento, ' .$mkp->name. ' cadastrado(a) com sucesso!',
                'class' => "alert alert-success"
            ]);
            return view('auth/login');  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
