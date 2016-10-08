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

    // create new team member page
    public function create()
    {
        return view('backend.team.create', compact('data'));
    }

    // store new team member
    public function store(Request $request)
    {
        // with validations
        $validator = Validator::make($request->all(), [
            'adsoyad' => 'required',
            'unvan' => 'required',
            'fotograf' => 'required'
        ]);

        // return with errors
        if ($validator->fails()) {
            return redirect('admin/team/create')
                ->withErrors($validator)
                ->withInput();
        }

        // no errors do it
        $team = new Team;
        $team->name = trim($request->adsoyad);
        $team->title = trim($request->unvan);
        $team->image = $request->fotograf;
        $team->save();

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
            $team->delete();
        }
        return $request->get('data');
    }
}
