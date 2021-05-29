@extends('layouts.admin.auth')

@section('title', 'Login Page')

@section('content')
<div class="card card-pages shadow-none">

    <div class="card-body">
        <div class="text-center m-t-0 m-b-15">
            <a href="{{ route('login') }}" class="logo logo-admin"><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="24"></a>
        </div>
        <h5 class="font-18 text-center">Admin Perpustakaan</h5>

        @if (Session::has('error'))
        <div class="alert alert-danger">
            <i class="fas fa-fw fa-exclamation-triangle"></i> {{ Session::get('error') }}
        </div>
        @endif

        <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <div class="col-12">
                    <label>Username</label>
                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Username">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label>Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group text-center m-t-20">
                <div class="col-12">
                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

@push('scripts')
<script>
    window.setTimeout(function () {
        $('.invalid-feedback').fadeOut(500, 0).slideUp(500, function () {
            $(this).remove()
        });
        
        $('.alert-danger').fadeOut(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 3000);
</script>
@endpush