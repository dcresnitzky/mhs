@include('components/assets')
@include('components/menu')
@include('components/footer')
{{--@include('components/subheader')--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta name="description" content="@yield('description')">

    <!-- Facebook Open Graph Tags -->
    <meta property="og:title" content="@yield('og-title')">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:image:width" content="800">
    <meta property="og:description" content="@yield('og-description')">
    <meta name="og:type" content="@yield('og-type')">
    <meta name="og:site_name" content="MHS Global">

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="@yield('twitter-title')">
    <meta name="twitter:description" content="@yield('twitter-description')">
    <meta name="twitter:image" content="@yield('twitter-image')">

    <title>MHS - @yield('title')</title>

    @yield('assets.top')
</head>

<body>
<header>
    @yield('menu')
</header>
{{-- Verifica se o subheader esta definido --}}
{{--@if (!empty($__env->yieldContent('sh-title')))--}}
    {{--@yield('subheader')--}}
{{--@endif--}}
@yield('content')
@yield('footer')
@yield('assets.footer')

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif

</body>

</html>


