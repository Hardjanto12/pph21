@extends('layouts.template')
<!-- START FORM -->
@section('konten')
<div class="mb-2 p-3 bg-body rounded shadow-sm">
    <form action='{{ url('ptkp') }}' method='post'>
        @csrf
        <a href="{{ url('ptkp') }}" class="btn btn-secondary mb-2">
            Kembali </a>
        <div class="mb-2 row">
            <label for="ptkp" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ptkp' value="{{ Session::get('ptkp') }}" id="ptkp"
                    maxlength="15">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{ Session::get('name') }}" id="name"
                    maxlength="100">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="val" class="col-sm-2 col-form-label">Nilai Awal</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='val' value="{{ Session::get('val') }}" id="val"
                    maxlength="18">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="val2" class="col-sm-2 col-form-label">Nilai Akhir</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='val2' value="{{ Session::get('val2') }}" id="val2"
                    maxlength="18">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="awal" class="col-sm-2 col-form-label">Tanggal Awal</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" name='awal' value="{{ Session::get('awal') }}" id="awal">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="akhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" name='akhir' value="{{ Session::get('akhir') }}" id="akhir">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="grup" class="col-sm-2 col-form-label">Grup</label>
            <div class="col-sm-2">
                <select class="form-select" name="grup" id="grup" value="{{ Session::get('grup') }}">
                    <option selected>Pilih</option>
                    <option value="1">Tetap</option>
                    <option value="2">Tidak tetap</option>
                </select>
            </div>
        </div>
        <div class="mb-2 row">
            <label for="stt" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='stt' value="{{ Session::get('stt') }}" id="stt"
                    maxlength="10">
            </div>
        </div>
        <div class="mb-2 row">
            <label for="tanggungan" class="col-sm-2 col-form-label">Tanggungan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='tanggungan' value="{{ Session::get('tanggungan') }}" id="tanggungan"
                    >
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </form>
</div>
@endsection
<!-- AKHIR FORM -->