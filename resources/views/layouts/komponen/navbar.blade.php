{{-- navbar start --}}
<nav class="navbar navbar-expand-lg navbar-light py-3 px-3 text-light">
    <div class="container-fluid">
        <div class="me-auto d-inline-flex align-items-center">
            <i class="fas fa-solid fa-cube primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Entertech</h2>
        </div>
        {{-- <div class="mx-2"><a href="/login">Login</a></div> --}}
        <div class="mx-2 d-flex align-items-center">
            @auth
            <a href="/logout" class="text-decoration-none">
                <i class="fas fa-light fa-arrow-right-from-bracket"></i> Logout
            </a>
            @endauth
        </div>
    </div>

</nav>
{{-- navbar end --}}
