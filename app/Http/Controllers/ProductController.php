<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maincatg;
use App\Category;
use App\Brand;
use App\Photo;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $maincatg=Maincatg::pluck('name','id');
        $media=Photo::orderBy('id','DESC')->get();
        return view('backend.product.create',compact('maincatg','media'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file=$request->photo_id;
        dd([$file]);

        // Product::create([
        //     'name'=>$request->name,
        //     'maincatg_id'=>$request->maincatg_id,
        //     'subcatg_id'=>$request->subcatg_id,
        //     'brand_id'=>$request->brand_id,
        //     'photo_id'=>


        //     ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function subcatg(Request $request){
      $data = Category::select('name','id')->where("maincatg_id",$request->id)->get();
      return response()->json($data);
  }
   public function brand(Request $request){
      $data = Brand::select('brand_name','id')->where("subcatg_id",$request->id)->get();
      return response()->json($data);
  }
}
