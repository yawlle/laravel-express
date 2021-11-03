<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','content'];

    public function comments()
    {

        return $this->hasMany('App\Models\Comment');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'posts_tags');
    }
    
    //ter get e Attribute é obrigatório nesse método
    public function getTagListAttribute()
    {
        $tags = $this->tags()->pluck('name')->all();
        //dd($tags);
        return implode(', ', $tags);
    }
}
