<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_id',
        'user_id',
        'comment',
        'media_comment_date'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
