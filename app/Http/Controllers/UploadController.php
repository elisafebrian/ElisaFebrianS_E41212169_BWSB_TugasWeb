<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use File;

use Image;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        $file = $request->file('file');
        echo 'File Name: '.$file->getClientOriginalName().'<br>';
        echo 'File Extension: '.$file->getClientOriginalExtension().'<br>';
        echo 'File Real Path: '.$file->getRealPath().'<br>';
        echo 'File Size: '.$file->getSize().'<br>';
        echo 'File Mime Type: '.$file->getMimeType().'<br>';
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());

    }
    // public function resize_upload(Request $request)
    // {
    //     $this->validate($request, [
    //         'file' => 'required',
    //         'keterangan' => 'required',
    //     ]);
    //     //  Tentikan path lokasi upload
    //     $path = public_path('img/logo');
    //     //Jika folder belum ada maka
    //     if (!FacadesFile::isDirectory($path)) {
    //         //maka folder tersebut akan dibuat
    //         FacadesFile::makeDirectory($path, 0777, true);
    //     }
    //     //mengambil file image dari orm
    //     $file = $request->file('file');

    //     //membuat nama file dari gabungan tanggal dan uniqid()
    //     $fileName = 'logo_'. uniqid() . '.' . $file->getClientOriginalExtension();
    //     //mebuat canvas image sebesar dimensi
    //     $canvas = Image::canvas(200, 200);
    //     //ResizeImage sesuai dimensi dengan mempertahankan ratio
    //     $resizeImage = Image::make($file)->resize(null, 200, function($constraint){
    //         $constraint->aspectRatio();
    //     });
    //     //memasukkan image yang telah diresize ke dalam canvas
    //     $canvas->insert($resizeImage, 'center');
    //     //simpan image ke folder
    //     if($canvas->save($path, '/' , $fileName)){
    //         return redirect(route('upload'))->with('succes','Data Berhasil ditambahkan!');
    //     } else{
    //         return redirect(route('upload'))->with('error','Data gagal ditambahkan!');
    //     }
    //     }
        public function dropzone(){
            return view('dropzone');
        }
        public function dropzone_store(Request $request)
        {
            $image = $request->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/dropzone'), $imageName);
            return response()->json(['success'=> $imageName]);
        }
        public function pdf_upload(){
            return view('uploadfile');
        }
        public function pdf_store(Request $request)
        {
            $pdf = $request->file('file');

            $pdfName = 'pdf_'.time().'.'.$pdf->extension();
            $pdf->move(public_path('pdf/dropzone'), $pdfName);
            return response()->json(['success' => $pdfName]);
        }
    }
