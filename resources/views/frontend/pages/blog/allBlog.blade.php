<x-frontend-app-layout :title="'Blogs All'">
    <div class="ps-blog ps-blog--masonry">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Blog Masonry</li>
            </ul>
            <h1 class="ps-blog__title">Blog Masonry</h1>
            <div class="ps-blog__content">
                <div class="row">
                    @foreach ($blog_posts as $blog_post)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="{{ route('blog.details',$blog_post->slug) }}"><img src="{{ asset($blog_post->image) }}" alt="alt" /></a>
                                    <div class="ps-blog__badge">
                                        <span class="ps-badge__item">{{ $blog_post->badge }}</span>
                                        {{-- @foreach ($blog_post->blogTag as $tag)
                                            <span class="ps-badge__item">{{ $tag->name }}</span>
                                        @endforeach --}}

                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">{{ $blog_post->created_at->format("M d Y") }}</span>
                                        <a class="ps-blog__author" href="#">{{ $blog_post->author }}</a></div>
                                        <a class="ps-blog__title" href="{{ route('blog.details',$blog_post->slug) }}">{{ $blog_post->title }}</a>
                                    <p class="ps-blog__desc">{{ $blog_post->header }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="ps-blog__button"> <a class="ps-btn ps-btn--primary" href="#">Load more</a></div> --}}
            </div>
        </div>
    </div>
</x-frontend-app-layout>
