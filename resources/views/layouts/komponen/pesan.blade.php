{{-- pesan sukses --}}
@if (Session::has('success'))
<div class="pt-3">
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
</div>
@endif

{{-- pesan error login --}}
@if (Session::has('loginError'))
<div class="pt-3">
    <div class="alert alert-danger">
        {{ Session::get('loginError') }}
    </div>
</div>
@endif

{{-- pesan error--> --}}
@if($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
