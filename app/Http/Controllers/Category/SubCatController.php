<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategory;

class SubCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('ecom2.Category.add-sub-category');
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
        $subCat = new Subcategory();
        $subCat->category_id = $request->category_id;
        $subCat->sub_category_name = $request->sub_category_name;
        $subCat->sub_category_disc = $request->sub_category_disc;
        $subCat->publication_status = $request->publication_status;
        $subCat->save();
        return redirect()->back()->with('msg', 'Sub category added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subCategories = Subcategory::where('category_id', $id)->get();
        $category_id = $id;
        // return $subCategories;
        return view('ecom2.admin.category.sub-category',compact('subCategories', 'category_id'));
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
    public function selectSubCat(Request $request)
    {
       $subCats = Subcategory::where('category_id',$request->id)->get();
       foreach( $subCats as  $subCat){
       echo' <option value=" '.$subCat->id.' "> '.$subCat->sub_category_name.'</option>';
        }
   
       
    }

    // show sub-cat and third-cat on hover
    public function SubCatFront(Request $request)
    {
       $subCats = Subcategory::where('category_id',$request->id)->get();

       foreach( $subCats as  $subCat){
       echo' <li onmouseover="third(this.value)" value=" '.$subCat->id.' ">
       <a href="#" class="list-group-item list-group-item-action"> '.$subCat->sub_category_name.' </a>
       </li>';
        }
   
       
    }
}
