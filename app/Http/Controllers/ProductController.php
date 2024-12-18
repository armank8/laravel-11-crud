<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    //This method will show products page
    public function index(){
        
    }
    //This method will show create product page
    public function create(){
        return view('products.create');
    }
    //This method will store a product in db
    public function store(Request $request){
        $rules=[
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
        ];

        // $validator = Validator::make($request->all(),$rules);

        // if($validator->fails()){
        //     return redirect()->route('products.create')->withInput()->withErrors($validator);
        // }
    }
    //This method will show edit product page
    public function edit(){

    }
    //This method will update a product
    public function update(){

    }
    //This method will delete a  product
    public function destroy(){

    }
}
