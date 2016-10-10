<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Team;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{

    public function index()
    {
        $data['order_id'] = Team::orderBy('order_id', 'ASC')->get();
        $team = Team::orderBy('order_id', 'asc')->orderBy('id','asc')->get();
        $count = $team->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.team.index', compact('team','count'))
            ->withData($data);
    }

    // create new team member page
    public function create()
    {
        return view('backend.team.create', compact('data'));
    }

    // store new team member
    public function store(Request $request)
    {
        // begin alidations
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
        ]);
        // end validations

        // begin return errors
        if ($validator->fails()) {
            return redirect('admin/team/create')
                ->withErrors($validator)
                ->withInput();
        }
        // end return errors

        // begin file process
        $file = $request->file('file');
        list($filename, $extension) = explode(".", $file->getClientOriginalName());
        $filename = strtolower(str_slug($filename.'-'.uniqid()).'.'.$extension);
        $fileSave = $file->move('uploads/team',$filename);
        Image::make('uploads/team/'.$filename)->fit(400, 300)->save('uploads/team/'.$filename, 60);
        // end file process



        if($fileSave){
            $team = new Team;
            //$photo->file_name = $filename;
            $path = 'uploads/team/'.$filename;
            $team->name  = trim($request->name);
            $team->title = trim($request->title);
            $team->image = $path;
            $team->save();
        }

        // if team stored return admin/team page
        if($team->save()) {
            return redirect('admin/team');
        }
    }

    // team members ajax update
    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $team = Team::find($id);
            $team->order_id = $key;
            $team->save();
        }
        // when update order_id refresh order_id
        return $request->get('data');
    }

    // team members single and multiple checkbox deleting from ajax
    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $team = Team::find($id);
            // image dosyalarını bul ve sil
            $imagePublicPath = public_path($team->image);
            File::delete($imagePublicPath);
            $team->delete();
        }
        return $request->get('data');
    }
}
