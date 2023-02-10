@extends('layouts.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('dvs') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('dvs') }}" class="btn btn-secondary my-3">Kembali</a>
        <div class="mb-3 row">
            <label for="dvs" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='dvs' value="{{ Session::get('dvs') }}" id="dvs" maxlength="15">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{ Session::get('name') }}" id="name" maxlength="100">
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
