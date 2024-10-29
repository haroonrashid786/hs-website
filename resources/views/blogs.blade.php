@extends('layouts.master')
@section('title', 'Blogs - Hashed System | Expert Insights & Best Practices in Tech')
@section('description', "Stay updated on SaaS and software development trends, best practices, and expert insights from Hashed System's blog.")
@section('content')

    <section class="w-full bg-[#062345] relative landing__on__scroll ">
        <div class="max-w-[900px] w-[90%] md:w-full mx-auto pt-[120px] pb-[250px] px-[15px] md:px-[20px] ">
            <h2 class="text-[34px] sm:text-[42px] md:text-[55px] font-[600] text-[#fff] text-center ">Blog</h2>
            <p
                class=" text-[14px] sm:text-[16px] md:text-[18px] text-[#fff] text-center font-[300] mt-[12px] z-50 ">
                Explore the intersection of innovation and insight. Discover how our software and SaaS development expertise shape technology's future, one solution at a time.</p>
        </div><img class=" absolute bottom-0 left-0 h-[440px] z-0 "
            src="/assets/images/blogs-page-images/shadow-banner-iamge1.png" alt=""><img
            class=" absolute bottom-0 right-[30px] z-0 "
            src="/assets/images/blogs-page-images/shadow-banner-iamge2.png" alt="">
    </section>
    <section class=" w-full bg-[#fff] blog__wrapper__container">
        <div class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] relative pb-[32px] pt-[460px] md:pt-[340px] ">
            @if(!empty($latestBlog))
            <div onclick="
                    var link = '{{ !empty($latestBlog) ? route('blog.details', $latestBlog->slug) : '' }}';
                    if(link) {
                        window.location.href = link;
                    }"
                class=" w-[97%] landing__on__scroll mx-auto cursor-pointer border border-[#CECDD1] rounded-[20px] overflow-hidden flex absolute md:flex-row flex-col -top-[130px] right-0 left-0">
                <div class="h-[250px] sm:h-[320px] md:h-[400px] md:flex-1 w-full bg-cover bg-no-repeat bg-center"
                     style="background-image: url('{{ asset('storage/' . $latestBlog->banner_image) }}');">
                </div>
                <div class="py-[22px] px-[22px] md:max-w-[370px] w-full bg-[#fff] h-[390px] overflow-hidden ">
                    <div class=" w-full flex items-center justify-between gap-[22px] "><span
                            class="rounded-[30px] bg-[#DDF0FF] px-[16px] py-[4px] flex items-center justify-center text-[#0D99FF] text-[11px] font-[500] "> {{ ucfirst($latestBlog->type) }}</span>
                        <p class="text-[#0D99FF] text-[11px] font-[500] whitespace-nowrap ">{{ $latestBlog->created_at->format('d F Y') }}</p>
                    </div>
                    <h2 class="mt-[14px] text-[20px] font-[600] text-[#0A0E19] line-clamp-1 ">{{$latestBlog->name}}</h2>
                    <div class="h-[230px] overflow-hidden">
                        <p class="text-[#0A0E19] text-[13px] line-clamp-5 ">
                            <p class="text-[#0A0E19] text-[13px] mt-[10px] line-clamp-5 ">{!! $latestBlog->description !!}</p>
                        </p>
                    </div>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 landing__on__scroll ">
                @foreach($otherBlogs as $blog)
                <a href="{{ route('blog.details', $blog->slug) }}" class="w-full" >
                    <div class="w-full h-[260px] bg-cover bg-no-repeat bg-center rounded-[20px] "
                         style="background-image: url('{{ asset('storage/' . $blog->banner_image) }}');">
                    </div>
                    <div class="flex items-center mt-[12px] justify-between ">
                        <div
                            class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            {{ ucfirst($blog->type) }}</div>
                        <p class="text-[#0D99FF] text-[11px] font-[500]">{{ $blog->created_at->format('d F Y') }}</p>
                    </div>
                    <h2 class="text-[19px] text-[#0A0E19] font-[600] mt-[5px] ">{{$blog->name}}</h2>
                    <p class="text-[12px] text-[#0A0E19] mt-[5px] "> </p>

                </a>
                @endforeach
            </div>
        </div>
    </section>
<!--  -->
@endsection

@push('scripts')
    <script>
        //
        const swiper = new Swiper('.swiper', {
            // Default parameters
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                slidesPerView: 1,
                },
            },
            autoplay: {
                delay: 1600,
                disableOnInteraction: false,
            },
            })
    </script>
@endpush
