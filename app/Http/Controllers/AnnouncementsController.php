<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Category;
use App\Professionnel;
use App\User;
class AnnouncementsController extends Controller
{
    public function index(){
        $categories = Category::all();
        $articles = Announcement::orderBy('id','desc')->paginate(3);
        $recent_articles = Announcement::orderBy('id','desc')->take(3)->get();
        return view('Blog.blog',['articles'=> $articles , 'categories' => $categories, 'recent_articles' => $recent_articles]);
    }

    public function single($slug){
        $article = Announcement::where('slug',$slug)->first();
        $professionnel = Professionnel::where('user_id',$article->author_id)->first();
        if($professionnel != null){
            return view('Blog.blog_single',['article'=> $article , 'pro_id' => $professionnel->id , 'admin' => null]);
        }
        return view('Blog.blog_single',['article'=> $article , 'pro_id' => null , 'admin' => User::where('id',$article->author_id)->first() ]);
    }

    public function category($category){
        $categories = Category::all();
        $category = Category::where('id', $category)->first();
        $articles = Announcement::where('category_id',$category->id)->orderBy('id','desc')->paginate(3);
        $recent_articles = Announcement::orderBy('id','desc')->take(3)->get();
        return view('Blog.blog',['articles'=> $articles  , 'categories' => $categories, 'recent_articles' => $recent_articles]);
    }

    public function validateAnnouncement(Request $request){
        $article = Announcement::where('id',$request->announcement_id)->first();
        $article->validate = $request->validate;
        $article->update();
        $response = array(
            'validated' => $request->validate,
        );
        return response()->json($response);
    }
}
