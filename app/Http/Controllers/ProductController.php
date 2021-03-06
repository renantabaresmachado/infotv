<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    private $totalPage = 3;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::paginate($this->totalPage);
        $mkps = \App\MarketPlace::all();
        return view('welcome')
                        ->with('products', $products)
                        ->with('marketplaces', $mkps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('product/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $file = $request->file('imagem');
        $file->move('productImg', $file->getClientOriginalName());
        $prod = Product::create([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'value' => doubleval($request->input('value')),
                    'paymentMethod' => $request->input('paymentMethod'),
                    'imagem' => $file->getClientOriginalName(),
                    'created' => $date,
                    'market_place_id' => $request->input('market_place_id')
        ]);
        \Session::flash('message', [
            'msg' => 'OK Seu produto ' . $prod->name . ' foi cadastrado com sucesso!',
            'class' => "alert alert-success"
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, Product $product) {

        $dataForm = $request->except('_token');
        $products = $product->search($dataForm, $this->totalPage);
        $mkps = \App\MarketPlace::all();
        return view('welcome')
                        ->with('products', $products)
                        ->with('dataForm', $dataForm)
                        ->with('marketplaces', $mkps);
    }

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
