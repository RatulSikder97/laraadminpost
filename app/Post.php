<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    //
    protected $casts = [
        'tags'=>'array'
    ];

    public static function getAllPosts(){
        return DB::table('posts')->get();
    }

    // public function tags()
    // {
    //     return $this->hasMany('tags');
    // }
    // public function user()
    // {
    //     return $this->belongsTo('users');
    // }
}
