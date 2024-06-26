<?php

use App\Http\Controllers\ProductController;
use App\Models\Listing;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// You can pass in php file or blade file as a view.
//All Listings
// Route::get('/', function () {
//     return view('listings',[
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all()
//     ]);
// });

Route::get('/', [ProductController::class, 'index']); 


Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 200)
    // ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

// Route::get('/listings/{id}', function($id){
//     // dd(Listing::find($id));
//     // dd($id);
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// })->where('id', '[0-9]+');

Route::get('/products/{product}', function(Product $product){
    // dd(Listing::find($id));
    // dd($id);
    return view('product-listings/product-listing', [
        // 'product' => Product::find($id)
        'product' => $product
    ]);
})->where('id', '[0-9]+');


Route::get('/search', function(Request $request){
    dd($request);
    return response($request->name .' ' . $request->city);
});
