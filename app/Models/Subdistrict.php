<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasUuids;

    protected $primaryKey = 'subdistrict_id';
    protected $table = 'subdistricts';
    protected $fillable = [
        'name',
        'code',
        'district_code',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_code', 'code');
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'subdistrict_code', 'code');
    }
}
