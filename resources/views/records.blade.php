@extends('layouts.app')

@section('content')

<div class="records-page">

    <div class="records-header">
        <span>Patient Portal</span>
        <h1>My Medical Records</h1>
        <p>View your appointments and medical history in one place.</p>
    </div>

    <div class="patient-card">
        <div class="patient-avatar">P</div>

        <div>
            <h2>Patient Profile</h2>
            <p>Medical records and appointment history</p>
        </div>
    </div>

    <div class="records-grid">

        <div class="record-card">
            <div class="record-icon">+</div>
            <div>
                <small>Last Appointment</small>
                <h3>12 Sep 2026</h3>
                <p>Dr. Ahmed Khan</p>
            </div>
        </div>

        <div class="record-card">
            <div class="record-icon">T</div>
            <div>
                <small>Total Appointments</small>
                <h3>08</h3>
                <p>Appointments completed</p>
            </div>
        </div>

        <div class="record-card">
            <div class="record-icon">R</div>
            <div>
                <small>Recent Record</small>
                <h3>General Checkup</h3>
                <p>12 Sep 2026</p>
            </div>
        </div>

    </div>

    <div class="history-card">

        <div class="history-title">
            <h2>Appointment History</h2>
            <span>Recent</span>
        </div>

        <div class="history-row">
            <div class="history-date">
                <strong>12</strong>
                <small>SEP</small>
            </div>

            <div class="history-info">
                <h3>Dr. Ahmed Khan</h3>
                <p>Cardiologist • General Checkup</p>
            </div>

            <div class="completed">Completed</div>
        </div>

        <div class="history-row">
            <div class="history-date">
                <strong>28</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <h3>Dr. Sarah Ahmed</h3>
                <p>Neurologist • Consultation</p>
            </div>

            <div class="completed">Completed</div>
        </div>

        <div class="history-row">
            <div class="history-date">
                <strong>15</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <h3>Dr. Maria Ali</h3>
                <p>Dermatologist • Consultation</p>
            </div>

            <div class="completed">Completed</div>
        </div>

    </div>

</div>

<style>

.records-page {
    max-width: 1000px;
    margin: auto;
    padding: 45px 20px 90px;
}

.records-header {
    text-align: center;
    margin-bottom: 30px;
}

.records-header > span {
    display: inline-block;
    background: #e7f7f8;
    color: #087f8c;
    padding: 7px 15px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
}

.records-header h1 {
    color: #063d70;
    font-size: 36px;
    margin: 12px 0 8px;
}

.records-header p {
    color: #687b8c;
    margin: 0;
}

.patient-card {
    display: flex;
    align-items: center;
    gap: 15px;
    background: linear-gradient(135deg, #063d70, #087f8c);
    color: white;
    padding: 24px;
    border-radius: 20px;
    margin-bottom: 22px;
}

.patient-avatar {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: white;
    color: #087f8c;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    font-weight: 700;
}

.patient-card h2 {
    margin: 0 0 5px;
    font-size: 19px;
}

.patient-card p {
    margin: 0;
    font-size: 13px;
    opacity: .85;
}

.records-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 22px;
}

.record-card {
    display: flex;
    align-items: center;
    gap: 13px;
    background: white;
    border: 1px solid #e1edf2;
    border-radius: 17px;
    padding: 20px;
    box-shadow: 0 7px 22px rgba(6,61,112,.06);
}

.record-icon {
    width: 46px;
    height: 46px;
    flex-shrink: 0;
    border-radius: 13px;
    background: #e7f7f8;
    color: #087f8c;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

.record-card small {
    color: #687b8c;
    font-size: 11px;
}

.record-card h3 {
    color: #063d70;
    font-size: 16px;
    margin: 4px 0;
}

.record-card p {
    color: #8293a0;
    font-size: 11px;
    margin: 0;
}

.history-card {
    background: white;
    border: 1px solid #e1edf2;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 8px 25px rgba(6,61,112,.06);
}

.history-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
}

.history-title h2 {
    color: #063d70;
    font-size: 20px;
    margin: 0;
}

.history-title span {
    color: #087f8c;
    background: #e7f7f8;
    padding: 6px 11px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

.history-row {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 17px 0;
    border-bottom: 1px solid #edf2f5;
}

.history-row:last-child {
    border-bottom: none;
}

.history-date {
    width: 48px;
    height: 48px;
    flex-shrink: 0;
    border-radius: 12px;
    background: #f1f7fa;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.history-date strong {
    color: #063d70;
    font-size: 17px;
    line-height: 18px;
}

.history-date small {
    color: #087f8c;
    font-size: 8px;
    font-weight: 700;
}

.history-info {
    flex: 1;
}

.history-info h3 {
    color: #063d70;
    font-size: 14px;
    margin: 0 0 4px;
}

.history-info p {
    color: #7a8b97;
    font-size: 12px;
    margin: 0;
}

.completed {
    color: #15845b;
    background: #e9f8f1;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 700;
}

/* Mobile */

@media (max-width: 768px) {

    .records-page {
        padding: 30px 15px 95px;
    }

    .records-header h1 {
        font-size: 29px;
    }

    .patient-card {
        padding: 20px;
        border-radius: 17px;
    }

    .records-grid {
        grid-template-columns: 1fr;
    }

    .history-card {
        padding: 20px;
    }

    .history-row {
        gap: 10px;
    }

    .history-info h3 {
        font-size: 13px;
    }

    .completed {
        font-size: 9px;
        padding: 5px 7px;
    }
}

</style>

@endsection