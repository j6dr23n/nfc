<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
                            <div class="card sales-card">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="ps-4 pt-4 pe-3 pb-4">
                                            <div class="">
                                                <h6 class="mb-2 tx-12 ">Total Users</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <h4 class="tx-20 font-weight-semibold mb-2">{{ count($users) }}</h4>
                                                </div>
                                                <p class="mb-0 tx-12 text-muted">Lifetime
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="circle-icon bg-primary-transparent text-center align-self-center overflow-hidden">
                                            <i class="fa fa-users tx-16 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
                            <div class="card sales-card">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="ps-4 pt-4 pe-3 pb-4">
                                            <div class="">
                                                <h6 class="mb-2 tx-12">Total Skills</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <h4 class="tx-20 font-weight-semibold mb-2">{{ count($skills) }}
                                                    </h4>
                                                </div>
                                                <p class="mb-0 tx-12 text-muted">Lifetime
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="circle-icon bg-info-transparent text-center align-self-center overflow-hidden">
                                            <i class="fa fa-bolt tx-16 text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
                            <div class="card sales-card">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="ps-4 pt-4 pe-3 pb-4">
                                            <div class="">
                                                <h6 class="mb-2 tx-12">Total Social</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <h4 class="tx-20 font-weight-semibold mb-2">{{ count($socials) }}
                                                    </h4>
                                                </div>
                                                <p class="mb-0 tx-12 text-muted">Lifetime
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="circle-icon bg-secondary-transparent text-center align-self-center overflow-hidden">
                                            <i class="fa fa-hashtag tx-16 text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
                            <div class="card sales-card">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="ps-4 pt-4 pe-3 pb-4">
                                            <div class="">
                                                <h6 class="mb-2 tx-12">Total Blogs</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <h4 class="tx-22 font-weight-semibold mb-2">{{ count($blogs) }}</h4>
                                                </div>
                                                <p class="mb-0 tx-12 text-muted">Lifetime
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="circle-icon bg-warning-transparent text-center align-self-center overflow-hidden">
                                            <i class="fa fa-blog tx-16 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <!-- row closed -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body pt-0 example1-table">
                            <div class="table-responsive">
                                <table class="table  table-bordered text-nowrap mb-0" id="example1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Username</th>
                                            <th>Image</th>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>QR Code</th>
                                            {{-- <th>Show</th> --}}
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td class="text-center">#{{ $loop->iteration }}</td>
                                                <td>{{ $item->username }} <input type="hidden"
                                                        id="copy_{{ $item->id }}"
                                                        value="{{ env('APP_URL') . '/' . $item->username }}">
                                                    <button value="copy" class="btn btn-sm btn-info"
                                                        onclick="copyToClipboard('copy_{{ $item->id }}')">Copy
                                                    </button>
                                                </td>
                                                <td>
                                                    @if (str_contains($item->info->image ?? '', 'https://via.placeholder.com/'))
                                                        <img src="{{ $item->info->image }}" alt="{{ $item->username }}"
                                                            width="100px" height="100px">
                                                    @elseif($item->info === null)
                                                        <img src="{{ asset('img/demo.png') }}" alt="">
                                                    @else
                                                        <img src="{{ env('APP_URL') . '/storage/' . $item->info->image }}"
                                                            alt="{{ $item->username }}" width="100px" height="100px">
                                                    @endif
                                                </td>
                                                <td>{{ $item->info->full_name ?? 'demo' }}</td>
                                                <td>{{ $item->info->ph_number ?? 'demo' }}</td>
                                                <td>{{ Str::limit($item->info->address ?? 'demo', 40) }}</td>
                                                <td><img src="data:image/png;base64, {!! base64_encode(
                                                    QrCode::format('png')->size(100)->generate(env('APP_URL') . '/' . $item->username ?? 'demo'),
                                                ) !!} "></td>
                                                {{-- <td>
                                                    <a href="{{ route('users.show', $item->id) }}"
                                                        class="btn btn-success btn-sm br-5 me-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" height="20"
                                                            viewBox="0 0 24 24" width="16" fill="#FFFFFF">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                        </svg>
                                                    </a>
                                                </td> --}}
                                                <td>
                                                    <a class="btn btn-warning btn-sm br-5 me-2"
                                                        href="{{ route('users.edit', $item->id) }}">
                                                        <svg class="table-edit" xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24" width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                            <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="btn btn-danger btn-sm br-5 me-2 dltBtn"
                                                            data-id="{{ $item->id }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" height="20"
                                                                viewBox="0 0 24 24" width="16" fill="#FFFFFF">
                                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                                <path
                                                                    d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z" />
                                                            </svg>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Blogs</h4>
                        </div>
                        <div class="card-body pt-0 example1-table">
                            <div class="table-responsive">
                                <table class="table  table-bordered text-nowrap mb-0" id="example2">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Username</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Created At</th>
                                            <th>QR Code</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $item)
                                            <tr>
                                                <td class="text-center">#{{ $loop->iteration }}</td>
                                                <td>{{ $item->author->username }}
                                                </td>
                                                <td>
                                                    <img src="{{ str_contains($item->image, 'https://via.placeholder.com/') ? $item->image : env('APP_URL') . '/storage/' . $item->image }}"
                                                        alt="{{ $item->title }}" width="100px" height="100px">
                                                </td>
                                                <td>{{ Str::limit($item->title, 20) }}</td>
                                                <td>{{ Str::limit($item->content, 20) }}</td>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                                <td><img src="data:image/png;base64, {!! base64_encode(
                                                    QrCode::format('png')->size(100)->generate(env('APP_URL') . '/blogs/show/' . $item->slug ?? 'demo'),
                                                ) !!} "></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm br-5 me-2"
                                                        href="{{ route('blogs.show', $item->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 0 24 24" width="16" fill="#FFFFFF">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm br-5 me-2"
                                                        href="{{ route('blogs.edit', $item->id) }}">
                                                        <svg class="table-edit" xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24" width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                            <path
                                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('blogs.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="btn btn-danger btn-sm br-5 me-2 dltBtn"
                                                            data-id="{{ $item->id }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" height="20"
                                                                viewBox="0 0 24 24" width="16" fill="#FFFFFF">
                                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                                <path
                                                                    d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z" />
                                                            </svg>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    @section('scripts')
        @include('partials/_delete-script')
        <script>
            function copyToClipboard(id) {
                // Get the text field
                var copyText = document.getElementById(id);

                // Select the text field
                copyText.select();

                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.value);
            }
        </script>
    @endsection
</x-admin.layout>
