<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Staff Management | Al-Noor Hospital</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        font-family: Arial, Helvetica, sans-serif;
        background: #eef5fb;
        color: #263b50;
    }

    /* =========================
       TOP BAR
    ========================== */

    .topbar {
        min-height: 72px;
        background: linear-gradient(135deg, #063d70, #084f86);
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 5%;
        box-shadow: 0 5px 20px rgba(8, 79, 134, 0.20);
    }

    .hospital-brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .hospital-logo {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: white;
        color: #063d70;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        font-weight: bold;
        box-shadow: 0 3px 10px rgba(0,0,0,0.12);
    }

    .hospital-name {
        font-size: 21px;
        font-weight: 700;
        letter-spacing: 0.2px;
    }

    .hospital-name span {
        color: #ff3348;
    }

    .admin-label {
        font-size: 13px;
        font-weight: 600;
        opacity: 0.95;
    }

    /* =========================
       MAIN
    ========================== */

    .container {
        width: 92%;
        max-width: 1200px;
        margin: 35px auto;
    }

    .page-heading {
        margin-bottom: 25px;
    }

    .page-heading h1 {
        color: #063d70;
        font-size: 30px;
        margin-bottom: 8px;
    }

    .page-heading p {
        color: #718096;
        font-size: 14px;
    }

    /* =========================
       STAT CARDS
    ========================== */

    .stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 25px;
    }

    .stat-card {
        position: relative;
        background: #ffffff;
        border-radius: 15px;
        padding: 21px;
        border: 1px solid #dfeaf3;
        box-shadow: 0 7px 24px rgba(8, 79, 134, 0.08);
        overflow: hidden;
    }

    .stat-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: #084f86;
    }

    .stat-card.pending::before {
        background: #ff3348;
    }

    .stat-title {
        color: #718096;
        font-size: 13px;
        margin-bottom: 9px;
    }

    .stat-number {
        color: #063d70;
        font-size: 29px;
        font-weight: 700;
    }

    /* =========================
       APPLICATION CARD
    ========================== */

    .applications-card {
        background: #ffffff;
        border-radius: 17px;
        border: 1px solid #dfeaf3;
        box-shadow: 0 8px 28px rgba(8, 79, 134, 0.08);
        overflow: hidden;
    }

    .card-header {
        padding: 21px 24px;
        border-bottom: 1px solid #e6edf3;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .card-header h2 {
        color: #063d70;
        font-size: 20px;
    }

    .refresh-btn {
        border: 1px solid #084f86;
        background: #ffffff;
        color: #084f86;
        padding: 9px 16px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.2s ease;
    }

    .refresh-btn:hover {
        background: #084f86;
        color: white;
    }

    /* =========================
       MESSAGE
    ========================== */

    .message {
        display: none;
        margin: 18px 24px 0;
        padding: 13px 15px;
        border-radius: 9px;
        font-size: 14px;
        font-weight: 500;
    }

    .message.success {
        display: block;
        background: #e8f7ef;
        color: #16824c;
    }

    .message.error {
        display: block;
        background: #fff0f2;
        color: #d71935;
    }

    /* =========================
       TABLE
    ========================== */

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 850px;
    }

    th {
        background: #f4f8fb;
        color: #52677a;
        font-size: 13px;
        font-weight: 700;
        text-align: left;
        padding: 15px 18px;
        white-space: nowrap;
    }

    td {
        padding: 16px 18px;
        border-top: 1px solid #edf2f6;
        font-size: 14px;
        vertical-align: middle;
    }

    tr:hover td {
        background: #fbfdff;
    }

    .name {
        color: #063d70;
        font-weight: 700;
    }

    .role {
        display: inline-block;
        padding: 6px 11px;
        border-radius: 20px;
        background: #edf5fb;
        color: #084f86;
        font-size: 12px;
        font-weight: 700;
        text-transform: capitalize;
    }

    .status {
        display: inline-block;
        padding: 6px 11px;
        border-radius: 20px;
        background: #fff5dc;
        color: #a66a00;
        font-size: 12px;
        font-weight: 700;
        text-transform: capitalize;
    }

    /* =========================
       BUTTONS
    ========================== */

    .actions {
        display: flex;
        gap: 8px;
    }

    .approve-btn,
    .reject-btn {
        border: none;
        padding: 9px 13px;
        border-radius: 7px;
        cursor: pointer;
        font-weight: 700;
        font-size: 12px;
        transition: 0.2s ease;
    }

    .approve-btn {
        background: #e8f7ef;
        color: #16824c;
    }

    .approve-btn:hover {
        background: #16824c;
        color: white;
    }

    .reject-btn {
        background: #fff0f2;
        color: #d71935;
    }

    .reject-btn:hover {
        background: #d71935;
        color: white;
    }

    /* =========================
       EMPTY STATE
    ========================== */

    .empty-state {
        text-align: center;
        padding: 55px 20px;
        color: #718096;
    }

    .empty-state h3 {
        color: #52677a;
        margin-bottom: 8px;
        font-size: 17px;
    }

    .empty-state p {
        font-size: 13px;
    }

    /* =========================
       MOBILE
    ========================== */

    @media (max-width: 750px) {

        .topbar {
            min-height: 68px;
            padding: 12px 18px;
        }

        .hospital-logo {
            width: 38px;
            height: 38px;
            font-size: 17px;
        }

        .hospital-name {
            font-size: 17px;
        }

        .admin-label {
            font-size: 11px;
            text-align: right;
        }

        .container {
            width: 94%;
            margin: 24px auto;
        }

        .page-heading {
            margin-bottom: 20px;
        }

        .page-heading h1 {
            font-size: 24px;
        }

        .page-heading p {
            line-height: 1.5;
        }

        .stats {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .stat-card {
            padding: 18px;
        }

        .stat-number {
            font-size: 26px;
        }

        .card-header {
            padding: 17px;
        }

        .card-header h2 {
            font-size: 17px;
        }

        .refresh-btn {
            padding: 8px 12px;
            font-size: 12px;
        }

        .message {
            margin: 15px 17px 0;
        }
    }

    @media (max-width: 430px) {

        .hospital-name {
            font-size: 15px;
        }

        .admin-label {
            font-size: 10px;
        }

        .page-heading h1 {
            font-size: 22px;
        }

        .card-header {
            align-items: flex-start;
        }
    }
</style>
```

</head>

<body>

<header class="topbar">

```
<div class="hospital-brand">

    <div class="hospital-logo">
        AN
    </div>

    <div class="hospital-name">
        Al-Noor <span>Hospital</span>
    </div>

</div>

<div class="admin-label">
    Admin Staff Management
</div>
```

</header>

<main class="container">

```
<div class="page-heading">

    <h1>Staff Applications</h1>

    <p>
        Review and manage Doctor and Receptionist registration applications.
    </p>

</div>


<section class="stats">

    <div class="stat-card pending">

        <div class="stat-title">
            Pending Applications
        </div>

        <div class="stat-number" id="pendingCount">
            0
        </div>

    </div>


    <div class="stat-card">

        <div class="stat-title">
            Doctors
        </div>

        <div class="stat-number" id="doctorCount">
            0
        </div>

    </div>


    <div class="stat-card">

        <div class="stat-title">
            Receptionists
        </div>

        <div class="stat-number" id="receptionistCount">
            0
        </div>

    </div>

</section>


<section class="applications-card">

    <div class="card-header">

        <h2>
            Pending Staff Applications
        </h2>

        <button
            type="button"
            class="refresh-btn"
            onclick="loadApplications()"
        >
            Refresh
        </button>

    </div>


    <div id="message" class="message"></div>


    <div class="table-wrapper">

        <table>

            <thead>

                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

            </thead>


            <tbody id="applicationsBody">

                <tr>

                    <td colspan="6">

                        <div class="empty-state">

                            <h3>
                                Loading applications...
                            </h3>

                            <p>
                                Please wait.
                            </p>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</section>
```

</main>

<script>

    const API_URL = 'http://127.0.0.1:8001/api';

    const STAFF_TOKEN = @json(session('staff_token'));


    function showMessage(text, type) {

        const message =
            document.getElementById('message');

        message.className =
            'message ' + type;

        message.textContent =
            text;

        setTimeout(() => {

            message.className =
                'message';

        }, 4000);
    }


    function authHeaders() {

        return {

            'Accept': 'application/json',

            'Content-Type': 'application/json',

            'Authorization': 'Bearer ' + STAFF_TOKEN

        };
    }


    async function loadApplications() {

        const body =
            document.getElementById('applicationsBody');


        body.innerHTML = `
            <tr>
                <td colspan="6">
                    <div class="empty-state">
                        <h3>Loading applications...</h3>
                        <p>Please wait.</p>
                    </div>
                </td>
            </tr>
        `;


        if (!STAFF_TOKEN) {

            body.innerHTML = `
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <h3>Admin Login Required</h3>
                            <p>Please login as Admin first.</p>
                        </div>
                    </td>
                </tr>
            `;

            showMessage(
                'Admin authentication token is missing. Please login again.',
                'error'
            );

            return;
        }


        try {

            const response = await fetch(
                `${API_URL}/admin/staff/pending`,
                {
                    method: 'GET',
                    headers: authHeaders()
                }
            );


            const data =
                await response.json();


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    'Unable to load applications.'
                );
            }


            const applications =
                data.applications || [];


            renderApplications(applications);


        } catch (error) {

            body.innerHTML = `
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <h3>Unable to Load Applications</h3>
                            <p>${escapeHtml(error.message)}</p>
                        </div>
                    </td>
                </tr>
            `;

            showMessage(
                error.message,
                'error'
            );
        }
    }


    function renderApplications(applications) {

        const body =
            document.getElementById('applicationsBody');


        const pendingCount =
            document.getElementById('pendingCount');


        const doctorCount =
            document.getElementById('doctorCount');


        const receptionistCount =
            document.getElementById('receptionistCount');


        pendingCount.textContent =
            applications.length;


        doctorCount.textContent =
            applications.filter(
                user => user.role === 'doctor'
            ).length;


        receptionistCount.textContent =
            applications.filter(
                user => user.role === 'receptionist'
            ).length;


        if (!applications.length) {

            body.innerHTML = `
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <h3>No Pending Applications</h3>
                            <p>
                                There are currently no staff applications waiting for approval.
                            </p>
                        </div>
                    </td>
                </tr>
            `;

            return;
        }


        body.innerHTML =
            applications.map(user => {

                return `
                    <tr>

                        <td>
                            <div class="name">
                                ${escapeHtml(user.name)}
                            </div>
                        </td>

                        <td>
                            ${escapeHtml(user.email)}
                        </td>

                        <td>
                            ${escapeHtml(user.phone)}
                        </td>

                        <td>
                            <span class="role">
                                ${escapeHtml(user.role)}
                            </span>
                        </td>

                        <td>
                            <span class="status">
                                ${escapeHtml(user.status || 'pending')}
                            </span>
                        </td>

                        <td>

                            <div class="actions">

                                <button
                                    type="button"
                                    class="approve-btn"
                                    onclick="approveStaff(${Number(user.id)})"
                                >
                                    Approve
                                </button>

                                <button
                                    type="button"
                                    class="reject-btn"
                                    onclick="rejectStaff(${Number(user.id)})"
                                >
                                    Reject
                                </button>

                            </div>

                        </td>

                    </tr>
                `;

            }).join('');
    }


    async function approveStaff(id) {

        if (!confirm(
            'Are you sure you want to approve this staff application?'
        )) {
            return;
        }

        await updateStaffStatus(
            id,
            'approve'
        );
    }


    async function rejectStaff(id) {

        if (!confirm(
            'Are you sure you want to reject this staff application?'
        )) {
            return;
        }

        await updateStaffStatus(
            id,
            'reject'
        );
    }


    async function updateStaffStatus(id, action) {

        if (!STAFF_TOKEN) {

            showMessage(
                'Admin authentication token is missing. Please login again.',
                'error'
            );

            return;
        }


        try {

            const response = await fetch(
                `${API_URL}/admin/staff/${id}/${action}`,
                {
                    method: 'POST',
                    headers: authHeaders()
                }
            );


            const data =
                await response.json();


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    `Unable to ${action} staff application.`
                );
            }


            showMessage(
                data.message ||
                `Staff application ${action}d successfully.`,
                'success'
            );


            await loadApplications();


        } catch (error) {

            showMessage(
                error.message,
                'error'
            );
        }
    }


    function escapeHtml(value) {

        const div =
            document.createElement('div');

        div.textContent =
            String(value ?? '');

        return div.innerHTML;
    }


    loadApplications();

</script>

</body>
</html>
