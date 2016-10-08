<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;

class ContactController extends Controller
{

    public function index()
    {
        $data = Contact::find(1);
        return view ('backend.contact.index')
            ->withData($data);
    }

    public function update(Request $request, $id)
    {

            $data = Contact::find($id);

            $data->title = $request->get('title');
            $data->adress = $request->get('adress');
            $data->telephone = $request->get('telephone');
            $data->fax = $request->get('fax');
            $data->email = $request->get('email');
            $data->latitude = $request->get('latitude');
            $data->longitude = $request->get('longitude');

            $data->save();
            if($data->save()) {
                return redirect('admin/contact');
            }

    }

}
