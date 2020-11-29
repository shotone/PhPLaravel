<?php


namespace App\Models;


class Tag extends Model
{

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
    use HasFactory;

}