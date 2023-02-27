<?php

namespace App\Http\Controllers;

use App\Models\asr;
use App\Models\cbg;
use App\Models\dvs;
use App\Models\jbt;
use App\Models\ktg;
use App\Models\bpjs;
use App\Models\ptkp;
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
            $data = dvs::orderBy('dvs', 'asc')->cursorPaginate(10);
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
            $data = jbt::orderBy('jbt', 'asc')->cursorPaginate(10);
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
            $data = asr::orderBy('asr', 'asc')->cursorPaginate(10);
        }
        return view('asr.select')->with(['data' => $data, 'title' => 'Pilih Asuransi']);
    }

    public function selectktg()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = ktg::where('ktg', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = ktg::orderBy('ktg', 'asc')->cursorPaginate(10);
        }
        return view('ktg.select')->with(['data' => $data, 'title' => 'Pilih Kategori Penghasilan']);
    }

    public function selectptkp()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = ptkp::where('ptkp', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = ptkp::orderBy('ptkp', 'asc')->cursorPaginate(10);
        }
        return view('ptkp.select')->with(['data' => $data, 'title' => 'Pilih PTKP']);
    }

    public function selectcbg()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = cbg::where('cbg', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = cbg::orderBy('cbg', 'asc')->cursorPaginate(10);
        }
        return view('cbg.select')->with(['data' => $data, 'title' => 'Pilih Cabang']);
    }
    public function selectbpjs()
    {
        $katakunci = request()->katakunci;
        if (strlen($katakunci)) {
            $data = bpjs::where('bpjs', 'like', "%$katakunci%")
                ->orWhere('name', 'like', "%$katakunci%")
                ->cursorPaginate(10);
        } else {
            $data = bpjs::orderBy('bpjs', 'asc')->cursorPaginate(10);
        }
        return view('bpjs.select')->with(['data' => $data, 'title' => 'Pilih BPJS']);
    }
}
