<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContracts
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content', 'smallDesc'];
    protected $fillable = ['id', 'category_id', 'image', 'created_at', 'updated_at', 'deleted_at'];
}
