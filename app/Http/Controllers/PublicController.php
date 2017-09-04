<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
#Util
use Validator;
#Models
use App\Blog;
use App\BlogTag;
use App\Mail;
use App\MailTemplate;
use App\Tag;
use App\User;

class PublicController extends Controller
{
    public function index(){
        return view('public.index');
    }

    public function blogs(){
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('public.blogs')->with('blogs', $blogs)->with('tags', $this->getTags());
    }

    public function blog($query){
        $blog = Blog::where('url', $query)->first();
        return view('public.blog')->with('blog', $blog)->with('tags', $this->getTags());
    }

    public function searchBlog() {
        $blogs = Blog::where('title', 'LIKE', '%' . Input::get('searchQuery') . '%')->get();
        if (count($blogs) == 0) {
            $Response = array('success' => 0);
        } else {
            $Response = array('success' => 1, 'data' => $blogs, 'count' => count($blogs));
        }
        return $Response;
    }

    public function tag($query){
        $tag = Tag::where('title', $query)->first();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('public.tag')->with('blogs', $blogs)->with('tag', $tag)->with('tags', $this->getTags());
    }

    public function tagAbout($query){
        $tag = Tag::where('title', $query)->first();
        return view('public.tag-about')->with('tag', $tag)->with('tags', $this->getTags());
    }

    public function getTags(){
        return Tag::where('status', 1)->get();
    }

    public function contact(){
        return view('public.contact');
    }

    public function contactSA(){
        $mailData = Input::all();
        $mailData['read'] = 8;
        $validation = Validator::make($mailData, Mail::$mailData);
        if ($validation->passes()){
            $create = Mail::create($mailData);
            $Response = array('success' => '1', 'id' => $create->id);
        }
        else{
            $Response = array('success' => '0', 'error' => $validation->messages());
        }
        return $Response;
    }public function admin(){
        return view('admin.index');
    }
}