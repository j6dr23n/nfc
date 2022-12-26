<x-app-layout>
    <section
        class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1 no-transform revealator-partially-above revealator-within">
        <h1>moe's <span>blog</span></h1>
        <span class="title-bg">posts</span>
    </section>

    <section
        class="main-content revealator-slideup revealator-once revealator-delay1 no-transform revealator-partially-below"
        id="blogs">
        <div class="container">
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
                                    <h3><a href="{{ route('home.blog.show', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>{{ Str::limit(strip_tags($item->content), 150) }}
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
        </div>

    </section>

</x-app-layout>
