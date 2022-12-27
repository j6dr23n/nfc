<x-app-layout>
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row home-details-container align-items-center" id="home">
                @if (str_contains($user->info->image ?? '', 'https://via.placeholder.com/'))
                    <div class="col-lg-4 bg d-none d-lg-block" style="background-image: url({{ $user->info->image }});">
                    </div>
                @elseif($user->info === null)
                    <div class="col-lg-4 bg d-none d-lg-block"
                        style="background-image: url({{ asset('img/demo.png') }});">
                    </div>
                @else
                    <div class="col-lg-4 bg d-none d-lg-block"
                        style="background-image: url({{ env('APP_URL') . '/storage/' . $user->info->image }});">
                    </div>
                @endif
                <div class="col-12 col-lg-8 home-details text-center text-sm-center text-lg-left">
                    <div>
                        @if (str_contains($user->info->image ?? '', 'https://via.placeholder.com/'))
                            <img src="{{ $user->info->image }}" class="img-fluid main-img-mobile d-sm-block d-lg-none"
                                alt="my picture">
                        @elseif($user->info === null)
                            <img src="{{ asset('img/demo.png') }}"
                                class="img-fluid main-img-mobile d-sm-block d-lg-none" alt="demo image">
                        @else
                            <img src="{{ env('APP_URL') . '/storage/' . $user->info->image }}"
                                class="img-fluid main-img-mobile d-sm-block d-lg-none" alt="my picture">
                        @endif
                        <h1 class="text-uppercase poppins-font">{{ $user->info->title ?? 'Demo' }}</h1>
                        <p class="open-sans-font">{{ $user->info->description ?? 'Demo' }}</p>
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="row" id="info">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600 text-center">personal infos</h3>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">full name :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $user->info->full_name ?? 'Demo' }}</span>
                                </li>
                                <li> <span class="title">Age :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $user->info !== null ? date_diff(date_create($user->info->age), date_create('now'))->y : '18' }}
                                        Years</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Email :</span> <a href="mailto:{{ $user->email }}"
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block text-white">{{ $user->email }}</a>
                                </li>
                                <li> <span class="title">phone :</span>
                                    @foreach ($ph_numbers as $item)
                                        <a href="tel:{{ $item }}"
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $item }}
                                            , </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $user->info->address ?? 'demo' }}</span>
                                </li>
                            </ul>
                        </div>
                        @if (count($user->socials) > 0)
                            <!-- Left Side Starts -->
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12" id="socials">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600 text-center">Social Media
                                        </h3>
                                    </div>
                                    @foreach ($user->socials as $item)
                                        <div class="col-4 col-lg-2 col-md-3 col-sm-3 my-4">
                                            <a href="{{ $item->url }}">
                                                <span class="button-icon"
                                                    style="background-image: url({{ $item->logo }})"></span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Left Side Ends -->
                        @endif
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="row" id="skills">
                <!-- Skills Starts -->
                <div class="col-12">
                    <h3
                        class="text-uppercase text-center pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
                        My Skills</h3>
                </div>
                @forelse ($user->skills as $item)
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p{{ $item->percentage }}">
                            <span>{{ $item->percentage }}%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">{{ $item->title }}</h6>
                    </div>
                @empty
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p40">
                            <span>40%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Matketing
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p80">
                            <span>80%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Design
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p60">
                            <span>60%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Video Editing
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p90">
                            <span>90%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">English Speaking
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p20">
                            <span>20%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Programming
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p39">
                            <span>39%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Testing
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p0">
                            <span>0%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Nothing
                        </h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p100">
                            <span>100%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Everything
                        </h6>
                    </div>
                @endforelse
            </div>

            @if (count($blogs) > 0)
                <hr class="separator">
                <!-- Blogs Starts -->
                <div class="col-12">
                    <h3
                        class="text-uppercase text-center pb-4 pb-sm-5 mb-3 mb-sm-0 text-sm-center custom-title ft-wt-600">
                        My Blogs</h3>
                </div>
                <section
                    class="main-content revealator-slideup revealator-once revealator-delay1 no-transform revealator-partially-below"
                    id="blogs">
                    <!-- Articles Starts -->
                    <div class="row">
                        @foreach ($blogs as $item)
                            <!-- Article Starts -->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                                <article class="post-container">
                                    <div class="post-thumb">
                                        <a href="{{ route('home.blog.show', $item->slug) }}"
                                            class="d-block position-relative overflow-hidden">
                                            <img src="{{ str_contains($item->image, 'https://via.placeholder.com/') ? $item->image : env('APP_URL') . '/storage/' . $item->image }}"
                                                class="img-fluid" alt="Blog Post">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-header">
                                            <h3><a
                                                    href="{{ route('home.blog.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h3>
                                        </div>
                                        <div class="entry-content open-sans-font">
                                            <p>{{ Str::limit($item->content, 150) }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Article Ends -->
                        @endforeach
                        {{ $blogs->links('vendor/pagination/frontend') }}
                    </div>
                    <!-- Articles Ends -->

                </section>
            @endif
        </div>
        </div>
    </section>
    <!-- Main Content Ends -->
</x-app-layout>
