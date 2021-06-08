<body>
<div class="main-wrapper">

    <div class="side-menu" id="sidebar-menu">
        <div class="close-btn"><span class="material-icons">close</span></div>
        <ul>
            <li>
                <a class="" href="{{url('driver')}}">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="" href="{{url('clientList')}}">
                    <span class="material-icons">date_range</span>
                    All Requests
                </a>
            </li>
            <li>
                <a class="" href="{{url('acceptedRequest')}}">
                    <span class="material-icons">person</span>
                    Accepted Request
                </a>
            </li>
            <li>
                <a class="" href="schedule-timings.html">
                    <span class="material-icons">access_time</span>
                    History
                </a>
            </li>
            <li>
                <a class="" href="invoices.html">
                    <span class="material-icons">insert_drive_file</span>
                    Invoices
                </a>
            </li>
            <li>
                <a class="" href="pages.html">
                    <span class="material-icons">pages</span>
                    Pages
                </a>
            </li>
            <li>
                <a class="" href="chat.html">
                    <span class="material-icons">message</span>
                    Message
                </a>
            </li>
            <li>
                <a class="" href="profile-settings.html">
                    <span class="material-icons">settings</span>
                    Profile Settings
                </a>
            </li>
            <li>
                <a class="" href="social-media.html">
                    <span class="material-icons">share</span>
                    Social Media
                </a>
            </li>
            <li>
                <a class="" href="change-password.html">
                    <span class="material-icons">lock_open</span>
                    Change Password
                </a>
            </li>
        </ul>
        <form action="{{route('logout')}}" method="post" id="logoutForm">
            @csrf
            <a class="sidebar-logout" href="javascript:document.getElementById('logoutForm').submit()"><span><img src="assets/img/open-account-logout.svg" alt=""></span>Logout</a>
        </form>
    </div>
