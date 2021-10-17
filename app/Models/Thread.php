<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'body',
        'user_id'
    ];

    protected $table = "threads";

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
