<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SearchRes
{
    public $category_name = 'Search result';
}


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE',"%$query%")
                            ->where('publication_status', 1)
                            ->get();
        $category = new SearchRes();
                            // return $category;
        
                return view('ecom2.front.category-product', compact('products', 'category'));
    }
}
