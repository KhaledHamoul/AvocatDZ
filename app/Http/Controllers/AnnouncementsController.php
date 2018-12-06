<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementsController extends Controller
{
    public function index(){
        $articles = Announcement::where('id','>','0')->paginate(3);
        return view('Blog.blog')->with('articles',$articles);
    }

    public function single($slug){
        $article = Announcement::where('slug',$slug)->first();
        return view('Blog.blog_single')->with('article',$article);
    }
}
