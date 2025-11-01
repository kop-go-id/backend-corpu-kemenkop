<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseMaterialAttachment extends Model
{
    protected $table = 'course_material_attachments';
    protected $primaryKey = 'course_material_attachment_id';
    protected $fillable = [
        'course_material_id',
        'source_file',
        'source_type',
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

    public function material()
    {
        return $this->belongsTo(CourseMaterial::class, 'course_material_id', 'course_material_id');
    }
}
