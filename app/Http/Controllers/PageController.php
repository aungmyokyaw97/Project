<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maincatg;
use App\Category;
use App\Brand;

class PageController extends Controller
{
   public function index()
    {
        return view('frontend.index');
    }

   public function phone(){
        return view('frontend.phone');
   }

   public function view(){
        return view('frontend.view');
   }
   //  public function test(){
   //    $maincatg=Maincatg::pluck('name','id');
   //      return view('backend.test',compact('maincatg'));
   // }
    public function brand(Request $request){
      $data = Brand::select('brand_name','id')->where("subcatg_id",$request->id)->get();
      return response()->json($data);
    }

   public function admin(){
    return view('backend.dashboard');
   }

}
