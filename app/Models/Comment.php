<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'shout_id'
    ];

    protected $touches = [
        'shout'
    ];

    public function shout(){
        return $this->belongsTo(Shout::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
