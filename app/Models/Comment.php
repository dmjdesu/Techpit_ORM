<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'body',
        'user_id',
	'thread_id'
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
