<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Team;
use App\TeamSocialIcon;

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

    public function store(Request $request)
    {
        // begin alidations
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'file' => 'required'
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
            $path = 'uploads/team/'.$filename;
            $team->name  = trim($request->name);
            $team->title = trim($request->title);
            $team->image = $path;
            $team->save();
        }
        if($team->save()){
            $insertedId  = Team::All()->last()->id;
            $social_class = $request->social_class;
            $link = $request->link;
            foreach ($social_class as $i => $socialClass) {
                $tsi = new TeamSocialIcon();
                $tsi->order_id = 0;
                $tsi->team_id = $insertedId;
                $tsi->social_class = $socialClass;
                $tsi->link = $link[$i];
                $tsi->save();
            }
        }
        return redirect('admin/team');
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
            $imagePublicPath = public_path($team->image);
            File::delete($imagePublicPath);
            $team->delete();
            TeamSocialIcon::where('team_id', $id)->delete();
            // $id1,id2, id3 teamIconController foreach destroy
        }
        
        return $request->get('data');
    }
}
