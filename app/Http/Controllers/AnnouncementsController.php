<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Category;

class AnnouncementsController extends Controller
{
    public function index(){
        $categories = Category::all();
        $articles = Announcement::where('id','>','0')->paginate(3);
        return view('Blog.blog',['articles'=> $articles , 'categories' => $categories]);
    }

    public function single($slug){
        $article = Announcement::where('slug',$slug)->first();
        return view('Blog.blog_single')->with('article',$article);
    }
}
