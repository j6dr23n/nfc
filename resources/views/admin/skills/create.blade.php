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
                    @foreach ($errors->all() as $message)
                        <p style="color:red;">{{ $message }}</p>
                    @endforeach
                    <form action="{{ route('skills.store') }}" class="form-horizontal" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-body">
                                <div class="main-form-group">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Skill Title</label>
                                        <input type="text" class="form-control" name="skills[0][title]"
                                            placeholder="Enter your title">
                                    </div>
                                    <div class="form-group">
                                        <label for="rangeSkill" class="form-label text-dark">Select your
                                            skill
                                            percent</label>
                                        <input class="rangeslider1 irs-hidden-input" id="rangeSkill"
                                            name="skills[0][percentage]" type="hidden" tabindex="-1" readonly>
                                    </div>
                                    <button type="button" class="btn btn-info btn-sm btn-block add_skill">Add
                                        More</button>
                                    <section id="dynamicAddRemoveSkills">
                                    </section>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block mt-4 float-end">Submit</button>
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
    @include('partials/_dynamic-input')
    @include('partials/_toastr')
</x-admin.layout>
