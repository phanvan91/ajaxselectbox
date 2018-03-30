<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class HomeController extends Controller
{
    public function index()
    {
        $cate = Category::select('name','id')->where('parent_id',0)->get();
        return view('welcome',compact('cate'));
    }
    public function findproductname(Request $request)
    {
        $data = Category::select('name','id')->where('parent_id',$request->id)->get();
        return response()->json($data,200);
    }
}
