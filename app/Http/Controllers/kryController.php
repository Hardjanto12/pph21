<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\asr;
use App\Models\kry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class kryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $request->session()->get('chuser');

        $katakunci = $request->katakunci;
        if (strlen($katakunci)) {
            $data = kry::where('kry', 'like', "%$katakunci%")
                ->orWhere('nik', 'like', "%$katakunci%")
                ->orWhere('dvs', 'like', "%$katakunci%")
                ->orWhere('jbt', 'like', "%$katakunci%")
                ->orWhere('asr', 'like', "%$katakunci%")
                ->get();
        } else {
            $data = kry::orderBy('kry', 'asc')->get();
        }
        return view('kry.index')->with(['data' => $data, 'title' => 'Karyawan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kry.create')->with('title', 'Tambah Karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('kry', $request->kry);
        Session::flash('nik', $request->nik);
        Session::flash('dvs', $request->dvs);
        Session::flash('jbt', $request->jbt);
        Session::flash('asr', $request->asr);
        $chtime = Carbon::now()->toDateTimeString();
        $chuser = Auth::user()->muserName;
        $request->validate([
            'kry' => 'required|unique:kry,kry',
            'nik' => 'required',
            'dvs' => 'required',
            'asr' => 'required',
            'jbt' => 'required'
        ], [
            'kry.required' => 'Kode wajib diisi!',
            'nik.required' => 'NIK wajib diisi!',
            'dvs.required' => 'Divisi wajib diisi!',
            'asr.required' => 'Asuransi wajib diisi!',
            'jbt.required' => 'Jabatan wajib diisi!',
            'kry.unique' => 'Kode sudah ada dalam database!',
        ]);
        $data = [
            'kry' => $request->kry,
            'nik' => $request->nik,
            'dvs' => $request->dvs,
            'asr' => $request->asr,
            'jbt' => $request->jbt,
            'chtime' => $chtime,
            'chuser' => $chuser
        ];
        kry::create($data);
        return redirect()->to('kry')->with(['success' => 'Berhasil menambahkan data!', 'title' => 'Karyawan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kry  $kry
     * @return \Illuminate\Http\Response
     */
    public function show(kry $kry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kry  $kry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kry::where('kry', $id)->first();
        return view('kry.edit')->with(['data' => $data, 'title' => 'Karyawan']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kry  $kry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'dvs' => 'required',
            'asr' => 'required',
            'jbt' => 'required'
        ], [
            'nik.required' => 'NIK wajib diisi!',
            'dvs.required' => 'dvs wajib diisi!',
            'jbt.required' => 'jbt wajib diisi!',
            'asr.required' => 'asr wajib diisi!',
        ]);
        $datakry = [
            'nik' => $request->nik,
            'dvs' => $request->dvs,
            'asr' => $request->asr,
            'jbt' => $request->jbt,
        ];
        kry::where('kry', $id)->update($datakry);
        return redirect()->to('kry')->with(['success' => 'Berhasil melakukan update data!', 'title' => 'Karyawan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kry  $kry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kry::where('kry', $id)->delete();
        return redirect()->to('kry')->with(['success' => 'Berhasil menghapus data!', 'title' => 'Karyawan']);
    }
}