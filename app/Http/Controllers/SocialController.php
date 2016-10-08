<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Social;
use App\Umut\Social as iSocial;


class SocialController extends Controller
{
    public function index()
    {
        $data['photo_order'] = Social::orderBy('order_id', 'ASC')->get();
        $social = Social::orderBy('order_id','ASC')->get();
        $count = $social->count();
        if($count == 0){
            $count = 1;
        }

        return view('backend.social.index', compact('social', 'count'))
            ->withData($data);
    }


    public function create()
    {
        return view('backend.social.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required',
            'social_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/social/create')
                ->withErrors($validator)
                ->withInput();
        }
        $isocial = new iSocial;
        $isocial->setClass($request->social_id);
        $isocial->setIcon($request->social_id);

        $social = new Social;
        $social->link = trim($request->link);
        $social->social_id = $request->social_id;
        $social->class = $isocial->getClass();
        $social->icon = $isocial->getIcon();
        $social->save();

        if($social->save()) {
            return redirect('admin/social');
        }
    }

    public function update(Request $request, $id)
    {
        foreach( $request->get('data') as $key => $id){
            $social = Social::find($id);
            $social->order_id = $key;
            $social->save();
        }
        return $request->get('data');
    }

    public function destroy(Request $request)
    {
        foreach( $request->get('data') as $key => $id){
            $social = Social::find($id);
            $social->delete();
        }
        return $request->get('data');
    }
}
