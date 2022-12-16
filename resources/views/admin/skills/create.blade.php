<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Create Skill</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create-Skill</li>
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
                                <label class="form-label text-dark">Skill Title</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Enter your title">
                            </div>
                            <div class="form-group">
                                <label for="rangeSkill" class="form-label text-dark">Select your skill percent</label>
                                <input class="rangeslider1 irs-hidden-input" id="rangeSkill" name="range"
                                    type="hidden" tabindex="-1" readonly>
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
