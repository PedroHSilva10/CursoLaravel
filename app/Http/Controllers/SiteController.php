<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class SiteController extends Controller
{
    public function index()
    {
        //return "index";
        $products = Product::paginate(3);
        //return dd($produtos);
        

        return view('site.home', compact('products'));
    }

    public function details($slug){

        $product = Product::where('slug', $slug)->first();

        return view('site.details',compact('product'));
    }

    public function category($id){
        $products = Product::where('id_category', $id)->paginate(3);
        return view('site.category',compact('products'));

    }
}



