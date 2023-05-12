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
    public function resize_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        $path = public_path('img/logo');

        // if(!File::isDirectory($path)) {

        //     File::makeDirectory($path, 0777, true);

        // }
        // $file = $request->file('file');

        
    }
}
