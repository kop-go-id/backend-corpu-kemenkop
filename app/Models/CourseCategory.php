<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'course_categories';
    protected $primaryKey = 'course_category_id';
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];
}
