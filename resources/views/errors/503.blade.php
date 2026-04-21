<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Unavailable | RA-ADMIN</title>

    <!-- icon -->
    <link rel="icon" href="{{ asset('admin/images/logo/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/images/logo/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
</head>

<body>
    <div class="error-container p-0">
        <div class="container text-center">
            <div>
                <div>
                    <img src="{{ asset('admin/images/background/error-503.png') }}" class="img-fluid" alt="503 Service Unavailable">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <p class="text-secondary f-w-500">
                                {{ __('503 Service Unavailable: The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <a role="button" href="{{ url('/') }}" class="btn btn-lg btn-danger text-white">
                    <i class="ti ti-home"></i> {{ __('Back To Home') }}
                </a>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('admin/js/jquery-3.6.3.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
