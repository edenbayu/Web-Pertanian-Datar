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

class TagController extends Controller
{
    public function index(){
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->groupBy('user_id')->orderBy('user_id','DESC')->get();

        $users = User::orderBy('id','DESC')->get();

        $tags = Tag::orderBy('id','DESC')->get();

   

        // dd($questions);
        return view('content.tags', compact('tags','users','poin'));
    }
}
