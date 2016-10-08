<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Response;
use App\Galeri;
use App\Photo;
use App\Option;

class GaleriController extends Controller
{

    public function index()
    {

        $galeris = Galeri::orderBy('id', 'asc')->get();
        return view('backend.galeri.index')
            ->withGaleris($galeris);
    }

    public function create()
    {
        return view('backend.galeri.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/galeri/create')
                ->withErrors($validator)
                ->withInput();
        }

        $galeri = new Galeri;
        $galeri->name = trim($request->get('name'));
        $galeri->slug = str_slug($request->get('name'),"-"); // str_slug("Laravel 5 Framework", "-");
        $galeri->description = trim($request->get('description'));
        $galeri->save();

        if($galeri->save()) {
            return redirect('admin/galeri');
        }
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);

        return view('backend.galeri.edit')
            ->withGaleri($galeri);
    }

    public function update(Request $request, $id) {

        $reslug = $request->get('reslug');

        if($reslug == 1) {
            $galeri = Galeri::findOrFail($id);
            $galeri->name = trim($request->get('name'));
            $galeri->slug = str_slug($request->get('name'),"-"); // str_slug("Laravel 5 Framework", "-");
            $galeri->description = trim($request->get('description'));
            $galeri->save();
            if($galeri->save()) {
                return redirect('admin/galeri/'.$id.'/edit');
            }

        }
        // Switchbox
        elseif(!isset($request->reslug))
        {
            $id = $request->get('id');
            $galeri = Galeri::find($id);
            $galeri->status = $request->get('status');
            $galeri->save();
            if($galeri->save()) {
                return $request->all();
            }
        }

        else {
            $galeri = Galeri::find($id);
            $galeri->name = $request->get('name');
            $galeri->slug = $request->get('slug');
            $galeri->description = $request->get('description');
            $galeri->save();
            if($galeri->save()) {
                return redirect('admin/galeri');
            }
        }
    }

    // Galeri & Delete all photos
    public function destroy($id)
    {
        $photoCount = Galeri::find($id)->photos->count();
        if($photoCount == 0)
        {
            Galeri::destroy($id);
            return redirect('admin/galeri');
        }

        else {
            $photos = Galeri::find($id)->photos;
            foreach($photos as $photo)
            {
                // file
                // /uploads/galeri/images/561d57232f40d-girls-fullhd-2.jpg
                $imageFullPath = public_path($photo->file_path);
                File::delete($imageFullPath);

                $deleteThumbs = public_path('uploads/galeri/thumb/').$photo->file_name;
                File::delete($deleteThumbs);

            }
            // table section
            Photo::where('galeri_id', $id)->delete();
            Galeri::destroy($id);
            return redirect('admin/galeri');

        }


    }

}