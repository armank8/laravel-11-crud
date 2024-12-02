<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(){

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
