<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Page;

class AboutController extends Controller
{
    public function index()
    {
        $data = Page::find(2);
        return view('backend.about.index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Page::find($id);
        $data->content = $request->get('content');
        $data->save();

        if($data->save()) {
            return redirect('admin/about');
        }
    }

}
