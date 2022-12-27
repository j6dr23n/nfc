<x-admin.layout>
    <!-- main-content -->
    <div class="main-content app-content">

        <div class="text-center mt-4">
            <h3>EDIT PROFILE</h3>
        </div>

        <!-- container -->
        <div class="main-container container-fluid mt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body d-md-flex">
                            <div class="">
                                <span class="profile-image pos-relative">
                                    @if (str_contains($user->info->image ?? '', 'https://via.placeholder.com/'))
                                        <img src="{{ $user->info->image }}" alt="{{ $user->username }}" class="br-5">
                                    @elseif($user->info === null)
                                        <img src="{{ asset('img/demo.png') }}" alt="" class="br-5">
                                    @else
                                        <img src="{{ env('APP_URL') . '/storage/' . $user->info->image }}"
                                            alt="{{ $user->username }}" class="br-5">
                                    @endif
                                    <span class="bg-success text-white wd-1 ht-1 rounded-pill profile-online"></span>
                                </span>
                            </div>
                            <div class="my-md-auto mt-4 prof-details">
                                <h4 class="font-weight-semibold ms-md-4 ms-0 mb-1 pb-0">{{ $user->username }}</h4>
                                <p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
                                    <span class="me-3"><i
                                            class="far fa-address-card me-2"></i>{{ $user->info->title ?? 'Demo' }}</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-phone me-2"></i></span><span
                                        class="font-weight-semibold me-2">Phone:</span><span>{{ $ph_numbers[0] ?? 'Demo' }}</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-envelope me-2"></i></span><span
                                        class="font-weight-semibold me-2">Email:</span><span>{{ $user->email }}</span>
                                </p>
                                <p class="text-muted ms-md-4 ms-0 mb-2"><span><i
                                            class="fa fa-globe me-2"></i></span><span
                                        class="font-weight-semibold me-2">Website</span><span>{{ $user->info->website ?? 'demo.com' }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer py-0">
                            <div class="profile-tab tab-menu-heading border-bottom-0">
                                <nav class="nav main-nav-line p-0 tabs-menu profile-nav-line border-0 br-5 mb-0	">
                                    <a class="nav-link  mb-2 mt-2 active" data-bs-toggle="tab" href="#about">About</a>
                                    <a class="nav-link mb-2 mt-2" data-bs-toggle="tab" href="#edit">Edit Profile</a>
                                    <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#socials">Social
                                        Media</a>
                                    <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#skills">Skills</a>
                                    <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#blogs">Blogs</a>
                                    <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#settings">Account
                                        Settings</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12 col-md-12">
                    <div class="custom-card main-content-body-profile">
                        <div class="tab-content">
                            @foreach ($errors->all() as $message)
                                <p style="color:red;">{{ $message }}</p>
                            @endforeach
                            <div class="main-content-body tab-pane active" id="about">
                                <div class="card">
                                    <div class="card-body p-0 border-0 p-0 rounded-10">
                                        <div class="p-4">
                                            <h4 class="tx-15 text-uppercase mb-3">BIO</h4>
                                            <p class="m-b-5">{{ $user->info->description ?? 'Demo' }}</p>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="p-4">
                                            <h4 class="tx-15 text-uppercase mb-3">Address</h4>
                                            <p class="m-b-5">{{ $user->info->address ?? 'Demo' }}</p>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="p-4">
                                            <label class="main-content-label tx-13 mg-b-20">Statistics</label>
                                            <div class="profile-cover__info ms-4 ms-auto p-0">
                                                <ul class="nav p-0 border-bottom-0 mb-0">
                                                    <li class="border p-2 br-5 bg-light wd-100 ht-70"><span
                                                            class="border-0 mb-0 pb-0">113</span>Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="p-4">
                                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                                            <div class="d-lg-flex">
                                                <div class="mg-md-r-20 mg-b-10">
                                                    <div class="main-profile-social-list">
                                                        <div class="media">
                                                            <div class="media-icon bg-primary-transparent text-primary">
                                                                <i class="icon ion-logo-github"></i>
                                                            </div>
                                                            <div class="media-body"> <span>Github</span> <a
                                                                    href="#">github.com/spruko</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mg-md-r-20 mg-b-10">
                                                    <div class="main-profile-social-list">
                                                        <div class="media">
                                                            <div class="media-icon bg-success-transparent text-success">
                                                                <i class="icon ion-logo-twitter"></i>
                                                            </div>
                                                            <div class="media-body"> <span>Twitter</span> <a
                                                                    href="#">twitter.com/spruko.me</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mg-md-r-20 mg-b-10">
                                                    <div class="main-profile-social-list">
                                                        <div class="media">
                                                            <div class="media-icon bg-info-transparent text-info">
                                                                <i class="icon ion-logo-linkedin"></i>
                                                            </div>
                                                            <div class="media-body"> <span>Linkedin</span> <a
                                                                    href="#">linkedin.com/in/spruko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mg-md-r-20 mg-b-10">
                                                    <div class="main-profile-social-list">
                                                        <div class="media">
                                                            <div class="media-icon bg-danger-transparent text-danger">
                                                                <i class="icon ion-md-link"></i>
                                                            </div>
                                                            <div class="media-body"> <span>My Portfolio</span> <a
                                                                    href="#">spruko.com/</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-content-body tab-pane border-top-0" id="edit">
                                <div class="card">
                                    <div class="card-body border-0">
                                        <div class="mb-4 main-content-label">Personal Information</div>
                                        @if ($user->info !== null)
                                            <form class="form-horizontal"
                                                action="{{ route('users.infos.update', $user->info->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Title</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="Title" name="title"
                                                                value="{{ $user->info->title }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Full Name</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="Full Name" name="full_name"
                                                                value="{{ $user->info->full_name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Image</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="file" class="form-control"
                                                                placeholder="Image" name="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Description</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea name="description" class="form-control" cols="30" rows="5">{{ $user->info->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="address" class="form-control"
                                                                value="{{ $user->info->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Age</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="date" name="age" class="form-control"
                                                                value="{{ $user->info->age }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Phone Number</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            @forelse ($ph_numbers as $key => $item)
                                                                <div class="input-group mb-3">
                                                                    <input aria-describedby="basic-addon2"
                                                                        aria-label="Phone Number" class="form-control"
                                                                        placeholder="(+95) 000-000-0000"
                                                                        name="ph_numbers[{{ $key }}]"
                                                                        type="tel" id="phoneMask"
                                                                        value="{{ $item }}">
                                                                    <span
                                                                        class="input-group-text {{ $key >= 1 ? 'remove_ph_number' : 'add_ph_number' }}"
                                                                        id="basic-addon2">
                                                                        @if ($key >= 1)
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="24px" viewBox="0 0 24 24"
                                                                                width="24px" fill="#000000">
                                                                                <path d="M0 0h24v24H0V0z"
                                                                                    fill="none" />
                                                                                <path
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                                                            </svg>
                                                                        @else
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="24px" viewBox="0 0 24 24"
                                                                                width="24px" fill="#000000">
                                                                                <path d="M0 0h24v24H0V0z"
                                                                                    fill="none" />
                                                                                <path
                                                                                    d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                                                            </svg>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            @empty
                                                                <div class="input-group mb-3">
                                                                    <input aria-describedby="basic-addon2"
                                                                        aria-label="Phone Number" class="form-control"
                                                                        placeholder="(+95) 000-000-0000"
                                                                        name="ph_numbers[0]" type="tel"
                                                                        id="phoneMask"
                                                                        value="{{ $user->info->ph_number ?? '' }}">
                                                                    <span class="input-group-text add_ph_number"
                                                                        id="basic-addon2"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            height="24px" viewBox="0 0 24 24"
                                                                            width="24px" fill="#000000">
                                                                            <path d="M0 0h24v24H0V0z"
                                                                                fill="none" />
                                                                            <path
                                                                                d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                                                        </svg></span>
                                                                </div>
                                                            @endforelse
                                                            <section id="dynamicAddRemove">
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-end">
                                                    <div class="row row-sm">
                                                        <div class="col-md-12"><button type="submit"
                                                                class="btn btn-success">Update
                                                                Now</button> </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @else
                                            <form class="form-horizontal" action="{{ route('users.infos.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Title</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="Title" name="title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Full Name</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="Full Name" name="full_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Image</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="file" class="form-control"
                                                                placeholder="Image" name="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Description</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="address" class="form-control"
                                                                placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Date of birth</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="date" name="age"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Phone Number</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="input-group mb-3">
                                                                <input aria-describedby="basic-addon2"
                                                                    aria-label="Phone Number" class="form-control"
                                                                    placeholder="(+95) 000-000-0000"
                                                                    name="ph_numbers[0]" type="tel"
                                                                    id="phoneMask">
                                                                <span class="input-group-text add_ph_number"
                                                                    id="basic-addon2"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        height="24px" viewBox="0 0 24 24"
                                                                        width="24px" fill="#000000">
                                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                                        <path
                                                                            d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                                                    </svg></span>
                                                            </div>
                                                            <section id="dynamicAddRemove">
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-end">
                                                    <div class="row row-sm">
                                                        <div class="col-md-12"><button type="submit"
                                                                class="btn btn-success">Update
                                                                Now</button> </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="main-content-body tab-pane border-top-0" id="socials">
                                <div class="card">
                                    <div class="card-body border-0">
                                        <div class="breadcrumb-header justify-content-end">
                                            <div class="mt-2">
                                                <a class="btn ripple btn-primary"
                                                    href="{{ route('socials.create') }}"><i
                                                        class="fe fe-plus me-2"></i>Add New Social</a>
                                            </div>
                                        </div>
                                        @if (count($socials) > 0)
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover mb-0 text-md-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Logo</th>
                                                            <th>Title</th>
                                                            <th>URL</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($socials as $item)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td class="text-center sorting_1">
                                                                    <div class="avatar-md  rounded-circle">
                                                                        <img alt="avatar" class="rounded-circle"
                                                                            src="{{ $item->logo }}">
                                                                    </div>
                                                                </td>
                                                                <td>{{ $item->title }}</td>
                                                                <td><a
                                                                        href="{{ $item->url }}">{{ $item->url }}</a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('socials.edit', $item->id) }}"
                                                                        class="btn btn-icon btn-primary-light me-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-bs-original-title="Edit">
                                                                        <i class="las la-pen"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('socials.destroy', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-icon btn-danger-light me-2 dltBtn"
                                                                            data-bs-toggle="tooltip" title=""
                                                                            data-bs-original-title="Delete"
                                                                            data-id="{{ $item->id }}">
                                                                            <i class="las la-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <h3 class="text-center ">Create your first social media icon <a
                                                    href="{{ route('socials.create') }}" style="color: red">here</a>
                                            </h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="main-content-body tab-pane border-top-0" id="skills">
                                <div class="card">
                                    <div class="card-body border-0">
                                        <div class="breadcrumb-header justify-content-end">
                                            <div class="mt-2">
                                                <a class="btn ripple btn-primary"
                                                    href="{{ route('skills.create') }}"><i
                                                        class="fe fe-plus me-2"></i>Add New Skill</a>
                                            </div>
                                        </div>
                                        @if (count($skills) > 0)
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover mb-0 text-md-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>Percentage</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($skills as $item)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td>{{ $item->title }}</td>
                                                                <td>{{ $item->percentage }}%</a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('skills.edit', $item->id) }}"
                                                                        class="btn btn-icon btn-primary-light me-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-bs-original-title="Edit">
                                                                        <i class="las la-pen"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('skills.destroy', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-icon btn-danger-light me-2 dltBtn"
                                                                            data-bs-toggle="tooltip" title=""
                                                                            data-bs-original-title="Delete"
                                                                            data-id="{{ $item->id }}">
                                                                            <i class="las la-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <h3 class="text-center ">Create your first skill icon <a
                                                    href="{{ route('skills.create') }}" style="color: red">here</a>
                                            </h3>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="main-content-body tab-pane border-top-0" id="blogs">
                                <div class="breadcrumb-header justify-content-between mt-0">
                                    <div class="left-content mt-2">
                                        <button class="btn ripple btn-warning">Total Blog :
                                            {{ count($blogs) }}</button>
                                    </div>
                                    <div class="justify-content-center mt-2">
                                        <a class="btn ripple btn-primary" href="{{ route('blogs.create') }}"><i
                                                class="fe fe-plus me-2"></i>Add New Blog</a>
                                    </div>
                                </div>
                                <div class="row">
                                    @forelse ($blogs as $item)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <a href="{{ route('blogs.show', $item->id) }}"
                                                    class="card custom-card card-img-top-1 background-image-blog mb-0"
                                                    style="background-image: url({{ str_contains($item->image, 'https://via.placeholder.com/') ? $item->image : env('APP_URL') . '/storage/' . $item->image }}) !important">
                                                </a>
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="mt-4">
                                                        <h5 class="font-weight-semibold">{{ $item->title }}</h5>
                                                    </a>
                                                    <p class="mb-0">
                                                        {{ Str::limit(strip_tags($item->content), 300) }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="item7-card-desc d-sm-flex mt-0">
                                                        <a href="javascript:void(0);" class="d-flex"><span
                                                                class="fe fe-user text-muted me-2 tx-17"></span>
                                                            <div class="mt-0  font-weight-semibold text-muted">
                                                                {{ $user->username }}</div>
                                                        </a>
                                                        <div class="d-flex ms-auto">
                                                            <a href="javascript:void(0);" class="d-flex me-3"><span
                                                                    class="fe fe-calendar text-muted me-2 tx-17"></span>
                                                                <div class="mt-0  font-weight-semibold text-muted">
                                                                    {{ $item->created_at->diffForHumans() }}</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="container">
                                            <h3 class="text-center">Create your first blog <a
                                                    href="{{ route('blogs.create') }}" style="color: red">here</a>
                                            </h3>
                                        </div>
                                    @endforelse
                                </div>
                                {{ $blogs->onEachSide(1)->links('vendor/pagination/default') }}
                            </div>
                            <div class="main-content-body tab-pane  border-0" id="settings">
                                <div class="card">
                                    <div class="card-body border-0" data-select2-id="12">
                                        '
                                        <form action="{{ route('users.update', $user->id) }}" class="form-horizontal"
                                            data-select2-id="11" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-4 main-content-label">Account</div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Username</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Username" name="username"
                                                            value="{{ $user->username }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Email</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control"
                                                            placeholder="Email Address" name="email"
                                                            value="{{ $user->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">Change Password</div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Current Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control"
                                                            placeholder="Current Password" name="current_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label">New Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control"
                                                            placeholder="New Password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Confirmation New Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control"
                                                            placeholder="Confirmation New Password"
                                                            name="password_confirmation">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group float-end">
                                                <div class="row row-sm">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-success">
                                                            Update Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->


        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    @include('partials/_dynamic-input')
    @include('partials/_toastr')
    @include('partials/_delete-script')

    @section('scripts')
        <script src="{{ asset('admin/assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
        <script>
            $("#phoneMask").mask("(+959) 999-999-999");
        </script>
    @endsection
</x-admin.layout>
