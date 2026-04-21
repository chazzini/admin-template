<x-layouts::auth :title="__('Log in')">
    <form method="POST" action="{{ route('login.store') }}" class="app-form">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">{{ __('Welcome To RA-ADMIN!') }}</h2>
                    <p>{{ __('Sign in with your data that you entered during your registration') }}</p>
                </div>
            </div>

            <!-- Session Status -->
            <div class="col-12">
                <x-auth-session-status class="mb-4 text-center" :status="session('status')" />
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Email') }}" id="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="link-primary float-end">{{ __('Forgot Password?') }}</a>
                    @endif
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Password') }}" id="password" required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                        {{ __('Remember me') }}
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Sign In') }}</button>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center text-lg-start">
                    {{ __('Don\'t Have Your Account yet?') }} 
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="link-primary text-decoration-underline">{{ __('Sign up') }}</a>
                    @endif
                </div>
            </div>
            <div class="app-divider-v justify-content-center">
                <p>{{ __('Or sign in with') }}</p>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <button type="button" class="btn btn-facebook icon-btn b-r-22 m-1"><i class="ti ti-brand-facebook text-white"></i></button>
                    <button type="button" class="btn btn-gmail icon-btn b-r-22 m-1"><i class="ti ti-brand-google text-white"></i></button>
                    <button type="button" class="btn btn-github icon-btn b-r-22 m-1"><i class="ti ti-brand-github text-white"></i></button>
                </div>
            </div>
        </div>
    </form>
</x-layouts::auth>
