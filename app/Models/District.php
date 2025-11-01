<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasUuids;
    protected $primaryKey = 'district_id';
    protected $table = 'districts';
    protected $fillable = [
        'name',
        'code',
        'province_code',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class, 'district_code', 'code');
    }
}
