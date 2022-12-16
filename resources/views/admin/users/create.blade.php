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
                    <div class="card ">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label text-dark">Title</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Enter your title">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Username</label>
                                <input type="text" class="form-control" name="username"
                                    placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Image</label>
                                <input type="file" class="form-control" name="image"
                                    placeholder="Select your image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Description</label>
                                <textarea type="text" rows="4" cols="4" class="form-control" name="description"
                                    placeholder="Enter your description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Full Name</label>
                                <input type="text" class="form-control" name="fullname"
                                    placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Email Address</label>
                                <input type="text" class="form-control" name="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Age</label>
                                <input type="number" class="form-control" name="age" placeholder="Enter your age">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Phone Number</label>
                                <input type="text" class="form-control" name="phone"
                                    placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Address</label>
                                <textarea type="text" rows="4" cols="4" class="form-control" name="address"
                                    placeholder="Enter your address"></textarea>
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
                            <a href="javascript:void(0)" class="btn btn-primary float-end">Create Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->


        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
</x-admin.layout>
