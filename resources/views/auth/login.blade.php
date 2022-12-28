<x-guest-layout>
    <div class="bg-primary">


        <!-- Loader -->
        <div id="global-loader" style="background-color: black !important">
            <img src="{{ asset('admin/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
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
                                        <div class="">
                                            <div class="main-signup-header">
                                                <div class="text-center">
                                                    <h2>MOE CARD</h2>
                                                    <h6 class="font-weight-semibold mb-4">Please sign in to continue.
                                                    </h6>
                                                </div>
                                                <div class="panel panel-primary">
                                                    <div class=" tab-menu-heading mb-2 border-bottom-0">
                                                        <div class="tabs-menu1">
                                                            <ul class="nav panel-tabs">
                                                                <li class="me-2"><a href="#tab5" class="active"
                                                                        data-bs-toggle="tab">Email</a></li>
                                                                <li><a href="#tab6" data-bs-toggle="tab"
                                                                        class="">Username</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body border-0 p-3">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                @foreach ($errors->all() as $message)
                                                                    <p style="color:red;" class="text-center">
                                                                        {{ $message }}</p>
                                                                @endforeach
                                                                <form action="{{ route('login') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Email</label> <input class="form-control"
                                                                            placeholder="Enter your email"
                                                                            name="email" type="text">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Password</label> <input
                                                                            class="form-control"
                                                                            placeholder="Enter your password"
                                                                            name="password" type="password">
                                                                    </div><a href="{{ route('login') }}"
                                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                                        class="btn btn-primary btn-block">Sign In</a>
                                                                </form>
                                                            </div>
                                                            <div class="tab-pane" id="tab6">
                                                                @foreach ($errors->all() as $message)
                                                                    <p style="color:red;" class="text-center">
                                                                        {{ $message }}</p>
                                                                @endforeach
                                                                <form action="{{ route('login') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Username</label> <input
                                                                            class="form-control"
                                                                            placeholder="Enter your username"
                                                                            name="username" type="text">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Password</label> <input
                                                                            class="form-control"
                                                                            placeholder="Enter your password"
                                                                            name="password" type="password">
                                                                    </div><a href="{{ route('login') }}"
                                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                                        class="btn btn-primary btn-block">Sign In</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-signin-footer text-center mt-3">
                                                    <p><a href="forgot.html" class="mb-3">Forgot password?</a></p>
                                                    <p>Contact at &nbsp;<a href="tel:+959268201232">+959684829949</a>
                                                    </p>
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
