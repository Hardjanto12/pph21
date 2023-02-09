{{-- sidebar start --}}
<div class="sidebar">
    <div class="list-group list-group-flush my-3">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#Master-collapse" aria-expanded="true">
                    Master
                </button>
                <div class="collapse show" id="Master-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('dvs') }}"
                                class="link-dark d-inline-flex text-decoration-none rounded">Divisi</a>
                        </li>
                        <li><a href="{{ url('jbt') }}"
                                class="link-dark d-inline-flex text-decoration-none rounded">Jabatan</a>
                        </li>
                        <li><a href="{{ url('asr') }}"
                                class="link-dark d-inline-flex text-decoration-none rounded">Asuransi</a>
                        </li>
                        <li><a href="{{ url('kry') }}"
                                class="link-dark d-inline-flex text-decoration-none rounded">Karyawan</a>
                        </li>
                    </ul>
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="true">
                        User
                    </button>
                    <div class="collapse show" id="user-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ url('home') }}"
                                    class="link-dark d-inline-flex text-decoration-none rounded"> Selamat datang,
                                    <br>{{ Auth::user()->muserName }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
{{-- sidebar end --}}
