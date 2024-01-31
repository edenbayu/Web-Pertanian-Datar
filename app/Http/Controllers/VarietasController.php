<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Varietas;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Tag_has_question;
use DB;
use Auth;

class VarietasController extends Controller
{
    public function index()
    {
    $user = User::where('id', Auth::id())->first();
    $varietas = Varietas::paginate(4); // Change 4 to the number of varietas per page

    return view('content.varietas', compact('varietas', 'user'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $varietas = Varietas::where('name', 'LIKE', "%$query%")
                          ->orWhere('description', 'LIKE', "%$query%")
                          ->paginate(4); // You can adjust the pagination limit

        return view('content.varietas', compact('varietas', 'query'));
    }

}