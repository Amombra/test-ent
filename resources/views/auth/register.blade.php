{{-- @dd($usertypes) --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Gestion de Courrier &amp; CPNTIC</title>

    <meta name="description" content="E-courrier - ">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="E-courrier ">
    <meta property="og:site_name" content="E-courrier">
    <meta property="og:description" content="E-courrier - ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}" />

</head>

<body>

    <div id="page-container">

        <main id="main-container">
            <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
                <div class="row g-0 justify-content-center bg-black-75">
                    <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                        <div class="p-3 w-100">
                            <div class="mb-3 text-center">
                                <a class="link-fx fw-bold fs-1" href="index.html">
                                    <span class="text-dark">Gestion de </span><span class="text-primary">Véhicule</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Créer un compte</p>
                            </div>
                            <div class="row g-0 justify-content-center">
                                <div class="col-sm-10 col-xl-10">
                                    <form class="js-validation-signup" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="py-3">
                                            <div class="mb-4">
                                                <input type="text" placeholder="Nom & prenom" id="name"
                                                    class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror"
                                                    name="name" value="{{ old('name') }}" required autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>

                                            <div class="mb-4">
                                                <input type="email" id="email"
                                                    class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    placeholder="Ex: koffiemmanuel@gmail.com" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <input type="password" placeholder="Mot de passe"
                                                    class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                                    name="password" value="{{ old('password') }}" required autofocus>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-4">
                                                <input type="password" placeholder="Confirmer le mot de passe"
                                                    class="form-control form-control-lg form-control-alt @error('password-confirm') is-invalid @enderror"
                                                    name="password_confirmation" value="{{ old('password-confirm') }}"
                                                    required id="password-confirm" autofocus>
                                                @error('password-confirm')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <br>
                                            <div class="form-group row">
                                                <label for="photo"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('Photo') }}</label>
                                                <div class="col-md-10">
                                                    <input id="photo" type="file"
                                                        class="form-control @error('photo') is-invalid @enderror"
                                                        name="photo"  required>
                                                    @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <br>

                                            <div class="form-group row">
                                                <label for="role"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('Role') }}</label>
                                                <div class="col-md-10">
                                                    <select id="role"
                                                        class="form-control @error('role') is-invalid @enderror"
                                                        name="role" required>
                                                        <option value="user">User</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                    @error('role')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                                S'inscrire
                                            </button>
                                            <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                    href="op_auth_signin.html">
                                                    Sign In
                                                </a>

                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
