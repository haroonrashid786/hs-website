<div class="w-full bg-[#E8F0FA] ">
    <div class="max-w-[1200px] mx-auto py-[52px] px-[15px] sm:px-[20px] ">
        <div class="landing__on__scroll flex items-center justify-center ">
            <div class="rounded-[12px] bg-[#E1ECFF] flex items-center gap-[4px] py-[5px] px-[12px] "><span class="bg-[#0D99FF] rounded-[50px] h-[7px] w-[7px] "></span>
                <p class="text-[12px] text-[#180F34] ">Blog</p>
            </div>
        </div>
        <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[7px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px]  ">Latest Blogs and News</h2>
        <P class="landing__on__scroll text-[16px] text-[#0A0E19] mt-[14px] text-center ">We aim to ensure that knowledge and news related to development technologies are readily accessible to all.</P>
        <div class="landing__on__scroll flex items-center lg:items-start mt-[32px] gap-[22px] justify-center">
            <div class="swiper blog-slider swiper-initialized swiper-horizontal mySwiper w-full swiper-backface-hidden">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1210px, 0px, 0px); transition-delay: 0ms;">
                    @foreach($allBlogs as $blog)

                    <a href="{{ route('blog.details', $blog->slug) }}" class="swiper-slide cursor-pointer" style="width: 555px; margin-right: 50px;" data-swiper-slide-index="{{$blog->id}}">
                        <div class="w-full aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="w-full  h-[260px] bg-cover bg-no-repeat bg-center rounded-[20px] " style="background-image: url('{{ asset('storage/' . $blog->banner_image) }}');">
                            </div>
                            <div class=" w-full flex items-center justify-between gap-[22px] "><span class="rounded-[30px] bg-[#DDF0FF] px-[16px] py-[4px] flex items-center justify-center text-[#0D99FF] text-[11px] font-[500] ">{{ ucfirst($blog->type) }}</span>
                                <p class="text-[#0D99FF] text-[11px] font-[500] whitespace-nowrap ">{{ $blog->created_at->format('d F Y') }}</p>
                            </div>
                            <h3 class="text-[21px] text-[#0A0E19] font-[600] mt-[5px] ">{{$blog->name}}</h3>

                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="landing__on__scroll flex items-center justify-center gap-[8px] mt-[32px] "><button class="swiper-button-prev-blog flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#fff] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM21 7H1V9H21V7Z" fill="#0D99FF"></path>
                </svg></button><button class="swiper-button-next-blog flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#0D99FF] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7071 7.29289C21.0976 7.68342 21.0976 8.31658 20.7071 8.70711L14.3431 15.0711C13.9526 15.4616 13.3195 15.4616 12.9289 15.0711C12.5384 14.6805 12.5384 14.0474 12.9289 13.6569L18.5858 8L12.9289 2.34315C12.5384 1.95262 12.5384 1.31946 12.9289 0.928932C13.3195 0.538408 13.9526 0.538408 14.3431 0.928932L20.7071 7.29289ZM0 7H20V9H0V7Z" fill="white"></path>
                </svg></button></div>
    </div>
</div>
@push('scripts')
            <script>

     // blog-slider

     var blogSlider = new Swiper('.blog-slider', {
        slidesPerView: 3,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next-blog',
            prevEl: '.swiper-button-prev-blog',
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
        },
    });
</script>
@endpush
