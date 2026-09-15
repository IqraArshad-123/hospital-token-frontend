{{-- Mobile Bottom Navigation --}}

<nav class="mobile-bottom-nav">

    <a href="{{ route('home') }}" class="bottom-nav-item active">

        <span class="bottom-nav-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M3 10.5L12 3L21 10.5V20H14.5V14H9.5V20H3V10.5Z"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linejoin="round"/>
            </svg>
        </span>

        <span>Home</span>

    </a>


    <a href="{{ route('book-token') }}" class="bottom-nav-item">

        <span class="bottom-nav-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <rect x="4" y="5" width="16" height="16" rx="2"
                      stroke="currentColor"
                      stroke-width="1.6"/>

                <path d="M8 3V7M16 3V7M4 10H20"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"/>

                <path d="M8 14H10M14 14H16M8 17H10"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"/>
            </svg>
        </span>

        <span>Appointments</span>

    </a>


    <a href="{{ route('live-status') }}" class="bottom-nav-item">

        <span class="bottom-nav-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <rect x="5" y="3" width="14" height="18" rx="2"
                      stroke="currentColor"
                      stroke-width="1.6"/>

                <path d="M8 8H16M8 12H16M8 16H13"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"/>
            </svg>
        </span>

        <span>Records</span>

    </a>


    <a href="{{ route('login') }}" class="bottom-nav-item">

        <span class="bottom-nav-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="8" r="3.5"
                        stroke="currentColor"
                        stroke-width="1.6"/>

                <path d="M5 21C5.7 16.8 8 14.5 12 14.5C16 14.5 18.3 16.8 19 21"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"/>
            </svg>
        </span>

        <span>Profile</span>

    </a>

</nav>


<style>

.mobile-bottom-nav {

    display: none;

}


@media (max-width: 768px) {

    .mobile-bottom-nav {

        position: fixed;

        left: 0;
        right: 0;
        bottom: 0;

        height: 68px;

        display: grid;

        grid-template-columns: repeat(4, 1fr);

        align-items: center;

        background: rgba(255,255,255,.98);

        border-top: 1px solid #dcecf2;

        box-shadow:
            0 -5px 20px rgba(8,79,134,.10);

        z-index: 6000;

    }


    .bottom-nav-item {

        height: 100%;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        gap: 4px;

        position: relative;

        color: #8a9da8;

        font-size: 9px;

        font-weight: 600;

        text-decoration: none;

        transition: .25s ease;

    }


    .bottom-nav-item:hover {

        color: #087f86;

    }


    .bottom-nav-item.active {

        color: #078ba1;

    }


    .bottom-nav-item.active::before {

        content: "";

        position: absolute;

        top: 0;

        left: 50%;

        width: 30px;

        height: 3px;

        transform: translateX(-50%);

        background: #08a18f;

        border-radius: 0 0 8px 8px;

    }


    .bottom-nav-icon {

        width: 23px;

        height: 23px;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    .bottom-nav-icon svg {

        width: 21px;

        height: 21px;

    }

}


@media (max-width: 380px) {

    .mobile-bottom-nav {

        height: 64px;

    }


    .bottom-nav-item {

        font-size: 8px;

    }


    .bottom-nav-icon {

        width: 21px;

        height: 21px;

    }

}

</style>