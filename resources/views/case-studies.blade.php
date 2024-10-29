@extends('layouts.master')
@section('title', 'Portfolio - Hashed System')
@section('description', '')
@section('content')


        <section class=" w-full bg-no-repeat bg-cover bg-center bg-[#19395f] landing__on__scroll "
                style="background-image: url('/assets/images/case srudies details/section.png');">
                <div class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] pt-[52px] ">
                    <h3 class="text-[19px] md:text-[22px] font-[600] text-center text-[#0D99FF] ">Explore our ventures
                    </h3>
                    <h2
                        class=" text-[32px] sm:text-[42px] md:text-[52px] lg:text-[60px] mt-[10px] text-[#fff] font-[600] text-center ">
                        Quick, Reliable and Affordable Services</h2>
                    <div class="flex items-center justify-between gap-[22px] mt-[32px] lg:flex-row flex-col ">
                        <div>
                            <div class="w-[170px] ">
                                <div
                                    class="py-[7px] text-[#ffffffbf] hover:text-[#fff] text-[18px] font-[600] relative group transition-all cursor-pointer ChangeImageBtn " OneMove onclick="caseStudiesChangeImage(this)" >
                                    OneMove<div
                                        class="w-[0px] group-hover:w-full transition-all absolute bottom-0 h-[3px] rounded-[30px] bg-[#007AFE] cadestudieUnderline ">
                                    </div>
                                </div>
                                <div
                                    class="py-[7px] text-[#ffffffbf] hover:text-[#fff] text-[18px] font-[600] relative group transition-all cursor-pointer ChangeImageBtn " onclick="caseStudiesChangeImage(this)" >
                                    Endup<div
                                        class="w-[0px] group-hover:w-full transition-all absolute bottom-0 h-[3px] rounded-[30px] bg-[#007AFE] cadestudieUnderline ">
                                    </div>
                                </div>
                                <div
                                    class="py-[7px] text-[#ffffffbf] hover:text-[#fff] text-[18px] font-[600] relative group transition-all cursor-pointer ChangeImageBtn " onclick="caseStudiesChangeImage(this)">
                                    N Style<div
                                        class="w-[0px] group-hover:w-full transition-all absolute bottom-0 h-[3px] rounded-[30px] bg-[#007AFE] cadestudieUnderline ">
                                    </div>
                                </div>
                                <div
                                    class="py-[7px] text-[#ffffffbf] hover:text-[#fff] text-[18px] font-[600] relative group transition-all cursor-pointer ChangeImageBtn " onclick="caseStudiesChangeImage(this)">
                                    EasyRSV<div
                                        class="w-[0px] group-hover:w-full transition-all absolute bottom-0 h-[3px] rounded-[30px] bg-[#007AFE] cadestudieUnderline ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="changeImage md:h-[500px] " src="/assets/images/Portfolio/OneMove.png" alt="">
                    </div>
                </div>
            </section>
            <section class=" w-full bg-[#fff]">
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
                <div class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] pb-[52px] ">
                    <div class="mt-[72px] ">
                        <h2
                            class=" text-[#0A0E19] landing__on__scroll font-[600] leading-[1.4]] text-[22px] sm:text-[30px] md:text-[42px]  ">
                            Explore&nbsp;Our Proven Success in Product Excellence</h2>
                        <p class=" text-[14px] sm:text-[15px] text-[#0A0E19] landing__on__scroll mt-[22px] ">We bring new possibilities for
                            businesses through our&nbsp;product engineeringsolutions. Dive into our portfolio, a
                            testament to our product innovation and its transformative impact on your business.</p>
                        <div class="flex gap-[22px] flex-wrap mt-[52px] justify-center landing__on__scroll ">
                            <div class="max-w-[430px] w-full  ">
                                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden "
                                    style="background-color: rgb(177, 209, 243);"><img
                                        class="h-[240px] sm:h-[260px] w-full"
                                        src="/assets/images/case srudies details/OneMove.png" alt=""></div>
                                <div class="flex items-center justify-between w-full pt-[12px] ">
                                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">OneMove</h2>
                                    <!-- <div
                                        class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z"
                                                fill="white"></path>
                                        </svg></div> -->
                                </div>
                                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">One Move offers a variety of truck services to meet your transportation needs for homes, offices, or other materials.</p>
                                <div class="flex items-center gap-[8px] mt-[11px] ">
                                    <div
                                        class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                        Logistics</div>
                                    <div
                                        class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                        Marketplace</div>
                                </div>
                            </div>
                            <div class="max-w-[430px] w-full  ">
                                <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden "
                                    style="background-color: rgb(142, 195, 159); padding-left: 20px; padding-right: 20px;">
                                    <img class="h-[240px] sm:h-[260px] w-full"
                                        src="/assets/images/case srudies details/Endup.png" alt=""></div>
                                <div class="flex items-center justify-between w-full pt-[12px] ">
                                    <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Endup</h2>
                                    <!-- <div
                                        class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                                        <svg width="13" height="14" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z"
                                                fill="white"></path>
                                        </svg></div> -->
                                </div>
                                <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">End Up, the cutting-edge logistics platform revolutionizing retail delivery processes for both retailers and riders.</p>
                                <div class="flex items-center gap-[8px] mt-[11px] ">
                                    <div
                                        class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                        Grocery</div>
                                    <div
                                        class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                        Marketplace</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="flex gap-[22px] flex-wrap mt-[52px] justify-center ">
                        <div href="/portfolio" class="max-w-[430px] w-full  landing__on__scroll ">
                            <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden "
                                style="background-color: rgb(142, 195, 159); padding-left: 20px; padding-right: 20px;">
                                <img class="h-[240px] sm:h-[260px] w-full"
                                    src="/assets/images/case srudies details/Endup.png" alt=""></div>
                            <div class="flex items-center justify-between w-full pt-[12px] ">
                                <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Endup</h2>
                                <div
                                    class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                                    <svg width="13" height="14" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z"
                                            fill="white"></path>
                                    </svg></div>
                            </div>
                            <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                                dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                            <div class="flex items-center gap-[8px] mt-[11px] ">
                                <div
                                    class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                    Services</div>
                                <div
                                    class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                    Services</div>
                            </div>
                        </div>
                        <div href="/portfolio" class="max-w-[430px] w-full  landing__on__scroll ">
                            <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden "
                                style="background-color: rgb(177, 209, 243);"><img class="h-[240px] sm:h-[260px] w-full"
                                    src="/assets/images/case srudies details/OneMove.png" alt=""></div>
                            <div class="flex items-center justify-between w-full pt-[12px] ">
                                <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">OneMove</h2>
                                <div
                                    class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                                    <svg width="13" height="14" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z"
                                            fill="white"></path>
                                    </svg></div>
                            </div>
                            <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">Lorem Ipsum&nbsp;is simply
                                dummy text of the printing and type setting industry. Lorem Ipsum h</p>
                            <div class="flex items-center gap-[8px] mt-[11px] ">
                                <div
                                    class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                    Services</div>
                                <div
                                    class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                                    Services</div>
                            </div>
                        </div>
                    </div> -->
                    <div class=" mt-[62px] ">
                        <div>
                            <div
                                class="w-full flex bg-[#8DC39F] items-center pt-[32px] landing__on__scroll px-[42px]  justify-between gap-[22px] rounded-[20px] mt-[18px] flex-col md:flex-row ">
                                <div class="flex-1">
                                    <h2 class=" text-[#0A0E19] text-[19px] md:text-[22px] font-[600] ">Endup</h2>
                                    <p class="text-[#0A0E19] text-[12px] md:text-[13px] mt-[6px] ">End Up, the cutting-edge logistics platform revolutionizing retail delivery processes for both retailers and riders.</p>
                                    <!-- <div
                                        class="mt-[22px] flex max-w-max items-center gap-[12px] px-[15px] md:px-[20px] py-[8px] md:py-[9px] cursor-pointer rounded-[7px] border border-[#0D99FF] text-[#0D99FF] bg-[#fff] text-[13px] md:text-[14px] font-[600] ">
                                        View Case Study<div
                                            class="flex items-center justify-center h-[26px] md:h-[30px] w-[26px] md:w-[30px] bg-[#0D99FF] rounded-[50px] ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4581 5.46967C11.751 5.76256 11.751 6.23744 11.4581 6.53033L6.68509 11.3033C6.3922 11.5962 5.91733 11.5962 5.62443 11.3033C5.33154 11.0104 5.33154 10.5355 5.62443 10.2426L9.86707 6L5.62443 1.75736C5.33154 1.46447 5.33154 0.989593 5.62443 0.696699C5.91733 0.403806 6.3922 0.403806 6.68509 0.696699L11.4581 5.46967ZM0.909879 5.25H10.9277V6.75H0.909879V5.25Z"
                                                    fill="white"></path>
                                            </svg></div>
                                    </div> -->
                                </div>
                                <div class="flex-1 flex items-center justify-end md:mt-[0px] mt-[22px] "><img
                                        src="/assets/images/Portfolio/Endup.png" alt=""></div>
                            </div>
                            <div
                                class="w-full flex bg-[#D5E7FB] items-center landing__on__scroll pt-[32px]  px-[42px] justify-between gap-[22px] rounded-[20px] mt-[18px] flex-col md:flex-row-reverse ">
                                <div class="flex-1 ">
                                    <h2 class=" text-[#0A0E19] text-[19px] md:text-[22px] font-[600] ">OneMove</h2>
                                    <p class="text-[#0A0E19] text-[12px] md:text-[13px] mt-[6px] ">One Move offers a variety of truck services to meet your transportation needs for homes, offices, or other materials.</p>
                                    <!-- <div
                                        class="mt-[22px] flex max-w-max items-center gap-[12px] px-[15px] md:px-[20px] py-[8px] md:py-[9px] cursor-pointer rounded-[7px] border border-[#0D99FF] text-[#0D99FF] bg-[#fff] text-[13px] md:text-[14px] font-[600] ">
                                        View Case Study<div
                                            class="flex items-center justify-center h-[26px] md:h-[30px] w-[26px] md:w-[30px] bg-[#0D99FF] rounded-[50px] ">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4581 5.46967C11.751 5.76256 11.751 6.23744 11.4581 6.53033L6.68509 11.3033C6.3922 11.5962 5.91733 11.5962 5.62443 11.3033C5.33154 11.0104 5.33154 10.5355 5.62443 10.2426L9.86707 6L5.62443 1.75736C5.33154 1.46447 5.33154 0.989593 5.62443 0.696699C5.91733 0.403806 6.3922 0.403806 6.68509 0.696699L11.4581 5.46967ZM0.909879 5.25H10.9277V6.75H0.909879V5.25Z"
                                                    fill="white"></path>
                                            </svg></div>
                                    </div> -->
                                </div>
                                <div class="flex-1 flex items-center justify-start md:mt-[0px] mt-[22px] "><img
                                        src="assets/images/Portfolio/OneMove.png" alt="">
                                    </div>
                            </div>
                            <div class="hiddenLoadMoreDiv hidden">
                                <div
                                    class="w-full flex bg-[#EAE1CA] items-center landing__on__scroll pt-[32px]  px-[42px] justify-between gap-[22px] rounded-[20px] mt-[18px] flex-col md:flex-row ">
                                    <div class="flex-1">
                                        <h2 class=" text-[#0A0E19] text-[19px] md:text-[22px] font-[600] ">N Style</h2>
                                        <p class="text-[#0A0E19] text-[12px] md:text-[13px] mt-[6px] ">NStyle is a Dubai's Premier beauty lounge offering services for all your beauty needs like Hair, Nails, Massages.</p>
                                        <!-- <div
                                            class="mt-[22px] flex max-w-max items-center gap-[12px] px-[15px] md:px-[20px] py-[8px] md:py-[9px] cursor-pointer rounded-[7px] border border-[#0D99FF] text-[#0D99FF] bg-[#fff] text-[13px] md:text-[14px] font-[600] ">
                                            View Case Study<div
                                                class="flex items-center justify-center h-[26px] md:h-[30px] w-[26px] md:w-[30px] bg-[#0D99FF] rounded-[50px] ">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4581 5.46967C11.751 5.76256 11.751 6.23744 11.4581 6.53033L6.68509 11.3033C6.3922 11.5962 5.91733 11.5962 5.62443 11.3033C5.33154 11.0104 5.33154 10.5355 5.62443 10.2426L9.86707 6L5.62443 1.75736C5.33154 1.46447 5.33154 0.989593 5.62443 0.696699C5.91733 0.403806 6.3922 0.403806 6.68509 0.696699L11.4581 5.46967ZM0.909879 5.25H10.9277V6.75H0.909879V5.25Z"
                                                        fill="white"></path>
                                                </svg></div>
                                        </div> -->
                                    </div>
                                    <div class="flex-1 flex items-center justify-end md:mt-[0px] mt-[22px] "><img
                                        src="/assets/images/Portfolio/N Style.png" alt="">
                                    </div>
                                </div>
                                <div
                                    class="w-full flex bg-[#D0EFE5] items-center landing__on__scroll pt-[32px]  px-[42px] justify-between gap-[22px] rounded-[20px] mt-[18px] flex-col md:flex-row-reverse ">
                                    <div class="flex-1 ">
                                        <h2 class=" text-[#0A0E19] text-[19px] md:text-[22px] font-[600] ">EasyRSV</h2>
                                        <p class="text-[#0A0E19] text-[12px] md:text-[13px] mt-[6px] ">EasyRSV is a project designed to streamline the process of exploring and reserving exceptional dining experiences.</p>
                                        <!-- <div
                                            class="mt-[22px] flex max-w-max items-center gap-[12px] px-[15px] md:px-[20px] py-[8px] md:py-[9px] cursor-pointer rounded-[7px] border border-[#0D99FF] text-[#0D99FF] bg-[#fff] text-[13px] md:text-[14px] font-[600] ">
                                            View Case Study<div
                                                class="flex items-center justify-center h-[26px] md:h-[30px] w-[26px] md:w-[30px] bg-[#0D99FF] rounded-[50px] ">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4581 5.46967C11.751 5.76256 11.751 6.23744 11.4581 6.53033L6.68509 11.3033C6.3922 11.5962 5.91733 11.5962 5.62443 11.3033C5.33154 11.0104 5.33154 10.5355 5.62443 10.2426L9.86707 6L5.62443 1.75736C5.33154 1.46447 5.33154 0.989593 5.62443 0.696699C5.91733 0.403806 6.3922 0.403806 6.68509 0.696699L11.4581 5.46967ZM0.909879 5.25H10.9277V6.75H0.909879V5.25Z"
                                                        fill="white"></path>
                                                </svg></div>
                                        </div> -->
                                    </div>
                                    <div class="flex-1 flex items-center justify-start md:mt-[0px] mt-[22px] "><img
                                            src="/assets/images/Portfolio/Concierge Bookings.png" alt="">
                                        </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-[52px] landing__on__scroll LoadMoreBtn " onclick="LoadMoreBtn()">
                                <div class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer">
                                    <p class="text-[#fff] text-[15px] font-[500] select-none ">Load More</p>
                                    <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12"
                                            viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z"
                                                fill="#3B2E71"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            @include('partials.clienttestimonials')
                        </div>
                    </div>
                </div>
                @include('partials.awards&recognitions')
                @include('partials.portfolio-slider')
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@push('scripts')
<script>

    // 
    // case studies details JS
    // 

    function caseStudiesChangeImage(e) {
        let btn = e.closest('.ChangeImageBtn');
        let image = document.querySelector('.changeImage');
        let underlineElement = btn.querySelector('.cadestudieUnderline');
        document.querySelectorAll('.cadestudieUnderline').forEach(element => {
        element.classList.remove('!w-full');
    });

        if (btn.innerText === 'OneMove') {
            image.src = '/assets/images/Portfolio/OneMove.png'
            underlineElement.classList.add('!w-full');
        }else if (btn.innerText === 'Endup') {
            underlineElement.classList.add('!w-full');
            image.src = '/assets/images/Portfolio/Endup.png'
        }else if (btn.innerText === 'N Style') {
            underlineElement.classList.add('!w-full');
            image.src = '/assets/images/Portfolio/N Style.png'
        }else if (btn.innerText === 'Concierge Bookings') {
            underlineElement.classList.add('!w-full');
            image.src = '/assets/images/Portfolio/Concierge Bookings.png'
        }else{
            underlineElement.classList.remove('!w-full');
            
        }
    }

    // 

    function LoadMoreBtn() {
        let hiddenLoadMoreDiv = document.querySelector('.hiddenLoadMoreDiv');
        let LoadMoreBtn = document.querySelector('.LoadMoreBtn');

        if (hiddenLoadMoreDiv) {
            hiddenLoadMoreDiv.classList.add('!block');
            LoadMoreBtn.classList.add('!hidden')
        }
    }


    // 

        var businessExpertiseSwiper = new Swiper('.business-expertise-second', {
        slidesPerView: 10,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        // autoplay: !activeTechStack && {
        //     delay: 1900,
        //     disableOnInteraction: false,
        // },
        navigation: {
            nextEl: ".business-expertise-second-next",
            prevEl: ".business-expertise-second-prev",
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