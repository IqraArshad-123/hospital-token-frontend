<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Al-Noor Hospital | Patient Portal</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8fc;
            color: #173b5c;
            padding-bottom: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================================
           TOP NAVIGATION
        ========================================= */

        .top-nav {
            height: 76px;
            background: rgba(255,255,255,0.97);
            border-bottom: 1px solid #e4ebf2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            position: sticky;
            top: 0;
            z-index: 1000;
        }


        /* =========================================
           BRAND
        ========================================= */

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 13px;
            background: #0b5fa5;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 800;

            box-shadow:
                0 8px 20px rgba(11,95,165,0.18);
        }

        .brand-text strong {
            display: block;
            color: #0a4d80;
            font-size: 16px;
            letter-spacing: 0.3px;
        }

        .brand-text span {
            display: block;
            color: #8998a6;
            font-size: 8px;
            letter-spacing: 1.7px;
            margin-top: 4px;
        }


        /* =========================================
           DESKTOP LINKS
        ========================================= */

        .desktop-links {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .desktop-links a {
            color: #627588;
            font-size: 13px;
            font-weight: 600;
            transition: 0.25s;
        }

        .desktop-links a:hover {
            color: #0b5fa5;
        }

        .desktop-links .active {
            color: #0b5fa5;
        }


        /* =========================================
           ACCOUNT AREA
        ========================================= */

        .account-area {
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 70px;
            justify-content: flex-end;
        }


        /* =========================================
           REGISTER BUTTON
        ========================================= */

        .register-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ff4357;
            color: white;
            padding: 10px 17px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 700;
            transition: 0.25s;

            box-shadow:
                0 8px 18px rgba(255,67,87,0.18);
        }

        .register-btn:hover {
            transform: translateY(-2px);
            background: #e9364a;
        }


        /* =========================================
           USER AVATAR
        ========================================= */

        .user-avatar {
            width: 43px;
            height: 43px;
            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #0b5fa5,
                #084f86
            );

            color: white;

            display: none;

            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 800;

            border: 3px solid #e2f0fa;

            transition: 0.25s;
            cursor: pointer;

            text-transform: uppercase;
            overflow: hidden;
            flex-shrink: 0;
        }

        .user-avatar:hover {
            transform: scale(1.05);

            box-shadow:
                0 8px 20px rgba(11,95,165,0.20);
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        /* =========================================
           HERO
        ========================================= */

        .hero-wrapper {
            padding: 25px 5% 0;
        }

        .hero {
            max-width: 1400px;
            min-height: 555px;
            margin: auto;
            border-radius: 30px;
            overflow: hidden;
            position: relative;

            display: flex;
            align-items: center;

            background:

                linear-gradient(
                    90deg,
                    rgba(3,43,72,0.94) 0%,
                    rgba(3,56,91,0.82) 43%,
                    rgba(3,56,91,0.25) 76%,
                    rgba(3,56,91,0.05) 100%
                ),

                url('/images/hospital-hero.jpg');

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            width: 62%;
            padding: 70px;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            color: white;
            font-size: clamp(40px, 5vw, 65px);
            line-height: 1.05;
            letter-spacing: -1.5px;
            max-width: 720px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #78caff;
        }

        .hero-description {
            color: #e0edf6;
            max-width: 570px;
            font-size: 15px;
            line-height: 1.75;
            margin-bottom: 31px;
        }


        /* =========================================
           HERO BUTTONS
        ========================================= */

        .hero-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            background: #ff4357;
            color: white;

            padding: 14px 22px;
            border-radius: 13px;

            font-size: 12px;
            font-weight: 800;

            box-shadow:
                0 12px 25px rgba(255,67,87,0.22);

            transition: 0.25s;
        }

        .primary-btn:hover {
            transform: translateY(-3px);
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            background: rgba(255,255,255,0.12);

            border: 1px solid rgba(255,255,255,0.27);

            color: white;

            padding: 14px 22px;
            border-radius: 13px;

            font-size: 12px;
            font-weight: 700;
        }


        /* =========================================
           HERO INFO CARD
        ========================================= */

        .hero-info-card {
            position: absolute;
            right: 6%;
            bottom: 45px;

            width: 285px;

            background: rgba(255,255,255,0.96);

            border-radius: 21px;

            padding: 22px;

            box-shadow:
                0 25px 55px rgba(0,0,0,0.19);
        }

        .hero-info-card small {
            display: block;
            color: #81909e;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .hero-info-card h3 {
            color: #173f61;
            font-size: 18px;
            margin-bottom: 6px;
        }

        .hero-info-card p {
            color: #8997a3;
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .status-line {
            display: flex;
            align-items: center;
            justify-content: space-between;

            background: #f1f7fb;

            border-radius: 13px;

            padding: 12px;
        }

        .status-line span {
            color: #84929f;
            font-size: 9px;
        }

        .status-line strong {
            color: #0b5fa5;
            font-size: 18px;
        }


        /* =========================================
           SECTIONS
        ========================================= */

        .section {
            max-width: 1200px;
            margin: 58px auto;
            padding: 0 24px;
        }

        .section-title {
            margin-bottom: 22px;
        }

        .section-title small {
            color: #0b5fa5;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .section-title h2 {
            color: #173e60;
            font-size: 27px;
            margin-top: 6px;
        }

        .section-title p {
            color: #8795a2;
            font-size: 12px;
            margin-top: 7px;
        }


        /* =========================================
           BENEFITS
        ========================================= */

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
        }

        .benefit-card {
            background: white;
            border: 1px solid #e2eaf1;
            border-radius: 21px;
            padding: 25px;
            min-height: 190px;
            position: relative;
            transition: 0.25s;
        }

        .benefit-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 35px rgba(25,65,95,0.08);
        }

        .benefit-number {
            width: 40px;
            height: 40px;
            border-radius: 12px;

            background: #edf6fd;
            color: #0b5fa5;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;

            margin-bottom: 20px;
        }

        .benefit-card h3 {
            color: #173e60;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .benefit-card p {
            color: #84929f;
            font-size: 11px;
            line-height: 1.6;
        }


        /* =========================================
           DEPARTMENTS
        ========================================= */

        .department-list {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            padding-bottom: 7px;
        }

        .department {
            flex: 0 0 auto;

            background: white;

            border: 1px solid #e1e9f0;

            border-radius: 14px;

            padding: 15px 19px;

            color: #385873;

            font-size: 12px;
            font-weight: 700;

            transition: 0.25s;
        }

        .department:hover {
            border-color: #a8cce6;
            color: #0b5fa5;
        }


        /* =========================================
           LIVE QUEUE
        ========================================= */

        .queue-section {
            background: #eaf5fd;

            border-radius: 25px;

            padding: 35px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;
        }

        .queue-content h2 {
            color: #173e60;
            font-size: 25px;
            margin-bottom: 8px;
        }

        .queue-content p {
            color: #75899a;
            font-size: 12px;
            line-height: 1.6;
            max-width: 550px;
        }

        .queue-number {
            min-width: 145px;

            background: white;

            border-radius: 18px;

            padding: 18px;

            text-align: center;
        }

        .queue-number small {
            display: block;
            color: #8795a2;
            font-size: 8px;
            margin-bottom: 5px;
        }

        .queue-number strong {
            color: #0b5fa5;
            font-size: 33px;
        }


        /* =========================================
           HOW APP WORKS
        ========================================= */

        .how-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 17px;
        }

        .how-card {
            background: white;
            border: 1px solid #e2eaf1;
            border-radius: 20px;
            padding: 24px;
        }

        .how-step {
            color: #0b5fa5;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .how-card h3 {
            color: #173e60;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .how-card p {
            color: #84929f;
            font-size: 11px;
            line-height: 1.6;
        }


        /* =========================================
           HELP
        ========================================= */

        .help-box {
            background: #073d66;

            border-radius: 24px;

            padding: 33px;

            color: white;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;
        }

        .help-box h2 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .help-box p {
            color: #c9dce9;
            font-size: 12px;
            line-height: 1.6;
            max-width: 600px;
        }

        .help-button {
            flex-shrink: 0;

            background: white;

            color: #0b5fa5;

            padding: 13px 19px;

            border-radius: 12px;

            font-size: 11px;
            font-weight: 800;
        }


        /* =========================================
           FOOTER
        ========================================= */

        .footer {
            background: #073452;
            color: #c6d8e5;
            text-align: center;
            padding: 32px 20px;
            font-size: 10px;
            margin-top: 70px;
        }


        /* =========================================
           MOBILE BOTTOM NAV
        ========================================= */

        .mobile-bottom-nav {
            display: none;

            position: fixed;

            left: 12px;
            right: 12px;
            bottom: 12px;

            height: 66px;

            background: rgba(255,255,255,0.98);

            border: 1px solid #dfe8ef;

            border-radius: 21px;

            box-shadow:
                0 12px 40px rgba(20,60,90,0.16);

            z-index: 2000;

            align-items: center;
            justify-content: space-around;
        }

        .bottom-item {
            display: flex;
            flex-direction: column;

            align-items: center;
            justify-content: center;

            gap: 4px;

            color: #8795a2;

            font-size: 8px;
            font-weight: 700;

            min-width: 52px;
        }

        .bottom-item svg {
            width: 21px;
            height: 21px;
            stroke: currentColor;
        }

        .bottom-item.active {
            color: #0b5fa5;
        }

        .bottom-token {
            width: 50px;
            height: 50px;

            border-radius: 16px;

            background: #ff4357;

            color: white;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-top: -23px;

            border: 5px solid #f5f8fc;

            box-shadow:
                0 9px 22px rgba(255,67,87,0.25);
        }

        .bottom-token svg {
            width: 21px;
            height: 21px;
        }


        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 1000px) {

            .desktop-links {
                gap: 18px;
            }

            .hero-content {
                width: 67%;
                padding: 55px;
            }

            .benefit-grid {
                grid-template-columns: repeat(2,1fr);
            }
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 700px) {

            body {
                padding-bottom: 95px;
            }

            .top-nav {
                height: 66px;
                padding: 0 17px;
            }

            .desktop-links {
                display: none;
            }

            .brand-logo {
                width: 38px;
                height: 38px;
                border-radius: 11px;
            }

            .brand-text strong {
                font-size: 14px;
            }

            .brand-text span {
                font-size: 7px;
            }

            .register-btn {
                padding: 9px 13px;
                font-size: 10px;
                border-radius: 10px;
            }

            .user-avatar {
                width: 39px;
                height: 39px;
                font-size: 11px;
            }

            .hero-wrapper {
                padding: 12px 12px 0;
            }

            .hero {
                min-height: 590px;

                border-radius: 23px;

                align-items: flex-end;

                background:

                    linear-gradient(
                        0deg,
                        rgba(3,43,72,0.97) 0%,
                        rgba(3,52,86,0.84) 48%,
                        rgba(3,52,86,0.13) 100%
                    ),

                    url('/images/hospital-hero.jpg');

                background-size: cover;
                background-position: center;
            }

            .hero-content {
                width: 100%;
                padding: 30px 22px 33px;
            }

            .hero h1 {
                font-size: 38px;
                letter-spacing: -0.7px;
                margin-bottom: 15px;
            }

            .hero-description {
                font-size: 12px;
                line-height: 1.65;
                margin-bottom: 21px;
            }

            .hero-actions {
                display: grid;
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .primary-btn,
            .secondary-btn {
                width: 100%;
                padding: 13px 17px;
                font-size: 11px;
            }

            .hero-info-card {
                width: 205px;

                right: 16px;
                top: 16px;
                bottom: auto;

                padding: 14px;

                border-radius: 16px;
            }

            .hero-info-card h3 {
                font-size: 14px;
            }

            .hero-info-card p {
                font-size: 9px;
                margin-bottom: 9px;
            }

            .status-line {
                padding: 8px;
                border-radius: 10px;
            }

            .status-line strong {
                font-size: 16px;
            }

            .section {
                margin: 42px auto;
                padding: 0 16px;
            }

            .section-title h2 {
                font-size: 22px;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .benefit-card {
                min-height: auto;
                padding: 20px;
                border-radius: 18px;
            }

            .queue-section {
                padding: 23px;
                border-radius: 20px;

                flex-direction: column;
                align-items: stretch;
            }

            .queue-content h2 {
                font-size: 21px;
            }

            .queue-number {
                min-width: 100%;
            }

            .how-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .how-card {
                padding: 20px;
            }

            .help-box {
                padding: 24px;

                flex-direction: column;
                align-items: flex-start;

                border-radius: 20px;
            }

            .help-box h2 {
                font-size: 21px;
            }

            .help-button {
                width: 100%;
                text-align: center;
            }

            .footer {
                margin-top: 45px;
                padding-bottom: 110px;
            }

            .mobile-bottom-nav {
                display: flex;
            }
        }

    </style>

</head>


<body>


<!-- =====================================================
     TOP NAVIGATION
===================================================== -->

<header class="top-nav">


    <!-- BRAND -->

    <a href="{{ route('home') }}"
       class="brand">

        <div class="brand-logo">
            +
        </div>

        <div class="brand-text">

            <strong>
                Al-Noor Hospital
            </strong>

            <span>
                PATIENT PORTAL
            </span>

        </div>

    </a>


    <!-- DESKTOP NAVIGATION -->

    <nav class="desktop-links">

        <a href="{{ route('home') }}"
           class="active">

            Home

        </a>


        <a href="{{ route('find-doctors') }}">

            Doctors

        </a>


        <a href="{{ route('book-token') }}">

            My Token

        </a>


        <a href="{{ route('live-status') }}">

            Live Status

        </a>

    </nav>


    <!-- =================================================
         ACCOUNT AREA
    ================================================== -->

    <div class="account-area">


        <!-- REGISTER BUTTON -->

        <a href="{{ route('register') }}"
           class="register-btn"
           id="registerButton">

            Register

        </a>


        <!-- USER AVATAR -->

        <a href="{{ route('profile') }}"
           class="user-avatar"
           id="userAvatar"
           title="Profile">

            <span id="avatarInitials">
                P
            </span>

        </a>


    </div>


</header>


<!-- =====================================================
     HERO
===================================================== -->

<div class="hero-wrapper">

    <section class="hero">


        <div class="hero-content">


            <h1>

                Al-Noor Hospital
                <br>

                <span>Care made simpler.</span>

            </h1>


            <p class="hero-description">

                Find a doctor, check availability,
                take your token online and follow your
                queue without spending hours waiting
                at the hospital.

            </p>


            <div class="hero-actions">


                <a href="{{ route('book-token') }}"
                   class="primary-btn">

                    Get Online Token →

                </a>


                <a href="{{ route('find-doctors') }}"
                   class="secondary-btn">

                    Find a Doctor

                </a>


            </div>


        </div>


        <!-- DOCTOR AVAILABILITY -->

        <div class="hero-info-card">


            <small>
                DOCTOR AVAILABILITY
            </small>


            <h3>
                Check before you visit
            </h3>


            <p>

                See which doctor is currently
                available for patients.

            </p>


            <div class="status-line">

                <span>
                    LIVE QUEUE
                </span>

                <strong>
                    #18
                </strong>

            </div>


        </div>


    </section>

</div>


<!-- =====================================================
     WHY THIS APP
===================================================== -->

<section class="section">


    <div class="section-title">

        <small>
            PATIENT EXPERIENCE
        </small>

        <h2>
            Your hospital visit, made easier.
        </h2>

        <p>
            Important things patients can do before reaching the hospital.
        </p>

    </div>


    <div class="benefit-grid">


        <a href="{{ route('find-doctors') }}"
           class="benefit-card">

            <div class="benefit-number">
                01
            </div>

            <h3>
                Know your doctor
            </h3>

            <p>

                Check doctors, specialties and
                current availability before visiting.

            </p>

        </a>


        <a href="{{ route('book-token') }}"
           class="benefit-card">

            <div class="benefit-number">
                02
            </div>

            <h3>
                Take your token online
            </h3>

            <p>

                Request your consultation token
                from home instead of waiting in line.

            </p>

        </a>


        <a href="{{ route('live-status') }}"
           class="benefit-card">

            <div class="benefit-number">
                03
            </div>

            <h3>
                Follow your queue
            </h3>

            <p>

                Keep checking your live position
                and know when your turn is getting near.

            </p>

        </a>


    </div>

</section>


<!-- =====================================================
     DEPARTMENTS
===================================================== -->

<section class="section">


    <div class="section-title">

        <small>
            FIND THE RIGHT CARE
        </small>

        <h2>
            Departments
        </h2>

        <p>
            Select a department to explore available doctors.
        </p>

    </div>


    <div class="department-list">


        <a href="{{ route('find-doctors') }}"
           class="department">

            Cardiology →

        </a>


        <a href="{{ route('find-doctors') }}"
           class="department">

            General Medicine →

        </a>


        <a href="{{ route('find-doctors') }}"
           class="department">

            Pediatrics →

        </a>


        <a href="{{ route('find-doctors') }}"
           class="department">

            Dermatology →

        </a>


        <a href="{{ route('find-doctors') }}"
           class="department">

            Orthopedics →

        </a>


    </div>

</section>


<!-- =====================================================
     LIVE QUEUE
===================================================== -->

<section class="section">


    <div class="queue-section">


        <div class="queue-content">

            <h2>
                See the queue before you leave home.
            </h2>


            <p>

                Your time matters. Check the current
                token and live queue status before coming
                to the hospital.

            </p>

        </div>


        <div class="queue-number">

            <small>
                CURRENT TOKEN
            </small>

            <strong>
                #18
            </strong>

        </div>


        <a href="{{ route('live-status') }}"
           class="primary-btn">

            View Live Status →

        </a>


    </div>

</section>


<!-- =====================================================
     APP HELP SYSTEM
===================================================== -->

<section class="section">


    <div class="help-box">


        <div>

            <h2>
                Need help using the app?
            </h2>


            <p>

                Learn what each feature does, how to take
                an online token, how live queue works and
                where to find your information.

            </p>

        </div>


        <a href="#"
           class="help-button">

            Explore App Guide →

        </a>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">

    <p>

        © {{ date('Y') }} Al-Noor Hospital · Patient Portal

    </p>

</footer>


<!-- =====================================================
     MOBILE BOTTOM NAVIGATION
===================================================== -->

<nav class="mobile-bottom-nav">


    <!-- HOME -->

    <a href="{{ route('home') }}"
       class="bottom-item active">

        <svg viewBox="0 0 24 24"
             fill="none"
             stroke-width="1.8">

            <path d="M3 11.5L12 4l9 7.5"></path>

            <path d="M5.5 10v9h13v-9"></path>

        </svg>

        <span>
            Home
        </span>

    </a>


    <!-- DOCTORS -->

    <a href="{{ route('find-doctors') }}"
       class="bottom-item">

        <svg viewBox="0 0 24 24"
             fill="none"
             stroke-width="1.8">

            <circle cx="10" cy="8" r="3"></circle>

            <path d="M4 20c0-3.5 2.5-6 6-6"></path>

            <path d="M17 13v7"></path>

            <path d="M13.5 16.5h7"></path>

        </svg>

        <span>
            Doctors
        </span>

    </a>


    <!-- GET TOKEN -->

    <a href="{{ route('book-token') }}"
       class="bottom-token">

        <svg viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="1.8">

            <path d="M4 7h16v10H4z"></path>

            <path d="M8 7v3"></path>

            <path d="M16 7v3"></path>

            <path d="M8 14h8"></path>

        </svg>

    </a>


    <!-- MY QUEUE -->

    <a href="{{ route('live-status') }}"
       class="bottom-item">

        <svg viewBox="0 0 24 24"
             fill="none"
             stroke-width="1.8">

            <path d="M4 17V7"></path>

            <path d="M9 17V11"></path>

            <path d="M14 17V5"></path>

            <path d="M19 17v-8"></path>

        </svg>

        <span>
            My Queue
        </span>

    </a>


    <!-- PROFILE -->

    <a href="{{ route('profile') }}"
       class="bottom-item">

        <svg viewBox="0 0 24 24"
             fill="none"
             stroke-width="1.8">

            <circle cx="12" cy="8" r="3"></circle>

            <path d="M5 21c0-4 3-7 7-7s7 3 7 7"></path>

        </svg>

        <span>
            Profile
        </span>

    </a>


</nav>


<!-- =====================================================
     PATIENT ACCOUNT SYSTEM
===================================================== -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const registerButton =
        document.getElementById("registerButton");

    const userAvatar =
        document.getElementById("userAvatar");

    const avatarInitials =
        document.getElementById("avatarInitials");


    /*
     * ==================================================
     * GET PATIENT TOKEN
     * ==================================================
     *
     * Login / registration ke baad token yahan save hota hai:
     *
     * alnoor_patient_token
     *
     * Logout ke waqt ye remove ho jata hai.
     */

    let patientToken =
        localStorage.getItem("alnoor_patient_token");


    if (!patientToken) {

        patientToken =
            sessionStorage.getItem("alnoor_patient_token");

    }


    /*
     * ==================================================
     * GET PATIENT USER
     * ==================================================
     *
     * Current registration/login system:
     *
     * alnoor_patient_user
     */

    let patient = null;


    try {

        const savedUser =
            localStorage.getItem("alnoor_patient_user");

        if (savedUser) {

            patient =
                JSON.parse(savedUser);

        }

    } catch (error) {

        console.log(
            "Patient user data could not be read."
        );

        patient = null;

    }


    /*
     * ==================================================
     * BACKUP: SESSION STORAGE
     * ==================================================
     */

    if (!patient) {

        try {

            const savedSessionUser =
                sessionStorage.getItem(
                    "alnoor_patient_user"
                );

            if (savedSessionUser) {

                patient =
                    JSON.parse(savedSessionUser);

            }

        } catch (error) {

            console.log(
                "Session patient data could not be read."
            );

            patient = null;

        }

    }


    /*
     * ==================================================
     * IMPORTANT LOGIN CHECK
     * ==================================================
     *
     * Patient ko logged-in tab hi samjha jayega jab:
     *
     * 1. token available ho
     * 2. patient data available ho
     * 3. patient name available ho
     *
     * Agar logout hua hai:
     *
     * token remove
     * user remove
     *
     * to Register button automatically show hoga.
     */

    const isLoggedIn =
        !!(
            patientToken &&
            patient &&
            patient.name
        );


    /*
     * ==================================================
     * LOGGED OUT
     * ==================================================
     */

    if (!isLoggedIn) {

        if (registerButton) {

            registerButton.style.display =
                "inline-flex";

        }

        if (userAvatar) {

            userAvatar.style.display =
                "none";

        }

        return;

    }


    /*
     * ==================================================
     * LOGGED IN
     * ==================================================
     */

    if (registerButton) {

        registerButton.style.display =
            "none";

    }


    if (userAvatar) {

        userAvatar.style.display =
            "flex";

    }


    /*
     * ==================================================
     * PATIENT NAME
     * ==================================================
     */

    const patientName =
        String(patient.name).trim();


    /*
     * ==================================================
     * CREATE FIRST TWO INITIALS
     * ==================================================
     *
     * Muhammad Yasin
     *        ↓
     * MY
     *
     * Ismab
     *        ↓
     * IS
     */

    const nameParts =
        patientName
            .split(/\s+/)
            .filter(Boolean);


    let initials = "";


    if (nameParts.length >= 2) {

        initials =
            nameParts[0].charAt(0) +
            nameParts[1].charAt(0);

    } else {

        initials =
            nameParts[0].substring(0, 2);

    }


    initials =
        initials.toUpperCase();


    /*
     * ==================================================
     * PROFILE PHOTO
     * ==================================================
     *
     * Profile page se agar photo localStorage mein save hui
     * to Home par avatar mein photo show hogi.
     *
     * Key:
     *
     * alnoor_patient_profile_photo
     */

    let profilePhoto =
        localStorage.getItem(
            "alnoor_patient_profile_photo"
        );


    /*
     * Agar user object ke andar photo ho
     * to usko bhi check karo.
     */

    if (!profilePhoto && patient.profile_photo) {

        profilePhoto =
            patient.profile_photo;

    }


    /*
     * ==================================================
     * SHOW PROFILE PHOTO
     * ==================================================
     */

    if (
        profilePhoto &&
        avatarInitials
    ) {

        avatarInitials.innerHTML = "";


        const image =
            document.createElement("img");


        image.src =
            profilePhoto;


        image.alt =
            patientName;


        image.onerror = function () {

            avatarInitials.textContent =
                initials;

        };


        avatarInitials.appendChild(image);

    }


    /*
     * ==================================================
     * OTHERWISE SHOW INITIALS
     * ==================================================
     */

    else {

        if (avatarInitials) {

            avatarInitials.textContent =
                initials;

        }

    }

});

</script>


</body>

</html>