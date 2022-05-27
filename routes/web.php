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

Route::get('/', );

Route::get('/about', function () {
    return '<h4>about page</h4>';
});

Route::get('/contact', function () {
    return '<h4>contact page</h4>';
});



//{category?}/{item?} - ? make these optional
//{category}/{item} - no ? make these require
Route::get('/store/{category?}/{item?}', function($category = null, $item = null){
    if(isset($category)) {
        if(isset($item)) {
            // strip tags removes all, html, js php tags
            return "You are viewing the store page {$category} for {$item}";
        }
        return "You are viewing the store page {$category}";
    }

    return 'you are viewing all instruments';    
});

// this is not used that often
// Route::get('/store', function(){
//     //get info from the query parameter
//     $category = request('category');

//     if(isset($category)) {
//         // strip tags removes all, html, js php tags
//         return 'You are viewing the store page '. strip_tags($category);
//     }

//     return 'you are viewing all instruments';    
// });