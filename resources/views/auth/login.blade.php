@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <h5 class="text-center">ログイン画面</h5>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <h6>メールアドレス</h6>
                            <input
                                id="email"
                                type="email"
                                class="form-control"
                                name="email" value="{{ old('email') }}"
                                required autocomplete="email" autofocus
                            >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-6 offset-md-3">
                            <h6>パスワード</h6>
                            <input
                                id="password"
                                type="password"
                                class="form-control"
                                name="password"
                                required autocomplete="current-password"
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group justify-content-center">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('ログイン') }}
                            </button>
                        </div>

                        <div class="text-center">
                            <a class="btn btn-link mt-4" href="{{ route('register') }}">
                                {{ __('まだ登録がお済でない方はこちら') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
