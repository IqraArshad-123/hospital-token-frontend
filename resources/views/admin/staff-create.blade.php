<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Staff Management | Al-Noor Hospital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f1f8fb;
            color: #16324f;
            min-height: 100vh;
        }

        /* HEADER */
        .topbar {
            background: linear-gradient(135deg, #075985, #0f766e);
            color: white;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 15px rgba(0,0,0,0.10);
        }

        .brand h1 {
            font-size: 21px;
            font-weight: 700;
        }

        .brand p {
            font-size: 12px;
            opacity: 0.85;
            margin-top: 3px;
        }

        .back-btn {
            color: white;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.5);
            padding: 9px 14px;
            border-radius: 9px;
            font-size: 13px;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.15);
        }

        /* PAGE */
        .page {
            width: 100%;
            max-width: 850px;
            margin: 30px auto;
            padding: 0 18px 40px;
        }

        .heading {
            margin-bottom: 20px;
        }

        .heading h2 {
            font-size: 25px;
            color: #123b5d;
            margin-bottom: 6px;
        }

        .heading p {
            color: #64748b;
            font-size: 14px;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 8px 30px rgba(7, 89, 133, 0.10);
            border: 1px solid #dcecf2;
        }

        .admin-badge {
            display: inline-block;
            background: #e7f7f5;
            color: #0f766e;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        /* ROLE */
        .role-title {
            font-size: 14px;
            font-weight: 700;
            color: #234b68;
            margin-bottom: 10px;
        }

        .roles {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 25px;
        }

        .role-option {
            position: relative;
        }

        .role-option input {
            display: none;
        }

        .role-option label {
            display: block;
            text-align: center;
            padding: 14px 8px;
            border: 2px solid #dcecf2;
            border-radius: 12px;
            cursor: pointer;
            color: #35566e;
            font-size: 14px;
            font-weight: 600;
            transition: 0.25s;
            background: #fbfdfe;
        }

        .role-option label:hover {
            border-color: #0f766e;
        }

        .role-option input:checked + label {
            background: #e8f7f5;
            border-color: #0f766e;
            color: #0f766e;
        }

        /* FORM */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 3px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label.field-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #294b63;
            margin-bottom: 7px;
        }

        .input-wrap {
            position: relative;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cbdde6;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            color: #173b53;
            background: #fff;
            transition: 0.25s;
        }

        input:focus {
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(15,118,110,0.08);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            cursor: pointer;
            color: #64748b;
            font-size: 12px;
            font-weight: 600;
        }

        .password-toggle:hover {
            color: #0f766e;
        }

        /* BUTTON */
        .submit-btn {
            width: 100%;
            margin-top: 24px;
            padding: 14px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(135deg, #075985, #0f766e);
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 18px rgba(7,89,133,0.20);
        }

        .submit-btn:disabled {
            opacity: 0.65;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* MESSAGE */
        .message {
            display: none;
            padding: 12px 14px;
            border-radius: 10px;
            margin-top: 18px;
            font-size: 13px;
            line-height: 1.5;
        }

        .message.success {
            display: block;
            background: #e9f8f1;
            color: #17633f;
            border: 1px solid #bce8d1;
        }

        .message.error {
            display: block;
            background: #fff1f2;
            color: #a51d2d;
            border: 1px solid #fecdd3;
        }

        .note {
            margin-top: 20px;
            padding: 13px 15px;
            border-left: 4px solid #0f766e;
            background: #f0faf9;
            color: #526b7b;
            font-size: 12px;
            line-height: 1.6;
            border-radius: 7px;
        }

        /* MOBILE */
        @media (max-width: 650px) {

            .topbar {
                padding: 15px;
            }

            .brand h1 {
                font-size: 18px;
            }

            .brand p {
                font-size: 11px;
            }

            .back-btn {
                padding: 8px 10px;
                font-size: 12px;
            }

            .page {
                margin: 20px auto;
                padding: 0 13px 30px;
            }

            .heading h2 {
                font-size: 21px;
            }

            .heading p {
                font-size: 13px;
            }

            .card {
                padding: 20px 16px;
                border-radius: 15px;
            }

            .roles {
                grid-template-columns: 1fr;
                gap: 9px;
            }

            .role-option label {
                padding: 13px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .form-group.full {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

<header class="topbar">

    <div class="brand">
        <h1>Al-Noor Hospital</h1>
        <p>Smart Healthcare • Admin Panel</p>
    </div>

    <a href="{{ route('dashboard') }}" class="back-btn">
        ← Dashboard
    </a>

</header>


<main class="page">

    <div class="heading">
        <h2>Staff Management</h2>
        <p>Create a new Doctor, Receptionist, or Admin account.</p>
    </div>


    <div class="card">

        <span class="admin-badge">
            Admin Only
        </span>


        <form id="staffForm">

            <div class="role-title">
                Select Account Type
            </div>

            <div class="roles">

                <div class="role-option">
                    <input
                        type="radio"
                        id="doctor"
                        name="role"
                        value="doctor"
                        checked
                    >

                    <label for="doctor">
                        Doctor
                    </label>
                </div>


                <div class="role-option">
                    <input
                        type="radio"
                        id="receptionist"
                        name="role"
                        value="receptionist"
                    >

                    <label for="receptionist">
                        Receptionist
                    </label>
                </div>


                <div class="role-option">
                    <input
                        type="radio"
                        id="admin"
                        name="role"
                        value="admin"
                    >

                    <label for="admin">
                        Admin
                    </label>
                </div>

            </div>


            <div class="form-grid">

                <div class="form-group full">

                    <label class="field-label" for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter full name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label class="field-label" for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter email address"
                        required
                    >

                </div>


                <div class="form-group">

                    <label class="field-label" for="phone">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        placeholder="03XXXXXXXXX"
                        required
                    >

                </div>


                <div class="form-group">

                    <label class="field-label" for="password">
                        Password
                    </label>

                    <div class="input-wrap">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Minimum 8 characters"
                            required
                            minlength="8"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password', this)"
                        >
                            Show
                        </button>

                    </div>

                </div>


                <div class="form-group">

                    <label class="field-label" for="password_confirmation">
                        Confirm Password
                    </label>

                    <div class="input-wrap">

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repeat password"
                            required
                            minlength="8"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password_confirmation', this)"
                        >
                            Show
                        </button>

                    </div>

                </div>

            </div>


            <button
                type="submit"
                class="submit-btn"
                id="submitBtn"
            >
                Create Account
            </button>


            <div id="message" class="message"></div>


            <div class="note">
                Only an authorized Admin can create Doctor, Receptionist,
                and Admin accounts. Patient registration remains available
                through the public registration page.
            </div>

        </form>

    </div>

</main>


<script>

    const API_URL = 'http://127.0.0.1:8001/api';


    /*
    |--------------------------------------------------------------------------
    | ADMIN ACCESS CHECK
    |--------------------------------------------------------------------------
    */

    const token = localStorage.getItem('auth_token');
    const userData = localStorage.getItem('user');

    if (!token || !userData) {

        window.location.href = "{{ route('login') }}";

    }


    let loggedInUser = null;

    try {

        loggedInUser = JSON.parse(userData);

    } catch (error) {

        localStorage.removeItem('auth_token');
        localStorage.removeItem('user');

        window.location.href = "{{ route('login') }}";

    }


    /*
    |--------------------------------------------------------------------------
    | ONLY ADMIN CAN OPEN THIS PAGE
    |--------------------------------------------------------------------------
    */

    if (
        loggedInUser &&
        loggedInUser.role !== 'admin'
    ) {

        alert('Only Admin can access Staff Management.');

        window.location.href = "{{ route('dashboard') }}";

    }


    /*
    |--------------------------------------------------------------------------
    | PASSWORD SHOW / HIDE
    |--------------------------------------------------------------------------
    */

    function togglePassword(fieldId, button) {

        const field = document.getElementById(fieldId);

        if (field.type === 'password') {

            field.type = 'text';
            button.textContent = 'Hide';

        } else {

            field.type = 'password';
            button.textContent = 'Show';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | MESSAGE
    |--------------------------------------------------------------------------
    */

    function showMessage(message, type) {

        const box = document.getElementById('message');

        box.className = 'message ' + type;
        box.textContent = message;

    }


    /*
    |--------------------------------------------------------------------------
    | STAFF CREATE
    |--------------------------------------------------------------------------
    */

    document.getElementById('staffForm').addEventListener('submit', async function(event) {

        event.preventDefault();


        const submitBtn = document.getElementById('submitBtn');

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const password = document.getElementById('password').value;
        const passwordConfirmation =
            document.getElementById('password_confirmation').value;

        const role =
            document.querySelector('input[name="role"]:checked').value;


        /*
        |--------------------------------------------------------------------------
        | FRONTEND VALIDATION
        |--------------------------------------------------------------------------
        */

        if (password !== passwordConfirmation) {

            showMessage(
                'Password and confirm password do not match.',
                'error'
            );

            return;

        }


        submitBtn.disabled = true;
        submitBtn.textContent = 'Creating Account...';


        try {

            const response = await fetch(
                `${API_URL}/staff/create`,
                {
                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },

                    body: JSON.stringify({

                        name: name,
                        email: email,
                        phone: phone,
                        password: password,
                        password_confirmation: passwordConfirmation,
                        role: role

                    })
                }
            );


            const data = await response.json();


            if (!response.ok) {

                let errorMessage =
                    data.message || 'Unable to create account.';


                /*
                | Laravel validation errors
                */

                if (data.errors) {

                    const errors = Object.values(data.errors).flat();

                    if (errors.length > 0) {

                        errorMessage = errors.join(' ');

                    }

                }


                showMessage(errorMessage, 'error');

                return;

            }


            showMessage(
                data.message || 'Account created successfully.',
                'success'
            );


            /*
            |--------------------------------------------------------------------------
            | RESET FORM
            |--------------------------------------------------------------------------
            */

            document.getElementById('staffForm').reset();

            document.getElementById('doctor').checked = true;


        } catch (error) {

            console.error(error);

            showMessage(
                'Unable to connect with the backend server.',
                'error'
            );

        } finally {

            submitBtn.disabled = false;
            submitBtn.textContent = 'Create Account';

        }

    });

</script>

</body>
</html>