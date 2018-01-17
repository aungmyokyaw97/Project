<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Maincatg;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::orderby('id')->paginate(10);
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maincatg=Maincatg::pluck('name','id');
        return view('backend.brand.create',compact('maincatg'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'brand_name'=>'required|min:1',
            'subcatg_id'=>'required'

            ]);
        Brand::create([
            'brand_name'=>$validated_data['brand_name'],
            'subcatg_id'=>$validated_data['subcatg_id']
            ]);
        // if($request->file){
        //     $validated_data=$request->validate([
        //     'file'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        //     ]);
        //     $getimageName=time().$request->brand_name.'.'.$request->file->getClientOriginalExtension();
        //     Brand::create([
        //         'file'=>$getimageName
        //         ]);
        //     $request->file->move(public_path('images/brand'),$getimageName);
        // }
        
        return redirect()->route('brand.index');
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
        $brand=Brand::findorFail($id);
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
