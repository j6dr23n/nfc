<!-- main-sidebar -->
<div class="sticky">
    <aside class="app-sidebar">
        <div class="main-sidebar-header active">
            <a class="header-logo active" href="{{ route('dashboard.index') }}">
                <img src="{{ asset('admin/assets/img/brand/logo.png') }}" class="main-logo  desktop-logo" alt="logo">
                <img src="{{ asset('assets/img/brand/logo-white.png') }}" class="main-logo  desktop-dark" alt="logo">
                <img src="{{ asset('admin/assets/img/brand/favicon.png') }}" class="main-logo  mobile-logo"
                    alt="logo">
                <img src="{{ asset('assets/img/brand/favicon-white.png') }}" class="main-logo  mobile-dark"
                    alt="logo">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                @if (auth()->user()->isAdmin())
                    <li class="side-item side-item-category">Main</li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('dashboard.index') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
                            </svg><span class="side-menu__label">Dashboards</span></a>
                    </li>
                    <li class="side-item side-item-category">List</li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg><span class="side-menu__label">Users</span></a>
                        <ul class="slide-menu open">
                            <li class="side-menu__label1"><a href="javascript:void(0);">Users</a></li>
                            <li><a class="slide-item" href="{{ route('users.index') }}">List User</a></li>
                            <li><a class="slide-item" href="{{ route('users.create') }}">Create User</a></li>
                            <li><a class="slide-item" href="{{ route('users.bulk_create') }}">Bulk Create User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg><span class="side-menu__label">Skills</span></a>
                        <ul class="slide-menu open">
                            <li class="side-menu__label1"><a href="javascript:void(0);">Skills</a></li>
                            <li><a class="slide-item" href="{{ route('skills.index') }}">List Skill</a></li>
                            <li><a class="slide-item" href="{{ route('skills.create') }}">Create Skill</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <rect fill="none" height="24" width="24" />
                                <path
                                    d="M7.02,13c-2.21,0-4,1.79-4,4s1.79,4,4,4s4-1.79,4-4S9.23,13,7.02,13z M7.02,19c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2 S8.12,19,7.02,19z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z M7,2l-5,9h10L7,2z M7,6.12L8.6,9H5.4L7,6.12z M19.25,2.5 c-1.06,0-1.81,0.56-2.25,1.17c-0.44-0.61-1.19-1.17-2.25-1.17C13.19,2.5,12,3.78,12,5.25c0,2,2.42,3.42,5,5.75 c2.58-2.33,5-3.75,5-5.75C22,3.78,20.81,2.5,19.25,2.5z M17,8.35c-1.45-1.22-3-2.4-3-3.1c0-0.43,0.35-0.75,0.75-0.75 c0.31,0,0.52,0.17,0.73,0.37L17,6.3l1.52-1.43c0.21-0.2,0.42-0.37,0.73-0.37c0.4,0,0.75,0.32,0.75,0.75C20,5.95,18.45,7.13,17,8.35z" />
                            </svg><span class="side-menu__label">Socials</span></a>
                        <ul class="slide-menu open">
                            <li class="side-menu__label1"><a href="javascript:void(0);">Socials</a></li>
                            <li><a class="slide-item" href="{{ route('socials.index') }}">List Social</a></li>
                            <li><a class="slide-item" href="{{ route('socials.create') }}">Create Social</a></li>
                        </ul>
                    </li>
                @else
                    <li class="side-item side-item-category">List</li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('skills.create') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg><span class="side-menu__label">Create Skill</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('socials.create') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <rect fill="none" height="24" width="24" />
                                <path
                                    d="M7.02,13c-2.21,0-4,1.79-4,4s1.79,4,4,4s4-1.79,4-4S9.23,13,7.02,13z M7.02,19c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2 S8.12,19,7.02,19z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z M7,2l-5,9h10L7,2z M7,6.12L8.6,9H5.4L7,6.12z M19.25,2.5 c-1.06,0-1.81,0.56-2.25,1.17c-0.44-0.61-1.19-1.17-2.25-1.17C13.19,2.5,12,3.78,12,5.25c0,2,2.42,3.42,5,5.75 c2.58-2.33,5-3.75,5-5.75C22,3.78,20.81,2.5,19.25,2.5z M17,8.35c-1.45-1.22-3-2.4-3-3.1c0-0.43,0.35-0.75,0.75-0.75 c0.31,0,0.52,0.17,0.73,0.37L17,6.3l1.52-1.43c0.21-0.2,0.42-0.37,0.73-0.37c0.4,0,0.75,0.32,0.75,0.75C20,5.95,18.45,7.13,17,8.35z" />
                            </svg><span class="side-menu__label">Create Social</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('blogs.create') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <circle cx="6.18" cy="17.82" r="2.18" />
                                <path
                                    d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z" />
                            </svg><span class="side-menu__label">Create Blog</span></a>
                    </li>
                @endif
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
<!-- main-sidebar -->
