<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Logo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{

    public function index()
    {
        $data = New Logo;
        $data = Logo::find(1);
        return view ('backend.logo.index')
            ->withData($data);
    }

    public function update(Request $request, $id)
    {
        // old logo
        $logo = Logo::find(1);
        $imageFullPath = public_path($logo->file_path);
        if (File::exists($imageFullPath)){
            File::delete($imageFullPath);
        }

        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower($filename.'.'.$extension); //filename str_slug


        $fileSave = $file->move('frontend/images',$filename); // new file save
        Image::make('frontend/images/'.$filename)->fit(250, 200)->save('frontend/images/'.$filename, 100); // file resize

        if($fileSave){
            $logo->file_name = $filename;
            $logo->file_size = $file->getClientSize();
            $logo->file_mime = $file->getClientMimeType();
            $logo->file_path = 'frontend/images/'.$filename;
            $logo->save();
        }
        return redirect('admin/logo');
    }

}
