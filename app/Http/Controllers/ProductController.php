<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $filterCategorySlug = $request->get('category');
        $categories = Category::limit(11)->get();
        $category = Category::where('slug',$filterCategorySlug)->first();

        if($category){
            //products Called from Category Model
            $products = $category->products()->get();
        }
        else{

            $products = Product::all();
        }
    
        return view('products.list',[
            'categories'=>$categories,
            'products'=>$products
        ]);
    }
    public function show($slug){
        
        $product = Product::where('slug',$slug)->first();
        // dd($product->categories->toArray());
        return view('products.show',[
            'product'=> $product,
        ]);
    }
}
