<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Staff Login | LifeCare</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #eef5fb, #dcecf8);
    }

    .login-card {
        width: 100%;
        max-width: 470px;
        background: #ffffff;
        border-radius: 24px;
        padding: 40px 35px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(8, 79, 134, 0.15);
        border: 1px solid rgba(8, 79, 134, 0.12);
    }

    .top-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #ff3348, #084f86, #ff3348);
        background-size: 200% 100%;
        animation: moveLine 3s linear infinite;
    }

    @keyframes moveLine {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 200% 50%;
        }
    }

    .logo {
        width: 70px;
        height: 70px;
        margin: 0 auto 18px;
        border-radius: 50%;
        background: linear-gradient(135deg, #063d70, #084f86);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        font-weight: bold;
        box-shadow: 0 10px 25px rgba(8, 79, 134, 0.25);
    }

    h1 {
        text-align: center;
        color: #063d70;
        font-size: 28px;
        margin-bottom: 8px;
    }

    .subtitle {
        text-align: center;
        color: #718096;
        font-size: 14px;
        margin-bottom: 30px;
    }

    .error-box {
        background: #fff0f2;
        color: #d71935;
        border: 1px solid #ffc5cd;
        border-radius: 10px;
        padding: 12px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        color: #263b50;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        height: 52px;
        border: 1.5px solid #d6e2ec;
        border-radius: 12px;
        padding: 0 15px;
        font-size: 15px;
        outline: none;
        transition: 0.3s;
        color: #263b50;
        background: #fbfdff;
    }

    input:focus {
        border-color: #084f86;
        box-shadow: 0 0 0 4px rgba(8, 79, 134, 0.08);
        background: white;
    }

    .login-btn {
        width: 100%;
        height: 54px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #063d70, #084f86);
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 5px;
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(8, 79, 134, 0.25);
    }

    .bottom-text {
        text-align: center;
        margin-top: 25px;
        color: #718096;
        font-size: 13px;
    }

    .bottom-text span {
        color: #ff3348;
        font-weight: 600;
    }

    @media (max-width: 500px) {
        body {
            padding: 15px;
        }

        .login-card {
            padding: 35px 22px;
            border-radius: 20px;
        }

        h1 {
            font-size: 25px;
        }

        .logo {
            width: 62px;
            height: 62px;
            font-size: 24px;
        }
    }
</style>
```

</head>

<body>

<div class="login-card">

```
<div class="top-line"></div>

<div class="logo">
    LC
</div>

<h1>Staff Login</h1>

<p class="subtitle">
    Login to access your LifeCare staff portal
</p>

@if ($errors->any())
    <div class="error-box">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="{{ route('staff-login.submit') }}">
    @csrf

    <div class="form-group">
        <label for="email">Email Address</label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter your staff email"
            required
        >
    </div>

    <div class="form-group">
        <label for="password">Password</label>

        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
        >
    </div>

    <button type="submit" class="login-btn">
        Login to Staff Portal
    </button>
</form>

<p class="bottom-text">
    Only approved staff members can access the portal.
    <br>
    <span>LifeCare Healthcare System</span>
</p>
```

</div>

</body>
</html>
