<x-layouts::auth :title="__('Confirm password')">
    <form method="POST" action="{{ route('password.confirm.store') }}" class="app-form">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">{{ __('Confirm password') }}</h2>
                    <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
                </div>
            </div>

            <!-- Session Status -->
            <div class="col-12">
                <x-auth-session-status class="mb-4 text-center" :status="session('status')" />
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="{{ __('Password') }}" id="password" required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100" data-test="confirm-password-button">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts::auth>
