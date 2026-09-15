<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register | Al-Noor Hospital</title>

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
            font-family:
                Arial,
                Helvetica,
                sans-serif;

            min-height: 100vh;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(120,202,255,0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 90%,
                    rgba(11,95,165,0.08),
                    transparent 32%
                ),
                #f4f8fc;

            color: #173b5c;

            display: flex;
            flex-direction: column;

            overflow-x: hidden;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        button,
        input {
            font-family: inherit;
        }


        /* =====================================================
           ANIMATED BACKGROUND
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            width: 260px;
            height: 260px;

            border-radius: 50%;

            background:
                rgba(120,202,255,0.10);

            top: 120px;
            left: -120px;

            filter: blur(5px);

            animation:
                floatOne 8s ease-in-out infinite;

            pointer-events: none;
        }


        body::after {

            content: "";

            position: fixed;

            width: 230px;
            height: 230px;

            border-radius: 50%;

            background:
                rgba(11,95,165,0.07);

            bottom: -100px;
            right: -80px;

            filter: blur(5px);

            animation:
                floatTwo 9s ease-in-out infinite;

            pointer-events: none;
        }


        @keyframes floatOne {

            0%,
            100% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(35px, 25px);
            }
        }


        @keyframes floatTwo {

            0%,
            100% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-30px, -25px);
            }
        }


        /* =====================================================
           TOP NAV
        ===================================================== */

        .top-nav {

            height: 74px;

            background:
                rgba(255,255,255,0.94);

            backdrop-filter:
                blur(12px);

            border-bottom:
                1px solid #e1eaf1;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 6%;

            position: relative;

            z-index: 20;
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

            background:
                linear-gradient(
                    135deg,
                    #0b5fa5,
                    #1687c5
                );

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            font-weight: 800;

            box-shadow:
                0 8px 22px
                rgba(11,95,165,0.20);

            transition: 0.3s;
        }


        .brand:hover .brand-logo {

            transform:
                rotate(-5deg)
                scale(1.05);
        }


        .brand-text strong {

            display: block;

            color: #0a4d80;

            font-size: 16px;

            letter-spacing: 0.2px;
        }


        .brand-text span {

            display: block;

            color: #8b9aa7;

            font-size: 8px;

            letter-spacing: 1.7px;

            margin-top: 4px;
        }


        .home-link {

            display: flex;

            align-items: center;

            gap: 7px;

            color: #0b5fa5;

            font-size: 11px;

            font-weight: 700;

            padding: 10px 15px;

            border:
                1px solid #dbe6ed;

            border-radius: 11px;

            background: white;

            transition: 0.25s;
        }


        .home-link:hover {

            background: #edf7fd;

            transform:
                translateY(-2px);
        }


        /* =====================================================
           PAGE
        ===================================================== */

        .page {

            flex: 1;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 45px 20px;

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           REGISTER CARD
        ===================================================== */

        .register-card {

            width: 100%;

            max-width: 560px;

            background:
                rgba(255,255,255,0.97);

            border:
                1px solid #dfe8ef;

            border-radius: 27px;

            padding:
                40px 45px 37px;

            box-shadow:
                0 25px 80px
                rgba(23,59,92,0.12);

            position: relative;

            overflow: hidden;

            animation:
                cardEnter 0.7s
                cubic-bezier(.2,.8,.2,1);
        }


        @keyframes cardEnter {

            from {

                opacity: 0;

                transform:
                    translateY(25px)
                    scale(0.97);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }
        }


        .register-card::before {

            content: "";

            position: absolute;

            top: 0;
            left: 0;
            right: 0;

            height: 4px;

            background:
                linear-gradient(
                    90deg,
                    #0b5fa5,
                    #78caff,
                    #0b5fa5
                );

            background-size: 200% 100%;

            animation:
                gradientMove 3s
                linear infinite;
        }


        @keyframes gradientMove {

            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 200% 50%;
            }
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .form-header {

            text-align: center;

            margin-bottom: 28px;

            animation:
                fadeUp 0.7s
                0.1s both;
        }


        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(12px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        .form-icon {

            width: 60px;
            height: 60px;

            border-radius: 19px;

            background:
                linear-gradient(
                    145deg,
                    #edf8ff,
                    #e2f3fc
                );

            color: #0b5fa5;

            display: flex;

            align-items: center;

            justify-content: center;

            margin:
                0 auto 15px;

            font-size: 27px;

            font-weight: 800;

            box-shadow:
                0 8px 25px
                rgba(11,95,165,0.10);

            animation:
                iconPulse 3s
                ease-in-out infinite;
        }


        @keyframes iconPulse {

            0%,
            100% {
                transform:
                    translateY(0);
            }

            50% {
                transform:
                    translateY(-4px);
            }
        }


        .form-header small {

            display: block;

            color: #0b5fa5;

            font-size: 9px;

            font-weight: 800;

            letter-spacing: 1.7px;

            margin-bottom: 7px;
        }


        .form-header h1 {

            color: #173e60;

            font-size: 29px;

            letter-spacing: -0.5px;

            margin-bottom: 8px;
        }


        .form-header p {

            color: #8998a5;

            font-size: 11px;

            line-height: 1.65;

            max-width: 380px;

            margin: auto;
        }


        /* =====================================================
           MESSAGES
        ===================================================== */

        .message {

            display: none;

            padding:
                12px 14px;

            border-radius: 12px;

            font-size: 10px;

            line-height: 1.5;

            margin-bottom: 18px;

            animation:
                fadeUp 0.3s ease;
        }


        .error-message {

            background: #fff1f3;

            border:
                1px solid #ffd1d7;

            color: #c93448;
        }


        .success-message {

            background: #edfaf3;

            border:
                1px solid #ccebd9;

            color: #257c50;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 17px;
        }


        .form-group {

            display: flex;

            flex-direction: column;

            animation:
                fadeUp 0.6s both;
        }


        .form-group:nth-child(1) {
            animation-delay: 0.15s;
        }


        .form-group:nth-child(2) {
            animation-delay: 0.20s;
        }


        .form-group:nth-child(3) {
            animation-delay: 0.25s;
        }


        .form-group:nth-child(4) {
            animation-delay: 0.30s;
        }


        .form-group:nth-child(5) {
            animation-delay: 0.35s;
        }


        .full {

            grid-column:
                1 / -1;
        }


        .form-group label {

            color: #365772;

            font-size: 10px;

            font-weight: 800;

            margin-bottom: 8px;
        }


        /* =====================================================
           INPUTS
        ===================================================== */

        .input-box {

            position: relative;
        }


        .input-symbol {

            position: absolute;

            left: 14px;

            top: 50%;

            transform:
                translateY(-50%);

            width: 18px;

            color: #91a2af;

            font-size: 11px;

            font-weight: 800;

            text-align: center;

            pointer-events: none;

            transition: 0.25s;
        }


        input {

            width: 100%;

            height: 48px;

            border:
                1px solid #dce6ed;

            border-radius: 12px;

            background: #fbfdff;

            color: #173e60;

            outline: none;

            padding:
                0 13px 0 42px;

            font-size: 11px;

            transition:
                border-color 0.25s,
                box-shadow 0.25s,
                background 0.25s,
                transform 0.25s;
        }


        input::placeholder {

            color: #a5b1ba;
        }


        input:hover {

            border-color:
                #c5d8e5;
        }


        input:focus {

            background: white;

            border-color:
                #6fb4dc;

            box-shadow:
                0 0 0 4px
                rgba(11,95,165,0.07);

            transform:
                translateY(-1px);
        }


        input:focus + .input-symbol {

            color: #0b5fa5;
        }


        /* =====================================================
           GENDER
        ===================================================== */

        .gender-options {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 8px;
        }


        .gender-option {

            position: relative;
        }


        .gender-option input {

            position: absolute;

            opacity: 0;

            pointer-events: none;
        }


        .gender-label {

            height: 48px;

            border:
                1px solid #dce6ed;

            border-radius: 12px;

            background: #fbfdff;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            color: #718494;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

            transition:
                0.25s;
        }


        .gender-circle {

            width: 15px;

            height: 15px;

            border:
                1.5px solid #aabac5;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            transition:
                0.25s;
        }


        .gender-circle::after {

            content: "";

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: white;

            transform:
                scale(0);

            transition:
                0.2s;
        }


        .gender-option input:checked
        + .gender-label {

            border-color: #63acd7;

            background: #eef8fe;

            color: #0b5fa5;

            box-shadow:
                0 5px 16px
                rgba(11,95,165,0.08);

            transform:
                translateY(-2px);
        }


        .gender-option input:checked
        + .gender-label
        .gender-circle {

            border-color: #0b5fa5;

            background: #0b5fa5;
        }


        .gender-option input:checked
        + .gender-label
        .gender-circle::after {

            transform:
                scale(1);
        }


        .gender-label:hover {

            border-color:
                #9bc9e2;

            transform:
                translateY(-1px);
        }


        /* =====================================================
           PASSWORD
        ===================================================== */

        .password-note {

            color: #9aa6af;

            font-size: 8px;

            margin-top: 6px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .register-button {

            width: 100%;

            height: 51px;

            border: none;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    #ff4357,
                    #f2384d
                );

            color: white;

            font-size: 12px;

            font-weight: 800;

            cursor: pointer;

            margin-top: 23px;

            box-shadow:
                0 12px 28px
                rgba(255,67,87,0.21);

            position: relative;

            overflow: hidden;

            transition:
                transform 0.25s,
                box-shadow 0.25s,
                background 0.25s;
        }


        .register-button::before {

            content: "";

            position: absolute;

            top: 0;

            left: -100%;

            width: 70%;

            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,0.22),
                    transparent
                );

            transition:
                left 0.6s;
        }


        .register-button:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 16px 32px
                rgba(255,67,87,0.27);
        }


        .register-button:hover::before {

            left: 130%;
        }


        .register-button:active {

            transform:
                translateY(0);
        }


        .register-button:disabled {

            opacity: 0.65;

            cursor: not-allowed;

            transform: none;
        }


        /* =====================================================
           BOTTOM NOTE
        ===================================================== */

        .bottom-note {

            text-align: center;

            color: #98a5ae;

            font-size: 9px;

            line-height: 1.6;

            margin-top: 15px;
        }


        .bottom-note strong {

            color: #0b5fa5;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {

            text-align: center;

            color: #91a0aa;

            font-size: 9px;

            padding:
                15px 20px 22px;

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .top-nav {

                height: 66px;

                padding:
                    0 16px;
            }


            .brand-logo {

                width: 38px;

                height: 38px;

                border-radius: 11px;

                font-size: 19px;
            }


            .brand-text strong {

                font-size: 14px;
            }


            .brand-text span {

                font-size: 7px;
            }


            .home-link {

                padding:
                    8px 11px;

                font-size: 9px;

                border-radius: 9px;
            }


            .page {

                padding:
                    25px 13px;
            }


            .register-card {

                padding:
                    31px 20px 28px;

                border-radius: 22px;
            }


            .form-icon {

                width: 54px;

                height: 54px;

                border-radius: 17px;
            }


            .form-header h1 {

                font-size: 25px;
            }


            .form-header p {

                font-size: 10px;
            }


            .form-grid {

                grid-template-columns:
                    1fr;

                gap: 15px;
            }


            .full {

                grid-column:
                    auto;
            }


            .gender-options {

                gap: 7px;
            }


            .gender-label {

                font-size: 9px;

                gap: 5px;
            }


            .register-button {

                margin-top: 20px;
            }
        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 380px) {

            .brand-text span {

                display: none;
            }


            .register-card {

                padding:
                    28px 16px;
            }


            .gender-label {

                height: 46px;

                font-size: 8px;
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


    <a href="{{ route('home') }}"
       class="home-link">

        ← Home

    </a>


</header>



<!-- =====================================================
     MAIN
===================================================== -->

<main class="page">


    <div class="register-card">


        <!-- HEADER -->

        <div class="form-header">


            <div class="form-icon">
                +
            </div>


            <small>
                PATIENT REGISTRATION
            </small>


            <h1>
                Create your account
            </h1>


            <p>
                Register once and make your hospital
                visit easier with online token booking.
            </p>


        </div>



        <!-- ERROR -->

        <div id="errorMessage"
             class="message error-message">
        </div>



        <!-- SUCCESS -->

        <div id="successMessage"
             class="message success-message">

            Registration successful!
            Redirecting to home...

        </div>



        <!-- FORM -->

        <form id="registerForm">


            <div class="form-grid">


                <!-- NAME -->

                <div class="form-group full">

                    <label for="name">
                        Full Name
                    </label>


                    <div class="input-box">

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your full name"
                            autocomplete="name"
                            required
                        >

                        <div class="input-symbol">
                            N
                        </div>

                    </div>

                </div>



                <!-- PHONE -->

                <div class="form-group">

                    <label for="phone">
                        Phone Number
                    </label>


                    <div class="input-box">

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="03XXXXXXXXX"
                            autocomplete="tel"
                            required
                        >

                        <div class="input-symbol">
                            #
                        </div>

                    </div>

                </div>



                <!-- GENDER -->

                <div class="form-group">

                    <label>
                        Gender
                    </label>


                    <div class="gender-options">


                        <!-- MALE -->

                        <div class="gender-option">

                            <input
                                type="radio"
                                id="male"
                                name="gender"
                                value="male"
                                required
                            >


                            <label
                                for="male"
                                class="gender-label">

                                <span class="gender-circle"></span>

                                Male

                            </label>

                        </div>



                        <!-- FEMALE -->

                        <div class="gender-option">

                            <input
                                type="radio"
                                id="female"
                                name="gender"
                                value="female"
                            >


                            <label
                                for="female"
                                class="gender-label">

                                <span class="gender-circle"></span>

                                Female

                            </label>

                        </div>



                        <!-- OTHER -->

                        <div class="gender-option">

                            <input
                                type="radio"
                                id="other"
                                name="gender"
                                value="other"
                            >


                            <label
                                for="other"
                                class="gender-label">

                                <span class="gender-circle"></span>

                                Other

                            </label>

                        </div>


                    </div>

                </div>



                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>


                    <div class="input-box">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Minimum 8 characters"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >


                        <div class="input-symbol">
                            •
                        </div>

                    </div>


                    <span class="password-note">
                        Minimum 8 characters.
                    </span>

                </div>



                <!-- CONFIRM PASSWORD -->

                <div class="form-group">

                    <label for="password_confirmation">
                        Confirm Password
                    </label>


                    <div class="input-box">

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repeat password"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >


                        <div class="input-symbol">
                            •
                        </div>

                    </div>

                </div>


            </div>



            <!-- BUTTON -->

            <button
                type="submit"
                id="registerButton"
                class="register-button">

                Create Patient Account →

            </button>


            <p class="bottom-note">

                Your account will automatically be created
                as a <strong>Patient</strong> account.

            </p>


        </form>


    </div>


</main>



<!-- FOOTER -->

<footer class="footer">

    © {{ date('Y') }} Al-Noor Hospital · Patient Portal

</footer>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

document
    .getElementById("registerForm")
    .addEventListener(
        "submit",
        async function(event) {

            event.preventDefault();


            const name =
                document
                    .getElementById("name")
                    .value
                    .trim();


            const phone =
                document
                    .getElementById("phone")
                    .value
                    .trim();


            const gender =
                document
                    .querySelector(
                        'input[name="gender"]:checked'
                    )
                    ?.value;


            const password =
                document
                    .getElementById("password")
                    .value;


            const passwordConfirmation =
                document
                    .getElementById(
                        "password_confirmation"
                    )
                    .value;


            const errorMessage =
                document.getElementById(
                    "errorMessage"
                );


            const successMessage =
                document.getElementById(
                    "successMessage"
                );


            const registerButton =
                document.getElementById(
                    "registerButton"
                );


            /* CLEAR */

            errorMessage.style.display =
                "none";

            successMessage.style.display =
                "none";


            /* GENDER */

            if (!gender) {

                errorMessage.textContent =
                    "Please select your gender.";

                errorMessage.style.display =
                    "block";

                return;
            }


            /* PASSWORD */

            if (password.length < 8) {

                errorMessage.textContent =
                    "Password must be at least 8 characters.";

                errorMessage.style.display =
                    "block";

                return;
            }


            /* CONFIRM PASSWORD */

            if (
                password !==
                passwordConfirmation
            ) {

                errorMessage.textContent =
                    "Password and confirm password do not match.";

                errorMessage.style.display =
                    "block";

                return;
            }


            /* LOADING */

            registerButton.disabled =
                true;

            registerButton.textContent =
                "Creating Account...";


            try {


                /*
                 * SEND PATIENT DATA
                 * TO LARAVEL API
                 */

                const response =
                    await fetch(
                        "http://127.0.0.1:8001/api/register",
                        {
                            method: "POST",

                            headers: {

                                "Content-Type":
                                    "application/json",

                                "Accept":
                                    "application/json"
                            },

                            body:
                                JSON.stringify({

                                    name:
                                        name,

                                    phone:
                                        phone,

                                    gender:
                                        gender,

                                    password:
                                        password,

                                    password_confirmation:
                                        passwordConfirmation

                                })
                        }
                    );


                /*
                 * GET API RESPONSE
                 */

                const data =
                    await response.json();


                /* =================================================
                   API ERROR
                ================================================= */

                if (!response.ok) {


                    let message =
                        "Registration failed. Please try again.";


                    if (data.message) {

                        message =
                            data.message;
                    }


                    if (data.errors) {

                        const firstField =
                            Object.keys(
                                data.errors
                            )[0];


                        if (
                            firstField &&
                            data.errors[firstField] &&
                            data.errors[firstField][0]
                        ) {

                            message =
                                data.errors[firstField][0];
                        }
                    }


                    errorMessage.textContent =
                        message;


                    errorMessage.style.display =
                        "block";


                    registerButton.disabled =
                        false;


                    registerButton.textContent =
                        "Create Patient Account →";


                    return;
                }



                /* =================================================
                   SAVE LOGIN TOKEN
                ================================================= */

                if (data.token) {

                    localStorage.setItem(
                        "alnoor_patient_token",
                        data.token
                    );
                }



                /* =================================================
                   SAVE PATIENT USER DATA
                ================================================= */

                if (data.user) {

                    localStorage.setItem(
                        "alnoor_patient_user",
                        JSON.stringify(
                            data.user
                        )
                    );
                }



                /*
                 * SAVE COMPLETE PATIENT DATA
                 * FOR HOME PAGE
                 */

                const patientData = {

                    id:
                        data.user?.id ?? null,

                    name:
                        data.user?.name ?? name,

                    phone:
                        data.user?.phone ?? phone,

                    gender:
                        data.user?.gender ?? gender,

                    profile_photo:
                        data.user?.profile_photo ?? null

                };


                localStorage.setItem(
                    "alnoor_patient_profile",
                    JSON.stringify(
                        patientData
                    )
                );



                /* =================================================
                   SUCCESS
                ================================================= */

                successMessage.textContent =
                    "Registration successful! Redirecting to home...";


                successMessage.style.display =
                    "block";


                registerButton.textContent =
                    "Account Created ✓";



                /* =================================================
                   GO TO HOME
                ================================================= */

                setTimeout(
                    function() {

                        window.location.href =
                            "{{ route('home') }}";

                    },
                    1200
                );


            }
            catch (error) {


                console.error(
                    "Registration Error:",
                    error
                );


                errorMessage.textContent =
                    "Unable to connect to the hospital server. Make sure Laravel API is running on port 8001.";


                errorMessage.style.display =
                    "block";


                registerButton.disabled =
                    false;


                registerButton.textContent =
                    "Create Patient Account →";

            }

        }
    );

</script>


</body>

</html>