<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maincatg;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcatg=Category::paginate('10');
        return view('backend.sub_category.index',compact('subcatg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maincatg=maincatg::pluck("name","id");
        return view('backend.sub_category.create',compact('maincatg')); 
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
            'name'=>'required|min:1',
            'maincatg_id'=>'required'
            ]);

        Category::create([
            'name'=>$validated_data['name'],
            'maincatg_id'=>$validated_data['maincatg_id']
            ]);

        return redirect()->route('subcatg.index');
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
        $category=Category::findorFail($id);
        $category->delete();
        return redirect()->route('subcatg.index');
    }
}
