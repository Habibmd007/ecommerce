<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    
  public function addBrand(){
      
    return view('ecom2.admin.add-brand');
  } 




  public function manageBrand(){

    $brands = Brand::all();

    return view('ecom2.admin.manage-brand', ['brands'=> $brands]);
} 





  public function saveBrand( Request $request){

    $brand = new Brand();

    $brand->brand_name = $request->brand_name;
    $brand->brand_description = $request->brand_description;
    $brand->publication_status = $request->publication_status;

    $brand->save();

    return redirect('/brand-add')->with('msg', 'Brand Info Save Successfully !!!');
}



}
