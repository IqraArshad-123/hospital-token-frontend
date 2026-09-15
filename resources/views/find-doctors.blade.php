
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Find Doctors | Al-Noor Hospital</title>


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


        button,
        input,
        select {
            font-family: inherit;
        }



        /* =========================================
           TOP NAVIGATION
        ========================================= */

        .top-nav {

            height: 76px;

            background: rgba(255,255,255,0.98);

            border-bottom: 1px solid #e4ebf2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 6%;

            position: sticky;

            top: 0;

            z-index: 1000;
        }


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


        .account-area {

            display: flex;

            align-items: center;
        }


        .user-avatar {

            width: 43px;

            height: 43px;

            border-radius: 50%;

            background: #0b5fa5;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 800;

            border: 3px solid #e2f0fa;

            transition: 0.25s;
        }


        .user-avatar:hover {

            transform: scale(1.05);
        }



        /* =========================================
           PAGE
        ========================================= */

        .page-wrapper {

            max-width: 1200px;

            margin: auto;

            padding: 55px 24px 100px;
        }


        .page-header {

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 25px;

            margin-bottom: 30px;
        }


        .page-header small {

            display: block;

            color: #0b5fa5;

            font-size: 9px;

            font-weight: 800;

            letter-spacing: 1.7px;

            margin-bottom: 8px;
        }


        .page-header h1 {

            color: #173e60;

            font-size: 36px;

            line-height: 1.1;

            margin-bottom: 9px;
        }


        .page-header p {

            color: #81909e;

            font-size: 12px;

            line-height: 1.6;

            max-width: 570px;
        }


        .doctor-count {

            flex-shrink: 0;

            background: white;

            border: 1px solid #e2eaf1;

            border-radius: 16px;

            padding: 15px 20px;

            text-align: center;
        }


        .doctor-count strong {

            display: block;

            color: #0b5fa5;

            font-size: 22px;

            margin-bottom: 3px;
        }


        .doctor-count span {

            color: #8997a3;

            font-size: 9px;

            font-weight: 700;
        }



        /* =========================================
           SEARCH PANEL
        ========================================= */

        .search-panel {

            background: white;

            border: 1px solid #e1e9f0;

            border-radius: 20px;

            padding: 18px;

            margin-bottom: 30px;

            display: grid;

            grid-template-columns: 1fr 210px;

            gap: 12px;

            box-shadow: 0 10px 30px rgba(25,65,95,0.04);

            position: relative;
        }


        .search-box {

            position: relative;
        }


        .search-box svg {

            position: absolute;

            left: 15px;

            top: 50%;

            transform: translateY(-50%);

            width: 19px;

            height: 19px;

            stroke: #8795a2;

            pointer-events: none;
        }


        .search-box input {

            width: 100%;

            height: 48px;

            border: 1px solid #dce6ee;

            border-radius: 13px;

            outline: none;

            padding: 0 16px 0 45px;

            color: #173e60;

            font-size: 12px;

            background: #fbfdff;

            transition: 0.25s;
        }


        .search-box input:focus {

            border-color: #8bb9d8;

            background: white;

            box-shadow: 0 0 0 3px rgba(11,95,165,0.06);
        }


        .department-select {

            width: 100%;

            height: 48px;

            border: 1px solid #dce6ee;

            border-radius: 13px;

            outline: none;

            padding: 0 14px;

            color: #385873;

            background: #fbfdff;

            font-size: 12px;

            cursor: pointer;
        }


        .search-hint {

            grid-column: 1 / -1;

            color: #9aa8b4;

            font-size: 9px;

            padding-left: 4px;
        }



        /* =========================================
           DOCTORS GRID
        ========================================= */

        .doctors-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 17px;
        }


        .doctor-card {

            background: white;

            border: 1px solid #e1e9f0;

            border-radius: 22px;

            padding: 22px;

            transition: 0.25s;

            position: relative;
        }


        .doctor-card:hover {

            transform: translateY(-4px);

            box-shadow: 0 18px 40px rgba(25,65,95,0.09);

            border-color: #c8dce9;
        }


        .doctor-card.hidden {

            display: none;
        }


        .doctor-top {

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 12px;

            margin-bottom: 20px;
        }


        .doctor-avatar {

            width: 62px;

            height: 62px;

            border-radius: 18px;

            background: #eaf5fd;

            color: #0b5fa5;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 19px;

            font-weight: 800;
        }


        .availability {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 6px 9px;

            border-radius: 20px;

            font-size: 8px;

            font-weight: 800;

            background: #edf9f2;

            color: #21864a;
        }


        .availability-dot {

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #36a862;
        }


        .availability.off {

            background: #f8eef0;

            color: #a45562;
        }


        .availability.off .availability-dot {

            background: #b46a76;
        }


        .doctor-info h2 {

            color: #173e60;

            font-size: 17px;

            margin-bottom: 6px;
        }


        .doctor-specialty {

            color: #0b5fa5;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 5px;
        }


        .doctor-department {

            color: #8997a3;

            font-size: 10px;

            margin-bottom: 19px;
        }


        .doctor-details {

            border-top: 1px solid #edf1f4;

            padding-top: 16px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 10px;

            margin-bottom: 18px;
        }


        .detail-item {

            background: #f7fafc;

            border-radius: 11px;

            padding: 10px;
        }


        .detail-item span {

            display: block;

            color: #8997a3;

            font-size: 8px;

            margin-bottom: 5px;
        }


        .detail-item strong {

            color: #385873;

            font-size: 10px;
        }


        .doctor-actions {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 8px;
        }


        .view-btn,
        .token-btn {

            display: flex;

            align-items: center;

            justify-content: center;

            min-height: 42px;

            border-radius: 12px;

            font-size: 10px;

            font-weight: 800;

            transition: 0.25s;
        }


        .view-btn {

            background: #f0f6fa;

            color: #38607b;

            border: 1px solid #dce8ef;
        }


        .view-btn:hover {

            background: #e7f1f7;
        }


        .token-btn {

            background: #ff4357;

            color: white;

            box-shadow: 0 8px 18px rgba(255,67,87,0.18);
        }


        .token-btn:hover {

            transform: translateY(-2px);
        }


        .token-btn.disabled {

            background: #e6ebef;

            color: #8997a3;

            box-shadow: none;

            pointer-events: none;
        }



        /* =========================================
           NO RESULTS
        ========================================= */

        .no-results {

            display: none;

            background: white;

            border: 1px solid #e1e9f0;

            border-radius: 20px;

            padding: 45px 20px;

            text-align: center;

            margin-top: 5px;
        }


        .no-results.show {

            display: block;
        }


        .no-results-icon {

            width: 48px;

            height: 48px;

            border-radius: 15px;

            background: #edf6fd;

            color: #0b5fa5;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 14px;

            font-size: 20px;

            font-weight: 800;
        }


        .no-results h3 {

            color: #173e60;

            font-size: 16px;

            margin-bottom: 6px;
        }


        .no-results p {

            color: #8997a3;

            font-size: 10px;

            line-height: 1.6;
        }



        /* =========================================
           INFORMATION
        ========================================= */

        .info-box {

            margin-top: 35px;

            background: #eaf5fd;

            border-radius: 20px;

            padding: 23px 25px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }


        .info-box h3 {

            color: #173e60;

            font-size: 15px;

            margin-bottom: 6px;
        }


        .info-box p {

            color: #71889b;

            font-size: 10px;

            line-height: 1.6;

            max-width: 650px;
        }


        .info-link {

            flex-shrink: 0;

            color: #0b5fa5;

            font-size: 10px;

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
           TABLET
        ========================================= */

        @media (max-width: 1000px) {

            .desktop-links {

                gap: 18px;
            }


            .doctors-grid {

                grid-template-columns: repeat(2, 1fr);
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


            .user-avatar {

                width: 39px;

                height: 39px;
            }


            .page-wrapper {

                padding: 32px 15px 45px;
            }


            .page-header {

                display: block;

                margin-bottom: 22px;
            }


            .page-header h1 {

                font-size: 29px;
            }


            .page-header p {

                font-size: 11px;

                max-width: 100%;
            }


            .doctor-count {

                display: inline-block;

                margin-top: 17px;

                padding: 11px 17px;
            }


            .doctor-count strong {

                display: inline;

                font-size: 17px;

                margin-right: 4px;
            }


            .search-panel {

                grid-template-columns: 1fr;

                padding: 12px;

                border-radius: 17px;

                gap: 8px;

                margin-bottom: 22px;
            }


            .search-hint {

                grid-column: auto;

                font-size: 8px;

                padding-left: 2px;
            }


            .search-box input,
            .department-select {

                height: 45px;

                font-size: 11px;
            }


            .doctors-grid {

                grid-template-columns: 1fr;

                gap: 11px;
            }


            .doctor-card {

                padding: 18px;

                border-radius: 18px;
            }


            .doctor-top {

                margin-bottom: 16px;
            }


            .doctor-avatar {

                width: 56px;

                height: 56px;

                border-radius: 16px;

                font-size: 17px;
            }


            .doctor-info h2 {

                font-size: 16px;
            }


            .doctor-details {

                margin-bottom: 14px;
            }


            .view-btn,
            .token-btn {

                min-height: 40px;

                font-size: 9px;
            }


            .info-box {

                margin-top: 23px;

                padding: 20px;

                display: block;

                border-radius: 18px;
            }


            .info-box h3 {

                font-size: 14px;
            }


            .info-link {

                display: inline-block;

                margin-top: 12px;
            }


            .footer {

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


        <a href="{{ route('find-doctors') }}"
           class="active">
            Doctors
        </a>


        <a href="{{ route('book-token') }}">
            Get Token
        </a>


        <a href="{{ route('live-status') }}">
            My Queue
        </a>

    </nav>


    <div class="account-area">

        @if(session('user'))

            @php

                $user = session('user');

                $userName = is_array($user)
                    ? ($user['name'] ?? 'Patient')
                    : 'Patient';

                $parts = preg_split(
                    '/\s+/',
                    trim($userName)
                );

                $firstInitial =
                    substr($parts[0] ?? 'P', 0, 1);

                $lastInitial =
                    substr(
                        $parts[count($parts) - 1] ?? '',
                        0,
                        1
                    );

                $initials =
                    strtoupper(
                        $firstInitial . $lastInitial
                    );

            @endphp


            <a href="{{ route('profile') }}"
               class="user-avatar"
               title="{{ $userName }}">

                {{ $initials }}

            </a>

        @endif

    </div>

</header>



<!-- =====================================================
     MAIN CONTENT
===================================================== -->

<main class="page-wrapper">


    <!-- PAGE HEADER -->

    <section class="page-header">

        <div>

            <small>
                FIND YOUR DOCTOR
            </small>


            <h1>
                Choose the right doctor for you.
            </h1>


            <p>
                Search by doctor name, specialty or
                department and check availability
                before taking your online token.
            </p>

        </div>


        <div class="doctor-count">

            <strong id="doctorCount">
                06
            </strong>

            <span>
                DOCTORS AVAILABLE
            </span>

        </div>

    </section>



    <!-- =================================================
         SEARCH + FILTER
    ================================================= -->

    <section class="search-panel">


        <!-- SEARCH -->

        <div class="search-box">

            <svg viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8">

                <circle cx="11" cy="11" r="6"></circle>

                <path d="M16 16l5 5"></path>

            </svg>


            <input
                type="text"
                id="doctorSearch"
                placeholder="Search doctor, specialty or department..."
                autocomplete="off"
            >

        </div>



        <!-- DEPARTMENT -->

        <select id="departmentFilter"
                class="department-select">

            <option value="">
                All Departments
            </option>

            <option value="cardiology">
                Cardiology
            </option>

            <option value="general medicine">
                General Medicine
            </option>

            <option value="pediatrics">
                Pediatrics
            </option>

            <option value="dermatology">
                Dermatology
            </option>

            <option value="orthopedics">
                Orthopedics
            </option>

        </select>


        <div class="search-hint">
            Results update automatically as you type.
        </div>

    </section>



    <!-- =================================================
         DOCTORS
    ================================================= -->

    <section class="doctors-grid"
             id="doctorsGrid">



        <!-- DOCTOR 01 -->

        <article class="doctor-card"
                 data-name="Dr. Ahmed Ali"
                 data-specialty="Cardiologist"
                 data-department="Cardiology">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    AA
                </div>


                <div class="availability">

                    <span class="availability-dot"></span>

                    Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Ahmed Ali
                </h2>

                <div class="doctor-specialty">
                    Cardiologist
                </div>

                <div class="doctor-department">
                    Cardiology
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        10:00 AM – 2:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        CURRENT QUEUE
                    </span>

                    <strong>
                        Token #18
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="{{ route('book-token') }}"
                   class="token-btn">

                    Get Token

                </a>

            </div>


        </article>



        <!-- DOCTOR 02 -->

        <article class="doctor-card"
                 data-name="Dr. Fatima Ahmed"
                 data-specialty="General Physician"
                 data-department="General Medicine">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    FA
                </div>


                <div class="availability">

                    <span class="availability-dot"></span>

                    Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Fatima Ahmed
                </h2>

                <div class="doctor-specialty">
                    General Physician
                </div>

                <div class="doctor-department">
                    General Medicine
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        09:00 AM – 1:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        CURRENT QUEUE
                    </span>

                    <strong>
                        Token #24
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="{{ route('book-token') }}"
                   class="token-btn">

                    Get Token

                </a>

            </div>


        </article>



        <!-- DOCTOR 03 -->

        <article class="doctor-card"
                 data-name="Dr. Usman Shah"
                 data-specialty="Pediatrician"
                 data-department="Pediatrics">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    US
                </div>


                <div class="availability">

                    <span class="availability-dot"></span>

                    Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Usman Shah
                </h2>

                <div class="doctor-specialty">
                    Pediatrician
                </div>

                <div class="doctor-department">
                    Pediatrics
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        11:00 AM – 3:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        CURRENT QUEUE
                    </span>

                    <strong>
                        Token #12
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="{{ route('book-token') }}"
                   class="token-btn">

                    Get Token

                </a>

            </div>


        </article>



        <!-- DOCTOR 04 -->

        <article class="doctor-card"
                 data-name="Dr. Sara Ahmed"
                 data-specialty="Dermatologist"
                 data-department="Dermatology">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    SA
                </div>


                <div class="availability off">

                    <span class="availability-dot"></span>

                    Not Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Sara Ahmed
                </h2>

                <div class="doctor-specialty">
                    Dermatologist
                </div>

                <div class="doctor-department">
                    Dermatology
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        04:00 PM – 7:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        STATUS
                    </span>

                    <strong>
                        Starts at 4 PM
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="#"
                   class="token-btn disabled">

                    Unavailable

                </a>

            </div>


        </article>



        <!-- DOCTOR 05 -->

        <article class="doctor-card"
                 data-name="Dr. Hamza Ali"
                 data-specialty="Orthopedic Specialist"
                 data-department="Orthopedics">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    HA
                </div>


                <div class="availability">

                    <span class="availability-dot"></span>

                    Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Hamza Ali
                </h2>

                <div class="doctor-specialty">
                    Orthopedic Specialist
                </div>

                <div class="doctor-department">
                    Orthopedics
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        12:00 PM – 4:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        CURRENT QUEUE
                    </span>

                    <strong>
                        Token #09
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="{{ route('book-token') }}"
                   class="token-btn">

                    Get Token

                </a>

            </div>


        </article>



        <!-- DOCTOR 06 -->

        <article class="doctor-card"
                 data-name="Dr. Noor Malik"
                 data-specialty="Family Physician"
                 data-department="General Medicine">


            <div class="doctor-top">

                <div class="doctor-avatar">
                    NM
                </div>


                <div class="availability">

                    <span class="availability-dot"></span>

                    Available

                </div>

            </div>


            <div class="doctor-info">

                <h2>
                    Dr. Noor Malik
                </h2>

                <div class="doctor-specialty">
                    Family Physician
                </div>

                <div class="doctor-department">
                    General Medicine
                </div>

            </div>


            <div class="doctor-details">

                <div class="detail-item">

                    <span>
                        CONSULTATION
                    </span>

                    <strong>
                        05:00 PM – 9:00 PM
                    </strong>

                </div>


                <div class="detail-item">

                    <span>
                        CURRENT QUEUE
                    </span>

                    <strong>
                        Token #31
                    </strong>

                </div>

            </div>


            <div class="doctor-actions">

                <a href="{{ route('find-doctors') }}"
                   class="view-btn">

                    View Doctor

                </a>


                <a href="{{ route('book-token') }}"
                   class="token-btn">

                    Get Token

                </a>

            </div>


        </article>


    </section>



    <!-- =================================================
         NO RESULTS
    ================================================= -->

    <section class="no-results"
             id="noResults">

        <div class="no-results-icon">
            ?
        </div>


        <h3>
            No doctors found
        </h3>


        <p>
            Try another doctor name, specialty or department.
        </p>

    </section>



    <!-- =================================================
         INFORMATION
    ================================================= -->

    <section class="info-box">

        <div>

            <h3>
                Check availability before taking a token.
            </h3>


            <p>
                Doctor availability and queue information
                will help you decide when to visit the
                hospital.
            </p>

        </div>


        <a href="{{ route('book-token') }}"
           class="info-link">

            Continue to Get Token →

        </a>

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
       class="bottom-item active">

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
     LIVE SEARCH JAVASCRIPT
===================================================== -->

<script>

    const searchInput =
        document.getElementById('doctorSearch');

    const departmentFilter =
        document.getElementById('departmentFilter');

    const doctorCards =
        document.querySelectorAll('.doctor-card');

    const noResults =
        document.getElementById('noResults');

    const doctorCount =
        document.getElementById('doctorCount');


    function filterDoctors() {

        const searchValue =
            searchInput.value
                .trim()
                .toLowerCase();


        const departmentValue =
            departmentFilter.value
                .trim()
                .toLowerCase();


        let visibleDoctors = 0;


        doctorCards.forEach(function(card) {

            const name =
                card.dataset.name.toLowerCase();

            const specialty =
                card.dataset.specialty.toLowerCase();

            const department =
                card.dataset.department.toLowerCase();


            const matchesSearch =
                searchValue === '' ||
                name.includes(searchValue) ||
                specialty.includes(searchValue) ||
                department.includes(searchValue);


            const matchesDepartment =
                departmentValue === '' ||
                department === departmentValue;


            if (matchesSearch && matchesDepartment) {

                card.classList.remove('hidden');

                visibleDoctors++;

            } else {

                card.classList.add('hidden');

            }

        });


        doctorCount.textContent =
            String(visibleDoctors).padStart(2, '0');


        if (visibleDoctors === 0) {

            noResults.classList.add('show');

        } else {

            noResults.classList.remove('show');

        }

    }


    searchInput.addEventListener(
        'input',
        filterDoctors
    );


    departmentFilter.addEventListener(
        'change',
        filterDoctors
    );


</script>


</body>

</html>
