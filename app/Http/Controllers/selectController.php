<?php

namespace App\Http\Controllers;

use App\Models\dvs;
use App\Models\asr;
use App\Models\jbt;
use Illuminate\Http\Request;

class selectController extends Controller
{
    public function selectdvs()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = dvs::where('dvs', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = dvs::orderBy('name', 'asc')->cursorPaginate(10);
        }
        return view('dvs.select')->with(['data' => $data, 'title' => 'Pilih Divisi']);
    }

    public function selectjbt()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = jbt::where('jbt', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = jbt::orderBy('name', 'asc')->cursorPaginate(10);
        }
        return view('jbt.select')->with(['data' => $data, 'title' => 'Pilih Jabatan']);
    }

    public function selectasr()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = asr::where('asr', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = asr::orderBy('name', 'asc')->cursorPaginate(10);
        }
        return view('asr.select')->with(['data' => $data, 'title' => 'Pilih Asuransi']);
    }
}
