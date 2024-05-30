<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from sandbox.elemisthemes.com/demo19.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 12:04:45 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>{{ config('app.name') }} | @yield('page_title', 'Welcome')</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="{{ asset('_home/assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('_home/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('_home/assets/css/colors/violet.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('custom/custom.css') }}?{{time()}}">
  <link rel="preload" href="assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">

  @yield('page_styles')
</head>

<body>
    <div class="content-wrapper">
        @include('layouts.header')

        @yield('page_content')
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script data-cfasync="false" src="{{ asset('_home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('_home/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('_home/assets/js/theme.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/custom.js') }}?{{time()}}"></script>
    <script>
        const webRoot = `{{ url('/') }}`
        const _token = `{{ csrf_token() }}`
    </script>

    @yield('page_scripts')
</body>
</html>
