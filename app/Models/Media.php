<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'profile_id',
        'description',
        'media_type',
        'title',
        'media_file',
        'media_date'
    ];

    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'id');
    }

    public function categorys()
    {
        return $this->belongsTo(Category::class, 'id');
    }
}
