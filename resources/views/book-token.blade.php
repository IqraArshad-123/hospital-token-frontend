<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Get Online Token | Al-Noor Hospital</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --blue: #07558d;
            --dark-blue: #063d70;
            --red: #ef3340;
            --green: #198754;
            --light-blue: #eef6fc;
            --border: #dce7ef;
            --text: #183247;
            --muted: #718392;
            --white: #ffffff;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8fb;
            color: var(--text);
            min-height: 100vh;
            padding-bottom: 105px;
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

        /* =====================================================
           TOP BAR
        ===================================================== */

        .topbar {
            height: 70px;
            background: rgba(255,255,255,.97);
            border-bottom: 1px solid #e5edf3;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 6%;

            position: sticky;
            top: 0;
            z-index: 1000;

            box-shadow: 0 4px 20px rgba(6,61,112,.06);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-logo {
            width: 41px;
            height: 41px;
            border-radius: 12px;

            background: linear-gradient(
                135deg,
                #063d70,
                #07558d
            );

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-logo svg {
            width: 22px;
            height: 22px;
        }

        .brand-text strong {
            display: block;
            font-size: 17px;
            color: var(--dark-blue);
        }

        .brand-text span {
            display: block;
            font-size: 9px;
            color: var(--muted);
            margin-top: 2px;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .doctors-link {
            font-size: 13px;
            font-weight: 800;
            color: var(--blue);
        }

        .register-top-btn {
            min-width: 88px;
            height: 38px;

            padding: 0 15px;

            border-radius: 10px;

            background: var(--red);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 11px;
            font-weight: 800;

            box-shadow: 0 7px 18px rgba(239,51,64,.20);

            transition: .2s;
        }

        .register-top-btn:hover {
            transform: translateY(-1px);
            background: #d92332;
        }

        .profile-btn {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #07558d,
                #063d70
            );

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;

            box-shadow: 0 6px 15px rgba(7,85,141,.15);

            transition: .2s;
        }

        .profile-btn:hover {
            transform: translateY(-2px);
        }

        /* =====================================================
           PAGE
        ===================================================== */

        .page {
            width: min(1050px,92%);
            margin: 34px auto 0;
        }

        .eyebrow {
            color: var(--red);

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1.5px;
            text-transform: uppercase;

            margin-bottom: 8px;
        }

        .heading h1 {
            color: var(--dark-blue);

            font-size: clamp(28px,5vw,39px);

            line-height: 1.15;

            margin-bottom: 9px;
        }

        .heading p {
            color: var(--muted);

            font-size: 13px;
            line-height: 1.6;

            max-width: 650px;
        }

        /* =====================================================
           AUTH REQUIRED
        ===================================================== */

        .auth-required {
            background: white;

            border: 1px solid #dce7ef;

            border-radius: 22px;

            margin-top: 28px;

            padding: 48px 28px;

            text-align: center;

            box-shadow: 0 18px 50px rgba(7,61,100,.08);

            animation: fadeIn .35s ease;
        }

        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .auth-required-icon {
            width: 72px;
            height: 72px;

            margin: 0 auto 18px;

            border-radius: 20px;

            background: #edf6fc;

            color: var(--blue);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-required-icon svg {
            width: 34px;
            height: 34px;
        }

        .auth-required h2 {
            color: var(--dark-blue);

            font-size: 25px;

            margin-bottom: 10px;
        }

        .auth-required p {
            color: var(--muted);

            max-width: 560px;

            margin: 0 auto 24px;

            font-size: 13px;

            line-height: 1.7;
        }

        .auth-message {
            width: min(520px,100%);

            margin: 0 auto 22px;

            padding: 13px 15px;

            border-radius: 11px;

            background: #fff7e7;

            border: 1px solid #efd89e;

            color: #805d10;

            font-size: 11px;

            font-weight: 700;
        }

        .auth-buttons {
            display: flex;

            justify-content: center;

            gap: 10px;

            flex-wrap: wrap;
        }

        .register-main-btn {
            min-width: 165px;

            height: 48px;

            padding: 0 20px;

            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #ef3340,
                #d92332
            );

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;

            box-shadow: 0 10px 24px rgba(239,51,64,.20);

            transition: .2s;
        }

        .register-main-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 13px 28px rgba(239,51,64,.27);
        }

        .home-main-btn {
            min-width: 135px;

            height: 48px;

            padding: 0 20px;

            border-radius: 11px;

            background: white;

            color: var(--blue);

            border: 1px solid #cddde7;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;

            transition: .2s;
        }

        .home-main-btn:hover {
            border-color: var(--blue);
            background: #f5faff;
        }

        /* =====================================================
           BOOKING AREA
        ===================================================== */

        #bookingArea {
            display: none;
        }

        #bookingArea.show {
            display: block;
        }

        /* =====================================================
           STEPS
        ===================================================== */

        .steps {
            margin: 24px 0;

            background: white;

            border: 1px solid var(--border);

            border-radius: 15px;

            padding: 12px 15px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 5px;
        }

        .step {
            display: flex;
            align-items: center;

            gap: 7px;

            color: #9aa9b5;

            font-size: 10px;
            font-weight: 800;

            white-space: nowrap;
        }

        .step-number {
            width: 26px;
            height: 26px;

            border-radius: 50%;

            background: #edf2f5;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 10px;
        }

        .step.active {
            color: var(--blue);
        }

        .step.active .step-number {
            color: white;
            background: var(--blue);

            box-shadow: 0 4px 12px rgba(7,85,141,.22);
        }

        .step-line {
            height: 1px;

            background: #dce5eb;

            flex: 1;

            max-width: 90px;
        }

        /* =====================================================
           BOOKING CARD
        ===================================================== */

        .booking-card {
            background: white;

            border: 1px solid #e0eaf1;

            border-radius: 22px;

            padding: 28px;

            box-shadow: 0 18px 50px rgba(7,61,100,.08);
        }

        .section {
            padding-bottom: 28px;

            margin-bottom: 28px;

            border-bottom: 1px solid #e7eef3;
        }

        .section:last-child {
            border-bottom: none;

            padding-bottom: 0;

            margin-bottom: 0;
        }

        .section-title {
            display: flex;
            align-items: flex-start;

            gap: 12px;

            margin-bottom: 19px;
        }

        .section-icon {
            width: 38px;
            height: 38px;

            flex: 0 0 38px;

            border-radius: 11px;

            background: #edf6fc;

            color: var(--blue);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-icon svg {
            width: 19px;
            height: 19px;
        }

        .section-title h2 {
            color: var(--dark-blue);

            font-size: 17px;

            margin-bottom: 4px;
        }

        .section-title p {
            color: var(--muted);

            font-size: 11px;
        }

        /* =====================================================
           TOKEN BANNER
        ===================================================== */

        .token-banner {
            border: 1px solid #b9dfcb;

            background: #f1fbf5;

            border-radius: 14px;

            padding: 14px 16px;

            display: flex;
            align-items: center;

            gap: 12px;

            margin-bottom: 0;
        }

        .token-icon {
            width: 36px;
            height: 36px;

            border-radius: 10px;

            background: #d9f3e4;

            color: var(--green);

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .token-icon svg {
            width: 18px;
        }

        .token-banner strong {
            display: block;

            color: #176c43;

            font-size: 13px;

            margin-bottom: 3px;
        }

        .token-banner span {
            color: #59816d;

            font-size: 10px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .form-grid {
            display: grid;

            grid-template-columns: repeat(2,1fr);

            gap: 17px;
        }

        .field {
            display: flex;

            flex-direction: column;
        }

        .field.full {
            grid-column: 1/-1;
        }

        .field label {
            color: #344d60;

            font-size: 12px;
            font-weight: 800;

            margin-bottom: 8px;
        }

        .field label span {
            color: var(--red);
        }

        .input,
        .select {
            width: 100%;

            height: 48px;

            border: 1px solid #d5e1e9;

            border-radius: 11px;

            background: #fbfdfe;

            color: var(--text);

            padding: 0 13px;

            outline: none;

            font-size: 13px;

            transition: .2s;
        }

        .input:focus,
        .select:focus {
            border-color: var(--blue);

            background: white;

            box-shadow: 0 0 0 3px rgba(7,85,141,.08);
        }

        .select {
            cursor: pointer;
        }

        /* =====================================================
           HELP
        ===================================================== */

        .help-box {
            margin-top: 14px;

            border: 1px dashed #b9cedc;

            border-radius: 13px;

            background: #f8fbfd;

            padding: 14px;
        }

        .help-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 12px;
        }

        .help-text strong {
            display: block;

            color: var(--dark-blue);

            font-size: 12px;

            margin-bottom: 4px;
        }

        .help-text span {
            color: var(--muted);

            font-size: 10px;
        }

        .help-btn {
            border: 1px solid #cbdde8;

            background: white;

            color: var(--blue);

            border-radius: 9px;

            padding: 9px 11px;

            font-size: 10px;

            font-weight: 800;

            cursor: pointer;

            white-space: nowrap;
        }

        .problem-box {
            display: none;

            margin-top: 14px;
        }

        .problem-box.show {
            display: block;
        }

        .problem-title {
            color: #536a7b;

            font-size: 10px;
            font-weight: 800;

            margin-bottom: 9px;
        }

        .problem-options {
            display: grid;

            grid-template-columns: repeat(3,1fr);

            gap: 8px;
        }

        .problem-option {
            border: 1px solid #d8e4eb;

            background: white;

            border-radius: 9px;

            padding: 10px 5px;

            color: #526a7a;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;
        }

        .problem-option:hover {
            border-color: var(--blue);
            color: var(--blue);
        }

        /* =====================================================
           AVAILABILITY
        ===================================================== */

        .availability {
            display: none;

            margin-top: 20px;

            border: 1px solid #d8e7f0;

            border-radius: 16px;

            overflow: hidden;

            background: #f9fcfe;

            animation: showBox .3s ease;
        }

        .availability.show {
            display: block;
        }

        @keyframes showBox {

            from {
                opacity: 0;
                transform: translateY(7px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .availability-header {
            padding: 16px;

            background: #f1f8fc;

            border-bottom: 1px solid #dce9f0;
        }

        .availability-header-top {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 12px;
        }

        .availability-header h3 {
            color: var(--dark-blue);

            font-size: 14px;

            margin-bottom: 4px;
        }

        .availability-header p {
            color: var(--muted);

            font-size: 10px;
        }

        .demo-badge {
            background: #fff7e7;

            color: #956400;

            border: 1px solid #efd89e;

            border-radius: 20px;

            padding: 5px 8px;

            font-size: 8px;

            font-weight: 800;

            white-space: nowrap;
        }

        /* =====================================================
           DATES
        ===================================================== */

        .dates-area {
            padding: 17px;

            border-bottom: 1px solid #e1ebf1;
        }

        .available-label {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 11px;
        }

        .available-label strong {
            color: #3d5668;

            font-size: 11px;
        }

        .available-label span {
            color: var(--green);

            font-size: 9px;

            font-weight: 800;
        }

        .dates {
            display: flex;

            gap: 8px;

            overflow-x: auto;

            padding-bottom: 3px;
        }

        .date-card {
            min-width: 75px;

            height: 70px;

            border: 1px solid #d5e2ea;

            background: white;

            border-radius: 11px;

            cursor: pointer;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 4px;

            transition: .2s;
        }

        .date-card:hover {
            border-color: var(--blue);
        }

        .date-card .day {
            color: var(--muted);

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;
        }

        .date-card .number {
            color: var(--dark-blue);

            font-size: 17px;

            font-weight: 800;
        }

        .date-card .month {
            color: var(--muted);

            font-size: 8px;
        }

        .date-card.selected {
            background: var(--blue);

            border-color: var(--blue);

            box-shadow: 0 7px 18px rgba(7,85,141,.2);
        }

        .date-card.selected .day,
        .date-card.selected .number,
        .date-card.selected .month {
            color: white;
        }

        .date-card.unavailable {
            background: #f1f3f5;

            border-color: #e3e7ea;

            cursor: not-allowed;

            opacity: .48;
        }

        .date-card.unavailable .number {
            text-decoration: line-through;
        }

        .date-note {
            margin-top: 10px;

            color: var(--muted);

            font-size: 9px;
        }

        /* =====================================================
           TIMES
        ===================================================== */

        .times-area {
            padding: 17px;

            display: none;
        }

        .times-area.show {
            display: block;

            animation: showBox .3s ease;
        }

        .times-title {
            color: #3d5668;

            font-size: 11px;

            font-weight: 800;

            margin-bottom: 10px;
        }

        .time-slots {
            display: flex;

            flex-wrap: wrap;

            gap: 7px;
        }

        .time-slot {
            border: 1px solid #d3e0e8;

            background: white;

            color: #486173;

            border-radius: 9px;

            padding: 9px 11px;

            font-size: 10px;

            font-weight: 800;

            cursor: pointer;
        }

        .time-slot:hover {
            border-color: var(--blue);

            color: var(--blue);
        }

        .time-slot.selected {
            background: var(--blue);

            border-color: var(--blue);

            color: white;
        }

        .selected-time {
            margin-top: 9px;

            color: var(--green);

            font-size: 10px;

            font-weight: 800;
        }

        /* =====================================================
           GENDER
        ===================================================== */

        .gender-options {
            display: grid;

            grid-template-columns: repeat(3,1fr);

            gap: 8px;
        }

        .gender-option {
            position: relative;
        }

        .gender-option input {
            position: absolute;

            opacity: 0;
        }

        .gender-option label {
            height: 45px;

            border: 1px solid #d5e1e9;

            border-radius: 10px;

            background: #fbfdfe;

            display: flex;

            justify-content: center;
            align-items: center;

            cursor: pointer;

            color: #536b7c;

            font-size: 11px;

            font-weight: 700;

            margin: 0;
        }

        .gender-option input:checked + label {
            background: #edf6fc;

            border-color: var(--blue);

            color: var(--blue);
        }

        /* =====================================================
           SUMMARY
        ===================================================== */

        .summary {
            border: 1px solid #dce7ee;

            border-radius: 14px;

            overflow: hidden;

            background: #fbfdfe;
        }

        .summary-title {
            padding: 13px 15px;

            background: #f2f7fa;

            border-bottom: 1px solid #dce7ee;

            color: var(--dark-blue);

            font-size: 12px;

            font-weight: 800;
        }

        .summary-row {
            display: flex;

            justify-content: space-between;

            gap: 15px;

            padding: 10px 15px;

            border-bottom: 1px solid #edf2f5;

            font-size: 10px;
        }

        .summary-row:last-child {
            border-bottom: none;
        }

        .summary-row span:first-child {
            color: var(--muted);
        }

        .summary-row span:last-child {
            color: var(--dark-blue);

            font-weight: 800;

            text-align: right;
        }

        /* =====================================================
           SUBMIT
        ===================================================== */

        .submit-area {
            margin-top: 19px;
        }

        .submit-btn {
            width: 100%;

            height: 53px;

            border: none;

            border-radius: 13px;

            background: linear-gradient(
                135deg,
                #ef3340,
                #d92332
            );

            color: white;

            font-size: 13px;

            font-weight: 800;

            cursor: pointer;

            box-shadow: 0 10px 25px rgba(239,51,64,.22);

            transition: .2s;
        }

        .submit-btn:hover {
            transform: translateY(-1px);
        }

        .submit-note {
            text-align: center;

            color: var(--muted);

            font-size: 9px;

            line-height: 1.5;

            margin-top: 9px;
        }

        .error-message {
            display: none;

            color: var(--red);

            font-size: 10px;

            font-weight: 700;

            text-align: center;

            margin-top: 9px;
        }

        /* =====================================================
           MOBILE NAV
        ===================================================== */

        .mobile-bottom-nav {
            position: fixed;

            left: 50%;
            bottom: 14px;

            transform: translateX(-50%);

            width: min(560px,calc(100% - 22px));

            height: 68px;

            background: rgba(255,255,255,.97);

            border: 1px solid #dce7ee;

            border-radius: 20px;

            box-shadow: 0 12px 35px rgba(4,55,90,.16);

            display: grid;

            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;

            align-items: center;

            z-index: 2000;

            backdrop-filter: blur(12px);
        }

        .mobile-bottom-nav .bottom-item {
            height: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 4px;

            color: #8193a1;

            font-size: 9px;

            font-weight: 800;

            transition: .2s;
        }

        .mobile-bottom-nav .bottom-item svg {
            width: 19px;
            height: 19px;

            stroke: currentColor;
        }

        .mobile-bottom-nav .bottom-item:hover {
            color: #07558d;
        }

        .mobile-bottom-nav .bottom-item.active {
            color: #ef3340;
        }

        .mobile-bottom-nav .bottom-token {
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

            box-shadow: 0 9px 23px rgba(239,51,64,.28);

            transition: .2s;
        }

        .mobile-bottom-nav .bottom-token svg {
            width: 23px;
            height: 23px;

            stroke: currentColor;
        }

        .mobile-bottom-nav .bottom-token:hover {
            transform: translateY(-2px);

            box-shadow: 0 12px 27px rgba(239,51,64,.34);
        }

        /* =====================================================
           MOBILE
        ===================================================== */

        @media(max-width:760px) {

            .topbar {
                height: 64px;

                padding: 0 4%;
            }

            .doctors-link {
                display: none;
            }

            .brand-logo {
                width: 37px;
                height: 37px;
            }

            .brand-text strong {
                font-size: 15px;
            }

            .brand-text span {
                font-size: 8px;
            }

            .register-top-btn {
                min-width: 76px;

                height: 35px;

                font-size: 10px;

                padding: 0 11px;
            }

            .page {
                width: 94%;

                margin-top: 24px;
            }

            .heading h1 {
                font-size: 28px;
            }

            .heading p {
                font-size: 12px;
            }

            .auth-required {
                padding: 38px 18px;
            }

            .auth-required h2 {
                font-size: 22px;
            }

            .auth-required p {
                font-size: 12px;
            }

            .steps {
                padding: 10px;

                gap: 3px;
            }

            .step {
                font-size: 8px;

                gap: 4px;
            }

            .step-number {
                width: 23px;
                height: 23px;

                font-size: 9px;
            }

            .step-line {
                max-width: 20px;
            }

            .booking-card {
                padding: 19px 15px;

                border-radius: 17px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .field.full {
                grid-column: auto;
            }

            .problem-options {
                grid-template-columns: repeat(2,1fr);
            }

            .availability-header-top {
                flex-direction: column;
            }

            .dates {
                padding-right: 2px;
            }

            .mobile-bottom-nav {
                bottom: 9px;

                width: calc(100% - 18px);

                height: 67px;

                border-radius: 19px;
            }

            .mobile-bottom-nav .bottom-item {
                font-size: 8px;

                gap: 3px;
            }

            .mobile-bottom-nav .bottom-item svg {
                width: 18px;
                height: 18px;
            }

            .mobile-bottom-nav .bottom-token {
                width: 57px;
                height: 57px;

                margin-top: -18px;

                border-radius: 17px;
            }

        }

        @media(max-width:400px) {

            .step span {
                display: none;
            }

            .step-line {
                max-width: 15px;
            }

            .booking-card {
                padding: 17px 13px;
            }

            .date-card {
                min-width: 68px;

                height: 66px;
            }

            .time-slot {
                padding: 8px 9px;

                font-size: 9px;
            }

            .mobile-bottom-nav {
                width: calc(100% - 12px);

                height: 64px;
            }

            .mobile-bottom-nav .bottom-item {
                font-size: 7px;
            }

            .mobile-bottom-nav .bottom-item svg {
                width: 17px;
                height: 17px;
            }

            .mobile-bottom-nav .bottom-token {
                width: 54px;
                height: 54px;
            }

        }

    </style>
</head>

<body>

<header class="topbar">

    <a href="{{ route('home') }}" class="brand">

        <div class="brand-logo">

            <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor">

                <path
                    d="M12 21s-7-4.5-9-9.2C1.5 8.2 3.5 5 7 5c2 0 3.5 1.1 5 3 1.5-1.9 3-3 5-3 3.5 0 5.5 3.2 4 6.8C19 16.5 12 21 12 21Z"
                    stroke-width="1.8"/>

                <path
                    d="M12 8v7M8.5 11.5h7"
                    stroke-width="1.8"
                    stroke-linecap="round"/>

            </svg>

        </div>

        <div class="brand-text">

            <strong>Al-Noor Hospital</strong>

            <span>Patient Care Portal</span>

        </div>

    </a>

    <div class="top-actions">

        <a
            href="{{ route('find-doctors') }}"
            class="doctors-link">

            Find Doctors

        </a>

        <a
            href="{{ route('register') }}"
            class="register-top-btn"
            id="guestRegisterButton">

            Register

        </a>

        <a
            href="{{ route('profile') }}"
            class="profile-btn"
            id="loggedInProfileButton"
            style="display:none;">

            IS

        </a>

    </div>

</header>

<main class="page">

    <div class="heading">

        <div class="eyebrow">
            Online Consultation
        </div>

        <h1>
            Get Your Online Token
        </h1>

        <p>
            Book your place in the doctor's consultation queue
            by selecting your doctor, date and available time.
        </p>

    </div>

    <!-- =====================================================
         GUEST AREA
    ===================================================== -->

    <section
        class="auth-required"
        id="authRequiredArea">

        <div class="auth-required-icon">

            <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor">

                <rect
                    x="4"
                    y="10"
                    width="16"
                    height="11"
                    rx="2"
                    stroke-width="1.8"/>

                <path
                    d="M8 10V7a4 4 0 0 1 8 0v3"
                    stroke-width="1.8"
                    stroke-linecap="round"/>

                <circle
                    cx="12"
                    cy="15"
                    r="1"
                    fill="currentColor"
                    stroke="none"/>

                <path
                    d="M12 16v2"
                    stroke-width="1.8"
                    stroke-linecap="round"/>

            </svg>

        </div>

        <h2>
            Registration Required
        </h2>

        <p>
            To book an online token, you must first create
            your patient account. Registration helps us keep
            your token, appointment and patient information
            connected to your profile.
        </p>

        <div class="auth-message">
            Please register first to continue with
            online token booking.
        </div>

        <div class="auth-buttons">

            <a
                href="{{ route('register') }}"
                class="register-main-btn">

                Register Now

            </a>

            <a
                href="{{ route('home') }}"
                class="home-main-btn">

                Back to Home

            </a>

        </div>

    </section>

    <!-- =====================================================
         BOOKING AREA
    ===================================================== -->

    <div id="bookingArea">

        <div class="steps">

            <div class="step active">

                <div class="step-number">
                    1
                </div>

                <span>
                    Doctor
                </span>

            </div>

            <div class="step-line"></div>

            <div class="step">

                <div class="step-number">
                    2
                </div>

                <span>
                    Date & Time
                </span>

            </div>

            <div class="step-line"></div>

            <div class="step">

                <div class="step-number">
                    3
                </div>

                <span>
                    Patient
                </span>

            </div>

            <div class="step-line"></div>

            <div class="step">

                <div class="step-number">
                    4
                </div>

                <span>
                    Confirm
                </span>

            </div>

        </div>

        <form
            id="tokenForm"
            class="booking-card">

            <!-- ONLINE TOKEN -->

            <section class="section">

                <div class="token-banner">

                    <div class="token-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor">

                            <rect
                                x="3"
                                y="6"
                                width="18"
                                height="13"
                                rx="2"
                                stroke-width="1.8"/>

                            <path
                                d="M8 3v6M16 3v6"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                            <path
                                d="M7 13h4M7 16h7"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>

                    </div>

                    <div>

                        <strong>
                            Online Token
                        </strong>

                        <span>
                            Book your place in the doctor's
                            online consultation queue.
                        </span>

                    </div>

                </div>

            </section>

            <!-- DOCTOR -->

            <section class="section">

                <div class="section-title">

                    <div class="section-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor">

                            <circle
                                cx="12"
                                cy="7"
                                r="3"
                                stroke-width="1.8"/>

                            <path
                                d="M5 21c.7-4 2.8-6 7-6s6.3 2 7 6"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>

                    </div>

                    <div>

                        <h2>
                            Choose Doctor
                        </h2>

                        <p>
                            Select a department first,
                            then choose your doctor.
                        </p>

                    </div>

                </div>

                <div class="form-grid">

                    <div class="field">

                        <label for="department">

                            Department
                            <span>*</span>

                        </label>

                        <select
                            id="department"
                            class="select"
                            required>

                            <option value="">
                                Select department
                            </option>

                            <option value="General Medicine">
                                General Medicine
                            </option>

                            <option value="Cardiology">
                                Cardiology
                            </option>

                            <option value="Pediatrics">
                                Pediatrics
                            </option>

                            <option value="Dermatology">
                                Dermatology
                            </option>

                            <option value="Orthopedics">
                                Orthopedics
                            </option>

                            <option value="Gynecology">
                                Gynecology
                            </option>

                        </select>

                    </div>

                    <div class="field">

                        <label for="doctor">

                            Doctor
                            <span>*</span>

                        </label>

                        <select
                            id="doctor"
                            class="select"
                            required>

                            <option value="">
                                Select doctor
                            </option>

                            <option
                                value="Dr. Ayesha Khan"
                                data-department="Cardiology">

                                Dr. Ayesha Khan

                            </option>

                            <option
                                value="Dr. Ahmed Raza"
                                data-department="General Medicine">

                                Dr. Ahmed Raza

                            </option>

                            <option
                                value="Dr. Sara Malik"
                                data-department="Pediatrics">

                                Dr. Sara Malik

                            </option>

                            <option
                                value="Dr. Hina Ali"
                                data-department="Dermatology">

                                Dr. Hina Ali

                            </option>

                            <option
                                value="Dr. Usman Tariq"
                                data-department="Orthopedics">

                                Dr. Usman Tariq

                            </option>

                            <option
                                value="Dr. Fatima Noor"
                                data-department="Gynecology">

                                Dr. Fatima Noor

                            </option>

                        </select>

                    </div>

                </div>

                <div class="help-box">

                    <div class="help-header">

                        <div class="help-text">

                            <strong>
                                Not sure which doctor you need?
                            </strong>

                            <span>
                                Tell us what kind of problem
                                you need help with.
                            </span>

                        </div>

                        <button
                            type="button"
                            class="help-btn"
                            id="helpBtn">

                            Help me choose

                        </button>

                    </div>

                    <div
                        class="problem-box"
                        id="problemBox">

                        <div class="problem-title">
                            Choose a problem category
                        </div>

                        <div class="problem-options">

                            <button
                                type="button"
                                class="problem-option"
                                data-department="General Medicine">

                                General health

                            </button>

                            <button
                                type="button"
                                class="problem-option"
                                data-department="Pediatrics">

                                Child care

                            </button>

                            <button
                                type="button"
                                class="problem-option"
                                data-department="Cardiology">

                                Heart / chest

                            </button>

                            <button
                                type="button"
                                class="problem-option"
                                data-department="Dermatology">

                                Skin problems

                            </button>

                            <button
                                type="button"
                                class="problem-option"
                                data-department="Orthopedics">

                                Bone / joint

                            </button>

                            <button
                                type="button"
                                class="problem-option"
                                data-department="Gynecology">

                                Women's health

                            </button>

                        </div>

                    </div>

                </div>

                <!-- AVAILABILITY -->

                <div
                    class="availability"
                    id="availability">

                    <div class="availability-header">

                        <div class="availability-header-top">

                            <div>

                                <h3 id="availabilityDoctor">
                                    Doctor Availability
                                </h3>

                                <p>
                                    Only available dates can
                                    be selected.
                                </p>

                            </div>

                            <div class="demo-badge">
                                DEMO SCHEDULE
                            </div>

                        </div>

                    </div>

                    <div class="dates-area">

                        <div class="available-label">

                            <strong>
                                Available dates
                            </strong>

                            <span>
                                Select a date
                            </span>

                        </div>

                        <div
                            class="dates"
                            id="dates">
                        </div>

                        <div class="date-note">
                            Grey dates are unavailable
                            for this doctor.
                        </div>

                    </div>

                    <div
                        class="times-area"
                        id="timesArea">

                        <div class="times-title">
                            Available consultation times
                        </div>

                        <div
                            class="time-slots"
                            id="timeSlots">
                        </div>

                        <div
                            class="selected-time"
                            id="selectedTime">
                        </div>

                    </div>

                </div>

            </section>

            <!-- PATIENT -->

            <section class="section">

                <div class="section-title">

                    <div class="section-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor">

                            <circle
                                cx="12"
                                cy="7"
                                r="4"
                                stroke-width="1.8"/>

                            <path
                                d="M4 21c.8-4.1 3.4-6 8-6s7.2 1.9 8 6"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>

                    </div>

                    <div>

                        <h2>
                            Patient Information
                        </h2>

                        <p>
                            Your registered information
                            will be used for this token.
                        </p>

                    </div>

                </div>

                <div class="form-grid">

                    <div class="field full">

                        <label for="patientName">

                            Patient Name
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="patientName"
                            class="input"
                            placeholder="Enter patient full name"
                            required>

                    </div>

                    <div class="field">

                        <label for="mobile">

                            Mobile Number
                            <span>*</span>

                        </label>

                        <input
                            type="tel"
                            id="mobile"
                            class="input"
                            placeholder="03XX XXXXXXX"
                            inputmode="numeric"
                            required>

                    </div>

                    <div class="field">

                        <label for="age">

                            Age
                            <span>*</span>

                        </label>

                        <input
                            type="number"
                            id="age"
                            class="input"
                            placeholder="Enter age"
                            min="1"
                            max="120"
                            required>

                    </div>

                    <div class="field full">

                        <label>

                            Gender
                            <span>*</span>

                        </label>

                        <div class="gender-options">

                            <div class="gender-option">

                                <input
                                    type="radio"
                                    name="gender"
                                    id="male"
                                    value="Male"
                                    required>

                                <label for="male">
                                    Male
                                </label>

                            </div>

                            <div class="gender-option">

                                <input
                                    type="radio"
                                    name="gender"
                                    id="female"
                                    value="Female">

                                <label for="female">
                                    Female
                                </label>

                            </div>

                            <div class="gender-option">

                                <input
                                    type="radio"
                                    name="gender"
                                    id="other"
                                    value="Other">

                                <label for="other">
                                    Other
                                </label>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!-- SUMMARY -->

            <section class="section">

                <div class="section-title">

                    <div class="section-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor">

                            <path
                                d="M7 3h10v18H7z"
                                stroke-width="1.8"/>

                            <path
                                d="M10 7h4M10 11h4M10 15h4"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>

                    </div>

                    <div>

                        <h2>
                            Booking Summary
                        </h2>

                        <p>
                            Review your details before confirmation.
                        </p>

                    </div>

                </div>

                <div class="summary">

                    <div class="summary-title">
                        Online Consultation
                    </div>

                    <div class="summary-row">

                        <span>
                            Department
                        </span>

                        <span id="summaryDepartment">
                            Not selected
                        </span>

                    </div>

                    <div class="summary-row">

                        <span>
                            Doctor
                        </span>

                        <span id="summaryDoctor">
                            Not selected
                        </span>

                    </div>

                    <div class="summary-row">

                        <span>
                            Date
                        </span>

                        <span id="summaryDate">
                            Not selected
                        </span>

                    </div>

                    <div class="summary-row">

                        <span>
                            Time
                        </span>

                        <span id="summaryTime">
                            Not selected
                        </span>

                    </div>

                    <div class="summary-row">

                        <span>
                            Patient
                        </span>

                        <span id="summaryPatient">
                            Not entered
                        </span>

                    </div>

                </div>

                <div class="submit-area">

                    <button
                        type="submit"
                        class="submit-btn">

                        Continue to Confirmation

                    </button>

                    <div
                        class="error-message"
                        id="errorMessage">
                    </div>

                    <div class="submit-note">

                        Only registered patients can book
                        an online token.

                    </div>

                </div>

            </section>

        </form>

    </div>

</main>

<!-- =====================================================
     MOBILE BOTTOM NAV
===================================================== -->

<nav class="mobile-bottom-nav">

    <a
        href="{{ route('home') }}"
        class="bottom-item">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="1.8">

            <path d="M3 11.5L12 4l9 7.5"></path>

            <path d="M5.5 10v9h13v-9"></path>

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
            stroke-width="1.8">

            <circle
                cx="10"
                cy="8"
                r="3">
            </circle>

            <path
                d="M4 20c0-3.5 2.5-6 6-6">
            </path>

            <path
                d="M17 13v7">
            </path>

            <path
                d="M13.5 16.5h7">
            </path>

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
            stroke="currentColor"
            stroke-width="1.8">

            <path d="M4 7h16v10H4z"></path>

            <path d="M8 7v3"></path>

            <path d="M16 7v3"></path>

            <path d="M8 14h8"></path>

        </svg>

    </a>

    <a
        href="{{ route('live-status') }}"
        class="bottom-item"
        id="queueLink">

        <svg
            viewBox="0 0 24 24"
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

    <a
        href="{{ route('profile') }}"
        class="bottom-item"
        id="profileLink">

        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="1.8">

            <circle
                cx="12"
                cy="8"
                r="3">
            </circle>

            <path
                d="M5 21c0-4 3-7 7-7s7 3 7 7">
            </path>

        </svg>

        <span>
            Profile
        </span>

    </a>

</nav>

<script>

/* =====================================================
   AUTH TOKEN
===================================================== */

function getStoredAuthToken() {

    return (
        localStorage.getItem("alnoor_patient_token") ||
        sessionStorage.getItem("alnoor_patient_token")
    );

}


/* =====================================================
   REGISTERED USER DATA
===================================================== */

function getStoredPatient() {

    const storedUser =
        localStorage.getItem(
            "alnoor_patient_user"
        ) ||
        sessionStorage.getItem(
            "alnoor_patient_user"
        );

    if (!storedUser) {
        return null;
    }

    try {

        return JSON.parse(storedUser);

    } catch (error) {

        console.error(
            "Unable to read patient data:",
            error
        );

        return null;
    }

}


/* =====================================================
   AUTHENTICATION CHECK
===================================================== */

function checkAuthentication() {

    const token =
        getStoredAuthToken();

    const authRequiredArea =
        document.getElementById(
            "authRequiredArea"
        );

    const bookingArea =
        document.getElementById(
            "bookingArea"
        );

    const guestRegisterButton =
        document.getElementById(
            "guestRegisterButton"
        );

    const loggedInProfileButton =
        document.getElementById(
            "loggedInProfileButton"
        );

    if (!token) {

        authRequiredArea.style.display =
            "block";

        bookingArea.classList.remove(
            "show"
        );

        guestRegisterButton.style.display =
            "flex";

        loggedInProfileButton.style.display =
            "none";

        return false;
    }

    authRequiredArea.style.display =
        "none";

    bookingArea.classList.add(
        "show"
    );

    guestRegisterButton.style.display =
        "none";

    loggedInProfileButton.style.display =
        "flex";

    return true;

}


/* =====================================================
   LOAD REGISTERED PATIENT DATA
===================================================== */

function loadRegisteredPatientData() {

    const patient =
        getStoredPatient();

    if (!patient) {
        return;
    }

    const name =
        patient.name ||
        "";

    const phone =
        patient.phone ||
        "";

    const patientNameField =
        document.getElementById(
            "patientName"
        );

    const mobileField =
        document.getElementById(
            "mobile"
        );

    if (patientNameField && name) {

        patientNameField.value =
            name;

        summaryPatient.textContent =
            name;

    }

    if (mobileField && phone) {

        mobileField.value =
            phone;

    }

    /*
     * If registration data contains gender,
     * automatically select it.
     */

    if (patient.gender) {

        const genderInput =
            document.querySelector(
                `input[name="gender"][value="${patient.gender}"]`
            );

        if (genderInput) {

            genderInput.checked =
                true;

        }

    }

}


/* =====================================================
   PROFILE INITIALS
===================================================== */

function getInitials(name) {

    if (!name) {
        return "P";
    }

    const parts =
        name
            .trim()
            .split(/\s+/);

    if (parts.length === 1) {

        return parts[0]
            .substring(0,2)
            .toUpperCase();

    }

    const first =
        parts[0]
            .charAt(0);

    const last =
        parts[parts.length - 1]
            .charAt(0);

    return (
        first +
        last
    ).toUpperCase();

}


/* =====================================================
   SHOW PROFILE INITIALS
===================================================== */

function loadProfileInitials() {

    const profileButton =
        document.getElementById(
            "loggedInProfileButton"
        );

    const patient =
        getStoredPatient();

    if (!profileButton) {
        return;
    }

    if (
        patient &&
        patient.name
    ) {

        profileButton.textContent =
            getInitials(
                patient.name
            );

        profileButton.title =
            patient.name;

    } else {

        profileButton.textContent =
            "P";

    }

}


/* =====================================================
   ELEMENTS
===================================================== */

const department =
    document.getElementById(
        "department"
    );

const doctor =
    document.getElementById(
        "doctor"
    );

const availability =
    document.getElementById(
        "availability"
    );

const availabilityDoctor =
    document.getElementById(
        "availabilityDoctor"
    );

const datesContainer =
    document.getElementById(
        "dates"
    );

const timesArea =
    document.getElementById(
        "timesArea"
    );

const timeSlots =
    document.getElementById(
        "timeSlots"
    );

const selectedTime =
    document.getElementById(
        "selectedTime"
    );

const helpBtn =
    document.getElementById(
        "helpBtn"
    );

const problemBox =
    document.getElementById(
        "problemBox"
    );

const summaryDepartment =
    document.getElementById(
        "summaryDepartment"
    );

const summaryDoctor =
    document.getElementById(
        "summaryDoctor"
    );

const summaryDate =
    document.getElementById(
        "summaryDate"
    );

const summaryTime =
    document.getElementById(
        "summaryTime"
    );

const summaryPatient =
    document.getElementById(
        "summaryPatient"
    );

const patientName =
    document.getElementById(
        "patientName"
    );

const tokenForm =
    document.getElementById(
        "tokenForm"
    );

const errorMessage =
    document.getElementById(
        "errorMessage"
    );

const appointmentDate = {
    value: ""
};


/* =====================================================
   DEMO DOCTOR SCHEDULES
===================================================== */

const doctorSchedules = {

    "Dr. Ayesha Khan": {

        department: "Cardiology",

        availableDays: [1,2,4,5],

        times: [
            "09:00 AM",
            "09:30 AM",
            "10:00 AM",
            "10:30 AM",
            "11:00 AM",
            "11:30 AM",
            "12:00 PM"
        ]

    },

    "Dr. Ahmed Raza": {

        department: "General Medicine",

        availableDays: [1,2,3,4,5],

        times: [
            "10:00 AM",
            "10:30 AM",
            "11:00 AM",
            "11:30 AM",
            "12:00 PM",
            "12:30 PM",
            "01:00 PM"
        ]

    },

    "Dr. Sara Malik": {

        department: "Pediatrics",

        availableDays: [1,3,5],

        times: [
            "09:30 AM",
            "10:00 AM",
            "10:30 AM",
            "11:00 AM",
            "11:30 AM",
            "12:00 PM"
        ]

    },

    "Dr. Hina Ali": {

        department: "Dermatology",

        availableDays: [2,4,6],

        times: [
            "11:00 AM",
            "11:30 AM",
            "12:00 PM",
            "12:30 PM",
            "01:00 PM"
        ]

    },

    "Dr. Usman Tariq": {

        department: "Orthopedics",

        availableDays: [1,2,4,5],

        times: [
            "09:00 AM",
            "09:30 AM",
            "10:00 AM",
            "10:30 AM",
            "11:00 AM",
            "11:30 AM"
        ]

    },

    "Dr. Fatima Noor": {

        department: "Gynecology",

        availableDays: [2,3,4,6],

        times: [
            "10:00 AM",
            "10:30 AM",
            "11:00 AM",
            "11:30 AM",
            "12:00 PM",
            "12:30 PM"
        ]

    }

};


/* =====================================================
   DEPARTMENT CHANGE
===================================================== */

department.addEventListener(
    "change",
    function() {

        const selectedDepartment =
            this.value;

        doctor.value =
            "";

        Array.from(
            doctor.options
        ).forEach(
            function(option) {

                if (!option.value) {
                    return;
                }

                option.hidden =
                    selectedDepartment &&
                    option.dataset.department !==
                    selectedDepartment;

            }
        );

        summaryDepartment.textContent =
            selectedDepartment ||
            "Not selected";

        summaryDoctor.textContent =
            "Not selected";

        summaryDate.textContent =
            "Not selected";

        summaryTime.textContent =
            "Not selected";

        appointmentDate.value =
            "";

        hideAvailability();

    }
);


/* =====================================================
   DOCTOR CHANGE
===================================================== */

doctor.addEventListener(
    "change",
    function() {

        const selectedDoctor =
            this.value;

        summaryDoctor.textContent =
            selectedDoctor ||
            "Not selected";

        summaryDate.textContent =
            "Not selected";

        summaryTime.textContent =
            "Not selected";

        appointmentDate.value =
            "";

        if (!selectedDoctor) {

            hideAvailability();

            return;
        }

        const schedule =
            doctorSchedules[
                selectedDoctor
            ];

        if (!schedule) {

            hideAvailability();

            return;
        }

        availability.classList.add(
            "show"
        );

        availabilityDoctor.textContent =
            selectedDoctor +
            " — Available Dates";

        generateAvailableDates(
            schedule
        );

        timesArea.classList.remove(
            "show"
        );

        selectedTime.textContent =
            "";

    }
);


/* =====================================================
   GENERATE DATES
===================================================== */

function generateAvailableDates(
    schedule
) {

    datesContainer.innerHTML =
        "";

    const today =
        new Date();

    for (
        let i = 0;
        i < 21;
        i++
    ) {

        const date =
            new Date(today);

        date.setDate(
            today.getDate() + i
        );

        const dayNumber =
            date.getDay();

        const isAvailable =
            schedule.availableDays.includes(
                dayNumber
            );

        const dateButton =
            document.createElement(
                "button"
            );

        dateButton.type =
            "button";

        dateButton.className =
            "date-card";

        if (!isAvailable) {

            dateButton.classList.add(
                "unavailable"
            );

        }

        const dayName =
            date.toLocaleDateString(
                "en-US",
                {
                    weekday: "short"
                }
            );

        const monthName =
            date.toLocaleDateString(
                "en-US",
                {
                    month: "short"
                }
            );

        dateButton.innerHTML = `

            <span class="day">
                ${dayName}
            </span>

            <span class="number">
                ${date.getDate()}
            </span>

            <span class="month">
                ${monthName}
            </span>

        `;

        if (isAvailable) {

            dateButton.addEventListener(
                "click",
                function() {

                    document
                        .querySelectorAll(
                            ".date-card"
                        )
                        .forEach(
                            function(card) {

                                card.classList.remove(
                                    "selected"
                                );

                            }
                        );

                    dateButton.classList.add(
                        "selected"
                    );

                    const dateString =
                        getDateString(
                            date
                        );

                    appointmentDate.value =
                        dateString;

                    summaryDate.textContent =
                        formatDate(
                            dateString
                        );

                    summaryTime.textContent =
                        "Not selected";

                    selectedTime.textContent =
                        "";

                    renderTimeSlots(
                        schedule.times
                    );

                }
            );

        }

        datesContainer.appendChild(
            dateButton
        );

    }

}


/* =====================================================
   DATE STRING
===================================================== */

function getDateString(date) {

    const year =
        date.getFullYear();

    const month =
        String(
            date.getMonth() + 1
        ).padStart(
            2,
            "0"
        );

    const day =
        String(
            date.getDate()
        ).padStart(
            2,
            "0"
        );

    return `${year}-${month}-${day}`;

}


/* =====================================================
   TIME SLOTS
===================================================== */

function renderTimeSlots(times) {

    timesArea.classList.add(
        "show"
    );

    timeSlots.innerHTML =
        "";

    times.forEach(
        function(time) {

            const button =
                document.createElement(
                    "button"
                );

            button.type =
                "button";

            button.className =
                "time-slot";

            button.textContent =
                time;

            button.addEventListener(
                "click",
                function() {

                    document
                        .querySelectorAll(
                            ".time-slot"
                        )
                        .forEach(
                            function(slot) {

                                slot.classList.remove(
                                    "selected"
                                );

                            }
                        );

                    button.classList.add(
                        "selected"
                    );

                    selectedTime.textContent =
                        "Selected time: " +
                        time;

                    summaryTime.textContent =
                        time;

                }
            );

            timeSlots.appendChild(
                button
            );

        }
    );

}


/* =====================================================
   HELP ME CHOOSE
===================================================== */

helpBtn.addEventListener(
    "click",
    function() {

        problemBox.classList.toggle(
            "show"
        );

        if (
            problemBox.classList.contains(
                "show"
            )
        ) {

            helpBtn.textContent =
                "Hide options";

        } else {

            helpBtn.textContent =
                "Help me choose";

        }

    }
);


/* =====================================================
   PROBLEM CATEGORY
===================================================== */

document
    .querySelectorAll(
        ".problem-option"
    )
    .forEach(
        function(button) {

            button.addEventListener(
                "click",
                function() {

                    const selectedDepartment =
                        this.dataset.department;

                    department.value =
                        selectedDepartment;

                    department.dispatchEvent(
                        new Event("change")
                    );

                    const matchingDoctor =
                        Array.from(
                            doctor.options
                        ).find(
                            function(option) {

                                return (
                                    option.dataset.department ===
                                    selectedDepartment
                                );

                            }
                        );

                    if (matchingDoctor) {

                        doctor.value =
                            matchingDoctor.value;

                        doctor.dispatchEvent(
                            new Event("change")
                        );

                    }

                    problemBox.classList.remove(
                        "show"
                    );

                    helpBtn.textContent =
                        "Help me choose";

                }
            );

        }
    );


/* =====================================================
   PATIENT NAME
===================================================== */

patientName.addEventListener(
    "input",
    function() {

        summaryPatient.textContent =
            this.value.trim() ||
            "Not entered";

    }
);


/* =====================================================
   DATE FORMAT
===================================================== */

function formatDate(dateString) {

    const date =
        new Date(
            dateString +
            "T00:00:00"
        );

    return date.toLocaleDateString(
        "en-US",
        {
            day: "2-digit",
            month: "short",
            year: "numeric"
        }
    );

}


/* =====================================================
   HIDE AVAILABILITY
===================================================== */

function hideAvailability() {

    availability.classList.remove(
        "show"
    );

    timesArea.classList.remove(
        "show"
    );

    datesContainer.innerHTML =
        "";

    timeSlots.innerHTML =
        "";

    selectedTime.textContent =
        "";

}


/* =====================================================
   PRESELECT DOCTOR FROM URL
===================================================== */

const urlParams =
    new URLSearchParams(
        window.location.search
    );

const doctorFromUrl =
    urlParams.get(
        "doctor"
    );

if (doctorFromUrl) {

    const doctorOption =
        Array.from(
            doctor.options
        ).find(
            function(option) {

                return (
                    option.value ===
                    doctorFromUrl
                );

            }
        );

    if (doctorOption) {

        department.value =
            doctorOption.dataset.department;

        doctor.value =
            doctorFromUrl;

        doctor.dispatchEvent(
            new Event("change")
        );

        summaryDepartment.textContent =
            doctorOption.dataset.department;

    }

}


/* =====================================================
   FORM SUBMIT
===================================================== */

tokenForm.addEventListener(
    "submit",
    function(event) {

        event.preventDefault();

        if (!checkAuthentication()) {

            errorMessage.textContent =
                "Please register first before booking an online token.";

            errorMessage.style.display =
                "block";

            return;
        }

        errorMessage.style.display =
            "none";

        const gender =
            document.querySelector(
                'input[name="gender"]:checked'
            );

        const mobile =
            document
                .getElementById("mobile")
                .value
                .trim();

        const age =
            document
                .getElementById("age")
                .value;

        const selectedDoctor =
            doctor.value;

        const selectedDepartment =
            department.value;

        const selectedDate =
            appointmentDate.value;

        const selectedTimeValue =
            summaryTime.textContent;

        const selectedPatient =
            patientName.value.trim();

        const complete =
            selectedDepartment &&
            selectedDoctor &&
            selectedDate &&
            selectedTimeValue &&
            selectedTimeValue !== "Not selected" &&
            selectedPatient &&
            mobile &&
            age &&
            gender;

        if (!complete) {

            errorMessage.textContent =
                "Please complete all required information, including an available date and time.";

            errorMessage.style.display =
                "block";

            return;
        }

        const tokenData = {

            department:
                selectedDepartment,

            doctor:
                selectedDoctor,

            date:
                selectedDate,

            dateFormatted:
                formatDate(
                    selectedDate
                ),

            time:
                selectedTimeValue,

            patient:
                selectedPatient,

            mobile:
                mobile,

            age:
                age,

            gender:
                gender.value,

            status:
                "Waiting",

            createdAt:
                new Date().toISOString()

        };

        sessionStorage.setItem(
            "latestToken",
            JSON.stringify(
                tokenData
            )
        );

        window.location.href =
            "{{ route('live-status') }}";

    }
);


/* =====================================================
   INITIALIZE PAGE
===================================================== */

checkAuthentication();

loadRegisteredPatientData();

loadProfileInitials();

</script>

</body>
</html>