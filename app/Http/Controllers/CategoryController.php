<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller{
    
    public function addCatrgory(){

        return view('ecom2.admin.category.addCatrgory');
            
    }

    public function manageCategory(){

        $categories = Category::all();
        return view('ecom2.admin.category.manage-category', ['categories'=>$categories]);
            
    }

    public function newCategory(Request $request){

       $this->validate($request,[
           'category_name' => 'required|unique',
           'slug' => 'required|unique',
           'category_disc' => 'required',
           'publication_status' => 'required'
       ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->category_disc = $request->category_disc;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('manage-category')->with('msg', 'Category info saved successfully');
            
    }


    public function editCategory($id){

        $category = Category::find($id);
  
          return view('ecom2.admin.edit-category', ['category'=>$category]);
      }


      public function updateCategory(Request $request){

        $category = Category::find($request->category_id);
  
        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->category_disc = $request->category_disc;
        $category->publication_status = $request->publication_status;
  
        $category->save();
  
        return redirect('manage-category')->with('msg','Category Update Successfully !!!');
  
  
      }


      public function deleteCategory($id){

        $category= Category::find($id);
        $category->delete();
 
         return redirect('manage-category')->with('msg','Category Delete Successfully !!!');
 
     }

}
