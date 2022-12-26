<x-admin.layout>
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">BLOG DETAILS</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog-details</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <div class="row">
                <div class="col-xl-12 col-xxl-9 col-lg-12 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="item7-card-img px-4 pt-4">
                            <a href="javascript:void(0);"></a>
                            <img src="{{ str_contains($blog->image, 'https://via.placeholder.com/') ? $blog->image : env('APP_URL') . '/storage/' . $blog->image }}"
                                alt="img" class="cover-image br-7 w-100">
                        </div>
                        <div class="card-body">
                            <a href="javascript:void(0);" class="mt-4">
                                <h5 class="font-weight-semibold">{{ $blog->title }}</h5>
                            </a>
                            {!! $blog->content !!}
                        </div>
                        <div class="card-footer pb-2 pt-2">
                            <div class="item7-card-desc d-md-flex">
                                <div class="d-flex align-items-center mt-0">
                                    <img src="{{ str_contains($blog->author->info->image, 'https://via.placeholder.com/') ? $blog->author->info->image : env('APP_URL') . '/storage/' . $blog->author->info->image }}"
                                        class="avatar brround avatar-md me-3" alt="avatar-img">
                                    <div>
                                        <a href="profile.html"
                                            class="text-default font-weight-bold">{{ $blog->author->username }}</a>
                                        <small
                                            class="d-block text-muted">{{ $blog->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <div class="ms-auto mb-2 d-flex mt-3">
                                    <a href="javascript:void(0);" class="me-3 mb-2 me-2 d-flex"><span
                                            class="fe fe-calendar text-muted tx-17"></span>
                                        <div class="mt-0  text-dark">{{ $blog->created_at->format('j F, Y') }}</div>
                                    </a>
                                    @can('update', $blog)
                                        <a class="me-3 d-flex" style="color:orange"
                                            href="{{ route('blogs.edit', $blog->id) }}"><span
                                                class="fe fe-edit text-muted me-2 tx-17"></span>
                                            <div class="mt-0">Edit</div>
                                        </a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="me-0 d-flex dltBtn" style="color:red" data-id="{{ $blog->id }}">
                                                <span class="fe fe-trash text-muted me-2 tx-17"></span>
                                                <div class="mt-0">Delete</div>
                                            </a>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-3 col-lg-12 col-md-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">About Author</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <a href="blog-details.html"><img class="card-img-top w-100 w-100"
                                        src="{{ str_contains($blog->author->info->image, 'https://via.placeholder.com/') ? $blog->author->info->image : env('APP_URL') . '/storage/' . $blog->author->info->image }}"
                                        alt=""></a>
                                <div class="br-5 p-2 text-justify">
                                    <p>
                                        {{ $blog->author->info->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-1">Popular posts</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group mb-0">
                                @foreach ($blogs as $item)
                                    <li class="list-group-item d-flex border-0 pt-3 px-0">
                                        <img src="{{ str_contains($item->image, 'https://via.placeholder.com/') ? $item->image : env('APP_URL') . '/storage/' . $item->image }}"
                                            class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                        <div class="">
                                            <span class="d-block">{{ $item->author->username }}</span>
                                            <a href="{{ route('blogs.show', $item->id) }}"
                                                class="text-default tx-12 font-weight-semibold white-space-nowrap">{{ Str::limit($item->content, 100) }}</a>
                                            <small
                                                class="d-block text-muted">{{ $item->created_at->format('j F, Y') }}</small>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->


        </div>
        <!-- Container closed -->
    </div>
    @include('../partials/_delete-script')
</x-admin.layout>
