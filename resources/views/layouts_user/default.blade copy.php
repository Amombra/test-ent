<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper_slider/css/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/gijgo/gijgo.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tagsinput/tagsinput.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/text_editor/summernote-bs4.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/morris/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/material_icon/material-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css') }}" id="colorSkinCSS">
    </head>
</head>

<body>
    <section class="main_content dashboard_part">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <header class="topbar">
            @include('layouts_user.partials.header')
        </header>

        <aside class="left-sidebar">
            @include('layouts_user.partials.sidebar')
        </aside>




        <div class="main_content_iner ">
            <div class="container-fluid  body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>



            <footer class="footer text-center">
                @include('layouts_user.partials.footer')
            </footer>




            <div class="chat-windows"></div>

    </section>

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartlist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/count_up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper_slider/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gijgo/gijgo.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/vendors/tagsinput/tagsinput.js') }}"></script>
    <script src="{{ asset('assets/vendors/text_editor/summernote-bs4.js') }}"></script>


    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/active_chart.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/imputs.js') }}"></script> --}}

  

    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
</body>

</html>
