<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContracts
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = ['id', 'logo', 'favicon', 'linkedin', 'email', 'instagram', 'created_at', 'updated_at', 'deleted_at'];
}
