<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>E-Courrier CPNTIC</title>

    <meta name="description"
        content=" created by CPNTIC">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
        content=" created by CPNTIC">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/cpntic.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}" />


</head>

<body>

    <div id="page-container">

        <main id="main-container">
            <div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">
                <div class="row g-0 bg-primary-op">
                    <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                        <div class="p-3 w-100">
                            <div class="mb-3 text-center">
                                <a class="link-fx fw-bold fs-1" href="index.html">
                                    <span class="text-dark">Gestion de </span><span class="text-primary">
                                        vehicule</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Connexion</p>
                            </div>
                            <div class="row g-0 justify-content-center">
                                <div class="col-sm-8 col-xl-6">
                                    <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                        {{-- <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST" action="{{ route('login') }}"> --}}
                                        @csrf
                                        <div class="py-3">
                                            <div class="mb-4">
                                                <input type="email" name="email"
                                                    class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                                    id="email" placeholder="Email" aria-describedby="emailHelp"
                                                    value="{{ old('email') }}" required autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <input type="password" id="password" name="password"
                                                    class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                                    id="password" placeholder="Mot de passe" required>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                                Connexion
                                            </button>
                                            <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                               

                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                        <div class="p-3">
                            <p class="display-4 fw-bold text-white mb-3">
                                Gestion de vehicule
                            </p>
                            <small class=" fw-semibold text-white-75 mb-0">
                                Copyright &copy; <span data-toggle="year-copy"></span>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>

    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/op_auth_signup.min.js') }}"></script>
</body>

</html>
