<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | Al-Noor Hospital</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8fc;
            color: #173b5c;
            min-height: 100vh;
            padding-bottom: 105px;
        }

        button,
        a,
        input {
            font-family: inherit;
        }

        .page {
            width: 100%;
            max-width: 1180px;
            margin: 0 auto;
            padding: 18px 18px 40px;
        }

        /* ================= HEADER ================= */

        .top-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
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
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 7px 18px rgba(11, 95, 165, 0.20);
        }

        .brand-logo svg {
            width: 22px;
            height: 22px;
            stroke: currentColor;
        }

        .brand-text strong {
            display: block;
            color: #073d66;
            font-size: 15px;
            font-weight: 800;
        }

        .brand-text span {
            display: block;
            margin-top: 2px;
            color: #8a98a5;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }

        .header-title {
            text-align: right;
        }

        .header-title h1 {
            font-size: 21px;
            color: #173e60;
            font-weight: 800;
        }

        .header-title p {
            color: #8795a2;
            font-size: 11px;
            margin-top: 4px;
        }

        /* ================= PROFILE HERO ================= */

        .profile-hero {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #073d66, #0b5fa5);
            border-radius: 24px;
            padding: 30px;
            color: white;
            box-shadow: 0 14px 32px rgba(7, 61, 102, 0.18);
            margin-bottom: 18px;
        }

        .profile-hero::before {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.12);
            right: -70px;
            top: -85px;
        }

        .profile-hero::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.10);
            right: 45px;
            bottom: -75px;
        }

        .profile-main {
            position: relative;
            z-index: 2;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .profile-left {
            display: flex;
            align-items: center;
            gap: 17px;
        }

        /* ================= AVATAR ================= */

        .avatar-wrapper {
            position: relative;
            width: 86px;
            height: 86px;
            flex-shrink: 0;
        }

        .profile-avatar {
            width: 86px;
            height: 86px;

            border-radius: 24px;

            background: rgba(255,255,255,0.16);

            border: 2px solid rgba(255,255,255,0.35);

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            backdrop-filter: blur(8px);

            font-size: 27px;
            font-weight: 800;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .profile-avatar.has-photo img {
            display: block;
        }

        .profile-avatar.has-photo .initials {
            display: none;
        }

        .initials {
            color: white;
        }

        /* CAMERA BUTTON */

        .camera-button {
            position: absolute;

            right: -7px;
            bottom: -7px;

            width: 32px;
            height: 32px;

            border-radius: 10px;

            border: 3px solid #0b5fa5;

            background: white;
            color: #0b5fa5;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;

            box-shadow: 0 5px 15px rgba(0,0,0,0.20);

            z-index: 5;

            transition: 0.2s;
        }

        .camera-button:hover {
            transform: translateY(-2px);
        }

        .camera-button svg {
            width: 15px;
            height: 15px;
            stroke: currentColor;
        }

        #profilePhotoInput {
            display: none;
        }

        /* ================= PROFILE TEXT ================= */

        .profile-info h2 {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .profile-info p {
            font-size: 12px;
            color: rgba(255,255,255,0.82);
            margin-bottom: 10px;
        }

        .patient-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 6px 10px;

            border-radius: 20px;

            background: rgba(255,255,255,0.13);
            border: 1px solid rgba(255,255,255,0.16);

            font-size: 9px;
            font-weight: 800;
        }

        .patient-badge span {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #7ee6a4;
        }

        /* ================= PROFILE BUTTONS ================= */

        .profile-actions {
            position: relative;
            z-index: 5;

            display: flex;
            flex-direction: column;
            align-items: flex-end;

            gap: 8px;
        }

        .edit-btn,
        .photo-btn {
            border-radius: 12px;
            padding: 11px 15px;

            font-size: 10px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .edit-btn {
            border: 1px solid rgba(255,255,255,0.30);

            background: rgba(255,255,255,0.12);

            color: white;
        }

        .edit-btn:hover {
            background: white;
            color: #0b5fa5;
        }

        .photo-btn {
            border: none;

            background: white;
            color: #0b5fa5;
        }

        .photo-btn:hover {
            transform: translateY(-1px);
        }

        /* ================= QUICK STATS ================= */

        .quick-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;

            margin-bottom: 18px;
        }

        .stat-card {
            background: white;

            border: 1px solid #e2ebf2;

            border-radius: 17px;

            padding: 17px 14px;

            box-shadow: 0 7px 22px rgba(4,55,90,0.06);
        }

        .stat-icon {
            width: 34px;
            height: 34px;

            border-radius: 10px;

            background: #eaf5fd;
            color: #0b5fa5;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 10px;
        }

        .stat-icon svg {
            width: 17px;
            height: 17px;

            stroke: currentColor;
        }

        .stat-card strong {
            display: block;

            color: #073d66;

            font-size: 18px;
            font-weight: 800;
        }

        .stat-card span {
            display: block;

            color: #8b98a4;

            font-size: 9px;

            margin-top: 3px;

            font-weight: 700;
        }

        /* ================= SECTION ================= */

        .section {
            background: white;

            border: 1px solid #e1eaf1;

            border-radius: 20px;

            margin-bottom: 16px;

            overflow: hidden;

            box-shadow: 0 7px 22px rgba(4,55,90,0.055);
        }

        .section-header {
            padding: 18px 20px 13px;

            border-bottom: 1px solid #edf2f6;
        }

        .section-header h3 {
            font-size: 15px;

            color: #073d66;

            font-weight: 800;
        }

        .section-header p {
            font-size: 10px;

            color: #8a98a5;

            margin-top: 4px;
        }

        /* ================= INFORMATION ================= */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .info-item {
            padding: 17px 20px;

            border-bottom: 1px solid #edf2f6;
        }

        .info-item:nth-child(odd) {
            border-right: 1px solid #edf2f6;
        }

        .info-item:nth-last-child(-n+2) {
            border-bottom: none;
        }

        .info-label {
            display: block;

            color: #98a5af;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 0.5px;

            margin-bottom: 6px;
        }

        .info-value {
            color: #173b5c;

            font-size: 12px;

            font-weight: 700;

            word-break: break-word;
        }

        /* ================= ACTIONS ================= */

        .action-list {
            padding: 6px 10px;
        }

        .action-row {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 12px;

            padding: 15px 10px;

            border: none;

            border-bottom: 1px solid #edf2f6;

            background: transparent;

            text-align: left;

            cursor: pointer;

            text-decoration: none;
        }

        .action-row:last-child {
            border-bottom: none;
        }

        .action-left {
            display: flex;

            align-items: center;

            gap: 12px;
        }

        .action-icon {
            width: 38px;
            height: 38px;

            border-radius: 11px;

            background: #eaf5fd;

            color: #0b5fa5;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .action-icon svg {
            width: 18px;
            height: 18px;

            stroke: currentColor;
        }

        .action-text strong {
            display: block;

            color: #173b5c;

            font-size: 12px;

            font-weight: 800;
        }

        .action-text span {
            display: block;

            color: #8a98a5;

            font-size: 9px;

            margin-top: 3px;
        }

        .arrow {
            color: #a2afb9;
            font-size: 18px;
        }

        /* ================= NOTIFICATIONS ================= */

        .notification-box {
            padding: 18px 20px;
        }

        .notification-row {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding: 13px 0;

            border-bottom: 1px solid #edf2f6;
        }

        .notification-row:last-child {
            border-bottom: none;
        }

        .notification-text strong {
            display: block;

            font-size: 11px;

            color: #173b5c;
        }

        .notification-text span {
            display: block;

            font-size: 9px;

            color: #8a98a5;

            margin-top: 3px;
        }

        .toggle {
            width: 42px;
            height: 23px;

            border-radius: 20px;

            background: #0b5fa5;

            position: relative;

            cursor: pointer;

            flex-shrink: 0;
        }

        .toggle::after {
            content: "";

            position: absolute;

            width: 17px;
            height: 17px;

            border-radius: 50%;

            background: white;

            right: 3px;
            top: 3px;

            box-shadow: 0 2px 5px rgba(0,0,0,0.15);

            transition: 0.2s;
        }

        .toggle.off {
            background: #d8e1e8;
        }

        .toggle.off::after {
            right: 22px;
        }

        /* ================= ACCOUNT ACTIONS ================= */

        .danger-section {
            border: 1px solid #ffd9dd;
            background: #fffafb;
        }

        .danger-header {
            padding: 18px 20px 12px;
        }

        .danger-header h3 {
            color: #d92332;

            font-size: 15px;

            font-weight: 800;
        }

        .danger-header p {
            color: #9c777b;

            font-size: 10px;

            margin-top: 4px;

            line-height: 1.5;
        }

        .danger-actions {
            padding: 4px 10px 10px;
        }

        .danger-btn {
            width: 100%;

            border: none;

            background: transparent;

            padding: 14px 10px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            cursor: pointer;

            border-top: 1px solid #f8e4e6;
        }

        .danger-btn-content {
            display: flex;

            align-items: center;

            gap: 11px;
        }

        .danger-icon {
            width: 36px;
            height: 36px;

            border-radius: 10px;

            background: #fff0f2;

            color: #ef3340;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .danger-icon svg {
            width: 17px;
            height: 17px;

            stroke: currentColor;
        }

        .danger-btn strong {
            display: block;

            text-align: left;

            color: #c72c39;

            font-size: 11px;
        }

        .danger-btn span {
            display: block;

            text-align: left;

            color: #a8878a;

            font-size: 9px;

            margin-top: 3px;
        }

        .danger-arrow {
            color: #df7b84;

            font-size: 17px;
        }

        /* ================= FOOTER ================= */

        .footer {
            text-align: center;

            padding: 18px 10px 20px;

            color: #8998a5;

            font-size: 9px;

            line-height: 1.6;
        }

        .footer strong {
            color: #073d66;
        }

        /* ================= BOTTOM NAV ================= */

        .mobile-bottom-nav {
            position: fixed;

            left: 50%;
            bottom: 14px;

            transform: translateX(-50%);

            width: min(560px, calc(100% - 22px));

            height: 68px;

            background: rgba(255,255,255,0.97);

            border: 1px solid #dce7ee;

            border-radius: 20px;

            box-shadow: 0 12px 35px rgba(4,55,90,0.16);

            display: grid;

            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;

            align-items: center;

            z-index: 2000;

            backdrop-filter: blur(12px);
        }

        .bottom-item {
            height: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 4px;

            color: #8193a1;

            font-size: 9px;

            font-weight: 800;

            text-decoration: none;

            transition: 0.2s;
        }

        .bottom-item svg {
            width: 19px;
            height: 19px;

            stroke: currentColor;
        }

        .bottom-item.active {
            color: #07558d;
        }

        .bottom-token {
            width: 58px;
            height: 58px;

            margin: -19px auto 0;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #ef3340,
                #d92332
            );

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            border: 5px solid #f5f8fb;

            box-shadow:
                0 9px 23px rgba(239,51,64,0.28);

            text-decoration: none;
        }

        .bottom-token svg {
            width: 23px;
            height: 23px;

            stroke: currentColor;
        }

        /* ================= TOAST ================= */

        .toast {
            position: fixed;

            left: 50%;
            bottom: 96px;

            transform: translate(-50%, 20px);

            background: #073d66;

            color: white;

            padding: 12px 18px;

            border-radius: 12px;

            font-size: 11px;

            font-weight: 700;

            opacity: 0;

            pointer-events: none;

            transition: 0.3s;

            z-index: 3000;

            white-space: nowrap;
        }

        .toast.show {
            opacity: 1;

            transform: translate(-50%, 0);
        }

        /* ================= MOBILE ================= */

        @media (max-width: 760px) {

            .page {
                padding: 14px 12px 25px;
            }

            .top-header {
                margin-bottom: 15px;
            }

            .brand-logo {
                width: 38px;
                height: 38px;
            }

            .brand-text strong {
                font-size: 13px;
            }

            .brand-text span {
                font-size: 8px;
            }

            .header-title h1 {
                font-size: 18px;
            }

            .header-title p {
                font-size: 9px;
            }

            .profile-hero {
                border-radius: 20px;
                padding: 20px;
            }

            .profile-main {
                align-items: flex-start;
            }

            .profile-left {
                gap: 12px;
            }

            .avatar-wrapper {
                width: 61px;
                height: 61px;
            }

            .profile-avatar {
                width: 61px;
                height: 61px;

                border-radius: 18px;

                font-size: 21px;
            }

            .camera-button {
                width: 27px;
                height: 27px;

                right: -5px;
                bottom: -5px;

                border-radius: 8px;
            }

            .camera-button svg {
                width: 13px;
                height: 13px;
            }

            .profile-info h2 {
                font-size: 17px;
            }

            .profile-info p {
                font-size: 9px;
            }

            .patient-badge {
                padding: 5px 8px;
                font-size: 7px;
            }

            .profile-actions {
                gap: 5px;
            }

            .edit-btn,
            .photo-btn {
                padding: 8px 10px;
                font-size: 8px;
            }

            .quick-stats {
                gap: 8px;
            }

            .stat-card {
                padding: 12px 10px;
                border-radius: 14px;
            }

            .stat-icon {
                width: 30px;
                height: 30px;
            }

            .stat-card strong {
                font-size: 15px;
            }

            .stat-card span {
                font-size: 7px;
            }

            .section {
                border-radius: 17px;
            }

            .section-header {
                padding: 15px 16px 11px;
            }

            .section-header h3 {
                font-size: 13px;
            }

            .section-header p {
                font-size: 9px;
            }

            .info-item {
                padding: 14px 15px;
            }

            .info-label {
                font-size: 7px;
            }

            .info-value {
                font-size: 10px;
            }

            .action-row {
                padding: 13px 8px;
            }

            .action-icon {
                width: 34px;
                height: 34px;
            }

            .action-text strong {
                font-size: 10px;
            }

            .action-text span {
                font-size: 8px;
            }

            .notification-box {
                padding: 14px 16px;
            }

            .notification-text strong {
                font-size: 10px;
            }

            .notification-text span {
                font-size: 8px;
            }

            .danger-header {
                padding: 15px 16px 10px;
            }

            .danger-header h3 {
                font-size: 13px;
            }

            .danger-header p {
                font-size: 8px;
            }

            .mobile-bottom-nav {
                bottom: 9px;

                width: calc(100% - 18px);

                height: 67px;

                border-radius: 19px;
            }

            .bottom-item {
                font-size: 8px;
            }

            .bottom-item svg {
                width: 18px;
                height: 18px;
            }

            .bottom-token {
                width: 57px;
                height: 57px;
            }
        }

        @media (max-width: 500px) {

            .profile-main {
                flex-direction: column;
            }

            .profile-left {
                width: 100%;
            }

            .profile-actions {
                width: 100%;

                flex-direction: row;

                justify-content: flex-end;
            }
        }

    </style>
</head>

<body>

<div class="page">

    <!-- ================= HEADER ================= -->

    <header class="top-header">

        <div class="brand">

            <div class="brand-logo">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="2.4">

                    <path d="M12 5v14"></path>

                    <path d="M5 12h14"></path>

                </svg>

            </div>

            <div class="brand-text">

                <strong>
                    Al-Noor Hospital
                </strong>

                <span>
                    Patient Portal
                </span>

            </div>

        </div>


        <div class="header-title">

            <h1>
                My Profile
            </h1>

            <p>
                Manage your account
            </p>

        </div>

    </header>


    <!-- ================= PROFILE HERO ================= -->

    <section class="profile-hero">

        <div class="profile-main">

            <div class="profile-left">

                <!-- PROFILE PHOTO -->

                <div class="avatar-wrapper">

                    <div
                        class="profile-avatar"
                        id="profileAvatar">

                        <span
                            class="initials"
                            id="avatarInitials">
                            P
                        </span>

                        <img
                            id="profilePhoto"
                            src=""
                            alt="Patient profile photo">

                    </div>


                    <!-- CAMERA -->

                    <button
                        class="camera-button"
                        type="button"
                        onclick="openPhotoPicker()">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <path
                                d="M4 7h4l2-3h4l2 3h4a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2z">
                            </path>

                            <circle
                                cx="12"
                                cy="13"
                                r="3">
                            </circle>

                        </svg>

                    </button>


                    <input
                        type="file"
                        id="profilePhotoInput"
                        accept="image/*"
                        onchange="changeProfilePhoto(event)">

                </div>


                <!-- PATIENT NAME -->

                <div class="profile-info">

                    <h2 id="profileName">
                        Patient
                    </h2>

                    <p>
                        Your personal healthcare profile
                    </p>

                    <div class="patient-badge">

                        <span></span>

                        Active Patient Account

                    </div>

                </div>

            </div>


            <!-- BUTTONS -->

            <div class="profile-actions">

                <button
                    class="edit-btn"
                    type="button"
                    onclick="showMessage('Edit Profile will be connected to backend soon.')">

                    Edit Profile

                </button>


                <button
                    class="photo-btn"
                    type="button"
                    onclick="openPhotoPicker()">

                    Add / Change Photo

                </button>

            </div>

        </div>

    </section>


    <!-- ================= QUICK STATS ================= -->

    <section class="quick-stats">

        <div class="stat-card">

            <div class="stat-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="2">

                    <rect
                        x="3"
                        y="4"
                        width="18"
                        height="18"
                        rx="2">
                    </rect>

                    <path d="M16 2v4"></path>

                    <path d="M8 2v4"></path>

                    <path d="M3 10h18"></path>

                </svg>

            </div>

            <strong id="appointmentsCount">
                0
            </strong>

            <span>
                Appointments
            </span>

        </div>


        <div class="stat-card">

            <div class="stat-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="2">

                    <path
                        d="M20 11a8 8 0 1 1-2.34-5.66">
                    </path>

                    <path d="M20 4v7h-7"></path>

                </svg>

            </div>

            <strong id="visitsCount">
                0
            </strong>

            <span>
                Past Visits
            </span>

        </div>


        <div class="stat-card">

            <div class="stat-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="2">

                    <path d="M20 7L10 17l-5-5"></path>

                </svg>

            </div>

            <strong id="completedCount">
                0
            </strong>

            <span>
                Completed
            </span>

        </div>

    </section>


    <!-- ================= PERSONAL INFORMATION ================= -->

    <section class="section">

        <div class="section-header">

            <h3>
                Personal Information
            </h3>

            <p>
                Your registered patient information
            </p>

        </div>


        <div class="info-grid">

            <div class="info-item">

                <span class="info-label">
                    Full Name
                </span>

                <span
                    class="info-value"
                    id="infoName">

                    -

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Age
                </span>

                <span
                    class="info-value"
                    id="infoAge">

                    Not added yet

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Gender
                </span>

                <span
                    class="info-value"
                    id="infoGender">

                    -

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Patient ID
                </span>

                <span
                    class="info-value"
                    id="infoPatientId">

                    -

                </span>

            </div>

        </div>

    </section>


    <!-- ================= CONTACT INFORMATION ================= -->

    <section class="section">

        <div class="section-header">

            <h3>
                Contact Information
            </h3>

            <p>
                Contact details from your patient account
            </p>

        </div>


        <div class="info-grid">

            <div class="info-item">

                <span class="info-label">
                    Mobile Number
                </span>

                <span
                    class="info-value"
                    id="infoPhone">

                    -

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Email Address
                </span>

                <span
                    class="info-value"
                    id="infoEmail">

                    Not added yet

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Emergency Contact
                </span>

                <span
                    class="info-value"
                    id="infoEmergency">

                    Not added yet

                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Address
                </span>

                <span
                    class="info-value"
                    id="infoAddress">

                    Not added yet

                </span>

            </div>

        </div>

    </section>


    <!-- ================= ACCOUNT SECURITY ================= -->

    <section class="section">

        <div class="section-header">

            <h3>
                Account & Security
            </h3>

            <p>
                Manage your account security
            </p>

        </div>


        <div class="action-list">

            <button
                class="action-row"
                type="button"
                onclick="showMessage('Change Password will be connected to backend soon.')">

                <div class="action-left">

                    <div class="action-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <rect
                                x="3"
                                y="11"
                                width="18"
                                height="10"
                                rx="2">
                            </rect>

                            <path
                                d="M7 11V7a5 5 0 0 1 10 0v4">
                            </path>

                        </svg>

                    </div>

                    <div class="action-text">

                        <strong>
                            Change Password
                        </strong>

                        <span>
                            Update your account password
                        </span>

                    </div>

                </div>

                <span class="arrow">
                    ›
                </span>

            </button>


            <button
                class="action-row"
                type="button"
                onclick="showMessage('Login security settings will be connected soon.')">

                <div class="action-left">

                    <div class="action-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <path
                                d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z">
                            </path>

                            <path d="M9 12l2 2 4-4"></path>

                        </svg>

                    </div>

                    <div class="action-text">

                        <strong>
                            Login & Security
                        </strong>

                        <span>
                            Review your account security
                        </span>

                    </div>

                </div>

                <span class="arrow">
                    ›
                </span>

            </button>

        </div>

    </section>


    <!-- ================= NOTIFICATIONS ================= -->

    <section class="section">

        <div class="section-header">

            <h3>
                Notifications
            </h3>

            <p>
                Choose how you want to receive updates
            </p>

        </div>


        <div class="notification-box">

            <div class="notification-row">

                <div class="notification-text">

                    <strong>
                        Token & Queue Updates
                    </strong>

                    <span>
                        Get updates about your current queue
                    </span>

                </div>

                <div
                    class="toggle"
                    onclick="toggleNotification(this)">
                </div>

            </div>


            <div class="notification-row">

                <div class="notification-text">

                    <strong>
                        Appointment Reminders
                    </strong>

                    <span>
                        Receive reminders before appointments
                    </span>

                </div>

                <div
                    class="toggle"
                    onclick="toggleNotification(this)">
                </div>

            </div>


            <div class="notification-row">

                <div class="notification-text">

                    <strong>
                        Hospital Updates
                    </strong>

                    <span>
                        Important information from the hospital
                    </span>

                </div>

                <div
                    class="toggle"
                    onclick="toggleNotification(this)">
                </div>

            </div>

        </div>

    </section>


    <!-- ================= HELP ================= -->

    <section class="section">

        <div class="section-header">

            <h3>
                Help & Support
            </h3>

            <p>
                Need help with the patient portal?
            </p>

        </div>


        <div class="action-list">

            <button
                class="action-row"
                type="button"
                onclick="showMessage('Help Center will be available soon.')">

                <div class="action-left">

                    <div class="action-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <circle
                                cx="12"
                                cy="12"
                                r="9">
                            </circle>

                            <path
                                d="M9.5 9a2.5 2.5 0 1 1 4.1 1.9c-1 .8-1.6 1.2-1.6 2.6">
                            </path>

                            <path d="M12 17h.01"></path>

                        </svg>

                    </div>

                    <div class="action-text">

                        <strong>
                            Help Center
                        </strong>

                        <span>
                            Learn how to use the patient portal
                        </span>

                    </div>

                </div>

                <span class="arrow">
                    ›
                </span>

            </button>


            <button
                class="action-row"
                type="button"
                onclick="showMessage('Contact support will be connected soon.')">

                <div class="action-left">

                    <div class="action-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <path
                                d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z">
                            </path>

                        </svg>

                    </div>

                    <div class="action-text">

                        <strong>
                            Contact Support
                        </strong>

                        <span>
                            Get assistance with your account
                        </span>

                    </div>

                </div>

                <span class="arrow">
                    ›
                </span>

            </button>

        </div>

    </section>


    <!-- ================= ACCOUNT ACTIONS ================= -->

    <section class="section danger-section">

        <div class="danger-header">

            <h3>
                Account Actions
            </h3>

            <p>
                Manage your patient account.
            </p>

        </div>


        <div class="danger-actions">

            <button
                class="danger-btn"
                type="button"
                onclick="logoutUser()">

                <div class="danger-btn-content">

                    <div class="danger-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <path d="M10 17l5-5-5-5"></path>

                            <path d="M15 12H3"></path>

                            <path
                                d="M21 19V5a2 2 0 0 0-2-2h-6">
                            </path>

                        </svg>

                    </div>

                    <div>

                        <strong>
                            Logout
                        </strong>

                        <span>
                            Sign out from this patient account
                        </span>

                    </div>

                </div>

                <span class="danger-arrow">
                    ›
                </span>

            </button>


            <button
                class="danger-btn"
                type="button"
                onclick="deleteAccount()">

                <div class="danger-btn-content">

                    <div class="danger-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2">

                            <polyline
                                points="3 6 5 6 21 6">
                            </polyline>

                            <path
                                d="M19 6l-1 14H6L5 6">
                            </path>

                            <path d="M10 11v5"></path>

                            <path d="M14 11v5"></path>

                            <path
                                d="M9 6V3h6v3">
                            </path>

                        </svg>

                    </div>

                    <div>

                        <strong>
                            Delete Account
                        </strong>

                        <span>
                            Permanently remove your patient account
                        </span>

                    </div>

                </div>

                <span class="danger-arrow">
                    ›
                </span>

            </button>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <div class="footer">

        <strong>
            Al-Noor Hospital
        </strong>

        <br>

        Patient Portal • Secure Healthcare Access

    </div>

</div>


<!-- ================= TOAST ================= -->

<div
    class="toast"
    id="toast">
</div>


<!-- ================= BOTTOM NAV ================= -->

<nav class="mobile-bottom-nav">

    <a
        href="{{ route('home') }}"
        class="bottom-item">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2">

            <path d="M3 10.5L12 3l9 7.5"></path>

            <path d="M5 9.5V21h14V9.5"></path>

            <path d="M9 21v-6h6v6"></path>

        </svg>

        <span>
            Home
        </span>

    </a>


    <a
        href="{{ route('find-doctors') }}"
        class="bottom-item">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2">

            <circle
                cx="9"
                cy="7"
                r="3">
            </circle>

            <path
                d="M3.5 21c.5-4 2.4-6 5.5-6s5 2 5.5 6">
            </path>

            <path d="M16 10h5"></path>

            <path d="M18.5 7.5v5"></path>

        </svg>

        <span>
            Doctors
        </span>

    </a>


    <a
        href="{{ route('book-token') }}"
        class="bottom-token">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2">

            <rect
                x="4"
                y="5"
                width="16"
                height="14"
                rx="2">
            </rect>

            <path d="M8 9h8"></path>

            <path d="M8 13h5"></path>

            <path d="M8 16h3"></path>

        </svg>

    </a>


    <a
        href="{{ route('live-status') }}"
        class="bottom-item">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2">

            <path d="M4 19V10"></path>

            <path d="M9 19V5"></path>

            <path d="M14 19v-7"></path>

            <path d="M19 19V8"></path>

        </svg>

        <span>
            My Queue
        </span>

    </a>


    <a
        href="{{ route('profile') }}"
        class="bottom-item active">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2">

            <circle
                cx="12"
                cy="8"
                r="4">
            </circle>

            <path
                d="M4 21c.8-4.2 3.4-6 8-6s7.2 1.8 8 6">
            </path>

        </svg>

        <span>
            Profile
        </span>

    </a>

</nav>


<script>

    /* =========================================================
       GET PATIENT DATA
    ========================================================= */

    function getPatientData() {

        try {

            const userData =
                localStorage.getItem("alnoor_patient_user") ||
                sessionStorage.getItem("alnoor_patient_user");

            if (!userData) {

                return null;

            }

            return JSON.parse(userData);

        } catch (error) {

            console.error(
                "Patient data error:",
                error
            );

            return null;

        }

    }


    /* =========================================================
       GET TOKEN
    ========================================================= */

    function getPatientToken() {

        return (
            localStorage.getItem("alnoor_patient_token") ||
            sessionStorage.getItem("alnoor_patient_token")
        );

    }


    /* =========================================================
       AUTHENTICATION CHECK
    ========================================================= */

    function checkProfileAccess() {

        const patient =
            getPatientData();

        const token =
            getPatientToken();


        /*
         * Patient must have BOTH:
         *
         * 1. registered user data
         * 2. authentication token
         */

        if (!patient || !token) {

            window.location.href =
                "{{ route('register') }}";

            return false;

        }


        return true;

    }


    /* =========================================================
       INITIALS
    ========================================================= */

    function getInitials(name) {

        if (!name) {

            return "P";

        }


        const parts =
            name
                .trim()
                .split(/\s+/)
                .filter(Boolean);


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
       LOAD ALL REGISTERED DETAILS
    ========================================================= */

    function loadPatientDetails() {

        const patient =
            getPatientData();


        if (!patient) {

            return;

        }


        const name =
            patient.name ||
            patient.full_name ||
            "Patient";


        const phone =
            patient.phone ||
            patient.mobile ||
            "-";


        const gender =
            patient.gender ||
            "-";


        const email =
            patient.email ||
            "Not added yet";


        const patientId =
            patient.patient_id ||
            patient.id ||
            "Not assigned";


        const age =
            patient.age ||
            "Not added yet";


        const emergency =
            patient.emergency_contact_phone ||
            patient.emergency_contact ||
            "Not added yet";


        const address =
            patient.address ||
            "Not added yet";


        /* HERO */

        document.getElementById(
            "profileName"
        ).textContent = name;


        /* PERSONAL */

        document.getElementById(
            "infoName"
        ).textContent = name;


        document.getElementById(
            "infoAge"
        ).textContent = age;


        document.getElementById(
            "infoGender"
        ).textContent = gender;


        document.getElementById(
            "infoPatientId"
        ).textContent = patientId;


        /* CONTACT */

        document.getElementById(
            "infoPhone"
        ).textContent = phone;


        document.getElementById(
            "infoEmail"
        ).textContent = email;


        document.getElementById(
            "infoEmergency"
        ).textContent = emergency;


        document.getElementById(
            "infoAddress"
        ).textContent = address;


        /* INITIALS */

        document.getElementById(
            "avatarInitials"
        ).textContent =
            getInitials(name);


        /* PHOTO */

        loadSavedPhoto();

    }


    /* =========================================================
       PROFILE PHOTO
    ========================================================= */

    function openPhotoPicker() {

        if (!checkProfileAccess()) {

            return;

        }


        document.getElementById(
            "profilePhotoInput"
        ).click();

    }


    function changeProfilePhoto(event) {

        const file =
            event.target.files[0];


        if (!file) {

            return;

        }


        if (!file.type.startsWith("image/")) {

            showMessage(
                "Please select an image file."
            );

            return;

        }


        if (file.size > 5 * 1024 * 1024) {

            showMessage(
                "Please select an image smaller than 5 MB."
            );

            event.target.value = "";

            return;

        }


        const reader =
            new FileReader();


        reader.onload = function () {

            const imageData =
                reader.result;


            try {

                localStorage.setItem(
                    "alnoor_patient_profile_photo",
                    imageData
                );


                showProfilePhoto(
                    imageData
                );


                showMessage(
                    "Profile photo updated successfully."
                );


            } catch (error) {

                console.error(
                    "Photo save error:",
                    error
                );

                showMessage(
                    "Photo could not be saved."
                );

            }

        };


        reader.readAsDataURL(file);

    }


    function loadSavedPhoto() {

        const savedPhoto =
            localStorage.getItem(
                "alnoor_patient_profile_photo"
            );


        if (savedPhoto) {

            showProfilePhoto(
                savedPhoto
            );

        }

    }


    function showProfilePhoto(photo) {

        const avatar =
            document.getElementById(
                "profileAvatar"
            );


        const image =
            document.getElementById(
                "profilePhoto"
            );


        image.src =
            photo;


        avatar.classList.add(
            "has-photo"
        );

    }


    /* =========================================================
       NOTIFICATION TOGGLE
    ========================================================= */

    function toggleNotification(element) {

        element.classList.toggle("off");


        if (
            element.classList.contains("off")
        ) {

            showMessage(
                "Notification turned off."
            );

        } else {

            showMessage(
                "Notification turned on."
            );

        }

    }


    /* =========================================================
       TOAST
    ========================================================= */

    function showMessage(message) {

        const toast =
            document.getElementById(
                "toast"
            );


        toast.textContent =
            message;


        toast.classList.add(
            "show"
        );


        setTimeout(function () {

            toast.classList.remove(
                "show"
            );

        }, 3000);

    }


    /* =========================================================
       LOGOUT
    ========================================================= */

    function logoutUser() {

        const confirmed =
            confirm(
                "Are you sure you want to logout?"
            );


        if (!confirmed) {

            return;

        }


        localStorage.removeItem(
            "alnoor_patient_token"
        );

        localStorage.removeItem(
            "alnoor_patient_user"
        );

        sessionStorage.removeItem(
            "alnoor_patient_token"
        );

        sessionStorage.removeItem(
            "alnoor_patient_user"
        );


        /*
         * Remove local profile photo too,
         * because this browser session no longer
         * belongs to the patient.
         */

        localStorage.removeItem(
            "alnoor_patient_profile_photo"
        );


        showMessage(
            "You have been logged out."
        );


        setTimeout(function () {

            window.location.href =
                "{{ route('home') }}";

        }, 800);

    }


    /* =========================================================
       DELETE ACCOUNT
    ========================================================= */

    function deleteAccount() {

        const confirmed =
            confirm(
                "Are you sure you want to delete your account?"
            );


        if (!confirmed) {

            return;

        }


        showMessage(
            "Account deletion will be connected to Laravel backend soon."
        );

    }


    /* =========================================================
       PAGE LOAD
    ========================================================= */

    document.addEventListener(
        "DOMContentLoaded",
        function () {

            /*
             * IMPORTANT:
             * First check registration.
             * If patient is not registered,
             * immediately redirect to Register page.
             */

            if (!checkProfileAccess()) {

                return;

            }


            /*
             * Registered patient:
             * load all saved registration information.
             */

            loadPatientDetails();

        }
    );

</script>

</body>
</html>