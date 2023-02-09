@extends('layouts.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('kry/' .$data->kry) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('kry') }}" class="btn btn-secondary">< Kembali</a>
        <div class="mb-3 row">
            <label for="kry" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kry' value="{{ $data->kry }}" id="kry" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nik' value="{{ trim($data->nik) }}" id="nik">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dvs" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='dvs' value="{{ trim($data->dvs) }}" id="dvs">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jbt" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jbt' value="{{ trim($data->jbt) }}" id="jbt">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="asr" class="col-sm-2 col-form-label">Asuransi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='asr' value="{{ trim($data->asr) }}" id="asr">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
@endsection
<!-- AKHIR FORM -->
