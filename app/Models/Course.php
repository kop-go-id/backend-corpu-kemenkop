<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    protected $fillable = [
        'name',
        'course_category_id',
        'description',
        'code_course',
        'thumbnail',
        'level',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id', 'course_category_id');
    }
}
