<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    //menampilkan tampilan pada data
    public function data(){
        return view('backend/layouts/data');
    }
    //membuat class tambah dengan melakukan request dan menderect pada data1  

    public function add(Request $request){
        Pekerjaan::create($request->all());
        return redirect()->route('data1')
        ->with('succes','Data berhasil ditambahkan');
    }
    //menampilkan data1 berdasarkan method
    public function data1(){
        $item = Pekerjaan::all();
        return view ('backend/layouts/data1', compact('item'));
    }
    //membuat class delet berdasarkan id yang nantinya akan dihapus
    public function delete($id){
        $item = Pekerjaan::find($id);
        $item->delete();
        return redirect()->route('data1')->with('succes','dihapus');

    }
    //membuat class untuk menampilkan data yang dipanggil telah berdasarkan id
    public function tampildata($id){
        $item = Pekerjaan::find($id);
     //   dd($item);
     return view ('backend/layouts/tampildata', compact('item'));
    
    }
    //membuat class untuk melakukan uodate data dan data yang akan diupdate berdasarkan id
    public function updatedata(Request $request, $id){
        $item = Pekerjaan::find($id);
        $item->update($request->all());
        return redirect()->route('data1')
        ->with('succes','Data berhasil diupdate');
    }
}
