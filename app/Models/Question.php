<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','tag_has_questions','question_id','tag_id');
    }
}
