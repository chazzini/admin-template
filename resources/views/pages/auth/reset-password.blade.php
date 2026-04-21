<x-layouts::auth :title="__('Reset password')">
    <form method="POST" action="{{ route('password.update') }}" class="app-form">
        @csrf
        <!-- Token -->
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">{{ __('Reset Your Password') }}</h2>
                    <p>{{ __('Create a new password and sign in to admin') }}</p>
                </div>
            </div>

            <!-- Session Status -->
            <div class="col-12">
                <x-auth-session-status class="mb-4 text-center" :status="session('status')" />
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Email') }}" id="email" value="{{ request('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('New Password') }}</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Password') }}" id="password" required autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" class="form-control" 
                           placeholder="{{ __('Confirm Your Password') }}" id="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100" data-test="reset-password-button">
                        {{ __('Reset password') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts::auth>
