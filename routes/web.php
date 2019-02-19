<?php

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

Route::get('/', function () {
    return view('dashboard.login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-buyer', 'BuyerController@addBuyer');
Route::post('/new-buyer', 'BuyerController@saveBuyer');
Route::get('/manage-buyer', 'BuyerController@manageBuyerInfo');
Route::get('/paid-payment/{id}', 'BuyerController@paidPayment');
Route::get('/unpaid-payment/{id}', 'BuyerController@unpaidPayment');
Route::get('/edit-info/{id}', 'BuyerController@editInfo');
Route::post('/update-info', 'BuyerController@updateInfo');
Route::get('/delete-info/{id}', 'BuyerController@deleteInfo');
Route::get('/view-info/{id}', 'BuyerController@viewInfo');

Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategory');
Route::get('/manage-category', 'CategoryController@manageCategory');
Route::get('/stock-category/{id}', 'CategoryController@stockCategory');
Route::get('/out-stock-category/{id}', 'CategoryController@stockOutCategory');
Route::get('/edit-stock/{id}', 'CategoryController@editCategory');
Route::post('/update-category', 'CategoryController@updateCategory');
Route::get('/delete-stock/{id}', 'CategoryController@deleteCategory');

Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrand');
Route::get('/manage-brand', 'BrandController@manageBrand');
Route::get('/stock-brand/{id}', 'BrandController@stockBrand');
Route::get('/out-stock-brand/{id}', 'BrandController@stockOutBrand');
Route::get('/edit-brand/{id}', 'BrandController@editBrand');
Route::post('/update-brand', 'BrandController@updateBrand');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrand');


Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProduct');
Route::get('/manage-product', 'ProductController@manageProduct');
Route::get('/stock-product/{id}', 'ProductController@stockProduct');
Route::get('/out-stock-product/{id}', 'ProductController@stockOutProduct');
Route::get('/edit-product/{id}', 'ProductController@editProduct');
Route::post('/update-product', 'ProductController@updateProduct');
Route::get('/delete-product/{id}', 'ProductController@deleteProduct');

Route::get('/add-sell', 'ProductSellController@addProductSell');
Route::post('/new-sell', 'ProductSellController@saveProductSell');
Route::get('/manage-sell', 'ProductSellController@manageProductSell');
Route::get('/delete-sell/{id}', 'ProductSellController@deleteProductSell');

Route::get('/add-supllier', 'SupllierController@addSupllier');
Route::post('/new-supllier', 'SupllierController@saveSupllier');
Route::get('/manage-supllier', 'SupllierController@manageSupllier');
Route::get('/edit-supllier/{id}', 'SupllierController@editSupllier');
Route::post('/update-supllier', 'SupllierController@updateSupllier');
Route::get('/delete-supllier/{id}', 'SupllierController@deleteSupllier');
Route::get('/view-supllier/{id}', 'SupllierController@viewSupllier');




Route::post('/get-product/{id}', 'ProductSellController@getProduct');




