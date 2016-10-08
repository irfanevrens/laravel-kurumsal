<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Post;
use App\Logo;
use App\Page;
use App\Umut\Page as iPAge;
use App\Social;
use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
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
        $page->setCopyright('Copyrights © All Rights Reserved by Umut Yerebakmaz');
        $page->setPosts(Post::where('published_at', '<=', Carbon::now())->Where('status', '=', 1)->orderBy('created_at', 'desc')->paginate(5));
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.blog.index', compact('page'));
    }

    public function showPost($slug)
    {
        $page = new iPage;
        $page->setTitle(Post::whereSlug($slug)->firstOrFail()->title);
        $page->setDescription(Post::whereSlug($slug)->firstOrFail()->title);
        $page->setKeywords(Post::whereSlug($slug)->firstOrFail()->title);
        $page->setAuthor('Umut Yerebakmaz');
        $page->setLogo(Logo::find(1)->file_path);
        $page->setLogoName(Logo::find(1)->file_name);
        $page->setCopyright('Copyrights © All Rights Reserved by Umut Yerebakmaz');
        $post = Post::whereSlug($slug)->firstOrFail();
        $page->setPost($post);
        $page->setSocials(Social::orderBy('order_id','ASC')->get());
        return view('frontend.blog.post', compact('page'));

    }
}