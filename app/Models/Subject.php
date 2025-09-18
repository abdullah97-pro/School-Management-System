<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $fillable = [
        'c_category_id',
        'c_grade_id',
        'name'  
    ];
}
