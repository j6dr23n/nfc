<x-guest-layout>
    <div class="bg-primary">


        <!-- Loader -->
        <div id="global-loader">
            <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->


        <div class="square-box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-45 justify-content-center">
                            <div class="card-sigin mt-5 mt-md-0">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p">
                                        <div class="d-flex mb-4"><a href="index.html"><img
                                                    src="assets/img/brand/favicon.png" class="sign-favicon ht-40"
                                                    alt="logo"></a></div>
                                        <div class="">
                                            <div class="main-signup-header">
                                                <h2>Welcome back!</h2>
                                                <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
                                                <div class="panel panel-primary">
                                                    <div class="panel-body tabs-menu-body border-0 p-3">
                                                        <form action="{{ route('login') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Email</label> <input class="form-control"
                                                                    placeholder="Enter your email" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label> <input class="form-control"
                                                                    placeholder="Enter your password" type="password">
                                                            </div><a href="index.html"
                                                                class="btn btn-primary btn-block">Sign In</a>
                                                        </form>
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
</x-guest-layout>
