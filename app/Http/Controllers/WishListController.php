<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WishList;
use Session;
use DB;
use App\Product;

class WishListController extends Controller
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
        $wishList = new WishList();
        $wishList->customer_id = $id= Session::get('customerId');
        $wishList->product_id = $request->product_id;
        $wishList->save();

        $wishLists = DB::table('wish_Lists')->where('customer_id',$id)
                            ->join('products', 'wish_Lists.product_id', '=', 'products.id')
                            ->select('wish_Lists.*', 'products.product_name', 'products.product_image', 'products.product_price')
                            ->orderBy('id', 'desc')
                            ->get();
                            // return $wishLists;
                            foreach ($wishLists as $key => $wishList) {
                                echo'
                                <tr><td>'.$wishList->product_name.'</td>
                                <td><img src="'.asset($wishList->product_image).'" alt="" height="50px"></td>
                                <td>$'.$wishList->product_price.'</td></tr>
                                ';
                            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if ($id = Session::get('customerId')) {

            $wishLists = DB::table('wish_Lists')->where('customer_id',$id)
                            ->join('products', 'wish_Lists.product_id', '=', 'products.id')
                            ->select('wish_Lists.*', 'products.product_name', 'products.product_image', 'products.product_price')
                            ->orderBy('id', 'desc')
                            ->get();
            
            // return $wishLists;
            return view('ecom2.front.wish-list',compact('wishLists'));

            }else{
            return redirect('checkout')->with('msg','Please Login First');

        }
    
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
        $wishList = WishList::find($id);
        $wishList->delete();
        return redirect()->back()->with('msg', 'Deleted from wish list');
    }
    public function destroyAll()
    {
        $wishLists = WishList::where('customer_id', Session::get('customerId'))->get();
        foreach ($wishLists as $key => $wishList) {
            $wishList->delete();
        }
        return redirect()->back()->with('msg', 'Deleted All from wish list');
    }
}
