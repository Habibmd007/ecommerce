<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;

class BrandController extends Controller
{
    
  public function addBrand(){
      $categories = Category::all();
      return view('ecom2.admin.add-brand',compact('categories'));
  } 




  public function manageBrand(){
    $brands = Brand::all();
    return view('ecom2.admin.manage-brand', ['brands'=> $brands]);
} 





  public function saveBrand( Request $request){
    // return $request;

    $imgUpload = new ImageUploader();
    $imgurl =$imgUpload->imageUploader($request);
    $brand = new Brand();
    $brand->brand_name = $request->brand_name;
    $brand->image = $imgurl;
    $brand->slug = $request->slug;
    $brand->category_id = $request->category_id;
    $brand->sub_category_id = $request->sub_category_id;
    $brand->brand_description = $request->brand_description;
    $brand->publication_status = $request->publication_status;
    $brand->save();
    return redirect('/brand-add')->with('msg', 'Brand Info Save Successfully !!!');
}


public function editBrand($id)
{
  $brand = Brand::find($id);
  return view('ecom2.admin.edit-brand', ['brand'=>$brand]);
}


  public function updateBrand(Request $request)
  {

    $category = Brand::find($request->brand_id);
    $category->category_name = $request->category_name;
    $category->category_disc = $request->category_disc;
    $category->publication_status = $request->publication_status;
    $category->save();
    return redirect('manage-category')->with('msg','Category Update Successfully !!!');
  }


  public function deleteBrand($id)
  {
    $category= Category::find($id);
    $category->delete();
    return redirect('manage-category')->with('msg','Category Delete Successfully !!!');

  }



}
