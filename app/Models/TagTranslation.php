<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;

class TagTranslation extends Model implements TranslatableContracts
{
    use HasFactory, Translatable;

    public $timestamps = false;
    protected $fillable = ['id', 'tag_id', 'locale', 'title']
}
