<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'post',
        'post_date'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'user_id');
    }
}
