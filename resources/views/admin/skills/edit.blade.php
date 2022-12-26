<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Skill</span>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    @foreach ($errors->all() as $message)
                        <p style="color:red;">{{ $message }}</p>
                    @endforeach
                    <form action="{{ route('skills.update', $skill->id) }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card ">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Skill Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter your title" value="{{ $skill->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="rangeSkill" class="form-label text-dark">Select your skill
                                        percent</label>
                                    <input class="rangeslider1 irs-hidden-input" id="rangeSkill" name="percentage"
                                        type="hidden" tabindex="-1" readonly value="{{ $skill->percentage }}">
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block mt-4 float-end">Update</button>
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
    @include('partials/_toastr')
</x-admin.layout>
