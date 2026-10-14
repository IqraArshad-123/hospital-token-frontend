# Al-Noor Hospital — frontend

Patient, doctor and receptionist portal built with Laravel. Includes the public landing page, department/doctor discovery, token requests and tracking, staff dashboards, availability/emergency forms, notifications and responsive navigation.

This repository contains only the frontend application. The hospital API, MySQL database, founder administration and token cleanup scheduler belong to the separate backend project. Laravel files under app/, config/ and routes/ here run the frontend and its authenticated API proxy.

## Run locally

Requirements: PHP 8.3+, Composer and the compatible hospital backend running separately.

1. Run composer install.
2. Copy .env.example to .env.
3. Run php artisan key:generate to create your own local application key.
4. Set HOSPITAL_API_URL to your backend API, for example http://127.0.0.1:8781/api.
5. Run php artisan serve --host=127.0.0.1 --port=8780.
6. Open http://127.0.0.1:8780.

The active portal uses public/css/portal.css and public/js/portal.js directly; no Node build is needed for these screens. The supplied environment uses file sessions and file cache, so the frontend does not need its own hospital database or migrations. Start the backend separately; running only this repository cannot provide registration, login or token data.

Never commit .env, passwords, database files, sessions or backups. A separate local installation should generate its own APP_KEY. The same source code does not mean two computers share database records.

## Code locations

| File | Purpose |
|---|---|
| resources/views/portal.blade.php | Active page shell |
| public/js/portal.js | Screens, forms, navigation and periodic updates |
| public/css/portal.css | Colors, desktop sidebar and mobile/tablet bottom navigation |
| routes/web.php | Client page routes and portal-api proxy |
| app/Http/Controllers/PortalController.php | Sends permitted client requests to backend; bearer tokens stay in server session |
| config/hospital.php | Reads HOSPITAL_API_URL |
| tests/Feature/PortalTest.php | Frontend and API-proxy checks |

Older Blade templates are retained as references; current routes render portal.blade.php. Founder/admin pages and management proxy routes are intentionally unavailable in this client project. Pending staff need founder approval on the separate backend before they can sign in.

## Tests

Run php artisan test after installing development dependencies. Tests fake the backend HTTP service; they do not use the live hospital database.

## Updating an existing clone

Back up any local work first, then pull the latest main branch. Run composer install and php artisan optimize:clear. Keep your local .env and update HOSPITAL_API_URL if needed. Git pull does not remove unrelated untracked files or automatically resolve conflicting local edits. For an exact fresh copy, clone into a new folder and configure a new local .env.
