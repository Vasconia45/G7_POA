<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'description',
        'media_type',
        'title',
        'media_file',
        'media_date'
    ];

    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'user_id');
    }

    public function categorys()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
