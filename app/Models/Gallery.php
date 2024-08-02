<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title','info'];
    protected $fillable=['title','info','fa_cover','fa_video',
    'en_cover','en_video','ar_cover','ar_video'];
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
