{{-- sidebar start --}}
<div class="sidebar">
    <div class="list-group list-group-flush my-3">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="true">
                    <i class="fa-solid fa-briefcase"></i>&ThinSpace; Master
                </button>
                <div class="collapse show" id="master-collapse">
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
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="true">
                    <i class="fa-solid fa-circle-user"></i>&ThinSpace; User
                </button>
                <div class="collapse show" id="user-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li>
                            <a href="{{ url('changepassword') }}" class="link-dark d-inline-flex text-decoration-none  align-items-center rounded">
                                <i class="fa-solid fa-key"></i>&ThinSpace; Ganti Password
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}" class="link-dark d-inline-flex text-decoration-none rounded align-items-center">
                                <i class="fa-solid fa-right-from-bracket"></i>&ThinSpace; Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>
{{-- sidebar end --}}
