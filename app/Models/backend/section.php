<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class section extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['section_name'];
    protected $fillable=['section_name','classe_id','grade_id'];

    public function grade()
    {
        return $this->belongsTo(grade::class,'grade_id');
    }
    public function classe()
    {
        return $this->belongsTo(classe::class,'classe_id');
    }

}
