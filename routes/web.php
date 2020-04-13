<?php
// routes for admin
Route::prefix("admin")->middleware(['auth',"check_admin"])->group(function (){
    include_once("admin.php");
});
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
//Route::METHOD(path_string,HANDLE_FUNCTION);
// Method: post get put delete ... CRUD

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Unique;

Route::get("/","WebController@home");
// Route::METHOD(path_string,Controller@function_in_controller);
Route::get("/san-pham/{id}","WebController@product");
Route::get("/danh-muc/{id}","WebController@listing");
Route::get("/cart","WebController@cart")->middleware("auth");
Route::get("/clear-cart","WebController@clearCart")->middleware("auth");
Route::get("/remove-product/{id}","WebController@removeProduct")->middleware("auth");

Route::get('/student', function () {
    $student_list = Student::all();
    return view('welcome', ["list" => $student_list]);
});

Route::get('/add', function () {
    return view('add_student');
});

Route::post('/add-student', function (Request $request) {
    $request->validate([
        "name" => "required|string",
        "age" => "required|numeric",
        "address" => "required|string",
        "tel" => "required|string"
    ]);
    try {
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("tel")
        ]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    return redirect()->to("/student");
});





Route::get('/servey', function () {
    $servey_list = Servey::all();
    return view('servey', ["list" => $servey_list]);
});

Route::get('/add-servey', function () {
    return view('add_servey');
});

Route::post('/add-servey', function (Request $request) {
    $request->validate([
        "name" => "required|string",
        "email" => "required|string",
        "tel" => "required|numeric",
        "feedback" => "required|string"
    ]);
    try {
        Student::create([
            "name" => $request->get("name"),
            "email" => $request->get("email"),
            "telephone" => $request->get("tel"),
            "feedback" => $request->get("feedback"),
        ]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    return redirect()->to("/servey");
});





Auth::routes();

Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    session()->flush();
    return redirect()->to("/login");
});




