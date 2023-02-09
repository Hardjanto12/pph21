@extends('layouts.template')
@section('konten')
    <main>
        <div class="col-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ $auth }}</strong>
                <strong><br>{{ $status }}</strong>
                <strong><br>
                    @auth
                    login sukses
                    selamat datang
                    {{ $userID }}
                    @endauth
                </strong>
            </div>
            </strong>
        </div>
        <script>
            var alertList = document.querySelectorAll('.alert');
          alertList.forEach(function (alert) {
            new bootstrap.Alert(alert)
          })
        </script>

    </main>
@endsection
