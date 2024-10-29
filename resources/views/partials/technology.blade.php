<div class="max-w-[1338px] mx-auto px-[15px] md:px-[20px]">
    <div class="min-h-72">
        <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[50px] md:mt-[110px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px]  ">Technology</h2>
            <div class="landing__on__scroll w-full flex items-center overflow-auto py-[22px] gap-[12px] mt-[15px]">
            <div class="business-expertise-second-prev cursor-pointer flex items-center justify-center px-[16px] py-[12px] bg-[#0D99FF] rounded-[7px] text-[15px] cursor-pointer select-none font-[400] gap-[7px] ">
                <div class="bg-[#fff] rounded-[50px] flex items-center justify-center h-[24px] w-[24px] ">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
            </div>
            <div class="swiper business-expertise-second  w-full">
                <div class="swiper-wrapper" id='techStackSlider2' style="transition-duration: 0ms; transform: translate3d(-511.875px, 0px, 0px); transition-delay: 0ms;"></div>
            </div>
            <div class="business-expertise-second-next cursor-pointer flex items-center justify-center px-[16px] py-[12px] bg-[#0D99FF] rounded-[7px] text-[15px] cursor-pointer select-none font-[400] gap-[7px] ">
                <div class="bg-[#fff] rounded-[50px] flex items-center justify-center h-[24px] w-[24px] ">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="landing__on__scroll swiper clients-slider h-fit w-full">
            <div class="swiper-wrapper" id='techLogoWrapper'></div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    var businessExpertiseSwiper = new Swiper('.business-expertise , .business-expertise-second', {
    slidesPerView: 10,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    autoplay:{
        delay: 1900,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".business-expertise-next , .business-expertise-second-next",
        prevEl: ".business-expertise-prev , .business-expertise-second-prev",
      },
    breakpoints: {
        100: {
            slidesPerView: 5,
        },
        1024: {
            slidesPerView: 5,
        },
        1440: {
            slidesPerView: 5,
        },
    },
});
</script>
@endpush