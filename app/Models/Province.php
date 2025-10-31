<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'province_id';
    protected $table = 'provinces';
    protected $fillable = [
        'name',
        'code',
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'province_code', 'code');
    }

    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class, 'province_code', 'code');
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'province_code', 'code');
    }
}
