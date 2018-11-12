<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ThirdCategory;

class ThirdCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $thirdCat = new ThirdCategory();
        $thirdCat->category_id = $request->category_id;
        $thirdCat->sub_category_id = $request->sub_category_id;
        $thirdCat->third_category_name = $request->third_category_name;
        $thirdCat->third_category_disc = $request->third_category_disc;
        $thirdCat->publication_status = $request->publication_status;
        $thirdCat->save();
        return redirect()->back()->with('msg', 'Third category added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $cid)
    {
        $thirdCategories = ThirdCategory::where('sub_category_id', $id)->get();
        $sub_category_id = $id;
        $category_id = $cid;
        // return $subCategories;
        return view('ecom2.admin.category.third-category',compact('thirdCategories', 'sub_category_id', 'category_id'));
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
}
