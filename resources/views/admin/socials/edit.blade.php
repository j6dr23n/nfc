<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Social</span>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    @foreach ($errors->all() as $message)
                        <p style="color:red;">{{ $message }}</p>
                    @endforeach
                    <form action="{{ route('socials.update', $social->id) }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card ">
                            <div class="card-body">

                                @if ($social->url !== null)
                                    <div class="main-form-group">
                                        <label class="form-label">Select Social Media</label>
                                        <select name="title" aria-describedby="basic-addon1"
                                            class="form-control form-select select2 select2-hidden-accessible"
                                            data-bs-placeholder="Select Country" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            @foreach ($icons as $item)
                                                <option value="{{ $item->title }}"
                                                    {{ $item->title === $social->title ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label">Account URL</label>
                                        <input type="url" class="form-control mb-4" placeholder="URL here"
                                            name="url" value="{{ $social->url }}">
                                    </div>
                                @else
                                    <div class="main-form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control mb-4" placeholder="URL here"
                                            name="title" value="{{ $social->title }}">
                                        <label class="form-label">Logo URL</label>
                                        <input type="url" class="form-control mb-4" placeholder="Logo URL here"
                                            name="logo" value="{{ $social->logo }}">
                                    </div>
                                @endif
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
