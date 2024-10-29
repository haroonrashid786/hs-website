@php
    $indexClasses = 'max-w-[1200px] mx-auto mt-[50px] md:mt-[110px] z-40 px-[15px] pb-[32px] md:px-[20px]';
    $otherClasses = 'max-w-[1200px] mx-auto mt-5 md:mt-14 z-40 px-[15px] pb-[32px] md:px-[20px]';
@endphp

<div class="{{ request()->routeIs('index') ? $indexClasses : $otherClasses }}">
            <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[20px] leading-[32px] sm:leading-[60px] text-[22px] sm:text-[30px] md:text-[42px]  ">
            Partners and Recognitions</h2>
            <div class="landing__on__scroll flex items-center justify-center gap-[18px] mt-[30px] flex-wrap ">
                <div class="swiper awards-slider  w-full">
                    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-804.375px, 0px, 0px); transition-delay: 0ms;">
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="6"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/1.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="7"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/2.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="8"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/3.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="9"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/4.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="10"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/5.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="11"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/6.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="12"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/1.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="13"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/2.png" alt=""></div>
                        <div class="swiper-slide swiper-slide-prev max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="0"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/3.png" alt=""></div>
                        <div class="swiper-slide swiper-slide-active max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="1"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/4.png" alt=""></div>
                        <div class="swiper-slide swiper-slide-next max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="2"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/5.png" alt=""></div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 136.25px; margin-right: 10px;" data-swiper-slide-index="3"><img class="h-[100px] sm:h-[110px] lg:h-[126px] mr-[12px] " src="/assets/images/Awards/6.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="landing__on__scroll flex items-center justify-center gap-[8px] mt-[42px] "><button class="awards-slider-prev flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#fff] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM21 7H1V9H21V7Z" fill="#0D99FF"></path>
                    </svg></button><button class="awards-slider-next flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#0D99FF] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.7071 7.29289C21.0976 7.68342 21.0976 8.31658 20.7071 8.70711L14.3431 15.0711C13.9526 15.4616 13.3195 15.4616 12.9289 15.0711C12.5384 14.6805 12.5384 14.0474 12.9289 13.6569L18.5858 8L12.9289 2.34315C12.5384 1.95262 12.5384 1.31946 12.9289 0.928932C13.3195 0.538408 13.9526 0.538408 14.3431 0.928932L20.7071 7.29289ZM0 7H20V9H0V7Z" fill="white"></path>
                    </svg>
                </button>
            </div>
        </div>

        @push('scripts')
<script>
 
    // awardsSlider
    var awardsSlider = new Swiper('.awards-slider', {
        slidesPerView: 9,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.awards-slider-next',
            prevEl: '.awards-slider-prev',
        },
        breakpoints: {
            100: {
                slidesPerView: 5,
            },
            700: {
                slidesPerView: 6,
            },
            1024: {
                slidesPerView: 8,
            },
            1440: {
                slidesPerView: 9,
            },
        },
    });
</script>


@endpush