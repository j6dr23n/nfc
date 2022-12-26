<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Bulk Create User</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bulk-Create-User</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    <form action="{{ route('users.bulk_create_store') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Number of user</label>
                                    <input type="number" class="form-control" name="total"
                                        placeholder="Enter your amount to create fake user data">
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
</x-admin.layout>
