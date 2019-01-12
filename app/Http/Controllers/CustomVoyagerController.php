<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 
use App\Announcement;
class CustomVoyagerController extends Controller
{
    public function storeAnnouncement(Request $request){
        if (!$request->ajax()) {
            $img = $request->img;
            $main_image = '';
            if($img != null)
                $main_image = Storage::putFile('announcements', $img);
            $announcement = Announcement::create([
                'title' => $request->title,
                'content' => $request->content,
                'img' => $main_image,
                'slug' => str_slug($request->title),
                'category_id' => $request->category_id,
                'author_id' => Auth::id(),
                'by_admin' => 1,
                'validate' => 1
            ]);
            return redirect()->route('voyager.announcements.index');
        }
        return redirect()->back();
    }


    public function updateAnnoucement(Request $request,$announcement){
        if (!$request->ajax()) {
            $myannouncement = Product::where('id',$announcement)->first();
            $img = $request->img;
            $main_image = $myannouncement->img;
            if($img != null)
                $main_image = Storage::putFile('announcements', $img);
            $myannouncement->title = $request->title;
            $myannouncement->content = $request->content;
            $myannouncement->img = $main_image;
            $myannouncement->slug = str_slug($request->title);
            $myannouncement->disponibility = $request->disponibility;
            $myannouncement->category_id = $request->category_id;
            $myannouncement->update();
            return redirect()->route('voyager.announcements.index');
        }
        return redirect()->back();
    }
}