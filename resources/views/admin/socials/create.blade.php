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
                                <label class="form-label text-dark">Upload Logo</label>
                                <input type="file" class="form-control" name="image"
                                    placeholder="Select your image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Logo url</label>
                                <input type="url" class="form-control" name="url"
                                    placeholder="Enter your logo url">
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
