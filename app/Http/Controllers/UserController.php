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


class UserController extends Controller
{
    public function index($id){
        $user = User::find($id);

        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalQuestion = Question::where('user_id',$id)->count('user_id');
        $totalArticle = Article::where('user_id',$id)->count('user_id');
        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.user',compact('totalQuestion','totalArticle','poin','user','answered'));
    }

    public function indexQuestion($id){
        $user = User::find($id);

        $questions = Question::where('user_id',$id)->get();
        
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalQuestion = Question::where('user_id',$id)->count('user_id');
        $totalArticle = Article::where('user_id',$id)->count('user_id');
        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.userquestion',compact('questions','totalArticle','totalQuestion','poin','user','answered'));
    }

    public function indexArticle($id){
        $user = User::find($id);

        $articles = Article::where('user_id',$id)->get();
        
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalArticle = Article::where('user_id',$id)->count('user_id');

        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.userarticle',compact('articles','totalArticle','poin','user','answered'));
    }

    public function destroy($id, $quest_id){
        Question::destroy($quest_id);
        return redirect(route('listQ',['id' => $id, 'quest_id' => $quest_id]));
    }

}
