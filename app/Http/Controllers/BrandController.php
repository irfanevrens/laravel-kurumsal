<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Brand;

class BrandController extends Controller
{

    public function index()
    {
        $data['photo_order'] = Brand::orderBy('order_id', 'ASC')->get();
        $photos = Brand::orderBy('order_id','ASC')->get();
        $count = $photos->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.brand.brand')
            ->withPhotos($photos)
            ->withCount($count)
            ->withData($data);
    }


    public function store(Request $request)
    {
        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower(str_slug(uniqid().'-'.$filename).'.'.$extension);
        $fileSave = $file->move('uploads/brand/',$filename);
        Image::make('uploads/brand/'.$filename)->fit(320, 240)->save('uploads/brand/'.$filename, 100);

        if($fileSave){
            $slider  = new Brand;
            $slider->order_id = 0;
            $slider->file_name = $filename;
            $slider->file_size = $file->getClientSize();
            $slider->file_mime = $file->getClientMimeType();
            $slider->file_path = 'uploads/brand/'.$filename;
            $slider->save();
        }
        return $slider;
    }

    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Brand::find($id);
            $photo->order_id = $key;
            $photo->save();
        }
        return $request->get('data');
    }

    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Brand::find($id);
            $imageFullPath = public_path($photo->file_path);
            File::delete($imageFullPath);

            $photo->delete();
        }
        return $request->get('data');
    }
}
