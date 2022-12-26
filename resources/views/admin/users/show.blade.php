<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">PROFILE</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body d-md-flex">
                            <div class="">
                                <span class="profile-image pos-relative">
                                    <img class="br-5" alt=""
                                        src="{{ asset('assets/img/faces/profile.jpg') }}">
                                    <span class="bg-success text-white wd-1 ht-1 rounded-pill profile-online"></span>
                                </span>
                            </div>
                            <div class="my-md-auto mt-4 prof-details">
                                <h4 class="font-weight-semibold ms-md-4 ms-0 mb-1 pb-0">Sonya Taylor</h4>
                                <p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
                                    <span class="me-3"><i class="far fa-address-card me-2"></i>Ui/Ux
                                        Developer</span>
                                    <span class="me-3"><i class="fa fa-taxi me-2"></i>West fransisco,Alabama</span>
                                    <span><i class="far fa-flag me-2"></i>New Jersey</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-phone me-2"></i></span><span
                                        class="font-weight-semibold me-2">Phone:</span><span>+94 12345 6789</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-envelope me-2"></i></span><span
                                        class="font-weight-semibold me-2">Email:</span><span>spruko.space@gmail.com</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-globe me-2"></i></span><span
                                        class="font-weight-semibold me-2">Website</span><span>sprukotechnologies</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer py-0">
                            <div class="profile-tab tab-menu-heading border-bottom-0">
                                <div class="main-content-body tab-pane  active" id="about">
                                    <div class="card">
                                        <div class="card-body p-0 border-0 p-0 rounded-10">
                                            <div class="p-4">
                                                <h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
                                                <p class="m-b-5">Hi I'm Teri Dactyl,has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type. Donec pede justo, fringilla vel, aliquet nec,
                                                    vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                                    Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi.
                                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                                    consequat vitae, eleifend ac, enim.</p>
                                            </div>
                                            <div class="border-top"></div>
                                            <div class="p-4">
                                                <label class="main-content-label tx-13 mg-b-20">Statistics</label>
                                                <div class="profile-cover__info ms-4 ms-auto p-0">
                                                    <ul class="nav p-0 border-bottom-0 mb-0">
                                                        <li class="border p-2 br-5 bg-light wd-100 ht-70"><span
                                                                class="border-0 mb-0 pb-0">113</span>Views</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="border-top"></div>
                                            <div class="p-4">
                                                <label class="main-content-label tx-13 mg-b-20">Social</label>
                                                <div class="d-lg-flex">
                                                    <div class="mg-md-r-20 mg-b-10">
                                                        <div class="main-profile-social-list">
                                                            <div class="media">
                                                                <div
                                                                    class="media-icon bg-primary-transparent text-primary">
                                                                    <i class="icon ion-logo-github"></i>
                                                                </div>
                                                                <div class="media-body"> <span>Github</span> <a
                                                                        href="#">github.com/spruko</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-md-r-20 mg-b-10">
                                                        <div class="main-profile-social-list">
                                                            <div class="media">
                                                                <div
                                                                    class="media-icon bg-success-transparent text-success">
                                                                    <i class="icon ion-logo-twitter"></i>
                                                                </div>
                                                                <div class="media-body"> <span>Twitter</span> <a
                                                                        href="#">twitter.com/spruko.me</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-md-r-20 mg-b-10">
                                                        <div class="main-profile-social-list">
                                                            <div class="media">
                                                                <div class="media-icon bg-info-transparent text-info">
                                                                    <i class="icon ion-logo-linkedin"></i>
                                                                </div>
                                                                <div class="media-body"> <span>Linkedin</span> <a
                                                                        href="#">linkedin.com/in/spruko</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-md-r-20 mg-b-10">
                                                        <div class="main-profile-social-list">
                                                            <div class="media">
                                                                <div
                                                                    class="media-icon bg-danger-transparent text-danger">
                                                                    <i class="icon ion-md-link"></i>
                                                                </div>
                                                                <div class="media-body"> <span>My Portfolio</span> <a
                                                                        href="#">spruko.com/</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
</x-admin.layout>
