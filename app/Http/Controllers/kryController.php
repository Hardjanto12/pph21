<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\asr;
use App\Models\dvs;
use App\Models\jbt;
use App\Models\kry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
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
                ->cursorPaginate(10);
        } else {
            $data = kry::orderBy('kry', 'asc')->cursorPaginate(10);
        }

        return view('kry.index')->with([
            'data' => $data,
            'title' => 'Karyawan',
        ]);
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
        // dd($request);
        Session::flash('kry', $request->kry);
        Session::flash('nik', $request->nik);
        Session::flash('name', $request->name);
        Session::flash('alamat', $request->alamat);
        Session::flash('kota', $request->kota);
        Session::flash('telp', $request->name);
        Session::flash('dvs', $request->dvs);
        Session::flash('jbt', $request->jbt);
        Session::flash('asr', $request->asr);
        $chtime = Carbon::now()->toDateTimeString();
        $chuser = Auth::user()->muserName;
        $request->validate([
            'kry' => 'required|unique:kry,kry',
            'nik' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kota' => 'required',
            'dvs' => 'required',
            'asr' => 'required',
            'jbt' => 'required'
        ], [
            'kry.required' => 'Kode wajib diisi!',
            'nik.required' => 'NIK wajib diisi!',
            'name.required' => 'Nama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'kota.required' => 'Kota wajib diisi!',
            'telp.required' => 'No. Telepon wajib diisi!',
            'dvs.required' => 'Divisi wajib diisi!',
            'asr.required' => 'Asuransi wajib diisi!',
            'jbt.required' => 'Jabatan wajib diisi!',
            'kry.unique' => 'Kode sudah ada dalam database!',
        ]);

        $datakry = [
            'kry' => $request->kry,
            'nik' => $request->nik,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'telp' => $request->telp,
            'dvs' => $request->dvs,
            'asr' => $request->asr,
            'jbt' => $request->jbt,
            'chtime' => $chtime,
            'chuser' => $chuser
        ];
        kry::create($datakry);
        return redirect()->to('kry')->with(['success' => 'Berhasil menambahkan data!', 'title' => 'Karyawan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kry  $kry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = kry::where('kry', $id)->first();
        return view('kry.detail')->with('data', $data);
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
            'jbt' => 'required',
            'asr' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telp' => 'required',
        ], [
            'nik.required' => 'NIK wajib diisi!',
            'dvs.required' => 'Divisi wajib diisi!',
            'jbt.required' => 'Jabatan wajib diisi!',
            'asr.required' => 'Asuransi wajib diisi!',
            'name.required' => 'Nama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'kota.required' => 'Kota wajib diisi!',
            'telp.required' => 'Kota wajib diisi!',
        ]);
        $datakry = [
            'nik' => $request->nik,
            'dvs' => $request->dvs,
            'asr' => $request->asr,
            'jbt' => $request->jbt,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'telp' => $request->telp,
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