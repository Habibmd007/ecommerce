<?php
namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use DB;
use App\Imagemodel;
use Image;
use File;
// use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
        public function addProduct()
        {
            $categories = Category::where('publication_status', 1)->get();
            $brands = Brand::where('publication_status', 1)->get();
            
            return view('ecom2.admin.add-product', [
                'categories' => $categories,
                'brands' => $brands,
            ]);
        }



        protected function productImageUpload($request)
        {   
            $image= $request->file('product_image');
            $imageFileType = $image->getClientOriginalExtension();
            $imageName = $request->product_name .'.' . $imageFileType;
            // $directory = 'thumbnail_images/';
            $directory = public_path('/thumbnail_images');
            $thumb_img = Image::make($image->getRealPath())->resize(200, 200);
            $imageUrl = 'thumbnail_images/' . $imageName;
            $thumb_img->save($directory.'/'.$imageName,80);
            // $directory = 'product-images/';
            // $image->move($directory, $imageName,80);
            return $imageUrl;
        }

        protected function altImageUpload($request, $product_id){

            if ($request->hasFile('alt_image')) {
                    $images= $request->file('alt_image');
                $i= 0;
                foreach ($images as  $image) {
                    $i++;
                        $imageFileType = $image->getClientOriginalExtension();
                        $imageName = $request->product_name .$i.'.' . $imageFileType;
                        // $directory = 'thumbnail_images/';
                        $directory = public_path('/thumbnail_images');

                        $imageUrl = 'thumbnail_images/' . $imageName;
                        $thumb_img = Image::make($image->getRealPath())->resize(200, 200);
                        $thumb_img->save($directory.'/'.$imageName);


                        $image = new Imagemodel();
                        $image->category_id = $request->category_id;
                        $image->product_id = $product_id;
                        $image->img_url = $imageUrl;
                        $image->publication_status = $request->publication_status;
                        $image->save();
                    
                }
            }
        }
    
        protected function productBasicInfo($request, $imageUrl)
        {
                
            $product = new Product();
            $product->category_id       = $request->category_id;
            $product->sub_category_id       = $request->sub_category_id;
            $product->brand_id          = $request->brand_id;
            $product->product_name      = $request->product_name;
            $product->product_price     = $request->product_price;
            $product->product_quantity  = $request->product_quantity;
            $product->product_skew      = $request->product_skew;
            $product->product_short_description = $request->product_short_description;
            $product->product_long_description = $request->product_long_description;
            $product->product_image = $imageUrl;
            $product->publication_status = $request->publication_status;
    
            $product->save();
            return $product->id;
    
    
        }
    
    
        public function saveProduct(Request $request)
        {
            // $image = Image::all();
            // return $image;
            $this->validate( request(), [
                // 'alt_image'                  =>  'required',
                'alt_image.*'                =>  'image|required|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'product_image'              =>  'image|required|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'category_id'                =>  'required',
                'brand_id'                   =>  'required',
                'product_name'               =>  'required',
                'product_quantity'           =>  'required',
                'product_skew'               =>  'required',
                'product_short_description'  =>  'required|max:500',
                'product_long_description'   =>  'required|max:1000',
                'publication_status'         =>  'required',
            ]);
            
            $imageUrl=    $this->productImageUpload($request);
            $product_id = $this->productBasicInfo($request, $imageUrl);
                          $this->altImageUpload($request, $product_id );
            return redirect('product-add')->with('msg', 'Product Info Save Succesfully !! ');
    
        }


     public function manageProduct(){

        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();


        return view('ecom2.admin.manage-product',['products' => $products]);
    }


    public function editProduct($id)
    {

        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        $product = Product::find($id);

        return view('ecom2.admin.edit-product', [

            'categories' => $categories,
            'brands' => $brands,
            'product' => $product
        ]);

    }

    protected function updateProductBasicInfo($product, $request, $imageUrl)
    {

        $product->category_id        = $request->category_id;
        $product->brand_id           = $request->brand_id;
        $product->product_name       = $request->product_name;
        $product->product_price      = $request->product_price;
        $product->product_quantity   = $request->product_quantity;
        $product->product_skew       = $request->product_skew;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        // $product->product_image      =$imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();

    }


    public function updateProduct(Request $request)
    {
        $product = Product::find($request->product_id);
        $productImage = $request->file('product_image');
        if ($productImage) {
            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
        } else {
            $imageUrl = $product->product_image;
        }

        $this->updateProductBasicInfo($product, $request, $imageUrl);
        return redirect('/product-manage')->with('msg', 'Product info update successfully');
//
//        $imageUrl = $this->productImageUpload($request);
//
//        $product = Product::find($request->product_id);
//
//        $this->updateProductBasicInfo($product, $request, $imageUrl);
//
//
//        return redirect('/product-manage')->with('msg', 'Product Info Update Succesfully !! ');
    }

    public function deleteProduct($id){
          $product = Product::find($id);
          $product->delete();
          return redirect('/product-manage')->with('msg', 'Product info Deleted successfully');

    }

    public function altImageView($id)
    {
        $altImages = Imagemodel::where('product_id', $id)->get();
        $product = Product::find($id);
            return view('ecom2.admin.altImage-View',[
                'altImages'=>$altImages,
                'product' =>$product
                ]);
    }

    public function altImageUpdate(Request $request)
    {
        $imageRows = Imagemodel::where('product_id',$request->product_id)->get();
        // $productImages = $request->file('alt_image');

        foreach($imageRows as $imageRow){

        if (!$imageRows==0) {
                unlink($imageRow->img_url);
                $imageRow->delete();
            }
        } 
        
        $this->altImageUpload($request, $request->product_id);
        return redirect('/product-manage')->with('msg', 'Alt Image update successfully');
    }
}
