@extends('layout.app')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-lg rounded-lg">
                <div class="card-header bg-primary text-white text-center rounded-top">
                    <h4 class="mb-0">{{ __('Đăng nhập') }}</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Địa chỉ Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lưu đăng nhập') }}
                            </label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                {{ __('Đăng nhập') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Bạn quên mật khẩu?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>

                <div class="card-footer text-center bg-light py-3 rounded-bottom">
                    <p class="mb-0">Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="text-primary">{{ __('Đăng ký ngay') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
