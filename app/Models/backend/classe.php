<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classe extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $fillable=['name','grade_id'];

    public function grade()
    {
        return $this->belongsTo(grade::class,'grade_id');
    }
}
