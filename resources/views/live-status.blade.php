<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Live Status | Al-Noor Hospital</title>

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
            min-height: 100vh;
            padding-bottom: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
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
            font-size: 21px;
            font-weight: 800;
            box-shadow: 0 8px 20px rgba(11,95,165,0.18);
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
           DESKTOP NAV
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
           ACCOUNT
        ========================================= */

        .account-area {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            min-width: 70px;
        }

        .register-btn {
            background: #ff4357;
            color: white;
            padding: 10px 17px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 700;
            transition: 0.25s;
            box-shadow: 0 8px 18px rgba(255,67,87,0.18);
        }

        .register-btn:hover {
            transform: translateY(-2px);
            background: #e9364a;
        }

        .user-avatar {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: #0b5fa5;
            color: white;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 800;
            border: 3px solid #e2f0fa;
            cursor: pointer;
            text-transform: uppercase;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        /* =========================================
           PAGE
        ========================================= */

        .page {
            max-width: 1100px;
            margin: 0 auto;
            padding: 45px 24px 80px;
        }


        /* =========================================
           PAGE HEADER
        ========================================= */

        .page-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-header small {
            color: #0b5fa5;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.6px;
        }

        .page-header h1 {
            color: #173e60;
            font-size: 38px;
            margin-top: 8px;
            margin-bottom: 10px;
        }

        .page-header p {
            color: #8795a2;
            font-size: 13px;
            line-height: 1.6;
        }


        /* =========================================
           REGISTRATION REQUIRED
        ========================================= */

        .auth-card {
            max-width: 650px;
            margin: 30px auto;
            background: white;
            border: 1px solid #e1e9f0;
            border-radius: 25px;
            padding: 42px 35px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(25,65,95,0.07);
        }

        .auth-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 21px;
            background: #edf6fd;
            color: #0b5fa5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-icon svg {
            width: 32px;
            height: 32px;
        }

        .auth-card h2 {
            color: #173e60;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .auth-card p {
            color: #84929f;
            font-size: 12px;
            line-height: 1.7;
            max-width: 480px;
            margin: 0 auto 25px;
        }

        .auth-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ff4357;
            color: white;
            padding: 13px 21px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 10px 22px rgba(255,67,87,0.20);
            transition: 0.25s;
            border: none;
            cursor: pointer;
        }

        .primary-btn:hover {
            transform: translateY(-2px);
            background: #e9364a;
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #edf6fd;
            color: #0b5fa5;
            padding: 13px 21px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 800;
            transition: 0.25s;
        }

        .secondary-btn:hover {
            background: #e1f0fa;
        }


        /* =========================================
           NO TOKEN
        ========================================= */

        .no-token-card {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            border: 1px solid #e2eaf1;
            border-radius: 25px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(25,65,95,0.06);
        }

        .no-token-icon {
            width: 65px;
            height: 65px;
            border-radius: 20px;
            background: #fff3f4;
            color: #ff4357;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
        }

        .no-token-icon svg {
            width: 29px;
            height: 29px;
        }

        .no-token-card h2 {
            color: #173e60;
            font-size: 23px;
            margin-bottom: 9px;
        }

        .no-token-card p {
            color: #84929f;
            font-size: 12px;
            line-height: 1.7;
            margin-bottom: 23px;
        }


        /* =========================================
           QUEUE AREA
        ========================================= */

        .queue-area {
            display: none;
        }

        .welcome-bar {
            background: #073d66;
            color: white;
            border-radius: 22px;
            padding: 23px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 18px;
        }

        .welcome-bar small {
            color: #bcd4e5;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.1px;
        }

        .welcome-bar h2 {
            font-size: 21px;
            margin-top: 6px;
        }

        .live-clock {
            min-width: 135px;
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 15px;
            padding: 12px 15px;
            text-align: center;
        }

        .live-clock span {
            display: block;
            color: #bcd4e5;
            font-size: 8px;
            margin-bottom: 4px;
        }

        .live-clock strong {
            color: white;
            font-size: 16px;
        }


        /* =========================================
           QUEUE GRID
        ========================================= */

        .queue-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 18px;
        }


        /* =========================================
           MAIN TOKEN CARD
        ========================================= */

        .main-token-card {
            background: white;
            border: 1px solid #e2eaf1;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(25,65,95,0.06);
        }

        .card-label {
            color: #0b5fa5;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.3px;
            margin-bottom: 10px;
        }

        .doctor-name {
            color: #173e60;
            font-size: 23px;
            margin-bottom: 5px;
        }

        .department-name {
            color: #8795a2;
            font-size: 11px;
            margin-bottom: 25px;
        }

        .token-box {
            background: #edf6fd;
            border-radius: 20px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .token-box small {
            display: block;
            color: #6f8799;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .token-number {
            color: #0b5fa5;
            font-size: 55px;
            line-height: 1;
            font-weight: 800;
        }

        .token-status {
            background: white;
            border-radius: 15px;
            padding: 13px 16px;
            text-align: center;
            min-width: 105px;
        }

        .token-status span {
            display: block;
            color: #8998a6;
            font-size: 8px;
            margin-bottom: 5px;
        }

        .token-status strong {
            color: #0b5fa5;
            font-size: 17px;
        }


        /* =========================================
           WAITING CARD
        ========================================= */

        .waiting-card {
            margin-top: 18px;
            background: #073d66;
            border-radius: 21px;
            padding: 22px;
            color: white;
        }

        .waiting-card small {
            display: block;
            color: #bcd4e5;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 7px;
        }

        .waiting-time {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .waiting-time strong {
            font-size: 25px;
        }

        .clock-icon {
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: rgba(255,255,255,0.10);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .clock-icon svg {
            width: 23px;
            height: 23px;
        }


        /* =========================================
           DETAILS CARD
        ========================================= */

        .details-card {
            background: white;
            border: 1px solid #e2eaf1;
            border-radius: 25px;
            padding: 27px;
            box-shadow: 0 15px 40px rgba(25,65,95,0.06);
        }

        .details-card h3 {
            color: #173e60;
            font-size: 17px;
            margin-bottom: 20px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 14px 0;
            border-bottom: 1px solid #edf1f4;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-row span {
            color: #8795a2;
            font-size: 10px;
        }

        .detail-row strong {
            color: #385873;
            font-size: 11px;
            text-align: right;
        }


        /* =========================================
           QUEUE POSITION
        ========================================= */

        .position-card {
            background: #eaf5fd;
            border-radius: 21px;
            padding: 23px;
            margin-top: 18px;
        }

        .position-card small {
            display: block;
            color: #6e8799;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 7px;
        }

        .position-card h3 {
            color: #173e60;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .position-card p {
            color: #7d91a0;
            font-size: 10px;
        }


        /* =========================================
           REFRESH
        ========================================= */

        .refresh-area {
            margin-top: 18px;
            display: flex;
            justify-content: flex-end;
        }

        .refresh-btn {
            background: #edf6fd;
            color: #0b5fa5;
            border: none;
            padding: 11px 17px;
            border-radius: 11px;
            font-size: 10px;
            font-weight: 800;
            cursor: pointer;
            transition: 0.25s;
        }

        .refresh-btn:hover {
            background: #dfeef9;
        }


        /* =========================================
           MOBILE NAV
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
            box-shadow: 0 12px 40px rgba(20,60,90,0.16);
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
            box-shadow: 0 9px 22px rgba(255,67,87,0.25);
        }

        .bottom-token svg {
            width: 21px;
            height: 21px;
        }


        /* =========================================
           FOOTER
        ========================================= */

        .footer {
            background: #073452;
            color: #c6d8e5;
            text-align: center;
            padding: 30px 20px;
            font-size: 10px;
            margin-top: 30px;
        }


        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 850px) {

            .desktop-links {
                gap: 18px;
            }

            .queue-grid {
                grid-template-columns: 1fr;
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

            .page {
                padding: 30px 14px 50px;
            }

            .page-header {
                margin-bottom: 25px;
            }

            .page-header h1 {
                font-size: 30px;
            }

            .page-header p {
                font-size: 11px;
            }

            .auth-card {
                padding: 32px 20px;
                border-radius: 21px;
            }

            .auth-card h2 {
                font-size: 21px;
            }

            .auth-actions {
                flex-direction: column;
            }

            .primary-btn,
            .secondary-btn {
                width: 100%;
            }

            .no-token-card {
                padding: 32px 20px;
                border-radius: 21px;
            }

            .welcome-bar {
                border-radius: 20px;
                padding: 19px;
                flex-direction: column;
                align-items: stretch;
            }

            .welcome-bar h2 {
                font-size: 19px;
            }

            .live-clock {
                width: 100%;
            }

            .main-token-card {
                padding: 22px;
                border-radius: 21px;
            }

            .token-box {
                padding: 20px;
                flex-direction: column;
                align-items: stretch;
            }

            .token-number {
                font-size: 48px;
            }

            .token-status {
                width: 100%;
            }

            .details-card {
                border-radius: 21px;
                padding: 22px;
            }

            .mobile-bottom-nav {
                display: flex;
            }

            .footer {
                padding-bottom: 110px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     TOP NAVIGATION
===================================================== -->

<header class="top-nav">


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


    <nav class="desktop-links">

        <a href="{{ route('home') }}">
            Home
        </a>

        <a href="{{ route('find-doctors') }}">
            Doctors
        </a>

        <a href="{{ route('book-token') }}">
            My Token
        </a>

        <a href="{{ route('live-status') }}"
           class="active">
            Live Status
        </a>

    </nav>


    <div class="account-area">

        <a href="{{ route('register') }}"
           class="register-btn"
           id="registerButton">

            Register

        </a>


        <a href="{{ route('profile') }}"
           class="user-avatar"
           id="userAvatar">

            P

        </a>

    </div>


</header>



<!-- =====================================================
     MAIN PAGE
===================================================== -->

<main class="page">


    <div class="page-header">

        <small>
            LIVE QUEUE
        </small>

        <h1>
            Track Your Token
        </h1>

        <p>
            Check your current token position and follow
            the live consultation queue.
        </p>

    </div>



    <!-- =================================================
         GUEST AREA
    ================================================== -->

    <section id="guestArea"
             class="auth-card"
             style="display:none;">

        <div class="auth-icon">

            <svg viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8">

                <circle cx="12"
                        cy="8"
                        r="3">
                </circle>

                <path d="M5 21c0-4 3-7 7-7s7 3 7 7">
                </path>

            </svg>

        </div>


        <h2>
            Registration Required
        </h2>


        <p>
            Please register as a patient before you can
            view your queue or track an online token.
        </p>


        <div class="auth-actions">

            <a href="{{ route('register') }}"
               class="primary-btn">

                Register Now →

            </a>


            <a href="{{ route('home') }}"
               class="secondary-btn">

                Back to Home

            </a>

        </div>

    </section>



    <!-- =================================================
         REGISTERED BUT NO TOKEN
    ================================================== -->

    <section id="noTokenArea"
             class="no-token-card"
             style="display:none;">

        <div class="no-token-icon">

            <svg viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8">

                <rect x="4"
                      y="5"
                      width="16"
                      height="14"
                      rx="2">
                </rect>

                <path d="M8 3v4"></path>

                <path d="M16 3v4"></path>

                <path d="M4 9h16"></path>

                <path d="M9 14h6"></path>

            </svg>

        </div>


        <h2>
            No Active Token
        </h2>


        <p>
            You are registered, but you don't have an active
            consultation token yet. Book your token to see
            your queue position here.
        </p>


        <a href="{{ route('book-token') }}"
           class="primary-btn">

            Get Online Token →

        </a>

    </section>



    <!-- =================================================
         QUEUE AREA
    ================================================== -->

    <section id="queueArea"
             class="queue-area">


        <!-- WELCOME -->

        <div class="welcome-bar">

            <div>

                <small>
                    PATIENT QUEUE
                </small>

                <h2>
                    Hello, <span id="patientName">Patient</span>
                </h2>

            </div>


            <div class="live-clock">

                <span>
                    CURRENT TIME
                </span>

                <strong id="liveClock">
                    --:--:--
                </strong>

            </div>

        </div>



        <div class="queue-grid">


            <!-- =========================================
                 LEFT COLUMN
            ========================================== -->

            <div>


                <div class="main-token-card">


                    <div class="card-label">
                        YOUR CONSULTATION
                    </div>


                    <h2 class="doctor-name"
                        id="doctorName">

                        Doctor

                    </h2>


                    <div class="department-name"
                         id="departmentName">

                        Department

                    </div>


                    <div class="token-box">


                        <div>

                            <small>
                                YOUR TOKEN
                            </small>

                            <div class="token-number"
                                 id="tokenNumber">

                                #--

                            </div>

                        </div>


                        <div class="token-status">

                            <span>
                                NOW SERVING
                            </span>

                            <strong id="currentToken">
                                #18
                            </strong>

                        </div>


                    </div>


                    <div class="waiting-card">


                        <small>
                            ESTIMATED WAITING TIME
                        </small>


                        <div class="waiting-time">

                            <strong id="waitingTime">
                                20–30 min
                            </strong>


                            <div class="clock-icon">

                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <circle cx="12"
                                            cy="12"
                                            r="8.5">
                                    </circle>

                                    <path d="M12 7v5l3 2">
                                    </path>

                                </svg>

                            </div>

                        </div>

                    </div>


                </div>


                <div class="position-card">

                    <small>
                        YOUR QUEUE POSITION
                    </small>

                    <h3 id="aheadCount">
                        0 people
                    </h3>

                    <p id="positionMessage">
                        Your turn is getting closer.
                    </p>

                </div>


                <div class="refresh-area">

                    <button type="button"
                            class="refresh-btn"
                            id="refreshButton">

                        ↻ Refresh Queue

                    </button>

                </div>


            </div>



            <!-- =========================================
                 RIGHT COLUMN
            ========================================== -->

            <div>

                <div class="details-card">

                    <h3>
                        Appointment Details
                    </h3>


                    <div class="detail-row">

                        <span>
                            Patient
                        </span>

                        <strong id="detailPatient">
                            —
                        </strong>

                    </div>


                    <div class="detail-row">

                        <span>
                            Doctor
                        </span>

                        <strong id="detailDoctor">
                            —
                        </strong>

                    </div>


                    <div class="detail-row">

                        <span>
                            Department
                        </span>

                        <strong id="detailDepartment">
                            —
                        </strong>

                    </div>


                    <div class="detail-row">

                        <span>
                            Date
                        </span>

                        <strong id="detailDate">
                            —
                        </strong>

                    </div>


                    <div class="detail-row">

                        <span>
                            Time
                        </span>

                        <strong id="detailTime">
                            —
                        </strong>

                    </div>


                    <div class="detail-row">

                        <span>
                            Token
                        </span>

                        <strong id="detailToken">
                            —
                        </strong>

                    </div>

                </div>

            </div>


        </div>


    </section>


</main>



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
       class="bottom-item">

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

            <circle cx="10"
                    cy="8"
                    r="3">
            </circle>

            <path d="M4 20c0-3.5 2.5-6 6-6">
            </path>

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
       class="bottom-item active">

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

            <circle cx="12"
                    cy="8"
                    r="3">
            </circle>

            <path d="M5 21c0-4 3-7 7-7s7 3 7 7">
            </path>

        </svg>

        <span>
            Profile
        </span>

    </a>


</nav>



<script>

    /* =========================================
       AUTH DATA
    ========================================= */

    function getPatientToken() {

        return localStorage.getItem("alnoor_patient_token")
            || sessionStorage.getItem("alnoor_patient_token");

    }


    function getPatientUser() {

        const localUser =
            localStorage.getItem("alnoor_patient_user");

        const sessionUser =
            sessionStorage.getItem("alnoor_patient_user");


        const userData =
            localUser || sessionUser;


        if (!userData) {
            return null;
        }


        try {

            return JSON.parse(userData);

        } catch (error) {

            return null;

        }

    }



    /* =========================================
       INITIALS
    ========================================= */

    function getInitials(name) {

        if (!name) {
            return "P";
        }


        const words =
            name.trim().split(/\s+/);


        if (words.length === 1) {

            return words[0]
                .substring(0, 2)
                .toUpperCase();

        }


        return (
            words[0][0] +
            words[words.length - 1][0]
        ).toUpperCase();

    }



    /* =========================================
       PROFILE AVATAR
    ========================================= */

    function loadAvatar(user) {

        const registerButton =
            document.getElementById("registerButton");

        const avatar =
            document.getElementById("userAvatar");


        if (!user) {

            registerButton.style.display = "inline-flex";
            avatar.style.display = "none";

            return;

        }


        registerButton.style.display = "none";
        avatar.style.display = "flex";


        const savedPhoto =
            localStorage.getItem(
                "alnoor_patient_profile_photo"
            );


        if (savedPhoto) {

            avatar.innerHTML =
                `<img src="${savedPhoto}" alt="Profile">`;

        } else {

            avatar.textContent =
                getInitials(user.name);

        }

    }



    /* =========================================
       LIVE CLOCK
    ========================================= */

    function updateLiveClock() {

        const clock =
            document.getElementById("liveClock");


        const now = new Date();


        let hours = now.getHours();

        const minutes =
            String(now.getMinutes()).padStart(2, "0");

        const seconds =
            String(now.getSeconds()).padStart(2, "0");


        const ampm =
            hours >= 12 ? "PM" : "AM";


        hours =
            hours % 12 || 12;


        clock.textContent =
            `${String(hours).padStart(2, "0")}:${minutes}:${seconds} ${ampm}`;

    }


    updateLiveClock();

    setInterval(updateLiveClock, 1000);



    /* =========================================
       FORMAT DATE
    ========================================= */

    function formatDate(dateValue) {

        if (!dateValue) {
            return "—";
        }


        const date =
            new Date(dateValue);


        if (isNaN(date.getTime())) {
            return dateValue;
        }


        return date.toLocaleDateString(
            "en-US",
            {
                weekday: "short",
                month: "short",
                day: "numeric",
                year: "numeric"
            }
        );

    }



    /* =========================================
       LOAD QUEUE
    ========================================= */

    function loadQueue() {

        const token =
            getPatientToken();

        const user =
            getPatientUser();


        const guestArea =
            document.getElementById("guestArea");

        const noTokenArea =
            document.getElementById("noTokenArea");

        const queueArea =
            document.getElementById("queueArea");


        guestArea.style.display = "none";
        noTokenArea.style.display = "none";
        queueArea.style.display = "none";


        /* -------------------------------------
           NOT REGISTERED
        ------------------------------------- */

        if (!token || !user) {

            guestArea.style.display = "block";

            loadAvatar(null);

            return;

        }


        loadAvatar(user);


        /* -------------------------------------
           CHECK BOOKED TOKEN
        ------------------------------------- */

        const savedToken =
            sessionStorage.getItem("latestToken")
            || localStorage.getItem("latestToken");


        if (!savedToken) {

            noTokenArea.style.display = "block";

            return;

        }


        let booking = null;


        try {

            booking =
                JSON.parse(savedToken);

        } catch (error) {

            booking = null;

        }


        if (!booking) {

            noTokenArea.style.display = "block";

            return;

        }


        /* -------------------------------------
           SHOW QUEUE
        ------------------------------------- */

        queueArea.style.display = "block";


        const patientName =
            booking.patientName
            || user.name
            || "Patient";


        const doctor =
            booking.doctor
            || booking.doctorName
            || "Doctor";


        const department =
            booking.department
            || "General Medicine";


        const tokenNumber =
            parseInt(
                booking.token
                || booking.tokenNumber
                || 20
            );


        const currentToken =
            parseInt(
                booking.currentToken
                || 18
            );


        const date =
            booking.date
            || booking.appointmentDate
            || "";


        const time =
            booking.time
            || booking.appointmentTime
            || "—";


        /* -------------------------------------
           BASIC DATA
        ------------------------------------- */

        document.getElementById("patientName")
            .textContent = patientName;


        document.getElementById("doctorName")
            .textContent = doctor;


        document.getElementById("departmentName")
            .textContent = department;


        document.getElementById("tokenNumber")
            .textContent = "#" + tokenNumber;


        document.getElementById("currentToken")
            .textContent = "#" + currentToken;


        /* -------------------------------------
           DETAILS
        ------------------------------------- */

        document.getElementById("detailPatient")
            .textContent = patientName;


        document.getElementById("detailDoctor")
            .textContent = doctor;


        document.getElementById("detailDepartment")
            .textContent = department;


        document.getElementById("detailDate")
            .textContent = formatDate(date);


        document.getElementById("detailTime")
            .textContent = time;


        document.getElementById("detailToken")
            .textContent = "#" + tokenNumber;



        /* -------------------------------------
           QUEUE POSITION
        ------------------------------------- */

        const ahead =
            Math.max(
                0,
                tokenNumber - currentToken - 1
            );


        const aheadElement =
            document.getElementById("aheadCount");


        if (ahead === 0) {

            aheadElement.textContent =
                "Your turn";

            document.getElementById("positionMessage")
                .textContent =
                "You are next in the queue.";

        } else {

            aheadElement.textContent =
                ahead + (ahead === 1
                    ? " person"
                    : " people");


            document.getElementById("positionMessage")
                .textContent =
                "Patients are ahead of you.";

        }



        /* -------------------------------------
           WAITING TIME
        ------------------------------------- */

        const waitingMinutes =
            Math.max(
                5,
                ahead * 5
            );


        const waitingTime =
            document.getElementById("waitingTime");


        if (ahead === 0) {

            waitingTime.textContent =
                "You're next";

        } else {

            waitingTime.textContent =
                waitingMinutes + "–" +
                (waitingMinutes + 10) +
                " min";

        }

    }



    /* =========================================
       REFRESH
    ========================================= */

    document
        .getElementById("refreshButton")
        .addEventListener(
            "click",
            function () {

                loadQueue();

            }
        );



    /* =========================================
       INITIAL LOAD
    ========================================= */

    document.addEventListener(
        "DOMContentLoaded",
        function () {

            loadQueue();

        }
    );

</script>


</body>

</html>