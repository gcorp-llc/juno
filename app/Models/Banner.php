<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title'];
    protected $fillable=['title'
        ,'fa_pc_cover','fa_mb_cover'
        ,'en_pc_cover','en_mb_cover'
        ,'ar_pc_cover','ar_mb_cover'];

}
