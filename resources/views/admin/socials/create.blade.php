<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Create Social</span>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    @foreach ($errors->all() as $message)
                        <p style="color:red;">{{ $message }}</p>
                    @endforeach

                    @if (auth()->user()->role === 'user')
                        <form action="{{ route('socials.store') }}" class="form-horizontal" method="POST">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <div class="main-form-group">
                                        <label class="form-label">Select Social Media</label>
                                        <select name="socials[0][title]" aria-describedby="basic-addon1"
                                            class="form-control form-select select2 select2-hidden-accessible"
                                            data-bs-placeholder="Select Country" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            @foreach ($icons as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label">Account URL</label>
                                        <input type="url" class="form-control mb-4" placeholder="URL here"
                                            name="socials[0][url]">
                                        <button type="button" class="btn btn-info btn-sm btn-block add_social">Add
                                            More</button>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit"
                                        class="btn btn-success btn-md btn-block mt-4 float-end">Submit</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="text-wrap">
                            <div class="example tabs-style-2">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li><a href="#tab4" class="nav-link active" data-bs-toggle="tab">New
                                                    Socials</a></li>
                                            <li><a href="#tab5" class="nav-link" data-bs-toggle="tab">Admin
                                                    Socials</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab4">
                                            <form action="{{ route('socials.store') }}" class="form-horizontal"
                                                method="POST">
                                                @csrf
                                                <div class="main-form-group">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control mb-4"
                                                        placeholder="URL here" name="socials[0][title]">
                                                    <label class="form-label">Logo URL</label>
                                                    <input type="url" class="form-control mb-4"
                                                        placeholder="Logo URL here" name="socials[0][logo]">
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success btn-md btn-block mt-4 float-end">Submit</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="tab5">
                                            <form action="{{ route('socials.store') }}" class="form-horizontal"
                                                method="POST">
                                                @csrf
                                                <div class="main-form-group">
                                                    <label class="form-label">Select Social Media</label>
                                                    <select name="socials[0][title]" aria-describedby="basic-addon1"
                                                        class="form-control form-select select2 select2-hidden-accessible"
                                                        data-bs-placeholder="Select Socials" data-select2-id="1"
                                                        tabindex="-1" aria-hidden="true">
                                                        @foreach ($icons as $item)
                                                            <option value="{{ $item->title }}">
                                                                {{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="form-label">Account URL</label>
                                                    <input type="url" class="form-control mb-4"
                                                        placeholder="URL here" name="socials[0][url]">
                                                    <button type="button"
                                                        class="btn btn-info btn-sm btn-block add_social">Add
                                                        More</button>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success btn-md btn-block mt-4 float-end">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <section id="dynamicAddRemoveSocials">
                    </section>
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
