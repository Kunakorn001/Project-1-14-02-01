<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;



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

Route::get('/', function () {
    $product = Product::all();
    return view('welcome',compact('product'));
});
// Route::get('/welcome',function (){
//     return View('welcome');
// });
Route::get('/about',function (){
    return View('about');
});
Route::get('/menu',function (){
    return View('menu');
});
Route::get('/contact',function (){
    return View('contact');
});


Route::get('/dashboard', function () {
    $pd=Product::all();
    $pdr=User::all();
    return view('dashboard',compact('pd','pdr'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// เมนู Product
Route::get('admin/product/index',[ProductController::class,'index'])->name('p.index');
Route::get('admin/product/create',[ProductController::class,'create']);
Route::post('admin/product/insert',[ProductController::class,'insert']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);
