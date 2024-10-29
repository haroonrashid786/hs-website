    <div class="bg-[#0D99FF] w-full flex items-center justify-center gap-[14px] py-[7px] md:py-[8px] px-[12px] ">
        <p class=" text-[#fff] text-[12px] md:text-[13px] line-clamp-1 ">Transforming Challenges into Digital Solutions | Crafting Innovation, Empowering Growth</p>
    </div>
    <header class=" bg-[#E8F0FA] w-full sticky top-0 z-50">
        <div class="relative flex items-center max-w-[1200px] mx-auto py-[10px] sm:py-[11px] justify-between px-[15px] sm:px-[20px] ">
            <a href="/" class="animated-element !flex items-center gap-[9px] md:gap-[12px] cursor-pointer ">
                <img class="h-[36px]" src='/assets/images/newDarkLogo.png' alt="" />
                <div>
                    <h2 class="text-[#1E4470] text-[18px] md:text-[21px] font-[600] Familjen Grotesk select-none ">Hashed System</h2>
                    <p class='text-[#0D99FF] text-[9px] md:text-[10px] font-[500] select-none leading-3 '>Empowering Digital Transformation</p>
                </div>
            </a>
            <div class="hidden lg:block">
                <div class="flex items-center gap-[28px] lg:gap-[44px] ">
                    <a href="/">
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo " onclick="NavBtn(this)" >
                            Home
                            <div class="rounded-[30px] {{ Route::currentRouteName() === 'index' ? 'w-full' : '' }}  bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all  "></div>
                        </div>
                    </a>
                    <a href="/about-us">
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo " onclick="NavBtn(this)">
                            About Us
                            <div class="rounded-[30px] {{ Route::currentRouteName() === 'about-us' ? 'w-full' : '' }} bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all "></div>
                        </div>
                    </a>
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] Arimo group h-10 flex items-center justify-center">
                            <a class = 'flex items-center gap-[3px] transition-all' href="/services">
                                Services
                                <i class="fa-solid fa-angle-down text-[14px] text-[#0D0A31] group-hover:rotate-180 transition-all "></i>
                            </a>
                            <div class="rounded-[30px] {{ Route::currentRouteName() === 'services' ? 'w-full' : '' }} bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all "></div>
                            <div class="pt-[22px] right-0 left-0 absolute !z-50 w-full top-[50px] hidden group-hover:block  ">
                                <div class="px-[15px] w-[100%] overflow-auto pb-[20px]">
                                    <div class="  bg-[#fff] flex shadowHigh items-start rounded-b-[20px] p-[18px] md:p-[42px] gap-[10px] sm:flex-row flex-col-reverse cursor-default">
                                        <div class=" flex items-center justify-center w-full sm:flex-1 mt-[22px] sm:mt-[0px] ">
                                            <div class="swiper swiper1">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper w-[200px] !pb-[62px] ">
                                                    <!-- Slides -->
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/1.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/2.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/3.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/4.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/5.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide flex items-center justify-center ">
                                                        <img class="h-[170px] " src="/assets/images/Awards/6.png" alt="">
                                                    </div>
                                                </div>

                                                <div class="swiper-pagination "></div>

                                            </div>
                                        </div>
                                        <div class="flex-[2] sm:px-[20px] flex flex-wrap gap-[10px] ">
                                            
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/web-dev.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">Website Development</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/mobile-application-service-icon.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">Mobile Apps Development</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/DigitalMarketing.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">Digital Marketing</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/uiux-solutions.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">UI/UX Design</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/product-service-icon.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">Product Development</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/wordpress-service-icon.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">WordPress
                                                    Development</p>
                                            </a>
                                            <a href="/services" class="flex items-center gap-[7px] px-[16px] cursor-pointer py-[10px] rounded-[16px] hover:bg-[#E8F0FA] transition-all w-full sm:w-[280px] ">
                                                <img class="h-[40px] w-14 object-contain" src="/assets/images/Services/aws-cloud-solutions.png" alt="">
                                                <p class="text-[#0A0E19] text-[13px] whitespace-nowrap font-[400] ">AWS Cloud</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <a href="/case-studies">
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo " onclick="NavBtn(this)">
                            portfolio<div class="rounded-[30px] {{ Route::currentRouteName() === 'portfolio' ? 'w-full' : '' }} bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                            </div>
                        </div>
                    </a><a href="/blogs">
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo " onclick="NavBtn(this)">
                            Blogs<div class="rounded-[30px] {{ Route::currentRouteName() === 'blogs' ? 'w-full' : '' }} bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                            </div>
                        </div>
                    </a><a href="/contact">
                        <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo " onclick="NavBtn(this)">
                            Contact Us<div class="rounded-[30px] {{ Route::currentRouteName() === 'contact' ? 'w-full' : '' }} bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                            </div>
                        </div>
                    </a>
                    <a href='#contact_form' class="flex items-center gap-3 justify-center px-[22px] py-[9px] bg-[#0D99FF] rounded-[7px] text-[14px] lg:text-[15px] text-[#fff] cursor-pointer select-none font-[400] ">
                        Get Quote
                        <div class="bg-[#fff] rounded-[50px] p-[6px]">
                            <svg width="10" height="10" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="block lg:hidden " onclick="hamburger()">
                <span class="flex items-center justify-center px-[6px] cursor-pointer "><svg class="h-[22px] w-[22px] sm:h-[28px] sm:w-[28px] " viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.927734" width="24" height="2.66667" rx="1.33333" fill="#0D99FF"></rect>
                        <rect y="11.5938" width="24" height="2.66667" rx="1.33333" fill="#0D99FF"></rect>
                        <rect y="22.2617" width="24" height="2.66667" rx="1.33333" fill="#0D99FF"></rect>
                    </svg>
                </span>
            </div>
        </div>
        <div class="bg-[#fff] w-[220px] fixed top-0 pb-[22px] h-[100%] transition-all z-50 -right-full hamburger-main ">
            <div class="flex items-center gap-[28px] lg:gap-[44px] flex-col justify-center h-full ">
                <div class=" w-full flex items-center justify-end p-[14px] absolute top-9 right-2 " onclick="crosHambuger()"><i class="fa-solid fa-xmark text-[#0D99FF] text-[32px] cursor-pointer "></i>
                </div>
                <a href="/">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        Home<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a><a href="/about">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        About Us<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a>
                <a href="/services">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        Services<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        portfolio<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a>
                <a href="/blogs">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        Blogs<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a>
                <a href="/contact">
                    <div class=" capitalize text-[13px] lg:text-[14px] text-[#0D0A31] cursor-pointer font-[500] group Arimo ">
                        Contact Us<div class="rounded-[30px] bg-[#0D99FF] h-[3px] w-[0px] group-hover:w-full transition-all ">
                        </div>
                    </div>
                </a>
                <a href='#contact_form' class="flex items-center justify-center gap-3 scroll-smooth px-[22px] py-[9px] bg-[#0D99FF] rounded-[7px] text-[14px] lg:text-[15px] text-[#fff] cursor-pointer select-none font-[400] ">
                    Get Quote
                    <div class="bg-[#fff] rounded-[50px] p-[6px]">
                        <svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </header>


<script>
        // 
    // hamburger
    // 


    function hamburger() {
        let sideBar = document.querySelector('.hamburger-main');
        sideBar.classList.add('!right-0');
    }

    function crosHambuger() {
        let sideBar = document.querySelector('.hamburger-main');
        sideBar.classList.remove ('!right-0')
    }

</script>