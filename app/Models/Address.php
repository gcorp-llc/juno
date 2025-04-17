<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Address extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = [
        'title',
        'address',
        'cover',
        'location', // اگر کد پستی هم دارید
        'saturday', 'start_saturday_time', 'end_saturday_time', // از فرم اصلی
        'sunday', 'start_sunday_time', 'end_sunday_time',     // از فرم اصلی
        'monday', 'start_monday_time', 'end_monday_time',     // از فرم اصلی
        'tuesday', 'start_tuesday_time', 'end_tuesday_time',   // از فرم اصلی
        'wednesday', 'start_wednesday_time', 'end_wednesday_time',// از فرم اصلی
        'thursday', 'start_thursday_time', 'end_thursday_time', // از فرم اصلی
        'friday', 'start_friday_time', 'end_friday_time',   // از فرم اصلی
        'phones', // از فرم اصلی
        'time_delay', // از فرم اصلی
        // سایر فیلدهایی که ممکن است در جدول addresses داشته باشید
    ];
    public $translatable = [
        'title',
        'address',
    ];
}
