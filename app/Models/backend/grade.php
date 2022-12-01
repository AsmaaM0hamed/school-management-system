<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class grade extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $fillable=['name','nots'];

    public function sections()
    {
        return $this->hasMany(section::class);
    }
    public function classes()
    {
        return $this->hasMany(classe::class);
    }
}
