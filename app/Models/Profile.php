<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'profile_picture'
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function users()
    {
        return $this->belongsTo(Profile::class);
    }
}
