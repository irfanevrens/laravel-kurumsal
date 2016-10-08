<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Team;


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

    // new team member create page
    public function create()
    {
        return view('backend.team.create', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'adsoyad' => 'required',
            'unvan' => 'required',
            'fotograf' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/team/create')
                ->withErrors($validator)
                ->withInput();
        }

        $team = new Team;
        $team->name = trim($request->adsoyad);
        $team->title = trim($request->unvan);
        $team->image = $request->fotograf;

        $team->save();

        if($team->save()) {
            return redirect('admin/team');
        }
    }
    
    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $team = Team::find($id);
            $team->order_id = $key;
            $team->save();
        }
        return $request->get('data');
    }

    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $team = Team::find($id);
            $team->delete();
        }
        return $request->get('data');
    }
}
