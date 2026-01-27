<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary Meta Tags -->
    <title>George Gavasheli - Full Stack Developer</title>
    <meta name="title" content="George Gavasheli - Full Stack Developer">
    <meta name="description" content="Full Stack Developer specializing in Laravel, Vue.js, and modern web development. Building scalable applications in Tbilisi, Georgia.">
    <meta name="keywords" content="George Gavasheli, Software Engineer, Full Stack Developer, Laravel, Vue.js, Inertia.js, PHP, JavaScript, Web Development, Tbilisi, Georgia">
    <meta name="author" content="George Gavasheli">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="George Gavasheli - Full Stack Developer">
    <meta property="og:description" content="Full Stack Developer specializing in Laravel, Vue.js, and modern web development. Building scalable, secure applications in Tbilisi, Georgia.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="George Gavasheli - Full Stack Developer Portfolio">
    <meta property="og:site_name" content="George Gavasheli">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="George Gavasheli - Full Stack Developer">
    <meta name="twitter:description" content="Full Stack Developer specializing in Laravel, Vue.js, and modern web development. Building scalable, secure applications in Tbilisi, Georgia.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="twitter:image:alt" content="George Gavasheli - Full Stack Developer Portfolio">
    <meta name="twitter:creator" content="@giorgigavasheli">
    <meta name="twitter:site" content="@giorgigavasheli">

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#0099ff">
    <meta name="msapplication-TileColor" content="#0099ff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://kit.fontawesome.com">

    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://kit.fontawesome.com">

    <script src="https://kit.fontawesome.com/dc825ed24d.js" crossorigin="anonymous"></script>
    @routes
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
