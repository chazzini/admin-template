<x-layouts::auth :title="__('Register')">
    <form method="POST" action="{{ route('register.store') }}" class="app-form">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">{{ __('Create Account') }}</h2>
                    <p>{{ __('Get Started For Free Today!') }}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Name') }}" id="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="{{ __('Enter Your Email') }}" id="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
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
                <div class="d-flex justify-content-between gap-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="terms" id="checkDefault" required>
                        <label class="form-check-label text-secondary" for="checkDefault">
                            {{ __('Accept Terms & Conditions') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Sign Up') }}</button>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center text-lg-start">
                    {{ __('Already Have An Account?') }} 
                    <a href="{{ route('login') }}" class="link-primary text-decoration-underline">{{ __('Sign in') }}</a>
                </div>
            </div>
            <div class="app-divider-v justify-content-center">
                <p>{{ __('Or sign up with') }}</p>
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
