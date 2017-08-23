<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Meta;

class FrontendController extends Controller
{
    public function index(){
    	 Meta::title('Home'); 
    	$products =Product::where('status',1)->with(['productimage'=>function($query){
    		$query->whereNotNull('image');
    	}])->get();
    	$categories = Category::where('status',1)->get();
    	return view('frontend.index', compact('products', 'categories'));
    }
}
