<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasUuids;

    protected $primaryKey = 'village_id';
    protected $table = 'villages';
    protected $fillable = [
        'name',
        'code',
        'subdistrict_code',
        'total_u17',
        'male_u17',
        'female_u17',
        'total_a17',
        'male_a17',
        'female_a17',
        'type',
        'village_fund'
    ];

    public function subdistrict()
    {
        return $this->belongsTo(Subdistrict::class, 'subdistrict_code', 'subdistrict_id');
    }
}
