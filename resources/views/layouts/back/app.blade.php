<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="SIAE, Sistema Integrado de Administración Estudiantil, Laravel 12, PHP 8.3, MySQL, Bootstrap 5, AdminLTE, Tailwind CSS" />
    <meta name="description"
        content="Sistema Integrado de Administración Estudiantil desarrollado con Laravel 12, PHP 8.3, MySQL, Bootstrap 5, AdminLTE y Tailwind CSS." />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/back/matrix-admin-bootstrap5/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/back/matrix-admin-bootstrap5/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('layouts.back.header')
        @include('layouts.back.aside')
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('layouts.back.footer')
        </div>
    </div>

    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/back/matrix-admin-bootstrap5/js/main.js') }}"></script>
</body>

</html>
