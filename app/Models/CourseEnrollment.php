<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CourseEnrollment extends Model
{
    protected $table = 'enrollments';

    protected $primaryKey = 'enrollment_id';

    protected $fillable = [
        'user_id',
        'status',
        'course_id',
        'source'
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

}
