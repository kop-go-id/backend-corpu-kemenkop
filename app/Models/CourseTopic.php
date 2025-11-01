<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTopic extends Model
{
    protected $table = 'course_topics';
    protected $primaryKey = 'course_topic_id';
    protected $fillable = [
        'course_id',
        'name',
        'sequence',
        'description',
        'duration_minutes',
        'created_at',
        'updated_at',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }
}
