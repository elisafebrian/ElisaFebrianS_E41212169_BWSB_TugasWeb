<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function data(){
        return view('backend/layouts/data');
    }

    public function add(Request $request){
        Pekerjaan::create($request->all());
        return redirect()->route('data1')
        ->with('succes','Data berhasil ditambahkan');
    }
    public function data1(){
        $item = Pekerjaan::all();
        return view ('backend/layouts/data1', compact('item'));
    }
    public function delete($id){
        $item = Pekerjaan::find($id);
        $item->delete();
        return redirect()->route('data1')->with('succes','dihapus');

    }
    public function tampildata($id){
        $item = Pekerjaan::find($id);
     //   dd($item);
     return view ('backend/layouts/tampildata', compact('item'));
    
    }
    public function updatedata(Request $request, $id){
        $item = Pekerjaan::find($id);
        $item->update($request->all());
        return redirect()->route('data1')
        ->with('succes','Data berhasil diupdate');
    }
}
