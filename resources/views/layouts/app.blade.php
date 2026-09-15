@php
    $locale = session('locale', 'en');
    app()->setLocale($locale);
    $dir = ($locale == 'ur') ? 'rtl' : 'ltr';
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $dir }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Al-Noor Hospital | Smart Healthcare</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        :root {
            --primary-blue: #084f86;
            --dark-blue: #063d70;
            --teal: #08a18f;
            --green: #0aa78f;
            --light-blue: #eef8fb;
            --text-dark: #154d6d;
            --text-light: #7c919f;
            --border: #dcecf2;
        }


        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;

            background: #ffffff;

            color: var(--text-dark);

            font-family:
                Arial,
                Helvetica,
                sans-serif;
        }


        a {
            text-decoration: none;
        }


        /* =====================================================
           DESKTOP HEADER
        ===================================================== */

        .main-header {
            width: 100%;

            background: rgba(255,255,255,.98);

            border-bottom: 1px solid #e3eef3;

            position: sticky;

            top: 0;

            z-index: 5000;

            box-shadow:
                0 3px 18px rgba(8,79,134,.05);
        }


        .header-container {
            max-width: 1240px;

            min-height: 100px;

            margin: auto;

            padding: 0 22px;

            display: flex;

            align-items: center;
        }


        /* LOGO */

        .hospital-brand {
            display: flex;

            align-items: center;

            gap: 13px;

            min-width: 365px;
        }


        .hospital-logo {
            width: 67px;
            height: 67px;

            flex-shrink: 0;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #08a18f,
                    #0879a8
                );

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;

            box-shadow:
                0 7px 20px rgba(8,121,168,.18);
        }


        .hospital-logo::before {
            content: "";

            width: 38px;
            height: 38px;

            background: white;

            border-radius: 50%;

            position: absolute;
        }


        .hospital-logo::after {
            content: "+";

            position: relative;

            z-index: 2;

            color: var(--primary-blue);

            font-size: 32px;

            line-height: 1;

            font-weight: 900;
        }


        .brand-name {
            color: var(--primary-blue);

            font-size: 29px;

            line-height: 1.1;

            font-weight: 800;

            white-space: nowrap;
        }


        .brand-tagline {
            color: #718897;

            font-size: 12px;

            margin-top: 5px;

            letter-spacing: .2px;
        }


        /* DIVIDER */

        .header-divider {
            width: 1px;

            height: 60px;

            background: #b8d2df;

            margin: 0 22px;
        }


        /* SYSTEM NAME */

        .system-title {
            min-width: 185px;
        }


        .system-title strong {
            display: block;

            color: var(--primary-blue);

            font-size: 17px;

            line-height: 1.25;
        }


        .system-links {
            display: flex;

            gap: 13px;

            margin-top: 8px;

            color: #758b99;

            font-size: 9px;
        }


        .system-links span {
            position: relative;
        }


        .system-links span:not(:last-child)::after {
            content: "|";

            margin-left: 13px;

            color: #b7c9d2;
        }


        /* HEADER FEATURES */

        .header-features {
            margin-left: auto;

            display: flex;

            align-items: stretch;

            height: 70px;
        }


        .header-feature {
            min-width: 88px;

            padding: 0 12px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            text-align: center;

            border-left: 1px solid #d8e8ee;

            color: var(--primary-blue);
        }


        .header-feature svg {
            width: 27px;
            height: 27px;

            margin-bottom: 4px;
        }


        .header-feature strong {
            font-size: 9px;

            font-weight: 800;
        }


        .header-feature small {
            font-size: 7px;

            color: #738895;

            margin-top: 2px;

            line-height: 1.2;
        }


        /* =====================================================
           MOBILE HEADER
        ===================================================== */

        .mobile-header {
            display: none;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        main {
            width: 100%;
        }


        /* =====================================================
           LANGUAGE
        ===================================================== */

        .language-floating {
            position: fixed;

            right: 15px;

            top: 110px;

            z-index: 4000;
        }


        .language-floating a {
            display: inline-flex;

            align-items: center;

            padding: 7px 11px;

            background: white;

            border: 1px solid var(--border);

            border-radius: 30px;

            color: var(--primary-blue);

            font-size: 10px;

            font-weight: 700;

            box-shadow:
                0 7px 20px rgba(8,79,134,.08);
        }


        /* =====================================================
           RTL
        ===================================================== */

        html[dir="rtl"] {
            font-family:
                Arial,
                Tahoma,
                sans-serif;
        }


        html[dir="rtl"] .system-links {
            flex-direction: row-reverse;
        }


        /* =====================================================
           RESPONSIVE TABLET
        ===================================================== */

        @media (max-width: 1100px) {

            .hospital-brand {
                min-width: auto;
            }


            .brand-name {
                font-size: 23px;
            }


            .header-divider {
                margin: 0 12px;
            }


            .system-title {
                min-width: 155px;
            }


            .system-title strong {
                font-size: 14px;
            }


            .header-feature {
                min-width: 70px;

                padding: 0 7px;
            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            .main-header {
                display: none;
            }


            .mobile-header {
                display: flex;

                position: sticky;

                top: 0;

                z-index: 5000;

                min-height: 64px;

                padding: 0 15px;

                align-items: center;

                justify-content: space-between;

                background:
                    linear-gradient(
                        135deg,
                        #063d70,
                        #084f86
                    );

                box-shadow:
                    0 4px 18px rgba(8,79,134,.18);
            }


            .mobile-brand {
                display: flex;

                align-items: center;

                gap: 9px;
            }


            .mobile-logo {
                width: 40px;
                height: 40px;

                border-radius: 50%;

                background: white;

                display: flex;

                align-items: center;

                justify-content: center;

                color: var(--primary-blue);

                font-size: 25px;

                font-weight: 900;

                box-shadow:
                    0 3px 10px rgba(0,0,0,.15);
            }


            .mobile-brand-name {
                color: white;

                font-size: 17px;

                font-weight: 800;
            }


            .mobile-brand-name span {
                color: #5ee2cf;
            }


            .mobile-menu-btn {
                width: 43px;
                height: 43px;

                border: 0;

                background: transparent;

                display: flex;

                flex-direction: column;

                align-items: center;

                justify-content: center;

                gap: 5px;

                cursor: pointer;
            }


            .mobile-menu-btn span {
                display: block;

                width: 24px;
                height: 2px;

                border-radius: 10px;

                background: white;
            }


            .mobile-language {
                display: none;
            }


            main {
                padding-bottom: 70px;
            }


            .language-floating {
                top: 76px;

                right: 10px;
            }

        }


        /* =====================================================
           VERY SMALL MOBILE
        ===================================================== */

        @media (max-width: 380px) {

            .mobile-header {
                min-height: 60px;

                padding: 0 11px;
            }


            .mobile-logo {
                width: 36px;
                height: 36px;

                font-size: 22px;
            }


            .mobile-brand-name {
                font-size: 15px;
            }


            .mobile-menu-btn {
                width: 39px;
                height: 39px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     DESKTOP HEADER
========================================================= -->

<header class="main-header">

    <div class="header-container">


        <!-- BRAND -->

        <a href="{{ route('home') }}" class="hospital-brand">

            <div class="hospital-logo"></div>

            <div>

                <div class="brand-name">
                    Al-Noor Hospital
                </div>

                <div class="brand-tagline">
                    Care Today&nbsp;&nbsp; • &nbsp;&nbsp;Healthier Tomorrow
                </div>

            </div>

        </a>


        <div class="header-divider"></div>


        <!-- SYSTEM -->

        <div class="system-title">

            <strong>
                Smart Healthcare<br>
                Management System
            </strong>

            <div class="system-links">

                <span>Book</span>
                <span>Consult</span>
                <span>Manage</span>
                <span>Heal</span>

            </div>

        </div>


        <!-- FEATURES -->

        <div class="header-features">


            <!-- ONLINE BOOKING -->

            <div class="header-feature">

                <svg viewBox="0 0 24 24" fill="none">

                    <circle
                        cx="12"
                        cy="12"
                        r="8"
                        stroke="currentColor"
                        stroke-width="1.6"
                    />

                    <path
                        d="M12 7V12L15 14"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                    />

                    <path
                        d="M5 4L3.5 5.5M19 4L20.5 5.5"
                        stroke="currentColor"
                        stroke-width="1.4"
                        stroke-linecap="round"
                    />

                </svg>

                <strong>24/7</strong>

                <small>Online Booking</small>

            </div>


            <!-- SECURITY -->

            <div class="header-feature">

                <svg viewBox="0 0 24 24" fill="none">

                    <path
                        d="M12 3L19 6V11C19 16 16 19 12 21C8 19 5 16 5 11V6L12 3Z"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                    />

                    <path
                        d="M9 12L11 14L15 9"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />

                </svg>

                <strong>Trusted</strong>

                <small>& Secure</small>

            </div>


            <!-- DOCTORS -->

            <div class="header-feature">

                <svg viewBox="0 0 24 24" fill="none">

                    <circle
                        cx="9"
                        cy="8"
                        r="3"
                        stroke="currentColor"
                        stroke-width="1.6"
                    />

                    <circle
                        cx="17"
                        cy="9"
                        r="2.4"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />

                    <path
                        d="M3.5 19C4.1 15.5 6 14 9 14C12 14 13.9 15.5 14.5 19"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                    />

                    <path
                        d="M15 14.5C17.5 14.5 19 16 19.5 18.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />

                </svg>

                <strong>Expert</strong>

                <small>Doctors</small>

            </div>


            <!-- HEALTH -->

            <div class="header-feature">

                <svg viewBox="0 0 24 24" fill="none">

                    <path
                        d="M12 20S4 15.3 4 9.5C4 6.5 6 4.5 8.6 4.5C10.3 4.5 11.4 5.4 12 6.5C12.6 5.4 13.7 4.5 15.4 4.5C18 4.5 20 6.5 20 9.5C20 15.3 12 20 12 20Z"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                    />

                </svg>

                <strong>Better Health</strong>

                <small>For A Better Future</small>

            </div>


        </div>

    </div>

</header>


<!-- =========================================================
     MOBILE HEADER
========================================================= -->

<header class="mobile-header">

    <a href="{{ route('home') }}" class="mobile-brand">

        <div class="mobile-logo">
            +
        </div>

        <div class="mobile-brand-name">
            Al-Noor <span>Hospital</span>
        </div>

    </a>


    <button
        type="button"
        class="mobile-menu-btn"
        aria-label="Menu"
    >

        <span></span>
        <span></span>
        <span></span>

    </button>

</header>


<!-- =========================================================
     LANGUAGE
========================================================= -->

<div class="language-floating">

    <a href="{{ url($locale == 'en' ? 'lang/ur' : 'lang/en') }}">

        {{ $locale == 'en' ? 'اردو' : 'English' }}

    </a>

</div>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<main>

    @yield('content')

</main>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>