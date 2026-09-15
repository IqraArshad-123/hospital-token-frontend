
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Staff Application | Al-Noor Hospital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f9fc;
            color: #163b5c;
            min-height: 100vh;
        }

        .page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 20px 15px 35px;
        }

        .app-wrapper {
            width: 100%;
            max-width: 520px;
        }

        .top-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .back-btn {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            border: 1px solid #dcebf3;
            background: #ffffff;
            color: #07558a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(14, 84, 130, 0.07);
            transition: 0.25s;
        }

        .back-btn:hover {
            transform: translateX(-3px);
            background: #eef8fc;
        }

        .hospital-mini {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .hospital-logo {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: linear-gradient(135deg, #0b73b8, #0a9d9a);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }

        .hospital-name {
            font-size: 14px;
            font-weight: 700;
            color: #07558a;
            line-height: 1.2;
        }

        .hospital-subtitle {
            font-size: 10px;
            color: #7b98aa;
            margin-top: 2px;
        }

        .application-card {
            background: #ffffff;
            border-radius: 28px;
            padding: 25px 20px 22px;
            box-shadow: 0 15px 45px rgba(17, 82, 119, 0.10);
            border: 1px solid #e3eef4;
        }

        .title-area {
            margin-bottom: 22px;
        }

        .small-label {
            display: inline-block;
            background: #e9f8f6;
            color: #078b84;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .title-area h1 {
            color: #07558a;
            font-size: 27px;
            line-height: 1.2;
            margin-bottom: 7px;
        }

        .title-area p {
            color: #7892a4;
            font-size: 13px;
            line-height: 1.6;
        }

        .info-box {
            background: #f0f8fc;
            border: 1px solid #d7ebf4;
            border-radius: 16px;
            padding: 13px 14px;
            display: flex;
            gap: 10px;
            margin-bottom: 23px;
        }

        .info-icon {
            min-width: 28px;
            height: 28px;
            border-radius: 9px;
            background: #d9f1f8;
            color: #0873aa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .info-box p {
            color: #54758b;
            font-size: 11px;
            line-height: 1.55;
        }

        .info-box strong {
            color: #07558a;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-label {
            display: block;
            color: #234c69;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .required {
            color: #e54858;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #7fa5ba;
            font-size: 15px;
            pointer-events: none;
        }

        input,
        select {
            width: 100%;
            height: 50px;
            border: 1px solid #d8e8f0;
            border-radius: 14px;
            background: #fbfdfe;
            padding: 0 14px;
            color: #244b67;
            font-size: 13px;
            outline: none;
            transition: 0.25s;
        }

        .has-icon input {
            padding-left: 42px;
        }

        input:focus,
        select:focus {
            border-color: #0b82b7;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(11, 130, 183, 0.08);
        }

        input::placeholder {
            color: #a5b8c5;
        }

        select {
            cursor: pointer;
        }

        .two-fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .role-title {
            color: #234c69;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .role-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 11px;
        }

        .role-option input {
            display: none;
        }

        .role-card {
            border: 1.5px solid #d9e8ef;
            border-radius: 16px;
            padding: 15px 12px;
            background: #fbfdfe;
            cursor: pointer;
            text-align: center;
            transition: 0.25s;
        }

        .role-card:hover {
            border-color: #2ba6a0;
            transform: translateY(-2px);
        }

        .role-icon {
            width: 42px;
            height: 42px;
            margin: 0 auto 8px;
            border-radius: 13px;
            background: #e9f7f7;
            color: #0a9691;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
        }

        .role-card strong {
            display: block;
            color: #15557b;
            font-size: 13px;
            margin-bottom: 3px;
        }

        .role-card span {
            color: #8aa0af;
            font-size: 10px;
        }

        .role-option input:checked + .role-card {
            border-color: #0b9a96;
            background: #f0fbfa;
            box-shadow: 0 0 0 3px rgba(11, 154, 150, 0.08);
        }

        .role-option input:checked + .role-card .role-icon {
            background: #0b9a96;
            color: white;
        }

        .password-note {
            color: #91a5b2;
            font-size: 10px;
            margin-top: 6px;
        }

        .submit-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #0877b5, #08a39b);
            color: white;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 7px;
            box-shadow: 0 10px 22px rgba(8, 128, 160, 0.20);
            transition: 0.25s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 13px 25px rgba(8, 128, 160, 0.25);
        }

        .bottom-note {
            text-align: center;
            color: #91a5b2;
            font-size: 10px;
            margin-top: 18px;
            line-height: 1.5;
        }

        .bottom-note strong {
            color: #0b719e;
        }

        .error-message {
            background: #fff0f1;
            border: 1px solid #ffd0d4;
            color: #c5303d;
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 18px;
            font-size: 12px;
            line-height: 1.5;
        }

        @media (max-width: 500px) {

            .page {
                padding: 12px 10px 25px;
            }

            .app-wrapper {
                max-width: 100%;
            }

            .application-card {
                padding: 21px 15px 19px;
                border-radius: 24px;
            }

            .top-header {
                padding: 0 3px;
            }

            .title-area h1 {
                font-size: 24px;
            }

            .two-fields {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .role-options {
                gap: 8px;
            }

            .role-card {
                padding: 13px 8px;
            }

            .hospital-name {
                font-size: 12px;
            }
        }

        @media (max-width: 360px) {

            .hospital-subtitle {
                display: none;
            }

            .hospital-logo {
                width: 38px;
                height: 38px;
            }

            .back-btn {
                width: 38px;
                height: 38px;
            }

            .application-card {
                padding: 18px 13px;
            }

            .title-area h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="app-wrapper">

        <!-- TOP HEADER -->
        <div class="top-header">

            <a href="{{ url('/') }}" class="back-btn">
                ‹
            </a>

            <div class="hospital-mini">

                <div class="hospital-logo">
                    +
                </div>

                <div>
                    <div class="hospital-name">
                        Al-Noor Hospital
                    </div>

                    <div class="hospital-subtitle">
                        Smart Healthcare Management
                    </div>
                </div>

            </div>

        </div>


        <!-- APPLICATION CARD -->
        <div class="application-card">

            <!-- TITLE -->
            <div class="title-area">

                <span class="small-label">
                    STAFF REGISTRATION
                </span>

                <h1>
                    Staff Application
                </h1>

                <p>
                    Apply for a Doctor or Receptionist account
                    and become part of our healthcare team.
                </p>

            </div>


            <!-- INFO -->
            <div class="info-box">

                <div class="info-icon">
                    i
                </div>

                <p>
                    Your account will remain
                    <strong>pending</strong>
                    until an Admin reviews and approves
                    your application.
                </p>

            </div>


            <!-- VALIDATION ERRORS -->
            @if ($errors->any())

                <div class="error-message">

                    @foreach ($errors->all() as $error)

                        <div>
                            {{ $error }}
                        </div>

                    @endforeach

                </div>

            @endif


            <!-- FORM -->
            <form
                method="POST"
                action="{{ route('staff-register.submit') }}"
            >

                @csrf


                <!-- FULL NAME -->
                <div class="form-group">

                    <label class="form-label">
                        Full Name <span class="required">*</span>
                    </label>

                    <div class="input-wrapper has-icon">

                        <span class="input-icon">
                            👤
                        </span>

                        <input
                            type="text"
                            name="name"
                            placeholder="Enter your full name"
                            value="{{ old('name') }}"
                            required
                        >

                    </div>

                </div>


                <!-- EMAIL + PHONE -->
                <div class="two-fields">

                    <div class="form-group">

                        <label class="form-label">
                            Email <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                @
                            </span>

                            <input
                                type="email"
                                name="email"
                                placeholder="Email address"
                                value="{{ old('email') }}"
                                required
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Phone <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                #
                            </span>

                            <input
                                type="text"
                                name="phone"
                                placeholder="03XX XXXXXXX"
                                value="{{ old('phone') }}"
                                required
                            >

                        </div>

                    </div>

                </div>


                <!-- GENDER -->
                <div class="form-group">

                    <label class="form-label">
                        Gender <span class="required">*</span>
                    </label>

                    <select
                        name="gender"
                        required
                    >

                        <option value="">
                            Select Gender
                        </option>

                        <option value="male">
                            Male
                        </option>

                        <option value="female">
                            Female
                        </option>

                        <option value="other">
                            Other
                        </option>

                    </select>

                </div>


                <!-- ROLE -->
                <div class="form-group">

                    <div class="role-title">
                        Apply As <span class="required">*</span>
                    </div>

                    <div class="role-options">


                        <!-- DOCTOR -->
                        <label class="role-option">

                            <input
                                type="radio"
                                name="role"
                                value="doctor"
                                required
                            >

                            <div class="role-card">

                                <div class="role-icon">
                                    +
                                </div>

                                <strong>
                                    Doctor
                                </strong>

                                <span>
                                    Medical professional
                                </span>

                            </div>

                        </label>


                        <!-- RECEPTIONIST -->
                        <label class="role-option">

                            <input
                                type="radio"
                                name="role"
                                value="receptionist"
                            >

                            <div class="role-card">

                                <div class="role-icon">
                                    ✓
                                </div>

                                <strong>
                                    Receptionist
                                </strong>

                                <span>
                                    Front desk staff
                                </span>

                            </div>

                        </label>

                    </div>

                </div>


                <!-- PASSWORD -->
                <div class="form-group">

                    <label class="form-label">
                        Password <span class="required">*</span>
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Create a secure password"
                        required
                    >

                    <div class="password-note">
                        Use at least 8 characters for better security.
                    </div>

                </div>


                <!-- CONFIRM PASSWORD -->
                <div class="form-group">

                    <label class="form-label">
                        Confirm Password <span class="required">*</span>
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        required
                    >

                </div>


                <!-- SUBMIT -->
                <button
                    type="submit"
                    class="submit-btn"
                >
                    Submit Application
                </button>

            </form>


            <!-- BOTTOM NOTE -->
            <div class="bottom-note">

                Your application will be reviewed by an
                <strong>Administrator</strong>
                before account activation.

            </div>

        </div>

    </div>

</div>

</body>
</html>

