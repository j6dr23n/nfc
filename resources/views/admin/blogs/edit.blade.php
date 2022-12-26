<x-admin.layout>
    @section('external-css')
        <link href="{{ asset('admin/assets/plugins/summernote-editor/summernote1.css') }}" rel="stylesheet">
    @endsection
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Blog</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit-Blog</li>
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
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Blog Title"
                                        value="{{ $blog->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ str_contains($blog->image, 'https://via.placeholder.com/') ? $blog->image : env('APP_URL') . '/storage/' . $blog->image }}"
                                        alt="" class="img-fluid mt-4" width="100px" height="100px">
                                </div>
                                <label class="form-label text-dark">Content</label>
                                <textarea id="summernote" name="content">
                                    {!! $blog->content !!}
                                </textarea>
                                <div class="form-group mt-3">
                                    <label class="ckbox">
                                        <input type="checkbox" name="published" value="1"
                                            {{ $blog->published === 1 ? 'checked' : '' }}><span>Published</span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary float-end">Publish
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->


        </div>
        <!-- Container closed -->
    </div>
    @include('partials/_toastr')
    @section('scripts')
        <!-- Include the Summernote library -->
        <script src="{{ asset('admin/assets/plugins/summernote-editor/summernote1.js') }}"></script>
        <script src="{{ asset('admin/assets/js/summernote.js') }}"></script>
    @endsection
</x-admin.layout>
