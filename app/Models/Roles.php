<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'permission',
    ];
    public function Users()
    {
        return $this->belongsToMany(User::class, 'users');
    }
}
