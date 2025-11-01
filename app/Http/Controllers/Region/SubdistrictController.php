<?php

namespace App\Http\Controllers\Region;

use App\Http\Controllers\Controller;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class SubdistrictController extends Controller
{
    /**
     * Get all district by district_code.
     */
    public function getSubdistrictByProvinceCode($districtCode)
    {
        $districts = Subdistrict::where('district_code', $districtCode)->get();
        return $this->success($districts, 'Berhasil mengambil data kecamatan.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
