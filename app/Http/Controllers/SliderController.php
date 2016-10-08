<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Slider;

class SliderController extends Controller
{

    public function index()
    {
        $data['photo_order'] = Slider::orderBy('order_id', 'ASC')->get();
        $photos = Slider::orderBy('order_id','ASC')->get();
        $count = $photos->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.slider.slider')
            ->withPhotos($photos)
            ->withCount($count)
            ->withData($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower(str_slug(uniqid().'-'.$filename).'.'.$extension);
        $fileSave = $file->move('uploads/slider',$filename);
        //Image::make('uploads/slider/'.$filename)->fit(800, 600)->save('uploads/slider/'.$filename, 80);

        if($fileSave){
            $slider  = new Slider;
            $slider->order_id = 0;
            $slider->file_name = $filename;
            $slider->file_size = $file->getClientSize();
            $slider->file_mime = $file->getClientMimeType();
            $slider->file_path = 'uploads/slider/'.$filename;
            $slider->description = $filename;
            $slider->save();
        }
        return $slider;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Slider::find($id);
            $photo->order_id = $key;
            $photo->save();
        }
        return $request->get('data');
    }


    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Slider::find($id);
            $imageFullPath = public_path($photo->file_path);
            File::delete($imageFullPath);

            $photo->delete();
        }
        return $request->get('data');
    }
}
