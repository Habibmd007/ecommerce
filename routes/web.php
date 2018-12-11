<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => 'admin'], function () {
    
});

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('gologin');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback')->name('gocallback');

    






Route::get('/',[
    'uses'  =>  'Ecom2controller@index',
    'as'    =>  '/'
]);

Route::get('category-product/{id}',[
    'uses'  =>  'Ecom2controller@categoryProduct',
    'as'    =>  'category-product'
]);

Route::get('sub-cat-product/{id}',[
    'uses'  =>  'Ecom2controller@subCatProductShow',
    'as'    =>  'sub-cat-product'
]);

Route::get('about-us',[
    'uses'  =>  'Ecom2controller@about',
    'as'    =>  'about'
]);
Route::get('/contact-us', [
    'uses' => 'Ecom2controller@contactUs',
    'as' => 'contact'
]);



Route::get('product-details/{id}',[
    'uses'  =>  'Ecom2controller@productDetails',
    'as'    =>  'product-details'
]);




 Route::get('/search','SearchController@search')->name('search');


// add to cart
Route::post('/add-to-cart', [
    'uses'  => 'CartController@addToCart',
    'as'    => 'add-to-cart'
]);

Route::get('/show-cart', [
    'uses'  => 'CartController@showToCart',
    'as'    => 'show-cart'
]);
Route::post('/cart-update', [
    'uses'  => 'CartController@updateCart',
    'as'    => 'cart-update'
]);

Route::get('/cart-delete/{rowId}', [
    'uses'  => 'CartController@deleteCart',
    'as'    => 'cart-delete'
]);



// add to wish-list
Route::post('/add-wish-list', [
    'uses'  => 'WishListController@store',
    'as'    => 'add-wish-list'
]);

Route::get('/wish-list', [
    'uses'  => 'WishListController@show',
    'as'    => 'wish-list'
]);
Route::post('/wish-list-update', [
    'uses'  => 'WishListController@updateCart',
    'as'    => 'wish-list-update'
]);

Route::get('/wish-list-delete/{id}', [
    'uses'  => 'WishListController@destroy',
    'as'    => 'wish-list-delete'
]);
Route::get('/wish-list-delete', [
    'uses'  => 'WishListController@destroyAll',
    'as'    => 'wish-list-deleteAll'
]);


// CheckoutController
Route::get('/checkout', [
    'uses'  => 'CheckoutController@index',
    'as'    => 'checkout'
]);

Route::post('/new-customer', [
    'uses'  => 'CheckoutController@newCustomer',
    'as'    => 'new-customer'
]);

Route::get('/show-shipping', [
    'uses'  => 'CheckoutController@shippingInfo',
    'as'    => 'show-shipping'
]);

Route::post('/new-shipping', [
    'uses'  => 'CheckoutController@newShippingInfo',
    'as'    => 'new-shipping'
]);

Route::get('/payment-info', [
    'uses'  => 'CheckoutController@paymentInfo',
    'as'    => 'payment-info'
]);

Route::post('/new-order', [
    'uses'  => 'CheckoutController@newOrderInfo',
    'as'    => 'new-order'
]);

Route::get('/confirm-order', [
    'uses'  => 'CheckoutController@confirmOrderInfo',
    'as'    => 'confirm-order'
]);

Route::post('/customer_login', [
    'uses' => 'CheckoutController@customerLogin',
    'as' => 'customer_login'
]);

Route::get('/customer-logout', [
    'uses'  => 'CheckoutController@customerLogout',
    'as'    => 'customer-logout'
]);

Route::get('/customer-email-check/{email}', [
    'uses'  => 'CheckoutController@customerEmailCheck',
    'as'    => 'customer-email-check'
]);















// admin rout


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// catrgory route
Route::group(['middleware' => ['Admin']], function () {

Route::get('add-category',[
    'uses'  =>  'CategoryController@addCatrgory',
    'as'    =>  'add-category'
]);

Route::post('save-category',[
    'uses'  =>  'CategoryController@newCategory',
    'as'    =>  'save-category'
]);

Route::get('manage-category',[
    'uses'  =>  'CategoryController@manageCategory',
    'as'    =>  'manage-category'
]);
Route::get('/edit-category/{id}', [
    'uses'  =>  'CategoryController@editCategory',
    'as'    =>  'edit-category'
]);
Route::post('/update-category', [
    'uses'  =>  'CategoryController@updateCategory',
    'as'    =>  'update-category'
]);

Route::get('/delete-category/{id}', [
    'uses'  =>  'CategoryController@deleteCategory',
    'as'    =>  'delete-category'
]);




// Sub Category route
Route::get('/addCategory/{id}', [
    'uses'  =>  'Category\SubCatController@index',
    'as'    =>  'addsubCategory'
]);
Route::post('/store-subCategory', [
    'uses'  =>  'Category\SubCatController@store',
    'as'    =>  'store-subCategory'
]);
Route::get('/viewCategory/{id}', [
    'uses'  =>  'Category\SubCatController@show',
    'as'    =>  'viewCategory'
]);

Route::get('/edit-subCategory/{id}', [
    'uses'  =>  'Category\SubCatController@show',
    'as'    =>  'edit-subCategory'
]);
Route::get('/delete-subCategory/{id}', [
    'uses'  =>  'Category\SubCatController@show',
    'as'    =>  'delete-subCategory'
]);
Route::post('/selectSubCat', [
    'uses'  =>  'Category\SubCatController@selectSubCat',
    'as'    =>  'selectSubCat'
]);
Route::post('/SubCatFront', [
    'uses'  =>  'Category\SubCatController@SubCatFront',
    'as'    =>  'SubCatFront'
]);


// third-category
Route::get('/view-third-cat/{id}/{cid}', [
    'uses'  =>  'Category\ThirdCatController@show',
    'as'    =>  'view-third-cat'
]);
Route::post('/store-thirdCategory', [
    'uses'  =>  'Category\ThirdCatController@store',
    'as'    =>  'store-thirdCategory'
    ]);
    
Route::get('/edit-thirdCategory/{id}', [
    'uses'  =>  'Category\ThirdCatController@show',
    'as'    =>  'edit-thirdCategory'
]);
Route::get('/delete-thirdCategory/{id}', [
    'uses'  =>  'Category\ThirdCatController@show',
    'as'    =>  'delete-thirdCategory'
]);
    









//Brand route

Route::get('/brand-add', [

    'uses' => 'BrandController@addBrand',
    'as' => 'add-brand'
]);

Route::post('/brand-save', [

    'uses' => 'BrandController@saveBrand',
    'as' => 'save-brand'
]);


Route::get('/brand-manage', [

    'uses' => 'BrandController@manageBrand',
    'as' => 'manage-brand'
]);

Route::get('/brand-edit/{id}', [

    'uses' => 'BrandController@editBrand',
    'as' => 'edit-brand'
]);

Route::post('/brand-update', [

    'uses' => 'BrandController@updateBrand',
    'as' => 'update-brand'
]);

Route::get('/brand-delete/{id}', [

    'uses' => 'BrandController@deleteBrand',
    'as' => 'delete-brand'
]);



//product route
Route::get('/product-add', [

    'uses' => 'ProductController@addProduct',
    'as' => 'add-product'
]);
Route::post('/product-save', [

    'uses' => 'ProductController@saveProduct',
    'as' => 'save-product'
]);

Route::get('/product-manage', [

    'uses' => 'ProductController@manageProduct',
    'as' => 'manage-product'
]);

Route::get('/product-edit/{id}', [

    'uses' => 'ProductController@editProduct',
    'as' => 'edit-product'
]);

Route::post('/product-update', [

    'uses' => 'ProductController@updateProduct',
    'as' => 'update-product'
]);

Route::get('/product-delete/{id}', [

    'uses' => 'ProductController@deleteProduct',
    'as' => 'delete-product'
]);
Route::get('/alt-Image/{id}', [
    'uses' => 'ProductController@altImageView',
    'as' => 'alt-Image'
]);

Route::post('/altImage-update', [
    'uses' => 'ProductController@altImageUpdate',
    'as' => 'altImage-update',
]);


// product attribute
Route::get('/view-product_attribute/{id}', [
    'uses' => 'ProductAttributController@index',
    'as' => 'view-product_attribute',
]);
Route::post('/add-product_attribute', [
    'uses' => 'ProductAttributController@store',
    'as' => 'add-product_attribute',
]);
Route::get('/edit-product_attribute', [
    'uses' => 'ProductController@edit-product_attribute',
    'as' => 'edit-product_attribute',
]);
Route::post('/update-product_attribute', [
    'uses' => 'ProductController@update-product_attribute',
    'as' => 'update-product_attribute',
]);
Route::get('/delete-product_attribute', [
    'uses' => 'ProductController@delete-product_attribute',
    'as' => 'delete-product_attribute',
]);







Route::get('/add-product-price/{id}', [
    'uses' => 'ProductAttributController@productPrice',
    'as' => 'productPrice',
]);
Route::get('/view-product_size/{id}', [
    'uses' => 'ProductAttributController@productSize',
    'as' => 'product_size',
]);
Route::post('/add-product_size', [
    'uses' => 'ProductAttributController@addProductSize',
    'as' => 'add-product_size',
]);
Route::get('/delete-product_size/{id}', [
    'uses' => 'ProductAttributController@deleteProductSize',
    'as' => 'deleteProductSize',
]);

Route::get('/view-product_color/{id}', [
    'uses' => 'ProductAttributController@productColor',
    'as' => 'productColor',
]);
// Route::get('/view-product_color/{id}/{size_id}', [
//     'uses' => 'ProductAttributController@productColor',
//     'as' => 'productColor',
// ]);
Route::post('/add-product_color', [
    'uses' => 'ProductAttributController@addProductColor',
    'as' => 'add-product_color',
]);

Route::get('/delete-product_color/{id}', [
    'uses' => 'ProductAttributController@deleteProductColor',
    'as' => 'delete-product_color',
]);










// Order's

Route::get('/manage-order', [

    'uses' => 'OrderController@manageOrder',
    'as' => 'manage-order',
    'middleware'    =>  'Admin'
]);

Route::get('/view-order-details/{id}', [

    'uses' => 'OrderController@viewOrderDetail',
    'as' => 'view-order-details'
]);

Route::get('/view-order-invoice/{id}', [

    'uses' => 'OrderController@viewOrderInvoice',
    'as' => 'view-order-invoice'
]);

Route::get('/print-order-invoice/{id}', [

    'uses' => 'OrderController@printOrderInvoice',
    'as' => 'print-order-invoice'
]);


Route::get('edit-order/{oid}', [

    'uses' => 'OrderController@editOrder',
    'as' => 'edit-order'
]);


Route::post('order-update', [
    
    'uses' => 'OrderController@orderUpdate',
    'as' => 'order-update'
    ]);
    
    Route::get('delete-order/{oid}', [
    
        'uses' => 'OrderController@deleteorder',
        'as' => 'delete-order'
    ]);
    
    
    Route::resource('slider', 'sliderController');
    
    
    


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
