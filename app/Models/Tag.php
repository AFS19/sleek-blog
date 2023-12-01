<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContracts
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at'];
    
}
