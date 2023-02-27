<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

 class ManagementUserController extends Controller
 {
    public function index() // ini merupakan methode index dengan memiliki data nama dan pelajaran
    {
        $nama = "Elisa Febrian Sholeha";
        $pelajaran = ["workshop Sistem Informasi Web","kalkulus","program web"];
    
        return view('home', compact('nama','pelajaran')); //pengembalian pada view home
    }
 }
    //  {
    //     // return "Hello ini adalah method index, dalam contoller ManagementUser.";
    //     return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    //  }
    //  public function create()
    //  {
    //      return"Method ini nantinya akan digunakan untuk menampilkan fore untuk menambah data user";
    //  }
    //  public function store(Request $request)
    //  {
    //      return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    //  }
    //  public function show($id=1)
    //  {
    //      return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" .$id;
    //  }
    //  public function edit($id=1)
    //  {
    //      return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    //  }
    //  public function update(Request $request, $id=1)
    //  {
    //      return "Method ini nantinya akan digunakan untuk mengubah data user dengan=" .$id;
    //  }
    //  public function destroy($id=1)
    //  {
    //      return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=".$id;
    //  }

    // }


