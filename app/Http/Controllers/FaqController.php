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

class FaqController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::id())->first();

        return view('content.faq',compact('user'));
    }
}
