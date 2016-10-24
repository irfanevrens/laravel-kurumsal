<?php

namespace App\Http\Controllers;

use App\Umut\TeamMemberSocial;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Logo;
use App\Slider;
use App\Page;
use App\Brand;
use App\Galeri;
use App\Contact;
use App\Reference;
use Mail;
use App\Social;
use App\Team;
use App\Umut\Page as iPAge;

class FrontendController extends Controller
{
    public function index()
    {
        $id = 1;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setSlider(Slider::orderBy('order_id','ASC')->get());
        $page->setBrand(Brand::orderBy('order_id','ASC')->get());
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.index', compact('page'));
    }
    public function about()
    {
        $id = 2;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setContent(Page::find($id)->content);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.about', compact('page'));
    }
    public function team()
    {
        $id = 3;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setContent(Page::find($id)->content);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        $page->setTeam(Team::orderBy('order_id','ASC')->get());
        return view('frontend.team', compact('page'));
    }
    public function documents()
    {
        $id = 4;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setContent(Page::find($id)->content);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.documents', compact('page'));
    }
    public function references()
    {
        $id = 5;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setContent(Page::find($id)->content);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.reference', compact('page'));
    }
    public function gallery()
    {
        $id = 6;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setGallery(Galeri::Where('status', '=', 1)->orderBy('id', 'asc')->paginate(5));
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.galeri', compact('page'));
    }
    public function sanaltur()
    {
        $id = 7;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->gallery = Galeri::orderBy('id', 'asc')->paginate(5);
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.galeri', compact('page'));
    }
    public function contact()
    {
        $id = 9;
        $page = new iPage;
        $page->setTitle(Page::find($id)->title);
        $page->setDescription(Page::find($id)->description);
        $page->setKeywords(Page::find($id)->keywords);
        $page->setAuthor(Page::find($id)->author);
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setContact(Contact::find(1));
        $page->setCopyright('Copyrights © 2015 All Rights Reserved by Umut Yerebakmaz');
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.contact', compact('page'));

    }
    public function contactPost (Request $request)
    {
        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'subject' => $request->get('subject'),
            'mesaj' => $request->get('message')
        );

        Mail::send('emails.contactform', $data, function ($message) {
            $message->from('your@domain.com', 'your domain');
            $message->to('umutyerebakmaz@hotmail.com')->subject('subject');
        });
        return "Mesajınız başarıyla gönderildi";
    }
    public function share(){
        return view('frontend.blog.share');
    }
}