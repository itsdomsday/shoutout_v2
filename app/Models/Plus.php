<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plus extends Model
{
    use HasFactory;

    protected $table = 'pluses';

    protected $fillable = [
        'plus',
        'user_id',
        'shout_id'
    ];

    public function shout(){
        return $this->belongsTo(Shout::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
