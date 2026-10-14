<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Al-Noor Hospital — request a consultation, track your token and stay informed.">
    <title>Al-Noor Hospital · Patient care, connected</title>
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}">
</head>
<body data-base="{{ url('/') }}">
    <div id="app"><div class="loading">Connecting to Al-Noor Hospital…</div></div>
    <div id="toast" role="status" aria-live="polite"></div>
    <dialog id="modal"><div id="modal-content"></div></dialog>
    <script src="{{ asset('js/portal.js') }}" defer></script>
</body>
</html>
