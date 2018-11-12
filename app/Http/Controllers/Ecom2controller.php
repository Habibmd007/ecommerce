<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Imagemodel;
use App\Slider;
use App\Brand;
use App\ProductSize;
use App\ProductColor;


class Ecom2controller extends Controller
{

    public function index(){
        $products = Product::where('category_id',  4)
                            ->where('publication_status', 1)
                            ->orderBy('id', 'desc')
//                            ->skip(11)
                            ->take(3)
                            ->get();
//        return $products;

        $products_oils = Product::where('category_id', 6)
                            ->where('publication_status', 1)
                            ->orderBy('id', 'desc')
//                            ->skip(11)
                            ->take(3)
                            ->get();
                            // return $products_oils;
        $products_pastas = Product::where('category_id', 5)
                            ->where('publication_status', 1)
                            ->orderBy('id', 'desc')
//                            ->skip(11)
                            ->take(3)
                            ->get();
        $sliders= Slider::all();

                // return $sliders;


        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        $category   = Category::where('id', 5)->first();
        return view('ecom2.front.home', [
                'products_oils'        =>  $products_oils,
                'products_pastas'      =>  $products_pastas,
                'products'             =>  $products,
                'categories'           =>  $categories,
                'category'             =>  $category,
                'sliders'              =>  $sliders,
                // 'brands'               => $brands,
        ]);

    }


    public function about()
    {
            return view('ecom2.front.about');
    }


   

    public function categoryProduct($id){
        $products = Product::where('category_id', $id)
                            ->where('publication_status', 1)
                            ->get();
            // print_r($products) ;
            // return $products;
        $categories = Category::where('publication_status', 1)->get();
        $category = Category::find($id);

        // $images = Image::all()->img_uri;
        // return $images;
        // $images = Image::all();
        // return $category;
        return view('ecom2.front.category-product', [
            'products'      =>  $products,
            'categories'    =>  $categories,
            'category'    =>  $category,
            // 'images'        =>  $images,
        ]);

    }


    public function productDetails($id){
           $product_colors = ProductColor::where('product_id',$id)->get();
           $colorObject = new ProductColor();
           $product_sizes = ProductSize::where('product_id',$id)->get();
        //    return $product_sizes;
           $product = Product::find($id);
           $alt_images = Imagemodel::where('product_id',$id)->get();

           //if size price, color price not available value will be default
        if (isset($product_size)) {
            $proSize = $product_size->product_size;
            $sizePrice = $product_size->product_price;
        }else {
            $proSize = 'NA';
            $sizePrice = 'NA';
        }

        if (isset($product_color)) {
            $colorPrice = $product_color->product_price;
            $colorImage = $product_color->product_color;
        }else {
            $colorPrice = 'NA';
            $colorImage = 'NA';
        }
            
       
                        // PHP function to check for even elements in an array 
                function Even($array) 
                { 
                    // returns if the input integer is even 
                    if($array%2==null) 
                    return TRUE; 
                    else 
                    return FALSE;  
                } 
                
                $array = $colorObject->sizeColorPrices($product, $product_colors,$product_sizes); 
                $scPrice = array_filter($array);
                $minPrice = min($scPrice);
                $maxPrice = max($scPrice);

              
               
              


            return view('ecom2.front.productDetails',[
                'product'       =>$product,
                'alt_images'    =>$alt_images,
                'product_sizes'  => $product_sizes,
                'product_colors'  => $product_colors,
                'minPrice'  => $minPrice,
                'maxPrice'  => $maxPrice,
               
                
                ]);
    }


    // live search
    





}
