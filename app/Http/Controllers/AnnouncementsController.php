<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Category;
use App\Professionnel;

class AnnouncementsController extends Controller
{
    public function index(){
        $categories = Category::all();
        $articles = Announcement::where('id','>','0')->paginate(3);
        $recent_articles = Announcement::orderBy('id','desc')->take(3)->get();
        return view('Blog.blog',['articles'=> $articles , 'categories' => $categories, 'recent_articles' => $recent_articles]);
    }

    public function single($slug){
        $article = Announcement::where('slug',$slug)->first();
        $professionnel = Professionnel::where('user_id',$article->author->id)->first();
        return view('Blog.blog_single',['article'=> $article , 'pro_id' => $professionnel->id ]);
    }
}
