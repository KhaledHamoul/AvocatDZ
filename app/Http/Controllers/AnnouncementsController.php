<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementsController extends Controller
{
    public function index(){
        $announcements = Announcement::where('id','>','0')->paginate(3);
        return view('contents/blog_content')->with('announcements',$announcements);
    }

    public function single($slug){
        $announcement = Announcement::where('slug',$slug)->first();
        return view('contents/blog_content_single')->with('announcement',$announcement);
    }
}
