<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Al-Noor Hospital</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0b6684;
            --primary-dark: #084e68;
            --primary-light: #e8f7fa;

            --teal: #10a6a6;
            --teal-light: #e8fbfb;

            --blue: #1769aa;
            --blue-light: #edf5ff;

            --green: #16845b;
            --green-light: #eaf8f1;

            --orange: #d9822b;
            --orange-light: #fff5e8;

            --red: #d94b5b;
            --red-light: #fff0f2;

            --white: #ffffff;
            --bg: #f4f9fa;
            --card: #ffffff;

            --text: #173b4d;
            --muted: #708896;

            --border: #dce9ed;

            --shadow-sm:
                0 5px 20px rgba(20, 73, 91, 0.06);

            --shadow:
                0 12px 35px rgba(20, 73, 91, 0.09);

            --radius: 18px;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }


        button,
        input {
            font-family: inherit;
        }


        button {
            cursor: pointer;
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        .app {
            min-height: 100vh;
            display: flex;
        }


        /* =========================================================
           SIDEBAR
        ========================================================== */

        .sidebar {
            width: 260px;
            min-height: 100vh;

            position: fixed;
            left: 0;
            top: 0;

            background:
                linear-gradient(
                    160deg,
                    #084e68 0%,
                    #0b6684 55%,
                    #0b7d87 100%
                );

            color: white;
            padding: 24px 16px;

            display: flex;
            flex-direction: column;

            z-index: 1000;
            overflow-y: auto;
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 8px 10px 24px;

            border-bottom:
                1px solid rgba(255,255,255,.15);
        }


        .brand-logo {
            width: 46px;
            height: 46px;

            border-radius: 14px;

            background: white;
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
            font-weight: 800;

            box-shadow:
                0 8px 20px rgba(0,0,0,.12);
        }


        .brand-text strong {
            display: block;
            font-size: 16px;
            line-height: 1.2;
        }


        .brand-text span {
            display: block;
            margin-top: 4px;
            font-size: 11px;
            opacity: .72;
        }


        .side-user {
            margin: 20px 4px;
            padding: 14px;

            border-radius: 16px;

            background:
                rgba(255,255,255,.10);

            border:
                1px solid rgba(255,255,255,.10);
        }


        .side-user-top {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        .avatar {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: white;
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 15px;
            font-weight: 800;

            flex-shrink: 0;
        }


        .side-user-info {
            min-width: 0;
        }


        .side-user-name {
            font-size: 13px;
            font-weight: 700;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .side-user-role {
            margin-top: 3px;
            font-size: 11px;
            opacity: .72;
            text-transform: capitalize;
        }


        .side-label {
            padding: 4px 10px 8px;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: .12em;
            text-transform: uppercase;

            opacity: .55;
        }


        .side-menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }


        .side-link {
            width: 100%;

            display: flex;
            align-items: center;
            gap: 12px;

            padding: 12px 13px;

            border-radius: 13px;

            color: rgba(255,255,255,.80);

            font-size: 13px;
            font-weight: 600;

            transition: .2s ease;
        }


        .side-link:hover,
        .side-link.active {
            background: rgba(255,255,255,.14);
            color: white;
        }


        .side-icon {
            width: 27px;
            height: 27px;

            border-radius: 8px;

            background: rgba(255,255,255,.10);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
        }


        .side-bottom {
            margin-top: auto;
            padding-top: 20px;
        }


        .logout-btn {
            width: 100%;

            border: 0;

            padding: 12px 14px;

            border-radius: 13px;

            background: rgba(255,255,255,.10);
            color: white;

            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 13px;
            font-weight: 600;
        }


        .logout-btn:hover {
            background: rgba(255,255,255,.18);
        }


        /* =========================================================
           MAIN
        ========================================================== */

        .main {
            width: calc(100% - 260px);
            margin-left: 260px;
            min-height: 100vh;
        }


        .topbar {
            height: 76px;

            background: rgba(255,255,255,.94);

            border-bottom:
                1px solid var(--border);

            padding: 0 30px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            position: sticky;
            top: 0;

            z-index: 500;

            backdrop-filter: blur(12px);
        }


        .mobile-menu-btn {
            display: none;
        }


        .top-title h1 {
            font-size: 20px;
            color: var(--text);
        }


        .top-title p {
            margin-top: 4px;
            font-size: 12px;
            color: var(--muted);
        }


        .top-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        .icon-btn {
            width: 40px;
            height: 40px;

            border: 1px solid var(--border);
            border-radius: 12px;

            background: white;
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 16px;
        }


        .top-profile {
            display: flex;
            align-items: center;
            gap: 9px;
            padding-left: 7px;
        }


        .top-profile .avatar {
            width: 36px;
            height: 36px;
            font-size: 13px;
        }


        .top-profile-info strong {
            display: block;
            font-size: 12px;
        }


        .top-profile-info span {
            display: block;

            margin-top: 2px;

            font-size: 10px;
            color: var(--muted);

            text-transform: capitalize;
        }


        /* =========================================================
           CONTENT
        ========================================================== */

        .content {
            max-width: 1280px;
            margin: 0 auto;
            padding: 28px 30px 60px;
        }


        .hero {
            position: relative;
            overflow: hidden;

            border-radius: 24px;
            padding: 30px;

            background:
                linear-gradient(
                    135deg,
                    #084e68,
                    #0a7582
                );

            color: white;

            box-shadow: var(--shadow);
        }


        .hero::before {
            content: "";

            position: absolute;

            width: 240px;
            height: 240px;

            border-radius: 50%;

            border:
                1px solid rgba(255,255,255,.12);

            right: -90px;
            top: -110px;
        }


        .hero::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            border:
                1px solid rgba(255,255,255,.09);

            right: 20px;
            bottom: -120px;
        }


        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
        }


        .hero-badge {
            display: inline-flex;
            align-items: center;

            padding: 7px 11px;

            border-radius: 30px;

            background:
                rgba(255,255,255,.12);

            border:
                1px solid rgba(255,255,255,.13);

            font-size: 10px;
            font-weight: 700;

            letter-spacing: .08em;
            text-transform: uppercase;
        }


        .hero h2 {
            margin-top: 14px;
            font-size: 28px;
            line-height: 1.2;
        }


        .hero p {
            margin-top: 9px;

            max-width: 580px;

            color: rgba(255,255,255,.80);

            font-size: 13px;
            line-height: 1.7;
        }


        .hero-user {
            margin-top: 20px;

            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 9px 12px;

            border-radius: 12px;

            background:
                rgba(255,255,255,.10);

            font-size: 12px;
        }


        /* =========================================================
           STATS
        ========================================================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 20px;
        }


        .stat-card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: var(--radius);

            padding: 18px;

            box-shadow: var(--shadow-sm);

            display: flex;
            align-items: center;
            gap: 13px;
        }


        .stat-icon {
            width: 44px;
            height: 44px;

            border-radius: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;

            flex-shrink: 0;
        }


        .stat-card:nth-child(1) .stat-icon {
            background: var(--blue-light);
            color: var(--blue);
        }


        .stat-card:nth-child(2) .stat-icon {
            background: var(--teal-light);
            color: var(--teal);
        }


        .stat-card:nth-child(3) .stat-icon {
            background: var(--orange-light);
            color: var(--orange);
        }


        .stat-info span {
            display: block;
            font-size: 11px;
            color: var(--muted);
        }


        .stat-info strong {
            display: block;

            margin-top: 4px;

            font-size: 19px;
            color: var(--text);
        }


        /* =========================================================
           SECTIONS
        ========================================================== */

        .section {
            margin-top: 30px;
        }


        .section-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            margin-bottom: 15px;
        }


        .section-title h3 {
            font-size: 19px;
        }


        .section-title p {
            margin-top: 4px;
            font-size: 11px;
            color: var(--muted);
        }


        .role-label {
            padding: 7px 10px;

            border-radius: 20px;

            background: var(--primary-light);
            color: var(--primary);

            font-size: 10px;
            font-weight: 700;

            text-transform: capitalize;
        }


        /* =========================================================
           FEATURE CARDS
        ========================================================== */

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }


        .feature-card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: var(--radius);

            padding: 20px;

            box-shadow: var(--shadow-sm);

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                border-color .2s ease;
        }


        .feature-card:hover {
            transform: translateY(-3px);

            box-shadow: var(--shadow);

            border-color:
                rgba(11,102,132,.25);
        }


        .feature-icon {
            width: 46px;
            height: 46px;

            border-radius: 14px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;

            margin-bottom: 15px;
        }


        .feature-card:nth-child(1) .feature-icon {
            background: var(--blue-light);
            color: var(--blue);
        }


        .feature-card:nth-child(2) .feature-icon {
            background: var(--teal-light);
            color: var(--teal);
        }


        .feature-card:nth-child(3) .feature-icon {
            background: var(--green-light);
            color: var(--green);
        }


        .feature-card:nth-child(4) .feature-icon {
            background: var(--orange-light);
            color: var(--orange);
        }


        .feature-card:nth-child(5) .feature-icon {
            background: var(--red-light);
            color: var(--red);
        }


        .feature-card:nth-child(6) .feature-icon {
            background: var(--primary-light);
            color: var(--primary);
        }


        .feature-card h4 {
            font-size: 15px;
            color: var(--text);
        }


        .feature-card p {
            margin-top: 7px;

            font-size: 11px;
            line-height: 1.65;

            color: var(--muted);
        }


        .feature-arrow {
            margin-top: 14px;

            display: inline-flex;
            align-items: center;
            gap: 5px;

            color: var(--primary);

            font-size: 11px;
            font-weight: 700;
        }


        /* =========================================================
           INFORMATION
        ========================================================== */

        .info-grid {
            display: grid;

            grid-template-columns: 1.4fr .8fr;

            gap: 16px;

            margin-top: 30px;
        }


        .info-card {
            background: white;

            border:
                1px solid var(--border);

            border-radius: var(--radius);

            padding: 20px;

            box-shadow: var(--shadow-sm);
        }


        .info-card h3 {
            font-size: 15px;
        }


        .info-card > p {
            margin-top: 6px;

            color: var(--muted);

            font-size: 11px;
            line-height: 1.6;
        }


        .info-list {
            margin-top: 15px;

            display: flex;
            flex-direction: column;

            gap: 10px;
        }


        .info-row {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 10px;

            border-radius: 11px;

            background: var(--bg);
        }


        .info-row-icon {
            width: 32px;
            height: 32px;

            border-radius: 9px;

            background: white;

            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
        }


        .info-row span {
            font-size: 11px;
            color: var(--muted);
        }


        .info-row strong {
            display: block;

            margin-top: 2px;

            font-size: 12px;
        }


        /* =========================================================
           ROLE VISIBILITY
        ========================================================== */

        .role-dashboard {
            display: none;
        }


        .role-dashboard.active {
            display: block;
        }


        /* =========================================================
           ADMIN PENDING APPLICATIONS
        ========================================================== */

        .pending-section {
            margin-top: 30px;
        }


        .pending-card {
            background: white;

            border: 1px solid var(--border);

            border-radius: var(--radius);

            padding: 20px;

            box-shadow: var(--shadow-sm);
        }


        .pending-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            margin-bottom: 16px;
        }


        .pending-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        .pending-title-icon {
            width: 43px;
            height: 43px;

            border-radius: 13px;

            background: var(--orange-light);
            color: var(--orange);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;

            flex-shrink: 0;
        }


        .pending-title h3 {
            font-size: 16px;
        }


        .pending-title p {
            margin-top: 4px;

            font-size: 11px;
            color: var(--muted);
        }


        .pending-count {
            min-width: 34px;
            height: 34px;

            padding: 0 10px;

            border-radius: 20px;

            background: var(--orange-light);
            color: var(--orange);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;
        }


        .pending-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }


        .pending-item {
            border: 1px solid var(--border);

            background: var(--bg);

            border-radius: 14px;

            padding: 14px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;
        }


        .pending-user {
            min-width: 0;

            display: flex;
            align-items: center;

            gap: 11px;
        }


        .pending-avatar {
            width: 42px;
            height: 42px;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--primary-light);
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 800;
        }


        .pending-user-info {
            min-width: 0;
        }


        .pending-user-info h4 {
            font-size: 13px;
            color: var(--text);

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .pending-user-info p {
            margin-top: 3px;

            font-size: 10px;
            color: var(--muted);

            word-break: break-word;
        }


        .pending-role {
            display: inline-block;

            margin-top: 5px;

            padding: 4px 7px;

            border-radius: 8px;

            background: white;
            color: var(--primary);

            border: 1px solid var(--border);

            font-size: 9px;
            font-weight: 700;

            text-transform: capitalize;
        }


        .pending-actions {
            display: flex;
            align-items: center;
            gap: 7px;

            flex-shrink: 0;
        }


        .approve-btn,
        .reject-btn {
            border: 0;

            border-radius: 9px;

            padding: 9px 12px;

            font-size: 10px;
            font-weight: 700;

            transition: .2s ease;
        }


        .approve-btn {
            background: var(--green-light);
            color: var(--green);
        }


        .approve-btn:hover {
            background: var(--green);
            color: white;
        }


        .reject-btn {
            background: var(--red-light);
            color: var(--red);
        }


        .reject-btn:hover {
            background: var(--red);
            color: white;
        }


        .pending-empty {
            padding: 25px 15px;

            border-radius: 13px;

            background: var(--green-light);

            color: var(--green);

            text-align: center;

            font-size: 12px;
            font-weight: 600;
        }


        .pending-loading {
            padding: 25px 15px;

            text-align: center;

            color: var(--muted);

            font-size: 12px;
        }


        .pending-error {
            padding: 15px;

            border-radius: 12px;

            background: var(--red-light);

            color: var(--red);

            font-size: 11px;
            line-height: 1.5;
        }


        .pending-refresh {
            border: 1px solid var(--border);

            background: white;

            color: var(--primary);

            padding: 7px 10px;

            border-radius: 9px;

            font-size: 10px;
            font-weight: 700;
        }


        .pending-refresh:hover {
            background: var(--primary-light);
        }


        /* =========================================================
           MOBILE NAV
        ========================================================== */

        .mobile-nav {
            display: none;
        }


        /* =========================================================
           MOBILE
        ========================================================== */

        @media (max-width: 900px) {

            .sidebar {
                display: none;
            }


            .main {
                width: 100%;
                margin-left: 0;
            }


            .topbar {
                height: 68px;
                padding: 0 16px;
            }


            .mobile-menu-btn {
                display: flex;

                width: 39px;
                height: 39px;

                border: 1px solid var(--border);

                border-radius: 11px;

                background: white;

                color: var(--primary);

                align-items: center;
                justify-content: center;

                font-size: 17px;
            }


            .topbar-left {
                display: flex;
                align-items: center;
                gap: 10px;
            }


            .top-title h1 {
                font-size: 16px;
            }


            .top-title p {
                font-size: 10px;
            }


            .top-actions .icon-btn {
                display: none;
            }


            .top-profile-info {
                display: none;
            }


            .top-profile {
                padding-left: 0;
            }


            .content {
                padding: 18px 14px 95px;
            }


            .hero {
                padding: 23px 19px;
                border-radius: 20px;
            }


            .hero h2 {
                font-size: 23px;
            }


            .hero p {
                font-size: 11px;
                line-height: 1.65;
            }


            .stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
                margin-top: 14px;
            }


            .stat-card {
                padding: 12px 8px;
                display: block;
                text-align: center;
                border-radius: 14px;
            }


            .stat-icon {
                width: 36px;
                height: 36px;

                margin: 0 auto 8px;

                border-radius: 11px;

                font-size: 15px;
            }


            .stat-info span {
                font-size: 9px;
            }


            .stat-info strong {
                font-size: 15px;
            }


            .section {
                margin-top: 25px;
            }


            .section-header {
                align-items: center;
            }


            .section-title h3 {
                font-size: 17px;
            }


            .feature-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }


            .feature-card {
                padding: 15px;

                display: grid;

                grid-template-columns: 43px 1fr auto;

                grid-template-rows: auto auto;

                column-gap: 12px;

                align-items: center;
            }


            .feature-icon {
                width: 43px;
                height: 43px;

                margin: 0;

                grid-row: span 2;
            }


            .feature-card h4 {
                font-size: 13px;
            }


            .feature-card p {
                margin-top: 3px;
                font-size: 10px;
            }


            .feature-arrow {
                grid-column: 3;
                grid-row: 1 / span 2;

                margin: 0;

                font-size: 15px;
            }


            .info-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }


            /* PENDING APPLICATIONS MOBILE */

            .pending-card {
                padding: 15px;
            }


            .pending-header {
                align-items: flex-start;
            }


            .pending-title {
                align-items: flex-start;
            }


            .pending-title-icon {
                width: 39px;
                height: 39px;
            }


            .pending-title h3 {
                font-size: 14px;
            }


            .pending-title p {
                font-size: 10px;
            }


            .pending-item {
                display: block;
                padding: 13px;
            }


            .pending-user {
                width: 100%;
            }


            .pending-actions {
                margin-top: 12px;

                display: grid;
                grid-template-columns: 1fr 1fr;
            }


            .approve-btn,
            .reject-btn {
                width: 100%;
                padding: 10px;
            }


            .mobile-nav {
                display: flex;

                position: fixed;

                left: 10px;
                right: 10px;
                bottom: 10px;

                height: 65px;

                background:
                    rgba(255,255,255,.97);

                border:
                    1px solid var(--border);

                border-radius: 20px;

                box-shadow:
                    0 10px 35px rgba(20,73,91,.16);

                z-index: 2000;

                align-items: center;
                justify-content: space-around;

                padding: 5px;
            }


            .mobile-nav a {
                flex: 1;

                height: 55px;

                border-radius: 15px;

                display: flex;
                flex-direction: column;

                align-items: center;
                justify-content: center;

                gap: 4px;

                color: var(--muted);

                font-size: 9px;
                font-weight: 600;
            }


            .mobile-nav a.active {
                color: var(--primary);
                background: var(--primary-light);
            }


            .mobile-nav-icon {
                font-size: 16px;
            }

        }


        @media (max-width: 430px) {

            .hero h2 {
                font-size: 21px;
            }


            .hero {
                padding: 20px 17px;
            }


            .hero-user {
                font-size: 10px;
            }


            .role-label {
                font-size: 9px;
            }


            .stat-card {
                padding: 10px 5px;
            }


            .stat-info strong {
                font-size: 14px;
            }


            .content {
                padding-left: 12px;
                padding-right: 12px;
            }

        }


        @media (max-width: 350px) {

            .top-title p {
                display: none;
            }


            .hero h2 {
                font-size: 19px;
            }


            .stats {
                gap: 5px;
            }


            .stat-card {
                padding: 9px 3px;
            }


            .stat-info span {
                font-size: 8px;
            }


            .stat-info strong {
                font-size: 13px;
            }

        }

    </style>
</head>


<body>

<div class="app">


    <!-- =========================================================
         DESKTOP SIDEBAR
    ========================================================== -->

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-logo">
                AN
            </div>

            <div class="brand-text">
                <strong>Al-Noor Hospital</strong>
                <span>Smart Healthcare</span>
            </div>

        </div>


        <div class="side-user">

            <div class="side-user-top">

                <div class="avatar" id="sideAvatar">
                    U
                </div>

                <div class="side-user-info">

                    <div class="side-user-name" id="sideUserName">
                        User
                    </div>

                    <div class="side-user-role" id="sideUserRole">
                        Patient
                    </div>

                </div>

            </div>

        </div>


        <div class="side-label">
            Navigation
        </div>


        <nav class="side-menu">

            <a
                href="{{ route('home') }}"
                class="side-link">

                <span class="side-icon">⌂</span>

                <span>Home</span>

            </a>


            <a
                href="{{ route('dashboard') }}"
                class="side-link active">

                <span class="side-icon">▦</span>

                <span>Dashboard</span>

            </a>

        </nav>


        <!-- =====================================================
             PATIENT SIDEBAR
        ====================================================== -->

        <div class="role-dashboard patient-only">

            <div class="side-label" style="margin-top:18px;">
                Patient Portal
            </div>


            <nav class="side-menu">

                <a
                    href="{{ route('find-doctors') }}"
                    class="side-link">

                    <span class="side-icon">⌕</span>

                    <span>Find Doctors</span>

                </a>


                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">◷</span>

                    <span>Doctor Availability</span>

                </a>


                <a
                    href="{{ route('book-token') }}"
                    class="side-link">

                    <span class="side-icon">+</span>

                    <span>Book Token</span>

                </a>


                <a
                    href="{{ route('live-status') }}"
                    class="side-link">

                    <span class="side-icon">#</span>

                    <span>Live Token Status</span>

                </a>


                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">▤</span>

                    <span>My Appointments</span>

                </a>


                <a
                    href="{{ route('profile') }}"
                    class="side-link">

                    <span class="side-icon">●</span>

                    <span>My Profile</span>

                </a>

            </nav>

        </div>


        <!-- =====================================================
             DOCTOR SIDEBAR
        ====================================================== -->

        <div class="role-dashboard doctor-only">

            <div class="side-label" style="margin-top:18px;">
                Doctor Portal
            </div>


            <nav class="side-menu">

                <a href="#" class="side-link">

                    <span class="side-icon">⌂</span>

                    <span>Doctor Overview</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">♙</span>

                    <span>Today's Patients</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">▤</span>

                    <span>Patient Management</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">◷</span>

                    <span>Appointments</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">#</span>

                    <span>Token Queue</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">↔</span>

                    <span>Reception Management</span>

                </a>

            </nav>

        </div>


        <!-- =====================================================
             RECEPTIONIST SIDEBAR
        ====================================================== -->

        <div class="role-dashboard receptionist-only">

            <div class="side-label" style="margin-top:18px;">
                Receptionist Portal
            </div>


            <nav class="side-menu">

                <a href="#" class="side-link">

                    <span class="side-icon">♙</span>

                    <span>Manage Patients</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">◷</span>

                    <span>Appointments</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">#</span>

                    <span>Token Management</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">●</span>

                    <span>Doctor Availability</span>

                </a>


                <a href="#" class="side-link">

                    <span class="side-icon">▤</span>

                    <span>Patient Queue</span>

                </a>

            </nav>

        </div>


        <!-- =====================================================
             ADMIN SIDEBAR
        ====================================================== -->

        <div class="role-dashboard admin-only">

            <div class="side-label" style="margin-top:18px;">
                Admin Portal
            </div>


            <nav class="side-menu">

                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">♙</span>

                    <span>Manage Patients</span>

                </a>


                <!-- STAFF MANAGEMENT -->

                <a
                    href="{{ route('admin.staff.create') }}"
                    class="side-link">

                    <span class="side-icon">✚</span>

                    <span>Staff Management</span>

                </a>


                <!-- PENDING APPLICATIONS -->

                <a
                    href="#pendingApplications"
                    class="side-link"
                    onclick="scrollToPending(event)">

                    <span class="side-icon">!</span>

                    <span>Pending Applications</span>

                </a>


                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">◷</span>

                    <span>Appointments</span>

                </a>


                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">#</span>

                    <span>Token Management</span>

                </a>


                <a
                    href="#"
                    class="side-link">

                    <span class="side-icon">⚙</span>

                    <span>System Settings</span>

                </a>

            </nav>

        </div>


        <!-- LOGOUT -->

        <div class="side-bottom">

            <button
                type="button"
                class="logout-btn"
                onclick="logoutUser()">

                <span>↪</span>

                <span>Logout</span>

            </button>

        </div>

    </aside>


    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main class="main">

        <header class="topbar">

            <div class="topbar-left">

                <button
                    type="button"
                    class="mobile-menu-btn"
                    onclick="goHome()">

                    ☰

                </button>


                <div class="top-title">

                    <h1 id="topTitle">
                        Dashboard
                    </h1>


                    <p id="topSubtitle">
                        Al-Noor Hospital • Smart Healthcare
                    </p>

                </div>

            </div>


            <div class="top-actions">

                <button
                    type="button"
                    class="icon-btn"
                    title="Notifications">

                    ♢

                </button>


                <div class="top-profile">

                    <div
                        class="avatar"
                        id="topAvatar">

                        U

                    </div>


                    <div class="top-profile-info">

                        <strong id="topUserName">
                            User
                        </strong>


                        <span id="topUserRole">
                            Patient
                        </span>

                    </div>

                </div>

            </div>

        </header>


        <!-- =========================================================
             CONTENT
        ========================================================== -->

        <div class="content">


            <!-- HERO -->

            <section class="hero">

                <div class="hero-content">

                    <span
                        class="hero-badge"
                        id="heroBadge">

                        Smart Healthcare

                    </span>


                    <h2 id="heroTitle">

                        Welcome to Al-Noor Hospital

                    </h2>


                    <p id="heroText">

                        Manage your healthcare journey easily
                        with our smart hospital system.

                    </p>


                    <div class="hero-user">

                        <span>●</span>

                        <span>

                            Logged in as

                            <strong id="heroUserName">
                                User
                            </strong>

                        </span>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 STATS
            ====================================================== -->

            <section class="stats">


                <div class="stat-card">

                    <div class="stat-icon">
                        ◷
                    </div>


                    <div class="stat-info">

                        <span>
                            Appointments
                        </span>


                        <strong id="appointmentCount">
                            0
                        </strong>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ●
                    </div>


                    <div class="stat-info">

                        <span>
                            Profile
                        </span>


                        <strong>
                            Active
                        </strong>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ♢
                    </div>


                    <div class="stat-info">

                        <span>
                            Notifications
                        </span>


                        <strong id="notificationCount">
                            0
                        </strong>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 PATIENT DASHBOARD
            ====================================================== -->

            <section
                id="patientDashboard"
                class="role-dashboard patient-only">

                <div class="section">

                    <div class="section-header">

                        <div class="section-title">

                            <h3>
                                Patient Dashboard
                            </h3>


                            <p>
                                Manage your doctors, tokens and appointments
                            </p>

                        </div>


                        <span class="role-label">
                            Patient
                        </span>

                    </div>


                    <div class="feature-grid">


                        <a
                            href="{{ route('find-doctors') }}"
                            class="feature-card">

                            <div class="feature-icon">
                                ⌕
                            </div>


                            <div>

                                <h4>
                                    Find Doctors
                                </h4>


                                <p>
                                    Search doctors and view their specialties.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                ◷
                            </div>


                            <div>

                                <h4>
                                    Doctor Availability
                                </h4>


                                <p>
                                    Check doctor timings and availability.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('book-token') }}"
                            class="feature-card">

                            <div class="feature-icon">
                                +
                            </div>


                            <div>

                                <h4>
                                    Book Token
                                </h4>


                                <p>
                                    Book your hospital token online.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('live-status') }}"
                            class="feature-card">

                            <div class="feature-icon">
                                #
                            </div>


                            <div>

                                <h4>
                                    Live Token Status
                                </h4>


                                <p>
                                    Check your current queue position.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                ▤
                            </div>


                            <div>

                                <h4>
                                    My Appointments
                                </h4>


                                <p>
                                    View your upcoming appointments.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('profile') }}"
                            class="feature-card">

                            <div class="feature-icon">
                                ●
                            </div>


                            <div>

                                <h4>
                                    My Profile
                                </h4>


                                <p>
                                    Update your personal healthcare information.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 DOCTOR DASHBOARD
            ====================================================== -->

            <section
                id="doctorDashboard"
                class="role-dashboard doctor-only">

                <div class="section">

                    <div class="section-header">

                        <div class="section-title">

                            <h3>
                                Doctor Dashboard
                            </h3>


                            <p>
                                Manage patients, appointments and queues
                            </p>

                        </div>


                        <span class="role-label">
                            Doctor
                        </span>

                    </div>


                    <div class="feature-grid">


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ⌂
                            </div>


                            <div>

                                <h4>
                                    Doctor Overview
                                </h4>


                                <p>
                                    View your daily healthcare activity.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ♙
                            </div>


                            <div>

                                <h4>
                                    Today's Patients
                                </h4>


                                <p>
                                    View patients scheduled for today.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ▤
                            </div>


                            <div>

                                <h4>
                                    Patient Management
                                </h4>


                                <p>
                                    Manage patient records and information.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ◷
                            </div>


                            <div>

                                <h4>
                                    Appointments
                                </h4>


                                <p>
                                    View and manage patient appointments.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                #
                            </div>


                            <div>

                                <h4>
                                    Token Queue
                                </h4>


                                <p>
                                    Monitor the current patient queue.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ↔
                            </div>


                            <div>

                                <h4>
                                    Reception Management
                                </h4>


                                <p>
                                    Coordinate with the reception team.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 RECEPTIONIST DASHBOARD
            ====================================================== -->

            <section
                id="receptionistDashboard"
                class="role-dashboard receptionist-only">

                <div class="section">

                    <div class="section-header">

                        <div class="section-title">

                            <h3>
                                Receptionist Dashboard
                            </h3>


                            <p>
                                Manage patients, appointments and tokens
                            </p>

                        </div>


                        <span class="role-label">
                            Receptionist
                        </span>

                    </div>


                    <div class="feature-grid">


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ♙
                            </div>


                            <div>

                                <h4>
                                    Manage Patients
                                </h4>


                                <p>
                                    Register and manage patient information.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ◷
                            </div>


                            <div>

                                <h4>
                                    Appointments
                                </h4>


                                <p>
                                    Manage today's hospital appointments.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                #
                            </div>


                            <div>

                                <h4>
                                    Token Management
                                </h4>


                                <p>
                                    Create and manage patient tokens.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ●
                            </div>


                            <div>

                                <h4>
                                    Doctor Availability
                                </h4>


                                <p>
                                    Check doctor timings and availability.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <a href="#" class="feature-card">

                            <div class="feature-icon">
                                ▤
                            </div>


                            <div>

                                <h4>
                                    Patient Queue
                                </h4>


                                <p>
                                    Monitor and organize today's queue.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 ADMIN DASHBOARD
            ====================================================== -->

            <section
                id="adminDashboard"
                class="role-dashboard admin-only">

                <div class="section">

                    <div class="section-header">

                        <div class="section-title">

                            <h3>
                                Admin Dashboard
                            </h3>


                            <p>
                                Control and manage the complete hospital system
                            </p>

                        </div>


                        <span class="role-label">
                            Administrator
                        </span>

                    </div>


                    <div class="feature-grid">


                        <!-- MANAGE PATIENTS -->

                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                ♙
                            </div>


                            <div>

                                <h4>
                                    Manage Patients
                                </h4>


                                <p>
                                    View and manage registered patients.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <!-- STAFF MANAGEMENT -->

                        <a
                            href="{{ route('admin.staff.create') }}"
                            class="feature-card">

                            <div class="feature-icon">
                                ✚
                            </div>


                            <div>

                                <h4>
                                    Staff Management
                                </h4>


                                <p>
                                    Manage staff applications and accounts.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <!-- APPOINTMENTS -->

                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                ◷
                            </div>


                            <div>

                                <h4>
                                    Appointments
                                </h4>


                                <p>
                                    Monitor appointments across the hospital.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <!-- TOKEN MANAGEMENT -->

                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                #
                            </div>


                            <div>

                                <h4>
                                    Token Management
                                </h4>


                                <p>
                                    Control queues and token operations.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <!-- SYSTEM SETTINGS -->

                        <a
                            href="#"
                            class="feature-card">

                            <div class="feature-icon">
                                ⚙
                            </div>


                            <div>

                                <h4>
                                    System Settings
                                </h4>


                                <p>
                                    Manage hospital system configuration.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>


                        <!-- PENDING APPLICATIONS -->

                        <a
                            href="#pendingApplications"
                            class="feature-card"
                            onclick="scrollToPending(event)">

                            <div class="feature-icon">
                                !
                            </div>


                            <div>

                                <h4>
                                    Pending Applications
                                </h4>


                                <p>
                                    Review Doctor and Receptionist applications.
                                </p>

                            </div>


                            <span class="feature-arrow">
                                →
                            </span>

                        </a>

                    </div>

                </div>


                <!-- =================================================
                     PENDING STAFF APPLICATIONS
                ================================================== -->

                <section
                    id="pendingApplications"
                    class="pending-section">

                    <div class="pending-card">


                        <div class="pending-header">

                            <div class="pending-title">

                                <div class="pending-title-icon">
                                    !
                                </div>


                                <div>

                                    <h3>
                                        Pending Staff Applications
                                    </h3>


                                    <p>
                                        Review Doctor and Receptionist applications
                                        before granting access.
                                    </p>

                                </div>

                            </div>


                            <div style="display:flex;align-items:center;gap:8px;">

                                <button
                                    type="button"
                                    class="pending-refresh"
                                    onclick="loadPendingApplications()">

                                    Refresh

                                </button>


                                <div
                                    class="pending-count"
                                    id="pendingCount">

                                    0

                                </div>

                            </div>

                        </div>


                        <div
                            id="pendingList"
                            class="pending-list">

                            <div class="pending-loading">

                                Loading pending applications...

                            </div>

                        </div>

                    </div>

                </section>

            </section>


            <!-- =====================================================
                 INFORMATION
            ====================================================== -->

            <section class="info-grid">


                <div class="info-card">

                    <h3>
                        Al-Noor Hospital
                    </h3>


                    <p>
                        Smart healthcare management system designed
                        to make hospital services easier and more organized.
                    </p>


                    <div class="info-list">


                        <div class="info-row">

                            <div class="info-row-icon">
                                ✓
                            </div>


                            <div>

                                <span>
                                    Healthcare
                                </span>


                                <strong>
                                    Simple and organized patient care
                                </strong>

                            </div>

                        </div>


                        <div class="info-row">

                            <div class="info-row-icon">
                                #
                            </div>


                            <div>

                                <span>
                                    Token System
                                </span>


                                <strong>
                                    Easy online queue management
                                </strong>

                            </div>

                        </div>


                        <div class="info-row">

                            <div class="info-row-icon">
                                ●
                            </div>


                            <div>

                                <span>
                                    Access
                                </span>


                                <strong>
                                    Role-based hospital portal
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="info-card">

                    <h3>
                        Account Information
                    </h3>


                    <p>
                        Your current account details.
                    </p>


                    <div class="info-list">


                        <div class="info-row">

                            <div class="info-row-icon">
                                ●
                            </div>


                            <div>

                                <span>
                                    Name
                                </span>


                                <strong id="infoName">
                                    User
                                </strong>

                            </div>

                        </div>


                        <div class="info-row">

                            <div class="info-row-icon">
                                #
                            </div>


                            <div>

                                <span>
                                    Phone
                                </span>


                                <strong id="infoPhone">
                                    -
                                </strong>

                            </div>

                        </div>


                        <div class="info-row">

                            <div class="info-row-icon">
                                ✓
                            </div>


                            <div>

                                <span>
                                    Account Status
                                </span>


                                <strong id="infoStatus">
                                    Active
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </main>


    <!-- =========================================================
         MOBILE NAVIGATION
    ========================================================== -->

    <nav class="mobile-nav">


        <a
            href="{{ route('home') }}">

            <span class="mobile-nav-icon">
                ⌂
            </span>


            <span>
                Home
            </span>

        </a>


        <a
            href="{{ route('dashboard') }}"
            class="active">

            <span class="mobile-nav-icon">
                ▦
            </span>


            <span>
                Dashboard
            </span>

        </a>


        <a
            href="#"
            onclick="goToRoleArea(event)">

            <span class="mobile-nav-icon">
                +
            </span>


            <span id="mobileActionText">
                Services
            </span>

        </a>


        <a
            href="#"
            onclick="logoutUser()">

            <span class="mobile-nav-icon">
                ↪
            </span>


            <span>
                Logout
            </span>

        </a>

    </nav>


<script>


    /* =========================================================
       USER DATA
    ========================================================== */

    let currentUser = null;


    /* =========================================================
       LOAD USER
    ========================================================== */

    function loadUser() {

        let savedUser =
            localStorage.getItem("user");


        if (!savedUser) {

            savedUser =
                localStorage.getItem("lifecare_user");

        }


        if (!savedUser) {

            window.location.href =
                "{{ route('login') }}";

            return;

        }


        try {

            currentUser =
                JSON.parse(savedUser);

        }

        catch (error) {

            console.error(
                "Invalid user data:",
                error
            );


            localStorage.removeItem("user");

            localStorage.removeItem(
                "lifecare_user"
            );


            window.location.href =
                "{{ route('login') }}";

            return;

        }


        if (
            !currentUser ||
            !currentUser.role
        ) {

            window.location.href =
                "{{ route('login') }}";

            return;

        }


        updateUserUI();


        setupRoleDashboard(
            String(currentUser.role).toLowerCase()
        );

    }


    /* =========================================================
       USER UI
    ========================================================== */

    function updateUserUI() {

        const name =
            currentUser.name ||
            "User";


        const phone =
            currentUser.phone ||
            "-";


        const role =
            currentUser.role ||
            "patient";


        const status =
            currentUser.status ||
            "active";


        const initials =
            getInitials(name);


        document.getElementById(
            "sideUserName"
        ).textContent = name;


        document.getElementById(
            "topUserName"
        ).textContent = name;


        document.getElementById(
            "heroUserName"
        ).textContent = name;


        document.getElementById(
            "infoName"
        ).textContent = name;


        document.getElementById(
            "infoPhone"
        ).textContent = phone;


        document.getElementById(
            "infoStatus"
        ).textContent =
            capitalize(status);


        document.getElementById(
            "sideUserRole"
        ).textContent =
            capitalize(role);


        document.getElementById(
            "topUserRole"
        ).textContent =
            capitalize(role);


        document.getElementById(
            "sideAvatar"
        ).textContent =
            initials;


        document.getElementById(
            "topAvatar"
        ).textContent =
            initials;

    }


    /* =========================================================
       INITIALS
    ========================================================== */

    function getInitials(name) {

        if (!name) {
            return "U";
        }


        const parts =
            name
                .trim()
                .split(/\s+/);


        if (parts.length === 1) {

            return parts[0]
                .substring(0, 2)
                .toUpperCase();

        }


        return (
            parts[0][0] +
            parts[parts.length - 1][0]
        ).toUpperCase();

    }


    /* =========================================================
       CAPITALIZE
    ========================================================== */

    function capitalize(value) {

        if (!value) {
            return "";
        }


        return value
            .charAt(0).toUpperCase() +
            value.slice(1);

    }


    /* =========================================================
       ROLE DASHBOARD
    ========================================================== */

    function setupRoleDashboard(role) {

        document
            .querySelectorAll(".role-dashboard")
            .forEach(function(element) {

                element.classList.remove("active");

            });


        /* PATIENT */

        if (role === "patient") {

            document
                .querySelectorAll(".patient-only")
                .forEach(function(element) {

                    element.classList.add("active");

                });


            document.getElementById(
                "topTitle"
            ).textContent =
                "Patient Dashboard";


            document.getElementById(
                "topSubtitle"
            ).textContent =
                "Manage your healthcare services";


            document.getElementById(
                "heroBadge"
            ).textContent =
                "Patient Portal";


            document.getElementById(
                "heroTitle"
            ).textContent =
                "Welcome, " +
                (currentUser.name || "Patient");


            document.getElementById(
                "heroText"
            ).textContent =
                "Find doctors, check availability, book tokens and manage your appointments easily.";


            document.getElementById(
                "mobileActionText"
            ).textContent =
                "Services";

        }


        /* DOCTOR */

        else if (role === "doctor") {

            document
                .querySelectorAll(".doctor-only")
                .forEach(function(element) {

                    element.classList.add("active");

                });


            document.getElementById(
                "topTitle"
            ).textContent =
                "Doctor Dashboard";


            document.getElementById(
                "topSubtitle"
            ).textContent =
                "Manage your medical practice";


            document.getElementById(
                "heroBadge"
            ).textContent =
                "Doctor Portal";


            document.getElementById(
                "heroTitle"
            ).textContent =
                "Welcome, Dr. " +
                (currentUser.name || "Doctor");


            document.getElementById(
                "heroText"
            ).textContent =
                "Manage patients, appointments, token queues and reception operations from one place.";


            document.getElementById(
                "mobileActionText"
            ).textContent =
                "Patients";

        }


        /* RECEPTIONIST */

        else if (role === "receptionist") {

            document
                .querySelectorAll(".receptionist-only")
                .forEach(function(element) {

                    element.classList.add("active");

                });


            document.getElementById(
                "topTitle"
            ).textContent =
                "Receptionist Dashboard";


            document.getElementById(
                "topSubtitle"
            ).textContent =
                "Manage hospital front desk operations";


            document.getElementById(
                "heroBadge"
            ).textContent =
                "Receptionist Portal";


            document.getElementById(
                "heroTitle"
            ).textContent =
                "Welcome, " +
                (currentUser.name || "Receptionist");


            document.getElementById(
                "heroText"
            ).textContent =
                "Manage patients, appointments, doctor availability and token queues efficiently.";


            document.getElementById(
                "mobileActionText"
            ).textContent =
                "Patients";

        }


        /* ADMIN */

        else if (role === "admin") {

            document
                .querySelectorAll(".admin-only")
                .forEach(function(element) {

                    element.classList.add("active");

                });


            document.getElementById(
                "topTitle"
            ).textContent =
                "Admin Dashboard";


            document.getElementById(
                "topSubtitle"
            ).textContent =
                "Manage the complete hospital system";


            document.getElementById(
                "heroBadge"
            ).textContent =
                "Administrator Portal";


            document.getElementById(
                "heroTitle"
            ).textContent =
                "Welcome, " +
                (currentUser.name || "Administrator");


            document.getElementById(
                "heroText"
            ).textContent =
                "Manage patients, staff, appointments, tokens and hospital settings.";


            document.getElementById(
                "mobileActionText"
            ).textContent =
                "Management";


            /*
             * ADMIN ONLY
             * Load pending Doctor/Receptionist applications.
             */

            loadPendingApplications();

        }


        /* UNKNOWN ROLE */

        else {

            console.warn(
                "Unknown user role:",
                role
            );


            document.getElementById(
                "heroTitle"
            ).textContent =
                "Welcome to Al-Noor Hospital";


            document.getElementById(
                "heroText"
            ).textContent =
                "Your account role has not been configured yet.";

        }

    }


    /* =========================================================
       LOAD PENDING STAFF APPLICATIONS
       ADMIN ONLY
    ========================================================== */

    async function loadPendingApplications() {

        const pendingList =
            document.getElementById(
                "pendingList"
            );


        const pendingCount =
            document.getElementById(
                "pendingCount"
            );


        /*
         * Safety:
         * Only Admin can request this endpoint.
         */

        if (
            !currentUser ||
            String(currentUser.role).toLowerCase() !== "admin"
        ) {

            return;

        }


        const token =
            localStorage.getItem(
                "auth_token"
            );


        if (!token) {

            pendingList.innerHTML = `
                <div class="pending-error">
                    Admin authentication token was not found.
                    Please login again.
                </div>
            `;

            pendingCount.textContent = "0";

            return;

        }


        pendingList.innerHTML = `
            <div class="pending-loading">
                Loading pending applications...
            </div>
        `;


        try {

            const response =
                await fetch(
                    "http://127.0.0.1:8001/api/admin/staff/pending",
                    {
                        method: "GET",

                        headers: {

                            "Accept":
                                "application/json",

                            "Authorization":
                                "Bearer " + token

                        }

                    }
                );


            const data =
                await response.json();


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    "Unable to load pending applications."
                );

            }


            const applications =
                Array.isArray(
                    data.applications
                )
                    ? data.applications
                    : [];


            pendingCount.textContent =
                applications.length;


            if (applications.length === 0) {

                pendingList.innerHTML = `
                    <div class="pending-empty">
                        No pending staff applications right now.
                    </div>
                `;

                return;

            }


            pendingList.innerHTML =
                applications
                    .map(function(application) {

                        return createPendingApplicationHTML(
                            application
                        );

                    })
                    .join("");

        }

        catch (error) {

            console.error(
                "Pending applications error:",
                error
            );


            pendingCount.textContent =
                "0";


            pendingList.innerHTML = `
                <div class="pending-error">
                    ${escapeHtml(
                        error.message ||
                        "Unable to load pending applications."
                    )}
                </div>
            `;

        }

    }


    /* =========================================================
       PENDING APPLICATION HTML
    ========================================================== */

    function createPendingApplicationHTML(
        application
    ) {

        const name =
            application.name ||
            "Unknown";


        const email =
            application.email ||
            "-";


        const phone =
            application.phone ||
            "-";


        const role =
            application.role ||
            "staff";


        const id =
            application.id;


        const initials =
            getInitials(name);


        return `

            <div
                class="pending-item"
                id="pending-${id}">

                <div class="pending-user">

                    <div class="pending-avatar">
                        ${escapeHtml(initials)}
                    </div>

                    <div class="pending-user-info">

                        <h4>
                            ${escapeHtml(name)}
                        </h4>

                        <p>
                            ${escapeHtml(email)}
                        </p>

                        <p>
                            ${escapeHtml(phone)}
                        </p>

                        <span class="pending-role">
                            ${escapeHtml(
                                capitalize(role)
                            )}
                        </span>

                    </div>

                </div>


                <div class="pending-actions">

                    <button
                        type="button"
                        class="approve-btn"
                        onclick="approveStaff(${id})">

                        Approve

                    </button>


                    <button
                        type="button"
                        class="reject-btn"
                        onclick="rejectStaff(${id})">

                        Reject

                    </button>

                </div>

            </div>

        `;

    }


    /* =========================================================
       ESCAPE HTML
       Prevent unsafe HTML from API data.
    ========================================================== */

    function escapeHtml(value) {

        if (value === null ||
            value === undefined) {

            return "";

        }


        return String(value)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");

    }


    /* =========================================================
       APPROVE STAFF
       ADMIN ONLY
    ========================================================== */

    async function approveStaff(id) {

        if (
            !currentUser ||
            String(currentUser.role).toLowerCase() !== "admin"
        ) {

            return;

        }


        const token =
            localStorage.getItem(
                "auth_token"
            );


        if (!token) {

            alert(
                "Admin authentication token not found. Please login again."
            );

            return;

        }


        const confirmed =
            confirm(
                "Are you sure you want to approve this staff application?"
            );


        if (!confirmed) {

            return;

        }


        try {

            const response =
                await fetch(
                    "http://127.0.0.1:8001/api/admin/staff/" +
                    id +
                    "/approve",
                    {
                        method: "POST",

                        headers: {

                            "Accept":
                                "application/json",

                            "Authorization":
                                "Bearer " + token,

                            "Content-Type":
                                "application/json"

                        },

                        body: JSON.stringify({})

                    }
                );


            const data =
                await response.json();


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    "Unable to approve application."
                );

            }


            alert(
                data.message ||
                "Staff application approved successfully."
            );


            await loadPendingApplications();

        }

        catch (error) {

            console.error(
                "Approve error:",
                error
            );


            alert(
                error.message ||
                "Unable to approve application."
            );

        }

    }


    /* =========================================================
       REJECT STAFF
       ADMIN ONLY
    ========================================================== */

    async function rejectStaff(id) {

        if (
            !currentUser ||
            String(currentUser.role).toLowerCase() !== "admin"
        ) {

            return;

        }


        const token =
            localStorage.getItem(
                "auth_token"
            );


        if (!token) {

            alert(
                "Admin authentication token not found. Please login again."
            );

            return;

        }


        const confirmed =
            confirm(
                "Are you sure you want to reject this staff application?"
            );


        if (!confirmed) {

            return;

        }


        try {

            const response =
                await fetch(
                    "http://127.0.0.1:8001/api/admin/staff/" +
                    id +
                    "/reject",
                    {
                        method: "POST",

                        headers: {

                            "Accept":
                                "application/json",

                            "Authorization":
                                "Bearer " + token,

                            "Content-Type":
                                "application/json"

                        },

                        body: JSON.stringify({})

                    }
                );


            const data =
                await response.json();


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    "Unable to reject application."
                );

            }


            alert(
                data.message ||
                "Staff application rejected successfully."
            );


            await loadPendingApplications();

        }

        catch (error) {

            console.error(
                "Reject error:",
                error
            );


            alert(
                error.message ||
                "Unable to reject application."
            );

        }

    }


    /* =========================================================
       SCROLL TO PENDING APPLICATIONS
    ========================================================== */

    function scrollToPending(event) {

        if (event) {
            event.preventDefault();
        }


        const target =
            document.getElementById(
                "pendingApplications"
            );


        if (target) {

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        }

    }


    /* =========================================================
       MOBILE ROLE AREA
    ========================================================== */

    function goToRoleArea(event) {

        event.preventDefault();


        const role =
            currentUser &&
            currentUser.role
                ? String(
                    currentUser.role
                ).toLowerCase()
                : "patient";


        let target = null;


        if (role === "patient") {

            target =
                document.getElementById(
                    "patientDashboard"
                );

        }


        else if (role === "doctor") {

            target =
                document.getElementById(
                    "doctorDashboard"
                );

        }


        else if (role === "receptionist") {

            target =
                document.getElementById(
                    "receptionistDashboard"
                );

        }


        else if (role === "admin") {

            target =
                document.getElementById(
                    "adminDashboard"
                );

        }


        if (target) {

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        }

    }


    /* =========================================================
       HOME
    ========================================================== */

    function goHome() {

        window.location.href =
            "{{ route('home') }}";

    }


    /* =========================================================
       LOGOUT
    ========================================================== */

    async function logoutUser() {

        const token =
            localStorage.getItem(
                "auth_token"
            );


        if (token) {

            try {

                await fetch(
                    "http://127.0.0.1:8001/api/logout",
                    {
                        method: "POST",

                        headers: {

                            "Accept":
                                "application/json",

                            "Authorization":
                                "Bearer " + token

                        }

                    }
                );

            }

            catch (error) {

                console.log(
                    "Logout API unavailable."
                );

            }

        }


        localStorage.removeItem(
            "auth_token"
        );


        localStorage.removeItem(
            "user"
        );


        localStorage.removeItem(
            "lifecare_user"
        );


        localStorage.removeItem(
            "lifecare_remember"
        );


        window.location.href =
            "{{ route('login') }}";

    }


    /* =========================================================
       PAGE LOAD
    ========================================================== */

    document.addEventListener(
        "DOMContentLoaded",
        function() {

            loadUser();

        }
    );

</script>

</body>
</html>