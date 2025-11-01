<?php

namespace App\Http\Controllers\Region;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Get all district by province_code.
     */
    public function getDistrictByProvinceCode($provinceCode)
    {
        $districts = District::where('province_code', $provinceCode)->get();
        return $this->success($districts, 'Berhasil mengambil data kabupaten/kota.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
