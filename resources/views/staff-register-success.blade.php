
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Application Submitted | Al-Noor Hospital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eef5fb, #dcecf8);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-card {
            width: 100%;
            max-width: 650px;
            background: #ffffff;
            border-radius: 22px;
            padding: 45px 35px;
            text-align: center;
            box-shadow: 0 15px 45px rgba(8, 79, 134, 0.15);
            border-top: 5px solid #084f86;
            position: relative;
            overflow: hidden;
        }

        .success-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: linear-gradient(
                90deg,
                transparent,
                #ff3348,
                #084f86,
                transparent
            );
            animation: lineMove 3s linear infinite;
        }

        @keyframes lineMove {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .check-circle {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #e8f7ef;
            border: 4px solid #25a55f;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #25a55f;
            font-size: 48px;
            font-weight: bold;
            animation: pop 0.6s ease;
        }

        @keyframes pop {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            70% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .brand {
            color: #084f86;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        h1 {
            color: #063d70;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .message {
            color: #555;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .application-box {
            background: #f5f9fc;
            border: 1px solid #d9e7f1;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 28px;
            text-align: left;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 11px 0;
            border-bottom: 1px solid #e2ebf2;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            color: #777;
            font-size: 14px;
        }

        .value {
            color: #063d70;
            font-size: 14px;
            font-weight: bold;
            text-align: right;
            word-break: break-word;
        }

        .status {
            display: inline-block;
            padding: 7px 14px;
            border-radius: 20px;
            background: #fff4df;
            color: #c77a00;
            font-size: 13px;
            font-weight: bold;
        }

        .buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s ease;
            display: inline-block;
        }

        .login-btn {
            background: #084f86;
            color: white;
        }

        .login-btn:hover {
            background: #063d70;
            transform: translateY(-2px);
        }

        .home-btn {
            background: #eef5fb;
            color: #084f86;
            border: 1px solid #cbdde9;
        }

        .home-btn:hover {
            background: #dcecf8;
            transform: translateY(-2px);
        }

        .note {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
            line-height: 1.6;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .success-card {
                padding: 35px 20px;
                border-radius: 18px;
            }

            .check-circle {
                width: 75px;
                height: 75px;
                font-size: 40px;
                margin-bottom: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .message {
                font-size: 14px;
            }

            .application-box {
                padding: 15px;
            }

            .info-row {
                flex-direction: column;
                gap: 4px;
            }

            .value {
                text-align: left;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="success-card">

        <div class="check-circle">
            ✓
        </div>

        <div class="brand">
            Al-Noor Hospital
        </div>

        <h1>Application Submitted Successfully</h1>

        <p class="message">
            Thank you, {{ $user['name'] }}.
            Your staff registration application has been submitted successfully.
            Please wait for Admin approval before logging in.
        </p>

        <div class="application-box">

            <div class="info-row">
                <span class="label">Name</span>
                <span class="value">
                    {{ $user['name'] }}
                </span>
            </div>

            <div class="info-row">
                <span class="label">Phone</span>
                <span class="value">
                    {{ $user['phone'] }}
                </span>
            </div>

            <div class="info-row">
                <span class="label">Role</span>
                <span class="value">
                    {{ ucfirst($user['role']) }}
                </span>
            </div>

            <div class="info-row">
                <span class="label">Application Status</span>
                <span class="value">
                    <span class="status">
                        Pending Admin Approval
                    </span>
                </span>
            </div>

        </div>

        <div class="buttons">

            <a href="{{ route('staff-login') }}" class="btn login-btn">
                Go to Staff Login
            </a>

            <a href="{{ route('home') }}" class="btn home-btn">
                Back to Home
            </a>

        </div>

        <p class="note">
            You will be able to access your staff account after the
            Admin approves your application.
        </p>

    </div>

</body>
</html>
```
