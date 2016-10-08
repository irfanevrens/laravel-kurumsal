<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Photo;
use App\Galeri;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    public function store(Request $request)
    {

        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower(str_slug(uniqid().'-'.$filename).'.'.$extension);
        $fileSave = $file->move('uploads/galeri/images',$filename);
        Image::make('uploads/galeri/images/'.$filename)->fit(800, 600)->save('uploads/galeri/images/'.$filename, 80);
        Image::make('uploads/galeri/images/'.$filename)->resize(240,160)->save('uploads/galeri/thumb/'.$filename, 80);

        if($fileSave){
            $photo  = new Photo;
            $photo->galeri_id = $request->get('galeri_id');
            $photo->file_name = $filename;
            $photo->file_size = $file->getClientSize();
            $photo->file_mime = $file->getClientMimeType();
            $photo->file_path = 'uploads/galeri/images/'.$filename;
            $photo->description = $filename;
            $photo->save();
        }
        return $photo;
    }

    public function show($id)
    {
        $data['photo_order'] = Photo::orderBy('order_id', 'ASC')->get();
        $galeri = Galeri::find($id);
        $photos = Galeri::find($id)->photos; // hasMany ?
        $count = $galeri->photos->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.photo.photo')
            ->withGaleri_id($id)
            ->withPhotos($photos)
            ->withGaleri($galeri)
            ->withCount($count)
            ->withData($data);
    }

    // AJAX UPDATE
    public function update(Request $request, $id)
    {
        // get('data') dan gelen keylere göre toplu silme güncelleme işlemi.
        foreach( $request->get('data') as $key => $id){
            $photo = Photo::find($id);
            $photo->order_id = $key;
            $photo->save();
        }
        return $request->get('data');
    }
    // AJAX UPDATE
    
    // AJAX DELETE
    public function destroy(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $photo = Photo::find($id);
            $imageFullPath = public_path($photo->file_path);
            File::delete($imageFullPath);
            
            $deleteThumbs = public_path('uploads/galeri/thumb/').$photo->file_name;
            File::delete($deleteThumbs);
            $photo->delete();
        }
        return $request->get('data');
    }
    // AJAX DELETE
}