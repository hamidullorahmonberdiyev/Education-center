<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public $fillable = [
        'category_id',
        'title',
        'short_content',
        'content',
        'photo',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
