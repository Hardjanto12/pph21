@extends('layouts.template')
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='{{ url('ptkp/create') }}' class="btn btn-md btn-primary">
                        <i class="fa-solid fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="col-6">

            </div>
            <div class="col-4">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <form class="d-flex" action="{{ url('ptkp') }}" method="get">
                        <input class="form-control me-1" type="search" name="katakunci"
                            value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                            aria-label="Search">
                        <button class="btn btn-md btn-secondary" type="submit">Cari</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <table class="table table-bordered table-striped table-hover table-small text-center" >
        <thead class="table-dark">
            <tr>
                <th class="col-md-1">No.</th>
                <th class="col-md-1">Kode</th>
                <th class="col-md-2">Nama</th>
                <th class="col-md-2">Nilai Awal</th>
                <th class="col-md-2">Nilai Akhir</th>
                <th class="col-md-2">Status</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->ptkp }}</td>
                <td>{{ $item->name }}</td>
                <td>@rupiah($item->val)</td>
                <td>@rupiah($item->val2)</td>
                <td>
                    @if($item->grup == 1)
                    Tetap
                    @elseif($item->grup == 2)
                    Tidak tetap
                    @endif
                </td>
                <td>
                    <a href='{{ url('ptkp/'.trim($item->ptkp).'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('ptkp/'.$item->ptkp) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $data->links() !!}
        </div>
</div>
@endsection
<!-- AKHIR DATA -->
