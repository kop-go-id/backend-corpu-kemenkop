<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }


    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id', 'course_category_id');
    }

    public function topics()
    {
        return $this->hasMany(CourseTopic::class, 'course_id', 'course_id');
    }
}
