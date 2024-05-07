<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.svg')}}" type="image/svg+xml">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <title>@yield('title')</title>
</head>
<body class="serv-bg">
<header class="header">
    <div class="box-container">
        <div class="header-wrapper">
            <a href="/" class="header-logo__link" itemscope itemtype="http://schema.org/Organization">
                <img src="{{asset('assets/img/header-logo.svg')}}" alt="maggeta logo" class="header-logo" itemprop="logo">
            </a>

            <div class="header-logo__link-mob">
                <img src="{{asset('assets/img/favicon.svg')}}" alt="maggeta logo mobile">
                <p>Maggeta</p>
            </div>

            <nav>
                <a href="/">Main</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contacts">Contacts</a>
            </nav>
            <div class="header__contacts">
                <a href="mailto:info@maggeta.com">info@maggeta.com</a>
            </div>

            <div class="menu-btn">
                <img src="{{asset('assets/img/menu.svg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="header-menu">
        <div class="header-menu__wrapper">
            <img src="{{asset('assets/img/header-logo.svg')}}" alt="">
            <ul>
                <li><a href="/">Main</a></li>
                <li><a href="/consulting">Management Consulting</a></li>
                <li><a href="/advertising">Digital Advertising</a></li>
            </ul>
            <div class="header-menu__contacts">
                <a href="mailto:info@maggeta.com">info@maggeta.com</a>
            </div>
        </div>
    </div>
</header>

@yield('content')

@include('components.footer')
</body>
</html>
