<x-layouts::auth :title="__('Two-factor authentication')">
    <div class="row" x-data="{
        showRecoveryInput: @js($errors->has('recovery_code')),
        toggleInput() {
            this.showRecoveryInput = !this.showRecoveryInput;
            $nextTick(() => {
                if (this.showRecoveryInput) {
                    this.$refs.recovery_code?.focus();
                }
            });
        },
    }">
        <div class="col-12">
            <div class="mb-5 text-center text-lg-start">
                <h2 class="text-primary f-w-600">
                    <span x-show="!showRecoveryInput">{{ __('Authentication code') }}</span>
                    <span x-show="showRecoveryInput">{{ __('Recovery code') }}</span>
                </h2>
                <p>
                    <span x-show="!showRecoveryInput">{{ __('Enter the authentication code provided by your authenticator application.') }}</span>
                    <span x-show="showRecoveryInput">{{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}</span>
                </p>
            </div>
        </div>

        <div class="col-12">
            <form method="POST" action="{{ route('two-factor.login.store') }}" class="app-form">
                @csrf

                <div x-show="!showRecoveryInput" class="mb-3">
                    <label for="code" class="form-label">{{ __('Authentication Code') }}</label>
                    <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" 
                           placeholder="000000" inputmode="numeric" autocomplete="one-time-code">
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div x-show="showRecoveryInput" class="mb-3">
                    <label for="recovery_code" class="form-label">{{ __('Recovery Code') }}</label>
                    <input type="text" name="recovery_code" id="recovery_code" x-ref="recovery_code"
                           class="form-control @error('recovery_code') is-invalid @enderror" 
                           placeholder="abcde-fghij" autocomplete="one-time-code">
                    @error('recovery_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Continue') }}
                    </button>
                </div>

                <div class="text-center text-lg-start">
                    <span class="text-secondary">{{ __('or you can') }}</span>
                    <button type="button" class="btn btn-link link-primary p-0 text-decoration-underline" @click="toggleInput()">
                        <span x-show="!showRecoveryInput">{{ __('login using a recovery code') }}</span>
                        <span x-show="showRecoveryInput">{{ __('login using an authentication code') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts::auth>
