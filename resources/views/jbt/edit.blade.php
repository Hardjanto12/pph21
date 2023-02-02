@extends('layout.template')
<!-- START FORM -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <form action='{{ url('jbt/' .$data->jbt) }}' method='post'>
        @csrf
        @method('PUT')
        <a href="{{ url('jbt') }}" class="btn btn-secondary">
            < Kembali </a>

                <div class="mb-3 row">
                    <label for="jbt" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='jbt' value="{{ $data->jbt }}" id="jbt" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='name' value="{{ $data->name }}" id="name">
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
