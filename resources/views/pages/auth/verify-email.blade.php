<x-layouts::auth :title="__('Email verification')">
    <div class="row">
        <div class="col-12 text-center">
            <div class="mb-5">
                <h2 class="text-primary f-w-600">{{ __('Email verification') }}</h2>
                <p>{{ __('Please verify your email address by clicking on the link we just emailed to you.') }}</p>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="col-12">
            <div class="alert alert-success text-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        </div>
        @endif

        <div class="col-12 mt-3">
            <form method="POST" action="{{ route('verification.send') }}" class="app-form">
                @csrf
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Resend verification email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="app-form">
                @csrf
                <div class="text-center">
                    <button type="submit" class="btn btn-link link-secondary text-sm">
                        {{ __('Log out') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts::auth>
