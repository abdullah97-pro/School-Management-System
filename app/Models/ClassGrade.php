<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassGrade extends Model
{
    //
    protected $fillable = [
        'c_category_id',
        'name'  
    ];

    public function classCategory()
    {
        return $this->belongsTo(ClassCategory::class,'c_category_id');
    }

}
