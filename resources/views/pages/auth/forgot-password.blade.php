<x-layouts::auth :title="__('Forgot password')">
    <form method="POST" action="{{ route('password.email') }}" class="app-form">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">{{ __('Forgot password') }}</h2>
                    <p>{{ __('Enter your email to receive a password reset link') }}</p>
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
                           placeholder="{{ __('email@example.com') }}" id="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Email password reset link') }}</button>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center text-lg-start">
                    {{ __('Or, return to') }}
                    <a href="{{ route('login') }}" class="link-primary text-decoration-underline">{{ __('log in') }}</a>
                </div>
            </div>
        </div>
    </form>
</x-layouts::auth>
