@extends('layouts.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('kry/' .$data->kry) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="mb-2 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('kry') }}" class="btn btn-secondary mb-2">Kembali</a>
        <div class="mb-3 row">
            <label for="kry" class="col-sm-2 col-form-label form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kry' value="{{ trim($data->kry) }}" id="kry" placeholder="Kode" aria-label="Kode" aria-describedby="kode" @error('kry') is-invalid @enderror
                    required disabled>
                <div class="invalid-feedback">
                    Kode tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nik' value="{{ trim($data->nik) }}" id="nik"
                    placeholder="NIK" aria-label="NIK" aria-describedby="nik" @error('nik') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    NIK tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="name"
                    name="name" value="{{ trim($data->name) }}" id="name" @error('name') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    Nama tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat"
                    aria-describedby="alamat" name="alamat" value="{{ trim($data->alamat) }}" id="alamat"
                    @error('alamat') is-invalid @enderror required>
                <div class="invalid-feedback">
                    Alamat tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Kota" aria-label="Kota" aria-describedby="kota"
                    name="kota" value="{{ trim($data->kota) }}" id="kota" @error('kota') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    Kota tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kel" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Kelurahan" aria-label="Kelurahan" aria-describedby="kel"
                    name="kel" value="{{ trim($data->kel) }}" id="kel" @error('kel') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    Kelurahan tidak boleh kosong.
                </div>
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Kec" aria-label="Kec" aria-describedby="kec"
                    name="kec" value="{{ trim($data->kec) }}" id="kec" @error('kec') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    Kecamatan tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="prop" class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Provinsi" aria-label="Provinsi" aria-describedby="prop"
                    name="prop" value="{{ trim($data->prop) }}" id="prop" @error('prop') is-invalid @enderror
                    required>
                <div class="invalid-feedback">
                    Provinsi tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="telp" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Telepon" aria-label="Telepon"
                    aria-describedby="telp" name="telp" value="{{ trim($data->telp) }}" id="telp" @error('telp')
                    is-invalid @enderror required>
                <div class="invalid-feedback">
                    Telepon tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-select" name="gender" id="gender" value="{{ Session::get('gender') }}">
                    <option {{ trim($data->gender) == '' ? 'selected' : '' }}>Pilih</option>
                    <option value="M" {{ trim($data->gender) == 'M' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="F" {{ trim($data->gender) == 'F' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="awal" class="col-sm-2 col-form-label">Tanggal Awal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='awal' value="{{ trim($data->awal) }}" id="awal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='akhir' value="{{ trim($data->akhir) }}" id="akhir">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="dvs" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Divisi" aria-label="Divisi"
                        aria-describedby="divisi" name="dvs" value="{{ trim($data->dvs) }}" id="inputdvs" @error('dvs')
                        is-invalid @enderror required>
                        <button class="btn btn-outline-primary" onclick="dvsFunction()" type="button" id="btndvs">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    Divisi tidak boleh kosong.
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jbt" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Jabatan" aria-label="Jabatan"
                        aria-describedby="jabatan" name="jbt" value="{{ trim($data->jbt) }}" id="inputjbt" @error('jbt')
                        is-invalid @enderror required>
                    <button class="btn btn-outline-primary" onclick="jbtFunction()" type="button" id="btnjbt">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    Jabatan tidak boleh kosong.
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="asr" class="col-sm-2 col-form-label">Asuransi</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Asuransi" aria-label="Asuransi"
                        aria-describedby="asuransi" name="asr" value="{{ trim($data->asr) }}" id="inputasr" @error('asr')
                        is-invalid @enderror required>
                    <button class="btn btn-outline-primary" onclick="asrFunction()" type="button" id="btnasr">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    Asuransi tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="ptkp" class="col-sm-2 col-form-label">PTKP</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="PTKP" aria-label="PTKP"
                        aria-describedby="ptkp" name="ptkp" value="{{ trim($data->ptkp) }}" id="inputptkp" @error('ptkp')
                        is-invalid @enderror required>
                    <button class="btn btn-outline-primary" onclick="ptkpFunction()" type="button" id="btnptkp">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    PTKP tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="cbg" class="col-sm-2 col-form-label">Cabang</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cabang" aria-label="Cabang"
                        aria-describedby="cbg" name="cbg" value="{{ trim($data->cbg) }}" id="inputcbg" @error('cbg')
                        is-invalid @enderror required>
                    <button class="btn btn-outline-primary" onclick="cbgFunction()" type="button" id="btncbg">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    Cabang tidak boleh kosong.
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bpjs" class="col-sm-2 col-form-label">BPJS</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="BPJS" aria-label="BPJS"
                        aria-describedby="bpjs" name="bpjs" value="{{ trim($data->bpjs) }}" id="inputbpjs" @error('bpjs')
                        is-invalid @enderror required>
                    <button class="btn btn-outline-primary" onclick="bpjsFunction()" type="button" id="btnbpjs">Pilih</button>
                </div>
                <div class="invalid-feedback">
                    BPJS tidak boleh kosong.
                </div>
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
