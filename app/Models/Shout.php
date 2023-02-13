<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shout extends Model
{
    use HasFactory;

    protected $table = 'shouts';

    protected $fillable = [
        'shout',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function plus(){
        return $this->hasMany(Plus::class);
    }
}
