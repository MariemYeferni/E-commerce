<?php

namespace App\Http\Controllers;
use App\Products;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;


use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        
       
        $Products= Products::inRandomOrder()->take(6)->get();

        return view('Products.index')->with('Products',$Products);
    }


    public function show($slug){
        $Products = Products ::where('slug' , $slug)->firstOrFail();

        return view ('Products.show')->with('Products', $Products);
    }
}
