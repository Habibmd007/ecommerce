<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductAttribute;
// use Intervention\Image\Facades\Image;
use Image;
use Illuminate\Support\Carbon;
use App\ProductSize;
use App\ProductColor;
use App\ProductPrice;

class ProductAttributController extends Controller
{
   
    public function index(Request $request, $id )
    {
        $pro_attributes = ProductAttribute::where('product_id', $id)->get();
        $product = Product::find($id);
        return view('ecom2.admin.pro-attribute.product-attribute', compact('product','pro_attributes'));
    }

    
    public function create()
    {

        return view('ecom2.admin.pro-attribute.add-product-attribute');
    }

   
    public function store(Request $request)
    {
        if ($request->hasFile('color')) {
            $image= $request->file('color');
                $pro_attributes = new ProductAttribute();
                $currentDate = Carbon::now()->toDateString();
                $imageName = 'color'.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $directory = public_path('/thumbnail_images');
                $imageUrl = 'thumbnail_images/' . $imageName;
                $thumb_img = Image::make($image->getRealPath())->resize(200, 200);
                $thumb_img->save($directory.'/'.$imageName);
            }
            $pro_attributes = new ProductAttribute();
            $pro_attributes->product_id = $request->product_id;
            $pro_attributes->size = $request->size;
            $pro_attributes->color = $imageUrl;
            $pro_attributes->price = $request->price;
            $pro_attributes->sku = $request->sku;
            $pro_attributes->quantity = $request->quantity;
            $pro_attributes->save();
            return redirect()->back()->with('msg', 'Attribute saved successfully');
    }








    public function productSize($id)
    {
        $product = Product::find($id);
        $product_sizes = ProductSize::where('product_id', $id)->get();
        return view('ecom2.admin.pro-attribute.addProduct_size', compact('product', 'product_sizes'));
    }

    public function addProductSize(Request $request)
    {
        $product_size = new ProductSize();
        $product_size->product_id = $request->product_id;
        $product_size->product_size = $request->product_size;
        $product_size->product_price = $request->product_price;
        $product_size->save();
        return redirect()->back()->with('msg', 'Product size saved successfully');
    }

    public function deleteProductSize($id)
    {
        $product_size = ProductSize::find($id);
        $product_size->delete();
        return redirect()->back()->with('msg', 'Product size Deleted');

    }
    
    public function productColor($id, $size_id)
    {
        $product_size = ProductSize::where('id', $size_id)->first();

        $product = Product::find($id);
        $product_colors = ProductColor::where('product_id', $id)->get();
        return view('ecom2.admin.pro-attribute.addProduct_color', compact('product', 'product_colors', 'product_size'));
    } 



    public function addProductColor(Request $request)
    {
        $product_color = new ProductColor();
        $product_color->product_id = $request->product_id;
        $product_color->product_size = $request->product_size;
        if ($request->hasFile('product_color')) {
            $image= $request->file('product_color');
                $currentDate = Carbon::now()->toDateString();
                $imageName = 'color'.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $directory = public_path('/thumbnail_images');
                $imageUrl = 'thumbnail_images/' . $imageName;
                $thumb_img = Image::make($image->getRealPath())->resize(720, 960);
                $thumb_img->save($directory.'/'.$imageName);
            }
        $product_color->product_color = $imageUrl;
        $product_color->product_price = $request->product_price;
        $product_color->save();
        return redirect()->back()->with('msg', 'Product color image saved successfully');
    }

    public function deleteProductColor($id)
    {
        $product_color = ProductColor::find($id);
        if (!$product_color==0) {
                unlink($product_color->product_color);
                $product_color->delete();
            }
        return redirect()->back()->with('msg', 'Product color image Deleted');
    }
    
    public function productPrice($id)
    {
        $product = Product::find($id);
        $product_prices = ProductPrice::all();
        return view('ecom2.admin.pro-attribute.addProduct_price', compact('product', 'product_prices'));
    }

    
}
