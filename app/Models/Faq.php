<?php

namespace App\Models;

use App\Observers\FaqObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
#[ObservedBy([FaqObserver::class])]
class Faq extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['question','answer'];
    protected $fillable=['question','answer'];
}
