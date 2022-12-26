<x-app-layout>
    <section
        class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1 no-transform revealator-partially-above revealator-within">
        <h1>my <span>blog</span></h1>
        <span class="title-bg">posts</span>
    </section>
    <section
        class="main-content revealator-slideup revealator-once revealator-delay1 no-transform revealator-partially-below">
        <div class="container">
            <div class="row">
                <!-- Article Starts -->
                <article class="col-12">
                    <!-- Meta Starts -->
                    <div class="meta open-sans-font">
                        <span><i class="fa fa-user"></i> {{ $blog->author->username }}</span>
                        <span class="date"><i class="fa fa-calendar"></i>
                            {{ $blog->created_at->format('j F, Y') }}</span>
                    </div>
                    <!-- Meta Ends -->
                    <!-- Article Content Starts -->
                    <h1 class="text-uppercase text-capitalize">{{ $blog->title }}</h1>
                    <img src="{{ str_contains($blog->image, 'https://via.placeholder.com/') ? $blog->image : env('APP_URL') . '/storage/' . $blog->image }}"
                        class="img-fluid" alt="Blog image">
                    <div class="blog-excerpt open-sans-font pb-5">
                        {!! $blog->content !!}
                    </div>
                    <!-- Article Content Ends -->
                </article>
                <!-- Article Ends -->
            </div>
        </div>
    </section>
</x-app-layout>
