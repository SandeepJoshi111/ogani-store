<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAction(){
        //Model bata data taneko
        //To select name
        // $categories = Category::all();
        // dd($categories[0]->name);


        // To select
        // $categories = Category::select('id','name')->get();
        // dd($categories[0]->toArray());

        //To select all
        // $categories = Category::first();
        // dd($categories->toArray());

        //select where id =1
        // $categories = Category::where('id',1)->get();
        // dd($categories[0]->toArray());
        
        // $categories = Category::all();
        // dd($categories->toArray());

        $categories = Category::limit(11)->get();
        dd($categories);

       
    } 
}
