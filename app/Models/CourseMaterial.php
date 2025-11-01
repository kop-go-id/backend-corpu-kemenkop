<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CourseMaterial extends Model
{
    protected $table = 'course_materials';
    protected $primaryKey = 'course_material_id';
    protected $fillable = [
        'course_topic_id',
        'name',
        'sequence',
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

    public function topic()
    {
        return $this->belongsTo(CourseTopic::class, 'course_topic_id', 'course_topic_id');
    }
}
