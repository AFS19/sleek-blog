<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;

class SettingTranslation extends Model implements TranslatableContracts
{
    use HasFactory, Translatable;

    public $timestamps = false;
    protected $fillable = ['title', 'content', 'address'];
}
