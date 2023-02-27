<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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
//Tugas Minggu ke 2 yaitu mencoba Membuat Route

// Route yang beralamatkan / dengan menjalankan fungsi dari pengembalian tulisan page home
 Route::get('/', function () {
      return "Page Home";
     });
   //Route yang beralamatkan /Login dengan menjalankan sebuah fungsi dari pengembalian tulisan Page Login
     Route::get('/Login', function () {
        return "Page login";
       });
       //Route yang beralamatkan /Biodata dengan menjalakan sebuah fungsi dari pengembalian sebuah file Biodata yang berada pada folder view
   Route::get('/Biodata', function () {
         return view('Biodata');
        });
        //route yang beralamatkan /Biodata2 dengan menjalankan sebuah fungsi dari pengembalian sebuah file yang berada pada view
        Route::get('/Biodata2', function () {
         return view('Biodata2',[
         "nama" => "Elisa Febrian Sholeha", //ini merupakan data yang akan ditampilkan apabila sebuah methodenya dipanggil
         "email" => "elisafebri24@gmail.com",
         "image" => "elisa.JPG"
         ]);
        });

        //Tugas Minggu ke 3


     
       
      //  Tugas Minggu 3
 //Route::get('/user', 'ManagementUserController@index');

 //route ini mendapatkan alamat user dengan menampilkan tampilan yang ada pada method index
Route::get('user', [ManagementUserController::class, 'index']);
//route yang beralamatkan user/create untuk menampilkan tampilan yang ada pada methode create
Route::get('user/create',[ManagementUserController::class,'create']);
//route yang beralamatkan user/1/create untuk menampilkan tampilan yang ada pada methode edit
Route::get('user/1/edit', [ManagementUserController::class, 'edit']);
//route yang beralamatkan user/store untuk menampilkan tampilan yang ada pada methode store
Route::get('user/store', [ManagementUserController::class, 'store']);

Route::get('user/1/show', [ManagementUserController::class, 'show']);

Route::get('user/1/update', [ManagementUserController::class, 'update']);

Route::get('user/1/destroy', [ManagementUserController::class, 'destroy']);
   // route yang beralamatkan  /home untuk menampilkan fungsi dari pemngembalian pada folder view dengan file home
   Route::get('/home', function(){
    return view('home');
 });




//Route::resource('user','ManagementUserController');
    