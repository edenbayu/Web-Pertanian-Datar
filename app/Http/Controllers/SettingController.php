<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Tag_has_question;
use DB;
use Auth;

class SettingController extends Controller
{
    public function show($id){
        $user = User::find($id);
        
        return view('content.setting',compact('user'));
    }

    public function update($id, Request $request){
        $user = User::where('id',$id)->update([
            "name" => $request["nama"],
            "username" => $request["username"]
        ]);

        return redirect('/community');
    }

}
