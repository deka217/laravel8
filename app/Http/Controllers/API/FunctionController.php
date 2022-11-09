<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;

class FunctionController extends Controller
{
    public function stock()
    {

        $profiles = Profile::get()->toArray();
        return $profiles;

    }

    public function penjualan(Request $request)
    {
        $motors = new Motor();
        $motors->_id = $request->input('_id');
        $motors->mesin     = $request->input('mesin');
        $motors->tipe_suspensi    = $request->input('tipe_suspensi');
        $motors->tipe_transmisi    = $request->input('tipe_transmisi');
        $motors->profileId    = $request->input('profileId');

        $mobils = new Mobil();
        $mobils->_id = $request->input('_id');
        $mobils->mesin     = $request->input('mesin');
        $mobils->kapasitas_penumpang    = $request->input('kapasitas_penumpang');
        $mobils->tipe    = $request->input('tipe');
        $mobils->profileId    = $request->input('profileId');
    }
    
    public function laporan()
    {}
    
}
