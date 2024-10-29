@extends('layouts.master')
@section('title', 'Portfolio - Hashed System')
@section('description', '')
@section('content')
<section class="w-full bg-[#062345] landing__on__scroll ">
    <div class="max-w-[900px] w-[90%] md:w-full mx-auto py-[120px] px-[15px] md:px-[20px] ">
        <h2 class="text-[34px] sm:text-[42px] md:text-[55px] font-[600] text-[#fff] text-center ">Portfolio
        </h2>
        <p class=" text-[14px] sm:text-[16px] md:text-[18px] text-[#fff] text-center font-[300] mt-[12px] ">
            Hashed System is a leading software development company in Dubai offering custom solutions. We
            aim to deliver innovative technology products that bring client satisfaction.</p>
    </div>
</section>
<main class="bg-[#fff] w-full landing__on__scroll">
    <div class="flex items-center justify-center sm:justify-between py-[32px] max-w-[1200px] mx-auto px-[15px] md:px-[20px] sm:flex-row flex-col gap-[16px] ">
        <div class="flex items-center gap-[9px] md:gap-[12px] flex-wrap justify-center ">
            <div class="flex items-center justify-center cursor-pointer text-[13px] font-[600] px-[22px] py-[12px] rounded-[8px] bg-[#DDF0FF] text-[#0D99FF] hover:text-[#FFFFFF] hover:bg-[#0D99FF] transition-all landing__on__scroll ">
                Website</div>
            <div class="flex items-center justify-center cursor-pointer text-[13px] font-[600] px-[22px] py-[12px] rounded-[8px] bg-[#DDF0FF] text-[#0D99FF] hover:text-[#FFFFFF] hover:bg-[#0D99FF] transition-all landing__on__scroll ">
                Mobile</div>
            <div class="flex items-center justify-center cursor-pointer text-[13px] font-[600] px-[22px] py-[12px] rounded-[8px] bg-[#DDF0FF] text-[#0D99FF] hover:text-[#FFFFFF] hover:bg-[#0D99FF] transition-all landing__on__scroll ">
                Branding</div>
        </div>
        <div class="rounded-[8px] cursor-default border border-[#CECDD1] px-[16px] py-[11px] relative max-w-[280px] w-full flex items-center justify-between group transition z-50  " onclick="portfolioDropdown()">
            <p class="text-[12px] font-[500] text-[#0A0E19] select-none portfolio-dropdown-header transition ">Latest</p>
            <i class="fa-solid fa-chevron-down text-[14px] text-[#0A0E19] transition portfolio_dropd_svg"></i>
            <div class="w-full rounded-[8px] absolute transition left-0 right-0 top-[46px] bg-[#fff] border py-[8px] border-[#CECDD1] hidden dropdown_hidden_div max-h-[260px] overflow-auto !z-50">
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System1</p>
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System2</p>
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System3</p>
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System4</p>
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System5</p>
                <p class="py-[9px] text-[13px] text-[0A0E19] px-[16px] py-[11px] hover:bg-[#0D99FF] hover:text-[#fff] cursor-pointer transition-all portfolio-dropdown-item transition " onclick="portfolioDropdownFun(this)">Hashed System6</p>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto px-[15px] mt-[14px] md:px-[20px] pb-[52px] relative !z-0 ">
        <div class="flex items-center flex-wrap md:mt-[50px] gap-[22px] justify-center " id = "portfolioMain" >
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(234, 225, 202);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/N-Style.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">N Style</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(208, 239, 229);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/ConciergeBookings.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Concierge Bookings</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(142, 195, 159); padding-left: 20px; padding-right: 20px;">
                    <img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/Endup.png" alt="">
                </div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Endup</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(177, 209, 243);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/OneMove.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">OneMove</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(234, 225, 202);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/N-Style.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">N Style</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(208, 239, 229);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/ConciergeBookings.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Concierge Bookings</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(142, 195, 159); padding-left: 20px; padding-right: 20px;">
                    <img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/Endup.png" alt="">
                </div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Endup</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
            <div class="max-w-[430px] w-full landing__on__scroll ">
                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(177, 209, 243);"><img class="h-[240px] sm:h-[260px] w-full" src="/assets/images/Projects/OneMove.png" alt=""></div>
                <div class="flex items-center justify-between w-full pt-[12px] ">
                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">OneMove</h2>
                    <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                <div class="flex items-center gap-[8px] mt-[11px] ">
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                    <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Services</div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-[52px] landing__on__scroll ">
            <div class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer">
                <p class="text-[#fff] text-[15px] font-[500] select-none ">Load More</p>
                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                    </svg></div>
            </div>
        </div>
    </div>
</main>
<div class="fixed inset-0 h-[100vh] w-full z-0 hidden full_div "onclick=FullDiv() >

</div>
@endsection

@push('scripts')
<script>
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

    
    // 
    // portfolio dropdown
    // 

        let portfolioSvg = document.querySelector('.portfolio_dropd_svg');
        let dropdownHiddenDiv = document.querySelector('.dropdown_hidden_div');
        let fullDiv = document.querySelector('.full_div');
        let value = true;


        function portfolioDropdown() {
        let portfolioSvg = document.querySelector('.portfolio_dropd_svg');
        let dropdownHiddenDiv = document.querySelector('.dropdown_hidden_div');
        let fullDiv = document.querySelector('.full_div');

        if (value == true) {
            portfolioSvg.classList.add('!rotate-180');
            dropdownHiddenDiv.classList.add('!block');
            fullDiv.classList.add('!block');
            value = false;
        }else{
            portfolioSvg.classList.remove('!rotate-180');
            dropdownHiddenDiv.classList.remove('!block');
            fullDiv.classList.remove('!block');
            value = true;
        }
        
    }

    function FullDiv(){
        portfolioSvg.classList.remove('!rotate-180');
        dropdownHiddenDiv.classList.remove('!block');
        fullDiv.classList.remove('!block');
    }

    function portfolioDropdownFun(e) {
        let portfolioDropdownHeader = document.querySelector('.portfolio-dropdown-header');
        let portfolioDropdownItem = e.closest('.portfolio-dropdown-item');

        portfolioDropdownHeader.innerHTML = portfolioDropdownItem.innerHTML;
    }

</script>
@endpush