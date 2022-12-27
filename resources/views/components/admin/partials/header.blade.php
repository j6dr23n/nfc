<!-- main-header -->
<div class="main-header side-header sticky nav nav-item">
    <div class=" main-container container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="{{ route('dashboard.index') }}" class="header-logo">
                    <img src="{{ asset('admin/assets/img/brand/mobile-logo.png') }}" class="mobile-logo logo-1"
                        alt="logo">
                    <img src="{{ asset('admin/assets/img/brand/mobile-logo.png') }}" class="mobile-logo dark-logo-1"
                        alt="logo">
                </a>
            </div>
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                <a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
            </div>
            <div class="logo-horizontal">
                <a href="{{ route('dashboard.index') }}" class="header-logo">
                    <img src="{{ asset('admin/assets/img/brand/mobile-logo.png') }}" class="mobile-logo logo-1"
                        alt="logo">
                    <img src="{{ asset('admin/assets/img/brand/mobile-logo.png') }}" class="mobile-logo dark-logo-1"
                        alt="logo">
                </a>
            </div>
        </div>
        <div class="main-header-right">
            <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fe fe-more-vertical "></span>
            </button>
            <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="nav nav-item header-icons navbar-nav-right ms-auto">
                        <li class="dropdown nav-item">
                            <a class="new nav-link theme-layout nav-link-bg" href="{{ route('home.index') }}">
                                <span class="light-layout">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                        width="24" fill="#FFFFFF">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
                            <a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img
                                    alt=""
                                    src="{{ auth()->user()->info !== null ? env('APP_URL') . '/storage/' . auth()->user()->info->image : asset('img/demo.png') }}"
                                    class=""></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content p-3 border-bottom">
                                    <div class="d-flex wd-100p">
                                        <div class="main-img-user"><img alt=""
                                                src="{{ auth()->user()->info !== null ? env('APP_URL') . '/storage/' . auth()->user()->info->image : asset('img/demo.png') }}"
                                                class=""></div>
                                        <div class="ms-3 my-auto">
                                            <h6 class="tx-15 font-weight-semibold mb-0">{{ auth()->user()->username }}
                                            </h6>
                                            <span
                                                class="dropdown-title-text subtext op-6  tx-12">{{ ucfirst(auth()->user()->role) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="{{ route('dashboard.profile') }}"><i
                                        class="far fa-user-circle"></i>Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"><i
                                            class="far fa-arrow-alt-circle-left"></i>
                                        Sign Out</a>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->
