<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    /**
     * The users that belong to the role.
     */
    protected $fillable = [
        'correct',
        'question',
        'answera',
        'answerb',
        'answerc',
        'answerd',

    ];
    public function Users()
    {
        return $this->belongsToMany(User::class, 'users');
    }

}
