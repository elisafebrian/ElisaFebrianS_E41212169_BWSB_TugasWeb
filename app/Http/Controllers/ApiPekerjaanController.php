<?php

namespace App\Http\Controllers;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

class ApiPekerjaanController extends Controller
{
    public function getAll()
    //membuat class untuk menangkap semua data yg brada pada pekerjaan
    {
        $pekerjaan = Pekerjaan::all();
        return Response::json($pekerjaan, 201);
    }
    public function getPen($id)
    //class yang menangkap berdasarkan id
    {
        $pekerjaan = Pekerjaan::find($id);
        return Response::json($pekerjaan, 200);
    }
    public function createPen(Request $request)
    //class menangkap create session
    {
        Pekerjaan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil ditambahkan!'
        ], 201);
    }
    public function updatePen($id, Request $request)
    //class untuk update yang melakukan request berdasarkan id pada field
    {
        Pekerjaan::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil dirubah!'
        ], 201);
    }
    public function deletePen($id)
    //class function delete
    {
        Pekerjaan::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil dihapus!'
        ], 201);
    }


}
