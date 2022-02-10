<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'transmitter_id',
        'receiver_id',
        'message'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'id');
    }
}
