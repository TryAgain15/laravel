<?php
use App\Http\Controllers\{
    PeopleController
};

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

Route::get('/website', function () {
    return view('index');
});
Route::resource('/website', PeopleController::class);

// Route::group(['middleware'=>'auth'],function(){
// });