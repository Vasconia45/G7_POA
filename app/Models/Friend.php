<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'requester_id',
        'friend_id',
        'isFriend'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'user_id');
    }
}
