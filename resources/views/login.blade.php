<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | Al-Noor Hospital</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7fbfc;
            color: #163b55;
            min-height: 100vh;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 0 18px 30px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
        }


        /* TOP */

        .top-bar {
            height: 70px;
            display: flex;
            align-items: center;
        }

        .back-btn {
            width: 38px;
            height: 38px;

            border: 1px solid #dcecef;
            border-radius: 50%;

            background: #fff;
            color: #124c70;

            text-decoration: none;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
        }


        /* HEADING */

        .page-heading {
            text-align: center;

            margin-top: 8px;
            margin-bottom: 30px;
        }

        .page-heading h1 {
            color: #124c70;

            font-size: 23px;
            font-weight: 700;

            margin-bottom: 7px;
        }

        .page-heading p {
            color: #7b919d;
            font-size: 11px;
        }


        /* FORM */

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;

            color: #456273;

            font-size: 10px;
            font-weight: 600;

            margin-bottom: 6px;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            height: 45px;

            padding: 0 13px;

            border: 1px solid #d9e9ed;
            border-radius: 8px;

            background: #fff;

            color: #294d61;

            font-size: 12px;

            outline: none;
        }

        .form-input::placeholder {
            color: #a7b8c0;
        }

        .form-input:focus {
            border-color: #16aaa6;

            box-shadow:
                0 0 0 3px rgba(22,170,166,.08);
        }


        /* PASSWORD */

        .password-input {
            padding-right: 42px;
        }

        .eye-btn {
            position: absolute;

            right: 12px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #8197a1;

            cursor: pointer;

            font-size: 12px;
        }


        /* FORGOT */

        .forgot-row {
            text-align: right;

            margin-top: -7px;
            margin-bottom: 20px;
        }

        .forgot-row a {
            color: #07999f;

            font-size: 10px;

            text-decoration: none;

            font-weight: 600;
        }


        /* MESSAGE */

        .message {
            display: none;

            padding: 11px 12px;

            margin-bottom: 17px;

            border-radius: 8px;

            font-size: 11px;

            line-height: 1.5;
        }

        .message.success {
            display: block;

            background: #e9f8f4;

            border: 1px solid #bde8df;

            color: #147661;
        }

        .message.error {
            display: block;

            background: #fff0f1;

            border: 1px solid #f4c6cb;

            color: #c52f40;
        }


        /* BUTTON */

        .login-btn {
            width: 100%;
            height: 45px;

            border: none;
            border-radius: 8px;

            background:
                linear-gradient(
                    90deg,
                    #0a9e9d,
                    #0799b0
                );

            color: #fff;

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 5px 15px rgba(8,155,165,.15);
        }

        .login-btn:disabled {
            opacity: .65;

            cursor: not-allowed;
        }


        /* REGISTER */

        .register-text {
            text-align: center;

            margin-top: 18px;

            color: #8a9da6;

            font-size: 10px;
        }

        .register-text a {
            color: #07999f;

            font-weight: 700;

            text-decoration: none;
        }


        /* STAFF */

        .staff-login {
            text-align: center;

            margin-top: 22px;
        }

        .staff-login a {
            color: #124c70;

            font-size: 10px;

            text-decoration: none;

            font-weight: 600;
        }


        /* BRAND */

        .brand {
            text-align: center;

            margin-top: 28px;

            color: #a0afb6;

            font-size: 9px;
        }

        .brand strong {
            color: #146084;
        }


        /* MOBILE */

        @media (max-width: 500px) {

            .login-page {
                padding: 0 17px 25px;
            }

            .top-bar {
                height: 62px;
            }

            .page-heading {
                margin-top: 4px;
                margin-bottom: 27px;
            }

            .page-heading h1 {
                font-size: 22px;
            }

            .form-input {
                height: 44px;
            }

            .login-btn {
                height: 44px;
            }

        }

    </style>

</head>


<body>


<div class="login-page">

    <div class="login-container">


        <!-- BACK -->

        <div class="top-bar">

            <a
                href="{{ route('home') }}"
                class="back-btn"
            >
                ←
            </a>

        </div>


        <!-- HEADING -->

        <div class="page-heading">

            <h1>
                Welcome Back
            </h1>

            <p>
                Login to access your healthcare account
            </p>

        </div>


        <!-- MESSAGE -->

        <div
            id="message"
            class="message"
        ></div>


        <!-- LOGIN FORM -->

        <form id="loginForm">


            <!-- PHONE -->

            <div class="form-group">

                <label for="phone">
                    Phone Number
                </label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="form-input"
                    placeholder="03XX-XXXXXXX"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="input-wrapper">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input password-input"
                        placeholder="Enter your password"
                        required
                    >

                    <button
                        type="button"
                        class="eye-btn"
                        onclick="togglePassword()"
                    >
                        ◉
                    </button>

                </div>

            </div>


            <!-- FORGOT -->

            <div class="forgot-row">

                <a href="#">
                    Forgot Password?
                </a>

            </div>


            <!-- LOGIN -->

            <button
                type="submit"
                class="login-btn"
                id="loginBtn"
            >
                Login
            </button>

        </form>


        <!-- REGISTER -->

        <div class="register-text">

            Don't have an account?

            <a href="{{ route('register') }}">
                Register
            </a>

        </div>


        <!-- STAFF -->

        <div class="staff-login">

            <a href="{{ route('staff-login') }}">
                Staff Login
            </a>

        </div>


        <!-- BRAND -->

        <div class="brand">

            <strong>
                Al-Noor Hospital
            </strong>

            &nbsp;•&nbsp;

            Smart Healthcare

        </div>


    </div>

</div>


<script>


/*
|--------------------------------------------------------------------------
| BACKEND API
|--------------------------------------------------------------------------
*/

const API_URL =
    'http://127.0.0.1:8001/api';


/*
|--------------------------------------------------------------------------
| PASSWORD
|--------------------------------------------------------------------------
*/

function togglePassword() {

    const password =
        document.getElementById('password');

    password.type =
        password.type === 'password'
            ? 'text'
            : 'password';

}


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

document
    .getElementById('loginForm')
    .addEventListener(
        'submit',
        async function(event) {

            event.preventDefault();


            const button =
                document.getElementById('loginBtn');

            const message =
                document.getElementById('message');


            const phone =
                document
                    .getElementById('phone')
                    .value
                    .trim();


            const password =
                document
                    .getElementById('password')
                    .value;


            message.className =
                'message';

            message.textContent =
                '';


            button.disabled = true;

            button.textContent =
                'Logging in...';


            try {

                const response =
                    await fetch(
                        `${API_URL}/login`,
                        {

                            method: 'POST',

                            headers: {

                                'Accept':
                                    'application/json',

                                'Content-Type':
                                    'application/json'

                            },

                            body:
                                JSON.stringify({

                                    phone: phone,

                                    password: password

                                })

                        }
                    );


                const result =
                    await response.json();


                /*
                |--------------------------------------------------------------------------
                | SUCCESS
                |--------------------------------------------------------------------------
                */

                if (
                    response.ok &&
                    result.success
                ) {

                    localStorage.setItem(
                        'auth_token',
                        result.token
                    );


                    localStorage.setItem(
                        'user',
                        JSON.stringify(
                            result.user
                        )
                    );


                    message.className =
                        'message success';

                    message.textContent =
                        'Login successful! Redirecting...';


                    setTimeout(
                        function() {

                            window.location.href =
                                "{{ route('dashboard') }}";

                        },
                        800
                    );


                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | ERROR
                |--------------------------------------------------------------------------
                */

                let errorMessage =
                    result.message ||
                    'Phone number or password is incorrect.';


                if (result.errors) {

                    const errors =
                        Object.values(
                            result.errors
                        ).flat();


                    if (errors.length > 0) {

                        errorMessage =
                            errors.join(' ');

                    }

                }


                message.className =
                    'message error';

                message.textContent =
                    errorMessage;


                button.disabled = false;

                button.textContent =
                    'Login';

            }


            catch (error) {

                message.className =
                    'message error';

                message.textContent =
                    'Unable to connect to the backend server.';


                button.disabled = false;

                button.textContent =
                    'Login';

            }

        }
    );

</script>


</body>

</html>