<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts=Profile::all()->sortByDesc('edited_at');
        
        if(count($posts)>0){
            $headline=$posts->shift();
        } else{
            $headline=null;
        }
        return view('profile.index',['headline'=>$headline,'posts'=>$posts]);
    }
}
