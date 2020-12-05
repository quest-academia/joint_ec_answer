@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <h5>お客様情報登録</h5>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h6>氏名</h6>
                    <div class="form-group row">
                        <label for="last_name" class="col-md-1 col-form-label text-md-right">{{ __('姓') }}</label>
                        <div class="col-md-5">
                            <input
                                id="last_name"
                                type="text"
                                class="form-control"
                                name="last_name" value="{{ old('last_name') }}"
                                required autocomplete="last_name"autofocus
                            >
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <label for="first_name" class="col-md-1 col-form-label text-md-right">{{ __('名') }}</label>
                        <div class="col-md-5">
                            <input
                                id="first_name"
                                type="text"
                                class="form-control"
                                name="first_name" value="{{ old('first_name') }}"
                                required autocomplete="first_name" autofocus
                            >
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="zipcode" class="col-form-label text-md-right">{{ __('郵便番号') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="zipcode"
                                type="text"
                                class="form-control"
                                name="zipcode" value="{{ old('zipcode') }}"
                                required autocomplete="zipcode" autofocus
                            >
                            @error('zipcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h6>住所</h6>
                    <div class="form-group row">
                        <label for="prefecture" class="col-md-2 col-form-label text-md-right">{{ __('都道府県') }}</label>
                        <div class="col-md-7">
                            <input
                                id="prefecture"
                                type="text"
                                class="form-control"
                                name="prefecture" value="{{ old('prefecture') }}"
                                required autocomplete="prefecture" autofocus
                            >
                            @error('prefecture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="municipality" class="col-md-2 col-form-label text-md-right">{{ __('市町村区') }}</label>
                        <div class="col-md-7">
                            <input
                                id="municipality"
                                type="text"
                                class="form-control"
                                name="municipality" value="{{ old('municipality') }}"
                                required autocomplete="municipality" autofocus
                            >
                            @error('municipality')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label text-md-right">{{ __('番地') }}</label>
                        <div class="col-md-7">
                            <input
                                id="address"
                                type="text" class="form-control"
                                name="address" value="{{ old('address') }}"
                                required autocomplete="address" autofocus
                            >
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="apartments" class="col-form-label text-md-right">{{ __('マンション・部屋番号') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="apartments"
                                type="text"
                                class="form-control"
                                name="apartments" value="{{ old('apartments') }}"
                                autocomplete="apartments" autofocus
                            >
                            @error('apartments')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="email" class="col-form-label text-md-right h5">{{ __('メールアドレス') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="email"
                                type="email"
                                class="form-control"
                                name="email" value="{{ old('email') }}"
                                required autocomplete="email"
                            >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="phone_number" class="col-form-label text-md-right">{{ __('電話番号') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="phone_number"
                                type="phone_number"
                                class="form-control"
                                name="phone_number" value="{{ old('phone_number') }}"
                                required autocomplete="phone_number"
                            >
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="password" class="col-form-label text-md-right">{{ __('パスワード') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="password"
                                type="password"
                                class="form-control"
                                name="password" required autocomplete="new-password"
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('パスワード再入力') }}</label>
                    <div class="form-group row">
                        <div class="col-md-7 offset-md-2">
                            <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required autocomplete="new-password"
                            >
                        </div>
                    </div>

                    <div class="form-group row mb-0 justify-content-center">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('登録') }}
                            </button>
                        </div>
                        <div class="text-center mt-3">
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('ログインはこちらから') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
