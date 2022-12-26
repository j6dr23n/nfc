<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Create User</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create-User</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    @foreach ($errors->all() as $message)
                        <p style="color:red;">{{ $message }}</p>
                    @endforeach
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">

                            <div class="card-body">
                                <div class="mb-4 main-content-label">Account Information</div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Username</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Email Address</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Enter your confirm password">
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary float-end">Create Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->


        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    @section('scripts')
        @include('partials/_toastr')
    @endsection
</x-admin.layout>
