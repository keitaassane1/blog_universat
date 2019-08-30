@if (session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Info! :</strong> {{  Session::get('success') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger" role="alert">
            <strong>Oups! :</strong> {{  Session::get('danger') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning" role="alert">
            <strong>Attention ! :</strong> {{  Session::get('warning') }}
    </div>
@endif
