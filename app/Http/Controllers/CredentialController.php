<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Credential;

class CredentialController extends Controller
{

    public function index()
    {
        $data['photo_order'] = Credential::orderBy('order_id', 'ASC')->get();
        $photos = Credential::orderBy('order_id','ASC')->get();
        $count = $photos->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.credential.credential')
            ->withPhotos($photos)
            ->withCount($count)
            ->withData($data);
    }


    public function store(Request $request)
    {
        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower(str_slug(uniqid().'-'.$filename).'.'.$extension);
        $fileSave = $file->move('uploads/credential/',$filename);
        // prevent possible upsizing
        Image::make('uploads/credential/'.$filename)->resize(null, 600, function ($constraint) {
            $constraint->aspectRatio();$constraint->upsize();
        })
            ->save('uploads/credential/'.$filename, 100);

        if($fileSave){
            $slider  = new Credential;
            $slider->order_id = 0;
            $slider->file_name = $filename;
            $slider->file_size = $file->getClientSize();
            $slider->file_mime = $file->getClientMimeType();
            $slider->file_path = 'uploads/credential/'.$filename;
            $slider->save();
        }
        return $slider;
    }

    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Credential::find($id);
            $photo->order_id = $key;
            $photo->save();
        }
        return $request->get('data');
    }

    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Credential::find($id);
            $imageFullPath = public_path($photo->file_path);
            File::delete($imageFullPath);

            $photo->delete();
        }
        return $request->get('data');
    }
}
