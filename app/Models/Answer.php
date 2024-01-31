<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";
    protected $guarded = [];

    public function question(){
        return $this->belongsTo('App\Models\Question','question_id');   
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}