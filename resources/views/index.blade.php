@extends('layouts.master')
@section('title', 'Custom Software & SaaS Application Development Company - Hashed System')
@section('description', 'Hashed System is a leading software & SaaS app development company providing customized solutions across mobile apps, web, product development, e-commerce, UI/UX, DevOps, SEO, and Digital Marketing.')
<style>
    .slider{
        width: 100%;
        height: var(--height);
        mask-image: linear-gradient(to right, transparent, #000, transparent);
    }
    .slider .list{
        display: flex;
        width: 100%;
        min-width: calc(var(--width) * var(--quantity));
        position: relative;
        justify-content: end;
        padding-left: 20px;
    }

    .slider:before,
    .slider:after {
        position: absolute;
        left: 64%;
        width: 100px;
        height: 100%;
        content: "";
        z-index: 2;
    }

    .slider:before {
    left: 0;
    background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
    }

    .slider:after {
    right: 0;
    background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
    }

    @media (max-width: 1024px) {
        .slider:before,
        .slider:after {
            position: absolute;
            left: 0%;
            width: 100px;
            height: 100%;
            content: "";
            z-index: 2;
    }
    }
    
    .slider .list .item{
        height: 150px;
        width: 130px;
        position: absolute;
        animation: autoRun 10s linear infinite;
        transition: filter 0.5s;
        animation-delay: calc( (10s / var(--quantity)) * (var(--position) - 1) - 10s)!important;
    }
    .slider .list .item img{
        width: 100%;
    }
    @keyframes autoRun{
        from{
            left: 100%;
        }to{
            left: calc(var(--width) * -1);
        }
    }
    .slider:hover .item{
        animation-play-state: paused!important;
    }
    .slider[reverse="true"] .item{
        animation: reversePlay 10s linear infinite;
    }
    @keyframes reversePlay{
        from{
            left: calc(var(--width) * -1);
        }to{
            left: 100%;
        }
    }
</style>
@section('content')
    <div class="swiper-container bg-[#E8F0FA] w-full ">
        <div class="swiper-wrapper !h-auto">
            <div class="swiper-slide">
                <section class="max-w-[1200px] mx-auto flex gap-[18px] md:gap-[22px] px-[15px] md:px-[20px] lg:flex-row flex-col pt-[60px] pb-6 ">
                    <div class="flex-1 pt-[32px] flex justify-center flex-col">
                        <div class="overflow-x-hidden text-[32px] sm:text-[42px] md:text-[50px] text-[#001436] font-[600] text-start line-clamp-3">
                            <h2 class=" animate animate-heading">Innovative Mobile App Solutions</h2>
                        </div>
                        <div class="">
                            <p class="text-start text-[#001436] text-[13px] sm:text-[14px] md:text-[16px] mt-[10px] line-clamp-4 animate animate-paragraph">
                                Hashed System is a leading software technology products that bring client leading software technology products that bring client satisfaction.
                            </p>
                            <a href="#contact_form" class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max mt-[16px] sm:mt-[22px] animate animate-button">
                                <p class="text-[#fff] text-[15px] font-[500] select-none">Get Quote</p>
                                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 sm:gap-10 mt-12 flex-wrap">
                                <img src="assets/images/react.png" class="h-14 animate animate-images1" alt="">
                                <img src="assets/images/lara.png" class="h-12 animate animate-images2" alt="">
                                <img src="assets/images/and.png" class="h-16 animate animate-images3" alt="">
                                <img src="assets/images/ios.png" class="h-14 animate animate-images4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" scale-up-bottom flex-1 flex items-end justify-center mt-7 lg:mt-0">
                        <img class="h-[380px] md:h-[400px]" src="assets/images/hero-image.png" alt="">
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="max-w-[1200px] mx-auto flex gap-[18px] md:gap-[22px] px-[15px] md:px-[20px] lg:flex-row flex-col pt-[60px] pb-6 ">
                    <div class="flex-1 pt-[32px] flex justify-center flex-col">
                        <div class="overflow-x-hidden text-[32px] sm:text-[42px] md:text-[50px] text-[#001436] font-[600] text-start line-clamp-3">
                            <h2 class=" animate animate-heading">Empower Startups Ignite Growth</h2>
                        </div>
                        <div class="">
                            <p class="text-start text-[#001436] text-[13px] sm:text-[14px] md:text-[16px] mt-[10px] line-clamp-4 animate animate-paragraph">
                            Hashed System is a leading software development company in Dubai offering custom solutions. We aim to deliver innovative technology products that bring client satisfaction.
                            </p>
                            <a href="#contact_form" class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max mt-[16px] sm:mt-[22px] animate animate-button">
                                <p class="text-[#fff] text-[15px] font-[500] select-none">Get Quote</p>
                                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 sm:gap-10 mt-12 flex-wrap">
                                <img src="assets/images/second1.png" class="h-12 animate animate-images1" alt="">
                                <img src="assets/images/second2.png" class="h-12 animate animate-images2" alt="">
                                <img src="assets/images/second3.png" class="h-12 animate animate-images3" alt="">
                                <img src="assets/images/second4.png" class="h-12 animate animate-images4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" scale-up-bottom flex-1 flex items-end justify-center mt-7 lg:mt-0">
                        <img class="h-[380px] md:h-[400px]" src="assets/images/second.png" alt="">
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="max-w-[1200px] mx-auto flex gap-[18px] md:gap-[22px] px-[15px] md:px-[20px] lg:flex-row flex-col pt-[60px] pb-6 ">
                    <div class="flex-1 pt-[32px] flex justify-center flex-col">
                        <div class="overflow-x-hidden text-[32px] sm:text-[42px] md:text-[50px] text-[#001436] font-[600] text-start line-clamp-3">
                            <h2 class=" animate animate-heading">Transform Your Digital Presence</h2>
                        </div>
                        <div class="">
                            <p class="text-start text-[#001436] text-[13px] sm:text-[14px] md:text-[16px] mt-[10px] line-clamp-4 animate animate-paragraph">
                            Hashed System is a leading software development company in Dubai offering custom solutions. We aim to deliver innovative technology products that bring client satisfaction.
                            </p>
                            <a href="#contact_form" class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max mt-[16px] sm:mt-[22px] animate animate-button">
                                <p class="text-[#fff] text-[15px] font-[500] select-none">Get Quote</p>
                                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 sm:gap-10 mt-12 flex-wrap">
                                <img src="assets/images/third1.png" class="h-12 animate animate-images1" alt="">
                                <img src="assets/images/third2.png" class="h-12 animate animate-images2" alt="">
                                <img src="assets/images/third3.png" class="h-12 animate animate-images3" alt="">
                                <img src="assets/images/third4.png" class="h-12 animate animate-images4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" scale-up-bottom flex-1 flex items-end justify-center mt-7 lg:mt-0">
                        <img class="h-[380px] md:h-[400px]" src="assets/images/third.png" alt="">
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="max-w-[1200px] mx-auto flex gap-[18px] md:gap-[22px] px-[15px] md:px-[20px] lg:flex-row flex-col pt-[60px] pb-6 ">
                    <div class="flex-1 pt-[32px] flex justify-center flex-col">
                        <div class="overflow-x-hidden text-[32px] sm:text-[42px] md:text-[50px] text-[#001436] font-[600] text-start line-clamp-3">
                            <h1 class=" animate animate-heading">Innovative Software & SaaS Solutions</h1>
                        </div>
                        <div class="">
                            <p class="text-start text-[#001436] text-[13px] sm:text-[14px] md:text-[16px] mt-[10px] line-clamp-4 animate animate-paragraph">
                                We are a leading software and SaaS application development agency offering custom solutions. We aim to deliver innovative technology products that bring client satisfaction.
                            </p>
                            <a href="#contact_form" class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max mt-[16px] sm:mt-[22px] animate animate-button">
                                <p class="text-[#fff] text-[15px] font-[500] select-none">Get Quote</p>
                                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 sm:gap-10 mt-12 flex-wrap">
                                <img src="assets/images/fourth1.png" class="h-12 animate animate-images1" alt="">
                                <img src="assets/images/fourth2.png" class="h-12 animate animate-images2" alt="">
                                <img src="assets/images/fourth3.png" class="h-12 animate animate-images3" alt="">
                                <img src="assets/images/fourth4.png" class="h-12 animate animate-images4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" scale-up-bottom flex-1 flex items-end justify-center mt-7 lg:mt-0">
                        <img class="h-[380px] md:h-[400px]" src="assets/images/fourth.png" alt="">
                    </div>
                </section>
            </div>
        </div>
        <div class="landing__on__scroll flex items-center justify-center gap-[8px] py-10">
            <button class="swiper-button-prev-header flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#fff] rounded-[12px] border border-[#0D99FF]">
                    <svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM21 7H1V9H21V7Z" fill="#0D99FF"></path>
                    </svg>
            </button>
            <button class="swiper-button-next-header flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#0D99FF] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7071 7.29289C21.0976 7.68342 21.0976 8.31658 20.7071 8.70711L14.3431 15.0711C13.9526 15.4616 13.3195 15.4616 12.9289 15.0711C12.5384 14.6805 12.5384 14.0474 12.9289 13.6569L18.5858 8L12.9289 2.34315C12.5384 1.95262 12.5384 1.31946 12.9289 0.928932C13.3195 0.538408 13.9526 0.538408 14.3431 0.928932L20.7071 7.29289ZM0 7H20V9H0V7Z" fill="white"></path>
                </svg>
            </button>
        </div>
    </div>
<div class="bg-[#1E4470] w-full py-[22px] ">
    <div class="flex gap-[22px] lg:gap-[30px] justify-center flex-wrap landing__on__scroll">
        <div class="px-[42px] py-[8px] border-r border-[#3e5e82] remove_border1">
            <div class="">
                <h2 class="text-[28px] md:text-[34px] text-[#fff] text-center font-[300] flex items-center "><p class="num" data-valur="30">0</p>+ projects</h2>
                <p class="text-[11px] md:text-[12px] text-[#FFFFFF] text-center">successfully delivered</p>
            </div>
        </div>
        <div class="px-[42px] py-[8px] border-r border-[#3e5e82] remove_border">
            <div class="">
                <h2 class="text-[28px] md:text-[34px] text-[#fff] text-center font-[300] flex items-center gap-[8px] "><p class="num" data-valur="25">0</p> Members</h2>
                <p class="text-[11px] md:text-[12px] text-[#FFFFFF] text-center ">in-house collaborators</p>
            </div>
        </div>
        <div class="px-[42px] py-[8px] ">
            <h2 class="text-[28px] md:text-[34px] text-[#fff] text-center font-[300] ">Locations</h2>
            <div class="flex items-center gap-[16px] ">
                <div class="flex items-center gap-[6px] "><span class="flex items-center justify-center h-[22px] w-[22px] "><svg class="h-full w-full " viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_563_5237)">
                                <path d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z" fill="#F0F0F0"></path>
                                <path d="M7.91327 18.8701L9.13067 27.1299C10.6473 27.6927 12.2877 28.0006 14.0002 28.0006C20.0197 28.0006 25.1513 24.2013 27.1294 18.8701H7.91327Z" fill="black"></path>
                                <path d="M7.91327 9.13046L9.13067 0.87068C10.6473 0.307891 12.2877 0 14.0002 0C20.0197 0 25.1513 3.79925 27.1294 9.13046H7.91327Z" fill="#6DA544"></path>
                                <path d="M0 14.0003C0 20.0198 3.7993 25.1514 9.13046 27.1295V0.871094C3.7993 2.8492 0 7.9808 0 14.0003Z" fill="#A2001D"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_563_5237">
                                    <rect width="28" height="28" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg></span>
                    <p class="text-[#fff] text-[13px] ">UAE</p>
                </div>
                <div class="flex items-center gap-[6px] "><span class="flex items-center justify-center h-[22px] w-[22px] ">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_649_2362)">
                                <path d="M17.4998 34C26.8886 34 34.4998 26.3888 34.4998 17C34.4998 7.61116 26.8886 0 17.4998 0C8.11092 0 0.499756 7.61116 0.499756 17C0.499756 26.3888 8.11092 34 17.4998 34Z" fill="#F0F0F0"></path>
                                <path d="M4.01477 6.65039C2.6794 8.38778 1.67248 10.3903 1.08618 12.5657H9.93004L4.01477 6.65039Z" fill="#0052B4"></path>
                                <path d="M33.915 12.5656C33.3287 10.3903 32.3217 8.38778 30.9864 6.65039L25.0713 12.5656H33.915Z" fill="#0052B4"></path>
                                <path d="M1.08618 21.4355C1.67255 23.6109 2.67947 25.6134 4.01477 27.3507L9.92984 21.4355H1.08618Z" fill="#0052B4"></path>
                                <path d="M27.8506 3.51459C26.1132 2.17922 24.1108 1.1723 21.9354 0.585938V9.42972L27.8506 3.51459Z" fill="#0052B4"></path>
                                <path d="M7.15063 30.4854C8.88802 31.8207 10.8905 32.8277 13.0658 33.414V24.5703L7.15063 30.4854Z" fill="#0052B4"></path>
                                <path d="M13.0657 0.585938C10.8903 1.1723 8.88784 2.17922 7.15051 3.51452L13.0657 9.42966V0.585938Z" fill="#0052B4"></path>
                                <path d="M21.9352 33.414C24.1105 32.8277 26.113 31.8207 27.8503 30.4854L21.9352 24.5703V33.414Z" fill="#0052B4"></path>
                                <path d="M25.0715 21.4355L30.9867 27.3507C32.322 25.6134 33.329 23.6109 33.9153 21.4355H25.0715Z" fill="#0052B4"></path>
                                <path d="M34.3559 14.7826H19.7173H19.7172V0.143902C18.9913 0.0494063 18.2513 0 17.4998 0C16.7481 0 16.0082 0.0494063 15.2824 0.143902V14.7825V14.7826H0.643658C0.549162 15.5084 0.499756 16.2485 0.499756 17C0.499756 17.7517 0.549162 18.4916 0.643658 19.2174H15.2823H15.2823V33.8561C16.0082 33.9506 16.7481 34 17.4998 34C18.2513 34 18.9913 33.9507 19.7171 33.8561V19.2175V19.2174H34.3559C34.4504 18.4916 34.4998 17.7517 34.4998 17C34.4998 16.2485 34.4504 15.5084 34.3559 14.7826Z" fill="#D80027"></path>
                                <path d="M21.9353 21.4356L29.5213 29.0216C29.8702 28.6728 30.203 28.3082 30.5206 27.9302L24.0259 21.4355H21.9353V21.4356Z" fill="#D80027"></path>
                                <path d="M13.0653 21.4355H13.0652L5.47925 29.0215C5.82801 29.3704 6.19265 29.7032 6.57064 30.0207L13.0653 23.5259V21.4355Z" fill="#D80027"></path>
                                <path d="M13.0653 12.5667V12.5665L5.47926 4.98047C5.13036 5.32923 4.79754 5.69387 4.47998 6.07186L10.9747 12.5666H13.0653V12.5667Z" fill="#D80027"></path>
                                <path d="M21.9353 12.5638L29.5214 4.97773C29.1726 4.62883 28.808 4.296 28.43 3.97852L21.9353 10.4732V12.5638Z" fill="#D80027"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_649_2362">
                                    <rect width="34" height="34" fill="white" transform="translate(0.499878)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </svg></span>
                    <p class="text-[#fff] text-[13px] ">UK</p>
                </div>
                <div class="flex items-center gap-[6px] "><span class="flex items-center justify-center h-[22px] w-[22px] ">
                        <svg class="h-full w-full " viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_649_2381)">
                                <path d="M16.9997 34C26.3885 34 33.9997 26.3888 33.9997 17C33.9997 7.61116 26.3885 0 16.9997 0C7.6108 0 -0.000366211 7.61116 -0.000366211 17C-0.000366211 26.3888 7.6108 34 16.9997 34Z" fill="#F0F0F0"></path>
                                <path d="M-0.000366211 17.0013C-0.000366211 23.4451 3.58485 29.051 8.86919 31.9343V2.06836C3.58485 4.95165 -0.000366211 10.5576 -0.000366211 17.0013Z" fill="#F0F0F0"></path>
                                <path d="M16.9995 0C14.0544 0 11.2843 0.749262 8.86902 2.06703V31.9329C11.2843 33.2507 14.0544 34 16.9995 34C26.3883 34 33.9995 26.3888 33.9995 17C33.9995 7.61122 26.3883 0 16.9995 0Z" fill="#496E2D"></path>
                                <path d="M24.2682 19.8121C22.1175 21.3661 19.1142 20.8824 17.5603 18.7318C16.0062 16.581 16.49 13.5778 18.6407 12.0239C19.3113 11.5394 20.0647 11.253 20.8312 11.1534C19.3566 10.9329 17.7977 11.2652 16.4937 12.2074C13.8467 14.1201 13.2512 17.8163 15.1638 20.4634C17.0764 23.1103 20.7727 23.7058 23.4198 21.793C24.7239 20.8508 25.5288 19.4753 25.7824 18.0058C25.4473 18.7022 24.9388 19.3276 24.2682 19.8121Z" fill="#F0F0F0"></path>
                                <path d="M24.1756 11.0879L25.3871 12.3935L27.0032 11.645L26.1357 13.2005L27.3472 14.5062L25.5996 14.1619L24.7322 15.7175L24.5196 13.9491L22.7721 13.6048L24.3882 12.8563L24.1756 11.0879Z" fill="#F0F0F0"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_649_2381">
                                    <rect width="34" height="34" fill="white" transform="translate(-0.000244141)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </svg></span>
                    <p class="text-[#fff] text-[13px] ">PK</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-[#fff] py-[42px] ">
    <div class="max-w-[1200px] mx-auto lg:flex gap-[12px] md:gap-[32px] items-center justify-between lg:flex-row flex-col px-[15px] md:px-[20px] h-[500px] lg:h-[320px] overflow-hidden ">
        <div class="flex-1 pr-20">
            <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px] sm:text-start ">
                Our Valued Clients</h2>
            <p class="landing__on__scroll text-[12px] md:text-[13px] mt-[9px] text-center sm:text-start text-[#001436] ">Clients choose us for our expertise, innovation, and commitment to their success. We value each partnership and deliver tailored solutions that exceed expectations and drive business growth. Your vision becomes our mission.</p>
        </div>
        <div class="slider !flex-1 rotate-[270deg] pt-16 sm:pt-0 lg:mt-0 sm:mt-32 " reverse="true" style="
            --width: 50px;
            --height: 600px;
            --quantity: 3;
        ">
            <div class="list">
                <div class="item rotate-[90deg] flex gap-2" style="--position: 0.6">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/1.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/2.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/3.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/4.png" alt="">
                </div>
                <div class="item rotate-[90deg] flex gap-2" style="--position: 1.2">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/5.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/6.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/7.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/8.png" alt="">
                </div>
                <div class="item rotate-[90deg] flex gap-2" style="--position: 1.8">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/9.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/10.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/11.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/12.png" alt="">
                </div>
                <div class="item rotate-[90deg] flex gap-2" style="--position: 2.4">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/13.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/14.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/15.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/16.png" alt="">
                </div>
                <div class="item rotate-[90deg] flex gap-2" style="--position: 3">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/17.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/18.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/19.png" alt="">
                    <img class="h-14 sm:h-16" src="/assets/images/Clients Images/20.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-[#E8F0FA] py-[44px] w-full landing__on__scroll ">
    <div class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] ">
        <h2 class=" text-center text-[#0A0E19] font-[600] mt-[20px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px]  ">
            Our Services</h2>
        <div class="space-y-5  transition-all" id="servicesContainer"></div>
        <div class="flex items-center justify-center mt-[22px]  ">
            <a href="/services" class=" flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer">
                <p class="text-[#fff] text-[15px] font-[500] select-none ">View All Services</p>
                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="bg-[#fff] w-full ">
    <div class="max-w-[1200px] mx-auto">
        <div class=" py-[52px] px-[15px] md:px-[20px] ">
            <div class="flex items-center justify-center ">
                <div class="landing__on__scroll rounded-[12px] bg-[#E1ECFF] flex items-center gap-[4px] py-[6px] px-[9px]  ">
                    <span class="bg-[#0D99FF] rounded-[50px] h-[7px] w-[7px] "></span>
                    <p class="text-[12px] text-[#180F34] ">Portfolio</p>
                </div>
            </div>
            <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[20px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px] ">
                Crafting a Unique Solution for Every Project</h2>
            <div class="flex items-center flex-wrap mt-[24px] md:mt-[50px] gap-[22px] justify-center ">
                <a href="/case-studies" class="landing__on__scroll max-w-[430px] w-full cursor-pointer ">
                    <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(234, 225, 202);"><img class="h-[240px] sm:h-[260px] w-full" src="assets/images/Projects/N-Style.png" alt=""></div>
                    <div class="flex items-center justify-between w-full pt-[12px] ">
                        <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">NStyle</h2>
                        <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                            <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">NStyle is a Dubai's Premier beauty lounge offering services for all your beauty needs like Hair, Nails, Massages.</p>
                    <div class="flex items-center gap-[8px] mt-[11px] ">
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            Beauty Parlor</div>
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Salons</div>
                    </div>
                </a>
                <a href="/case-studies" class="landing__on__scroll max-w-[430px] w-full cursor-pointer ">
                    <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(208, 239, 229);"><img class="h-[240px] sm:h-[260px] w-full" src="assets/images/Projects/ConciergeBookings.png" alt=""></div>
                    <div class="flex items-center justify-between w-full pt-[12px] ">
                        <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">EasyRSV
                        </h2>
                        <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                            <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">EasyRSV is a project designed to streamline the process of exploring and reserving exceptional dining experiences.</p>
                    <div class="flex items-center gap-[8px] mt-[11px] ">
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Concierge</div>
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                        Booking</div>
                    </div>
                </a>
                <a href="/case-studies" class="landing__on__scroll max-w-[430px] w-full cursor-pointer ">
                    <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(142, 195, 159); padding-left: 20px; padding-right: 20px;">
                        <img class="h-[240px] sm:h-[260px] w-full" src="assets/images/Projects/Endup.png" alt="">
                    </div>
                    <div class="flex items-center justify-between w-full pt-[12px] ">
                        <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">Endup</h2>
                        <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                            <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">End Up, the cutting-edge logistics platform revolutionizing retail delivery processes for both retailers and riders.</p>
                    <div class="flex items-center gap-[8px] mt-[11px] ">
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            Grocery</div>
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            Marketplace</div>
                    </div>
                </a>
                <a href="/case-studies" class="landing__on__scroll max-w-[430px] w-full cursor-pointer ">
                    <div class="  rounded-[12px] w-full pt-[20px] overflow-hidden " style="background-color: rgb(177, 209, 243);"><img class="h-[240px] sm:h-[260px] w-full" src="assets/images/Projects/OneMove.png" alt=""></div>
                    <div class="flex items-center justify-between w-full pt-[12px] ">
                        <h2 class="text-[#0A0E19] text-[21px] font-[600] line-clamp-1 ">OneMove</h2>
                        <div class="flex items-center justify-center h-[40px] w-[40px] rounded-[50px] bg-[#11335A] cursor-pointer ">
                            <svg width="13" height="14" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 1.94238C18 1.3901 17.5523 0.942383 17 0.942383L8 0.942383C7.44772 0.942383 7 1.3901 7 1.94238C7 2.49467 7.44772 2.94238 8 2.94238L16 2.94238L16 10.9424C16 11.4947 16.4477 11.9424 17 11.9424C17.5523 11.9424 18 11.4947 18 10.9424L18 1.94238ZM1.70711 18.6495L17.7071 2.64949L16.2929 1.23528L0.292894 17.2353L1.70711 18.6495Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-[14px] text-[13px] text-[#0A0E19] line-clamp-2 ">One Move offers a variety of truck services to meet your transportation needs for homes, offices, or other materials.</p>
                    <div class="flex items-center gap-[8px] mt-[11px] ">
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            Logistics</div>
                        <div class="text-[#0D99FF] text-[11px] font-[500] bg-[#DDF0FF] rounded-[30px] px-[11px] py-[4px] ">
                            Marketplace</div>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-center mt-[52px]  landing__on__scroll">
                <a href="/case-studies" class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer">
                    <p class="text-[#fff] text-[15px] font-[500] select-none ">Vew All Projects</p>
                    <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <!-- <div class="pt-[22px] ">
            <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[20px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px]  max-w-[660px] mx-auto ">
                Testimonials</h2>
            <div class="landing__on__scroll w-full flex items-center py-[22px] gap-[14px] md:gap-[18px] mt-[15px] justify-center px-[15px] sm:px-[20px] ">
                <div class="swiper ainlockingliation-swiper  w-full swiper-backface-hidden">
                    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-702px, 0px, 0px); transition-delay: 0ms;">
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="6">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Hashed System exceeded our expectations with a stunning website development & seamless SEO, significantly boosting our online visibility. Their expertise has elevated our brand, showcasing NStyle as Dubai's premier beauty salon.</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="7">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">HS crafted a stunning website that perfectly captures our essence, elevating our online presence. Their SEO expertise has significantly increased our visibility, drawing in diners to experience the best Italian seafood in Dubai.
                                    </p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="0">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Thanks to their expertise, our website now perfectly reflects our professional recording studio services. Significant SEO improvements have increased our online presence, attracting top talent to MNK Studios in Dubai.</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="1">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Lorem
                                        Ipsum&nbsp;is simply dummy text of the printing and type setting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an known printer took a galley</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="2">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Lorem
                                        Ipsum&nbsp;is simply dummy text of the printing and type setting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an known printer took a galley</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="3">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Lorem
                                        Ipsum&nbsp;is simply dummy text of the printing and type setting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an known printer took a galley</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="4">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Lorem
                                        Ipsum&nbsp;is simply dummy text of the printing and type setting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an known printer took a galley</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide max-w-max min-w-fit" style="width: 224px; margin-right: 10px;" data-swiper-slide-index="5">
                            <div class="flex items-center justify-center gap-[22px] flex-wrap ">
                                <div class="w-[300px] rounded-[8px] px-[22px] py-[22px] border border-[#CECDD1] review_card cursor-default ">
                                    <div class=" flex items-center gap-[5px] justify-center  "><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg><svg width="22" height="22" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.981 1.13613C12.3017 0.149008 13.6983 0.149007 14.019 1.13613L16.1272 7.62441C16.2706 8.06586 16.682 8.36475 17.1461 8.36475H23.9683C25.0062 8.36475 25.4378 9.6929 24.5981 10.303L19.0788 14.313C18.7033 14.5858 18.5462 15.0694 18.6896 15.5108L20.7978 21.9991C21.1185 22.9862 19.9887 23.8071 19.149 23.197L13.6298 19.187C13.2542 18.9142 12.7458 18.9142 12.3702 19.187L6.85097 23.197C6.01128 23.8071 4.88148 22.9862 5.20221 21.9991L7.31038 15.5108C7.45382 15.0694 7.29668 14.5858 6.92116 14.313L1.4019 10.303C0.562208 9.69291 0.993752 8.36475 2.03167 8.36475H8.85385C9.31802 8.36475 9.7294 8.06586 9.87284 7.62441L11.981 1.13613Z" fill="#E7B400"></path>
                                        </svg></div>
                                    <p class="text-[15px] text-[#0A0E19] text-center mt-[8px] ">Lorem
                                        Ipsum&nbsp;is simply dummy text of the printing and type setting
                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an known printer took a galley</p>
                                    <div class="flex items-center justify-center mt-[10px] ">
                                        <div class="flex items-center gap-[6px] ">
                                            <div class="rounded-[50px] h-[50px] w-[50px] bg-cover bg-center bg-no-repeat " style="background-image: url(&quot;data:image/png;base64,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&quot;);">
                                            </div>
                                            <div class=" ">
                                                <h2 class="text-[14px] font-[600] text-[#0A0E19] ">Lana
                                                    Bernier</h2>
                                                <p class="text-[#0A0E19] text-[11px] ">Senior Paradigm
                                                    Strategist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing__on__scroll flex items-center justify-center gap-[8px] "><button class="swiper-button-prev-affiliation flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#fff] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM21 7H1V9H21V7Z" fill="#0D99FF"></path>
                    </svg></button><button class="swiper-button-next-affiliation flex items-center justify-center h-[42px] w-[46px] cursor-pointer bg-[#0D99FF] rounded-[12px] border border-[#0D99FF]"><svg width="18" height="15" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.7071 7.29289C21.0976 7.68342 21.0976 8.31658 20.7071 8.70711L14.3431 15.0711C13.9526 15.4616 13.3195 15.4616 12.9289 15.0711C12.5384 14.6805 12.5384 14.0474 12.9289 13.6569L18.5858 8L12.9289 2.34315C12.5384 1.95262 12.5384 1.31946 12.9289 0.928932C13.3195 0.538408 13.9526 0.538408 14.3431 0.928932L20.7071 7.29289ZM0 7H20V9H0V7Z" fill="white"></path>
                    </svg>
                </button>
            </div>
            <div class="landing__on__scroll flex items-center justify-end"><svg width="400" height="200" viewBox="0 0 431 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_563_4881)">
                        <path d="M403.212 1.64843C401.857 0.612104 400.125 0.420084 398.579 1.13601L304.615 44.6751C303.099 45.3773 302.123 46.7954 302.006 48.4687C301.887 50.1424 302.654 51.6868 304.054 52.6023L332.42 71.1271L332.979 95.6724C333 96.6008 333.587 97.3768 334.473 97.6463C334.803 97.7465 335.14 97.7666 335.457 97.7111C335.813 97.6488 336.145 97.4907 336.426 97.2538L336.43 97.2531L353.291 84.76L382.511 103.844C383.482 104.478 384.637 104.707 385.747 104.513C386.106 104.45 386.459 104.344 386.797 104.193C388.199 103.573 389.182 102.298 389.43 100.781L404.936 5.99842C405.212 4.31013 404.567 2.68475 403.212 1.64636L403.212 1.64843ZM334.836 96.4399C334.553 96.3528 334.245 96.0995 334.234 95.6451L333.694 71.9578L345.988 79.9862L335.765 96.1238C335.506 96.4869 335.116 96.5252 334.834 96.4402L334.836 96.4399ZM334.052 70.6902L388.391 20.4923L346.689 78.9445L334.053 70.6923L334.052 70.6902ZM338.514 94.1356L347.04 80.6745L352.164 84.0207L338.514 94.1356ZM403.699 5.79249L388.194 100.568C388.014 101.664 387.304 102.586 386.293 103.033C385.282 103.481 384.123 103.387 383.196 102.781L347.745 79.63L392.961 16.2491C393.149 15.986 393.107 15.6244 392.868 15.4102C392.626 15.1965 392.264 15.198 392.026 15.4187L332.966 69.978L304.737 51.5423C303.725 50.881 303.171 49.7664 303.257 48.5571C303.343 47.3478 304.048 46.3247 305.142 45.8178L399.106 2.27877C400.221 1.76173 401.472 1.89919 402.453 2.64915C403.433 3.39911 403.898 4.57408 403.699 5.79249Z" fill="#0D99FF"></path>
                        <path d="M27.0604 221.814C26.9863 221.827 26.9099 221.828 26.8328 221.812C26.4921 221.745 26.2705 221.413 26.336 221.071C26.4584 220.435 26.5905 219.794 26.7243 219.162C26.7963 218.821 27.1305 218.607 27.4698 218.678C27.8095 218.751 28.0253 219.086 27.9533 219.428C27.82 220.05 27.691 220.685 27.5692 221.312C27.5175 221.575 27.3094 221.769 27.0621 221.812L27.0604 221.814ZM163.295 197.513C163.282 197.516 163.27 197.518 163.256 197.52C162.4 197.616 161.523 197.678 160.649 197.707C160.303 197.719 160.013 197.445 160.001 197.097C159.989 196.75 160.259 196.459 160.607 196.448C161.448 196.42 162.293 196.36 163.115 196.267C163.459 196.229 163.77 196.479 163.809 196.824C163.846 197.157 163.619 197.459 163.295 197.515L163.295 197.513ZM169.551 196.162C169.248 196.215 168.944 196.038 168.846 195.735C168.739 195.404 168.919 195.048 169.249 194.941C170.037 194.686 170.83 194.394 171.609 194.075C171.93 193.944 172.297 194.097 172.427 194.42C172.558 194.743 172.406 195.11 172.085 195.241C171.276 195.572 170.453 195.876 169.633 196.141C169.605 196.15 169.576 196.157 169.547 196.162L169.551 196.162ZM154.344 197.325C154.28 197.336 154.215 197.337 154.147 197.327C153.302 197.204 152.439 197.05 151.583 196.871C151.244 196.8 151.026 196.465 151.096 196.124C151.166 195.784 151.498 195.566 151.839 195.636C152.67 195.811 153.507 195.959 154.326 196.078C154.668 196.129 154.907 196.448 154.858 196.791C154.819 197.067 154.606 197.277 154.346 197.322L154.344 197.325ZM177.641 192.325C177.398 192.367 177.142 192.263 177.003 192.04C176.818 191.746 176.905 191.355 177.197 191.17C177.899 190.725 178.603 190.246 179.286 189.749C179.567 189.546 179.96 189.608 180.162 189.89C180.367 190.172 180.304 190.567 180.023 190.77C179.319 191.283 178.594 191.777 177.868 192.236C177.797 192.281 177.719 192.311 177.641 192.325ZM145.647 195.134C145.544 195.152 145.437 195.145 145.332 195.108C144.529 194.826 143.713 194.517 142.904 194.189C142.582 194.06 142.427 193.692 142.555 193.369C142.683 193.046 143.049 192.89 143.371 193.02C144.161 193.34 144.961 193.642 145.747 193.918C146.075 194.034 146.246 194.394 146.131 194.721C146.053 194.944 145.863 195.096 145.647 195.134ZM215.403 181.824C215.063 181.883 214.737 181.654 214.677 181.311C214.617 180.967 214.844 180.642 215.186 180.582C216.01 180.438 216.847 180.27 217.676 180.089C218.011 180.016 218.348 180.23 218.422 180.571C218.497 180.912 218.284 181.248 217.944 181.322C217.098 181.508 216.244 181.677 215.404 181.826L215.403 181.824ZM209.042 182.586C209.019 182.59 208.996 182.594 208.973 182.594C208.463 182.625 207.942 182.65 207.429 182.667C207.079 182.679 206.728 182.688 206.378 182.691C206.031 182.696 205.746 182.416 205.743 182.068C205.737 181.72 206.014 181.435 206.362 181.431C206.703 181.427 207.044 181.419 207.386 181.408C207.888 181.391 208.394 181.368 208.893 181.337C209.24 181.314 209.537 181.58 209.559 181.926C209.579 182.249 209.353 182.532 209.042 182.586ZM184.657 186.733C184.46 186.768 184.249 186.706 184.099 186.551C183.858 186.301 183.862 185.902 184.111 185.66C184.707 185.076 185.301 184.464 185.876 183.839C186.111 183.583 186.507 183.567 186.763 183.804C187.019 184.04 187.036 184.438 186.8 184.695C186.212 185.335 185.602 185.964 184.989 186.564C184.894 186.655 184.779 186.712 184.66 186.733L184.657 186.733ZM224.107 179.654C223.802 179.707 223.499 179.528 223.402 179.225C223.297 178.894 223.479 178.54 223.809 178.433C224.603 178.179 225.413 177.905 226.219 177.619C226.547 177.504 226.903 177.675 227.02 178.004C227.137 178.331 226.967 178.691 226.641 178.808C225.822 179.101 224.998 179.379 224.191 179.635C224.163 179.644 224.136 179.651 224.108 179.656L224.107 179.654ZM28.9904 213.676C28.8998 213.692 28.8055 213.687 28.7117 213.66C28.3787 213.565 28.1842 213.217 28.2782 212.881C28.5128 212.049 28.7618 211.214 29.0162 210.398C29.1196 210.066 29.4715 209.881 29.8022 209.987C30.1325 210.091 30.3175 210.445 30.2121 210.777C29.96 211.583 29.7154 212.406 29.4852 213.227C29.4168 213.467 29.2191 213.636 28.9904 213.676ZM200.08 182.348C200.023 182.358 199.962 182.36 199.901 182.354C199.047 182.254 198.181 182.132 197.33 181.989C196.988 181.931 196.756 181.607 196.812 181.264C196.869 180.922 197.192 180.688 197.533 180.746C198.364 180.884 199.209 181.005 200.043 181.101C200.387 181.141 200.635 181.453 200.596 181.799C200.563 182.082 200.348 182.301 200.08 182.348ZM232.496 176.46C232.218 176.509 231.931 176.363 231.814 176.091C231.675 175.772 231.818 175.401 232.136 175.261C232.895 174.928 233.676 174.574 234.457 174.207C234.771 174.06 235.145 174.195 235.291 174.511C235.438 174.826 235.304 175.202 234.99 175.348C234.199 175.719 233.408 176.079 232.639 176.416C232.592 176.437 232.543 176.452 232.496 176.46ZM137.423 191.534C137.293 191.557 137.154 191.539 137.028 191.473C136.279 191.086 135.512 190.672 134.747 190.245C134.444 190.076 134.334 189.692 134.502 189.387C134.67 189.083 135.052 188.974 135.355 189.142C136.108 189.563 136.863 189.969 137.601 190.351C137.909 190.511 138.03 190.891 137.872 191.2C137.779 191.382 137.608 191.5 137.423 191.532L137.423 191.534ZM240.563 172.517C240.303 172.562 240.031 172.439 239.901 172.191C239.739 171.882 239.853 171.502 240.16 171.34C240.89 170.95 241.644 170.538 242.402 170.116C242.706 169.947 243.089 170.058 243.256 170.361C243.424 170.664 243.315 171.048 243.013 171.218C242.249 171.644 241.487 172.059 240.751 172.452C240.691 172.484 240.629 172.505 240.565 172.516L240.563 172.517ZM191.291 180.542C191.198 180.559 191.102 180.554 191.006 180.526C190.179 180.28 189.347 180.012 188.535 179.725C188.207 179.61 188.034 179.252 188.148 178.923C188.263 178.594 188.619 178.42 188.947 178.536C189.259 178.646 189.575 178.752 189.89 178.857C190.365 178.183 190.83 177.492 191.273 176.796C191.46 176.503 191.848 176.419 192.14 176.606C192.432 176.794 192.517 177.185 192.331 177.477C191.951 178.075 191.554 178.671 191.149 179.254C191.218 179.276 191.29 179.295 191.359 179.317C191.693 179.417 191.882 179.767 191.785 180.1C191.716 180.338 191.518 180.503 191.291 180.542ZM248.363 168.065C248.113 168.109 247.854 167.998 247.716 167.769C247.537 167.47 247.633 167.084 247.93 166.904C248.662 166.462 249.391 166.017 250.116 165.571C250.41 165.387 250.796 165.482 250.98 165.778C251.161 166.075 251.07 166.462 250.775 166.645C250.046 167.095 249.314 167.543 248.578 167.987C248.511 168.029 248.437 168.054 248.363 168.067L248.363 168.065ZM31.8717 205.149C31.7604 205.168 31.6441 205.159 31.5299 205.113C31.2079 204.983 31.0524 204.616 31.1806 204.293C31.5025 203.486 31.8377 202.683 32.1811 201.902C32.3207 201.583 32.6905 201.44 33.0081 201.581C33.3257 201.721 33.4692 202.093 33.3296 202.412C32.9927 203.181 32.6618 203.972 32.346 204.765C32.2619 204.976 32.0781 205.115 31.872 205.151L31.8717 205.149ZM129.659 186.996C129.511 187.022 129.351 186.995 129.215 186.906C128.526 186.465 127.819 186.004 127.054 185.5C126.764 185.31 126.683 184.919 126.874 184.628C127.063 184.337 127.452 184.256 127.743 184.448C128.503 184.951 129.205 185.406 129.889 185.845C130.181 186.033 130.268 186.421 130.082 186.716C129.984 186.872 129.829 186.969 129.66 186.999L129.659 186.996ZM182.936 177.262C182.81 177.284 182.676 177.267 182.551 177.206C181.777 176.823 181.003 176.416 180.25 175.995C179.946 175.827 179.837 175.443 180.004 175.138C180.172 174.834 180.554 174.724 180.858 174.893C181.594 175.304 182.349 175.701 183.104 176.074C183.416 176.229 183.543 176.606 183.392 176.918C183.3 177.107 183.127 177.226 182.936 177.26L182.936 177.262ZM255.98 163.3C255.739 163.342 255.483 163.24 255.343 163.019C255.156 162.726 255.24 162.335 255.532 162.148C256.25 161.685 256.967 161.223 257.684 160.757C257.976 160.567 258.364 160.65 258.553 160.942C258.742 161.233 258.66 161.625 258.37 161.814C257.654 162.282 256.932 162.748 256.213 163.21C256.14 163.257 256.062 163.286 255.982 163.3L255.98 163.3ZM195.04 172.146C194.914 172.167 194.782 172.152 194.657 172.091C194.346 171.938 194.216 171.56 194.367 171.248C194.734 170.493 195.089 169.714 195.424 168.935C195.561 168.617 195.93 168.469 196.248 168.607C196.565 168.746 196.713 169.117 196.575 169.435C196.232 170.233 195.868 171.028 195.494 171.802C195.402 171.991 195.23 172.112 195.038 172.146L195.04 172.146ZM263.482 158.361C263.245 158.403 262.995 158.306 262.853 158.091C262.661 157.803 262.734 157.411 263.023 157.217C263.732 156.739 264.438 156.26 265.143 155.778C265.43 155.583 265.821 155.658 266.015 155.946C266.21 156.234 266.137 156.626 265.85 156.821C265.143 157.305 264.435 157.785 263.722 158.264C263.646 158.315 263.565 158.347 263.48 158.361L263.482 158.361ZM122.176 182.007C122.021 182.034 121.856 182.003 121.717 181.908C121.008 181.426 120.3 180.946 119.59 180.467C119.301 180.272 119.224 179.88 119.418 179.593C119.612 179.303 120.002 179.228 120.288 179.421C120.998 179.901 121.709 180.382 122.417 180.864C122.704 181.059 122.781 181.451 122.587 181.739C122.488 181.886 122.338 181.978 122.176 182.007ZM35.6947 197.006C35.5588 197.029 35.4148 197.008 35.2835 196.937C34.9801 196.768 34.8685 196.384 35.0361 196.08C35.4516 195.323 35.8859 194.564 36.3263 193.828C36.5056 193.53 36.89 193.433 37.1869 193.614C37.4835 193.792 37.5811 194.181 37.4017 194.479C36.9695 195.2 36.5433 195.944 36.136 196.687C36.0412 196.862 35.8757 196.972 35.6944 197.004L35.6947 197.006ZM175.26 172.594C175.097 172.622 174.925 172.586 174.782 172.481C174.083 171.968 173.392 171.429 172.726 170.885C172.458 170.665 172.416 170.267 172.634 169.999C172.853 169.73 173.249 169.689 173.517 169.908C174.166 170.441 174.842 170.965 175.521 171.465C175.801 171.669 175.862 172.064 175.658 172.345C175.559 172.482 175.415 172.567 175.26 172.594ZM270.875 153.26C270.642 153.301 270.399 153.207 270.253 153.002C270.052 152.717 270.121 152.323 270.405 152.124C271.102 151.631 271.799 151.136 272.494 150.64C272.777 150.437 273.169 150.505 273.369 150.787C273.569 151.07 273.504 151.465 273.223 151.666C272.527 152.165 271.828 152.66 271.129 153.156C271.051 153.21 270.964 153.246 270.876 153.262L270.875 153.26ZM198.313 163.768C198.218 163.784 198.12 163.78 198.021 163.749C197.689 163.647 197.502 163.295 197.603 162.962C197.848 162.154 198.08 161.33 198.289 160.511C198.375 160.174 198.717 159.971 199.053 160.06C199.389 160.146 199.591 160.49 199.504 160.828C199.289 161.665 199.052 162.508 198.801 163.333C198.73 163.567 198.535 163.729 198.309 163.769L198.313 163.768ZM114.678 177.036C114.53 177.062 114.372 177.035 114.236 176.947C113.493 176.476 112.762 176.024 112.062 175.6C111.765 175.419 111.67 175.033 111.847 174.735C112.026 174.437 112.411 174.343 112.708 174.521C113.413 174.948 114.153 175.405 114.903 175.882C115.197 176.067 115.284 176.457 115.1 176.752C115.002 176.907 114.845 177.007 114.676 177.037L114.678 177.036ZM278.155 147.997C277.929 148.037 277.688 147.949 277.541 147.751C277.335 147.471 277.396 147.076 277.674 146.87C278.36 146.362 279.046 145.852 279.729 145.34C280.007 145.131 280.399 145.189 280.607 145.468C280.815 145.747 280.757 146.141 280.481 146.349C279.796 146.864 279.108 147.374 278.418 147.885C278.337 147.944 278.246 147.983 278.156 147.999L278.155 147.997ZM40.5396 189.437C40.3748 189.465 40.1984 189.428 40.0544 189.321C39.7758 189.112 39.7194 188.716 39.9279 188.439C40.4456 187.745 40.9813 187.056 41.5234 186.392C41.7419 186.123 42.1384 186.084 42.4061 186.304C42.6739 186.523 42.7137 186.922 42.4953 187.19C41.9654 187.839 41.4403 188.516 40.9327 189.195C40.8327 189.328 40.69 189.41 40.5376 189.437L40.5396 189.437ZM168.541 166.624C168.339 166.659 168.124 166.594 167.975 166.433C167.382 165.796 166.802 165.138 166.251 164.475C166.028 164.207 166.062 163.811 166.329 163.587C166.594 163.364 166.991 163.401 167.213 163.667C167.751 164.311 168.315 164.953 168.89 165.571C169.128 165.826 169.115 166.225 168.861 166.461C168.768 166.548 168.656 166.601 168.541 166.622L168.541 166.624ZM285.321 142.577C285.098 142.616 284.863 142.534 284.714 142.34C284.503 142.064 284.552 141.669 284.827 141.457C285.502 140.933 286.177 140.408 286.849 139.881C287.124 139.667 287.517 139.717 287.731 139.991C287.944 140.266 287.897 140.662 287.622 140.876C286.948 141.406 286.271 141.931 285.594 142.455C285.512 142.518 285.417 142.558 285.32 142.575L285.321 142.577ZM106.892 172.541C106.762 172.564 106.625 172.545 106.5 172.482C105.732 172.089 104.962 171.714 104.213 171.365C103.899 171.22 103.761 170.845 103.908 170.529C104.052 170.214 104.425 170.076 104.74 170.224C105.502 170.579 106.285 170.962 107.068 171.361C107.378 171.518 107.5 171.9 107.344 172.208C107.251 172.393 107.08 172.51 106.893 172.543L106.892 172.541ZM46.4372 182.667C46.2394 182.701 46.0291 182.64 45.8793 182.487C45.636 182.237 45.6409 181.84 45.8891 181.596C46.5074 180.991 47.1439 180.393 47.7828 179.821C48.0418 179.59 48.4385 179.613 48.6688 179.873C48.899 180.134 48.8773 180.532 48.6183 180.763C47.9941 181.322 47.3698 181.904 46.7666 182.498C46.6725 182.591 46.5571 182.648 46.4376 182.669L46.4372 182.667ZM200.265 154.979C200.201 154.99 200.133 154.991 200.066 154.982C199.724 154.931 199.485 154.612 199.535 154.266C199.657 153.43 199.761 152.58 199.845 151.738C199.88 151.393 200.186 151.141 200.532 151.177C200.876 151.213 201.128 151.523 201.093 151.868C201.005 152.728 200.9 153.597 200.776 154.451C200.735 154.726 200.522 154.934 200.263 154.979L200.265 154.979ZM292.365 137C292.147 137.038 291.916 136.959 291.767 136.774C291.55 136.502 291.591 136.105 291.861 135.887C292.525 135.349 293.186 134.811 293.847 134.269C294.114 134.047 294.51 134.089 294.73 134.36C294.949 134.631 294.91 135.026 294.64 135.246C293.977 135.788 293.314 136.331 292.648 136.869C292.562 136.938 292.464 136.982 292.363 137L292.365 137ZM163.087 159.471C162.842 159.513 162.583 159.407 162.444 159.18C161.988 158.441 161.549 157.681 161.138 156.919C160.972 156.614 161.086 156.231 161.39 156.065C161.696 155.898 162.075 156.013 162.241 156.319C162.642 157.06 163.069 157.8 163.513 158.518C163.696 158.814 163.605 159.203 163.31 159.385C163.239 159.429 163.165 159.457 163.089 159.47L163.087 159.471ZM98.5982 169.111C98.5055 169.127 98.4091 169.123 98.3129 169.095C97.5158 168.859 96.692 168.64 95.8664 168.448C95.5277 168.368 95.3177 168.03 95.3967 167.692C95.4756 167.354 95.8122 167.141 96.1488 167.221C96.9989 167.42 97.8448 167.643 98.6647 167.888C98.9981 167.986 99.1868 168.337 99.0903 168.671C99.0215 168.909 98.8231 169.074 98.5965 169.114L98.5982 169.111ZM53.3341 176.925C53.1013 176.966 52.8556 176.872 52.7111 176.665C52.5126 176.38 52.5818 175.986 52.8655 175.787C53.571 175.293 54.2977 174.809 55.0262 174.349C55.3186 174.164 55.708 174.254 55.8911 174.548C56.0742 174.842 55.9874 175.233 55.6946 175.416C54.9832 175.865 54.274 176.338 53.5835 176.822C53.5059 176.876 53.4206 176.91 53.332 176.925L53.3341 176.925ZM299.287 131.271C299.075 131.308 298.848 131.234 298.7 131.056C298.477 130.789 298.51 130.391 298.774 130.168C299.427 129.617 300.078 129.062 300.726 128.507C300.99 128.282 301.386 128.313 301.611 128.578C301.836 128.844 301.806 129.242 301.541 129.467C300.891 130.024 300.239 130.58 299.584 131.133C299.495 131.209 299.393 131.254 299.288 131.273L299.287 131.271ZM89.7932 167.411C89.7376 167.42 89.6805 167.422 89.6224 167.417C88.7884 167.335 87.9384 167.27 87.0945 167.228C86.7474 167.209 86.4814 166.915 86.499 166.566C86.5167 166.218 86.8098 165.951 87.1569 165.969C88.0201 166.012 88.8914 166.078 89.745 166.163C90.0906 166.196 90.3422 166.506 90.3091 166.851C90.281 167.14 90.0631 167.364 89.7932 167.411ZM61.0847 172.412C60.8128 172.459 60.5341 172.322 60.4097 172.06C60.2612 171.745 60.3952 171.37 60.7069 171.222C61.4833 170.853 62.2787 170.497 63.0765 170.165C63.3951 170.033 63.7634 170.184 63.8982 170.506C64.031 170.828 63.8808 171.196 63.5604 171.331C62.7829 171.656 62.0028 172.004 61.2459 172.362C61.1928 172.386 61.1387 172.404 61.0851 172.414L61.0847 172.412ZM80.8268 167.276C80.8041 167.28 80.7835 167.284 80.7601 167.283C79.9208 167.341 79.0724 167.419 78.2355 167.514C77.892 167.552 77.5789 167.304 77.5399 166.959C77.5008 166.614 77.7481 166.304 78.0909 166.261C78.9464 166.163 79.8158 166.084 80.674 166.025C81.0201 166.001 81.3188 166.264 81.3434 166.612C81.3662 166.937 81.1399 167.221 80.8268 167.276ZM69.4753 169.252C69.1622 169.306 68.8527 169.115 68.7641 168.802C68.6694 168.467 68.8634 168.12 69.1952 168.025C70.0243 167.789 70.8674 167.571 71.7055 167.373C72.0425 167.297 72.3803 167.505 72.4606 167.843C72.5409 168.181 72.3306 168.52 71.9943 168.6C71.1764 168.792 70.3498 169.007 69.5405 169.236C69.5182 169.242 69.498 169.248 69.4774 169.251L69.4753 169.252ZM200.883 145.993C200.848 145.999 200.815 146.002 200.779 146.002C200.433 146.003 200.15 145.722 200.147 145.375C200.141 144.529 200.119 143.674 200.077 142.828C200.061 142.481 200.328 142.187 200.673 142.169C201.019 142.154 201.314 142.422 201.33 142.769C201.373 143.631 201.397 144.508 201.401 145.371C201.402 145.682 201.178 145.943 200.884 145.995L200.883 145.993ZM159.129 151.389C158.838 151.439 158.542 151.278 158.435 150.99C158.13 150.179 157.842 149.349 157.581 148.524C157.477 148.193 157.659 147.839 157.989 147.734C158.321 147.631 158.671 147.813 158.776 148.145C159.029 148.949 159.309 149.758 159.606 150.546C159.728 150.872 159.565 151.236 159.24 151.358C159.202 151.374 159.164 151.383 159.127 151.389L159.129 151.389ZM306.084 125.391C305.876 125.427 305.653 125.357 305.505 125.187C305.274 124.927 305.3 124.527 305.56 124.299C306.199 123.733 306.837 123.165 307.474 122.595C307.733 122.364 308.13 122.386 308.36 122.647C308.59 122.907 308.569 123.306 308.31 123.537C307.671 124.109 307.032 124.679 306.39 125.246C306.299 125.325 306.193 125.374 306.084 125.393L306.084 125.391ZM312.748 119.361C312.544 119.397 312.328 119.33 312.177 119.167C311.941 118.912 311.958 118.512 312.212 118.276C312.839 117.695 313.465 117.114 314.089 116.529C314.343 116.293 314.74 116.307 314.976 116.562C315.212 116.817 315.199 117.216 314.945 117.452C314.319 118.037 313.691 118.623 313.062 119.204C312.971 119.288 312.861 119.341 312.746 119.362L312.748 119.361ZM200.153 137.016C200.153 137.016 200.145 137.017 200.142 137.018C199.799 137.071 199.478 136.837 199.424 136.493C199.374 136.167 199.319 135.839 199.262 135.515C199.173 135.005 199.077 134.491 198.973 133.985C198.905 133.643 199.123 133.31 199.463 133.242C199.807 133.167 200.133 133.394 200.204 133.735C200.309 134.252 200.407 134.777 200.498 135.298C200.556 135.632 200.612 135.965 200.665 136.299C200.718 136.64 200.489 136.959 200.153 137.018L200.153 137.016ZM156.761 142.702C156.419 142.762 156.095 142.533 156.034 142.19C155.885 141.337 155.757 140.468 155.653 139.607C155.612 139.261 155.863 138.948 156.202 138.906C156.545 138.865 156.857 139.111 156.901 139.458C157.003 140.295 157.127 141.141 157.273 141.973C157.333 142.317 157.105 142.642 156.763 142.702L156.761 142.702ZM319.278 113.185C319.08 113.219 318.867 113.158 318.717 113.001C318.476 112.751 318.484 112.351 318.733 112.109C319.347 111.515 319.96 110.92 320.571 110.32C320.82 110.079 321.218 110.084 321.458 110.332C321.702 110.581 321.695 110.979 321.449 111.223C320.836 111.823 320.223 112.42 319.605 113.017C319.513 113.107 319.397 113.162 319.279 113.182L319.278 113.185ZM325.67 106.866C325.477 106.9 325.269 106.842 325.119 106.691C324.873 106.446 324.871 106.046 325.117 105.8C325.717 105.192 326.318 104.584 326.914 103.972C327.157 103.724 327.553 103.719 327.802 103.964C328.051 104.208 328.055 104.606 327.811 104.856C327.211 105.468 326.612 106.081 326.009 106.689C325.913 106.785 325.796 106.844 325.672 106.865L325.67 106.866ZM198.075 128.251C197.772 128.304 197.467 128.125 197.37 127.822C197.109 127.015 196.83 126.204 196.539 125.414C196.418 125.088 196.584 124.726 196.909 124.603C197.232 124.483 197.594 124.648 197.717 124.976C198.015 125.783 198.302 126.61 198.568 127.438C198.674 127.769 198.493 128.125 198.163 128.229C198.134 128.239 198.106 128.246 198.077 128.251L198.075 128.251ZM156.044 133.728C156.005 133.734 155.967 133.737 155.927 133.737C155.58 133.732 155.302 133.446 155.307 133.097C155.319 132.229 155.355 131.353 155.412 130.49C155.436 130.142 155.734 129.879 156.08 129.904C156.426 129.928 156.687 130.228 156.665 130.576C156.608 131.415 156.575 132.27 156.563 133.114C156.559 133.422 156.336 133.674 156.045 133.725L156.044 133.728ZM194.657 119.919C194.393 119.965 194.118 119.836 193.989 119.584C193.604 118.828 193.198 118.073 192.784 117.342C192.612 117.039 192.717 116.654 193.018 116.482C193.319 116.31 193.703 116.416 193.874 116.718C194.3 117.465 194.715 118.237 195.108 119.013C195.266 119.322 195.143 119.702 194.833 119.861C194.777 119.89 194.717 119.909 194.657 119.919ZM157.015 124.78C156.939 124.793 156.858 124.792 156.779 124.776C156.439 124.705 156.221 124.37 156.291 124.03C156.468 123.18 156.669 122.326 156.892 121.491C156.982 121.156 157.325 120.957 157.662 121.045C157.996 121.136 158.194 121.481 158.107 121.818C157.89 122.631 157.693 123.463 157.521 124.288C157.467 124.547 157.26 124.737 157.015 124.78ZM189.891 112.285C189.671 112.324 189.438 112.243 189.291 112.055C188.761 111.382 188.211 110.734 187.656 110.134C187.42 109.879 187.433 109.48 187.687 109.243C187.941 109.007 188.338 109.021 188.574 109.276C189.152 109.902 189.724 110.574 190.275 111.273C190.491 111.547 190.443 111.944 190.173 112.159C190.089 112.227 189.992 112.268 189.894 112.285L189.891 112.285ZM159.738 116.212C159.617 116.233 159.489 116.22 159.367 116.164C159.053 116.019 158.915 115.644 159.059 115.329C159.427 114.529 159.829 113.742 160.252 112.992C160.422 112.689 160.805 112.584 161.106 112.755C161.408 112.926 161.514 113.311 161.344 113.613C160.936 114.333 160.551 115.089 160.198 115.857C160.109 116.051 159.932 116.178 159.736 116.213L159.738 116.212ZM183.323 106.191C183.177 106.216 183.021 106.19 182.883 106.106C182.164 105.658 181.429 105.268 180.698 104.948C180.381 104.809 180.233 104.438 180.372 104.118C180.51 103.799 180.879 103.651 181.199 103.792C181.985 104.136 182.776 104.555 183.548 105.036C183.843 105.219 183.932 105.609 183.751 105.905C183.653 106.063 183.496 106.163 183.325 106.193L183.323 106.191ZM164.707 108.756C164.515 108.789 164.312 108.733 164.161 108.587C163.913 108.344 163.905 107.945 164.148 107.696C164.777 107.044 165.435 106.445 166.106 105.912C166.378 105.696 166.773 105.742 166.988 106.015C167.204 106.289 167.158 106.685 166.886 106.901C166.258 107.399 165.641 107.964 165.051 108.574C164.956 108.674 164.835 108.734 164.709 108.756L164.707 108.756ZM174.816 103.788C174.789 103.793 174.764 103.797 174.737 103.797C174.675 103.8 174.617 103.803 174.556 103.808C173.804 103.854 173.053 103.968 172.324 104.149C171.986 104.229 171.649 104.026 171.564 103.686C171.482 103.349 171.686 103.008 172.023 102.924C172.825 102.726 173.652 102.599 174.478 102.548C174.545 102.545 174.61 102.54 174.678 102.537C175.023 102.521 175.318 102.789 175.334 103.136C175.35 103.458 175.124 103.732 174.817 103.785L174.816 103.788Z" fill="#0D99FF"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_563_4881">
                            <rect width="410.281" height="153.573" fill="white" transform="translate(0 70.6426) rotate(-9.91466)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div> -->
        @include('partials.clienttestimonials')
    </div>
</div>
<div class="w-full bg-[#E8F0FA] ">
    <div class="max-w-[1200px] mx-auto py-[62px] px-[15px] md:px-[20px] ">
        <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[20px] leading-[1.4]leading-[60px] text-[22px] sm:text-[30px] md:text-[42px]  ">
            Success Stories</h2>
        <p class="landing__on__scroll text-[14px] sm:text-[15px] text-[#0A0E19] text-center mt-[12px] ">Our projects showcase
            our dedication to excellence and product delivery, featuring innovative and impactful solutions.
        </p>
        <div class="py-[22px] ">
            <a class="flex items-center justify-center gap-[12px] md:gap-[22px] max-w-[900px] mx-auto flex-col mt-[12px] relative z-10  md:flex-row">
                <div class="mt-[22px] rounded-[12px] pt-[20px] overflow-hidden max-w-[420px] w-full " right" style="background-color: rgb(234, 225, 202);"><img class="landing__on__scroll h-[240px] sm:h-[255px]" src="assets/images/Achievements/N Style.png" alt=""></div>
                <div class="md:block hidden">
                    <div class="text-2xl text-white rounded-full min-w-10 min-h-10 bg-[#8AAAD2] flex items-center justify-center stories__after">
                        <span class="">1</span>
                    </div>
                </div>
                <div class="mt-[22px] max-w-[420px] w-full landing__on__scroll">
                    <h2 class="text-[22px] text-[#0A0E19] font-[600] line-clamp-1 ">NStyle</h2>
                    <p class="text-[13px] mt-[4px] text-[#0A0E19] line-clamp-4 ">NStyle is a Dubai's Premier beauty lounge offering services for all your beauty needs like Hair, Nails, Massages.</p>
                    <!-- <div class="border border-[#0D99FF] mt-[12px] cursor-pointer max-w-max rounded-[12px] px-[18px] py-[9px] flex items-center justify-center gap-[7px] bg-[#fff] ">
                        <p class="text-[#0D99FF] text-[12px] font-[500] ">More info</p><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.94667 3.74646C7.91494 3.66463 7.86736 3.58987 7.80667 3.52646L4.47333 0.193131C4.41117 0.130972 4.33738 0.0816653 4.25617 0.0480251C4.17495 0.0143849 4.08791 -0.00292969 4 -0.00292969C3.82247 -0.00292969 3.6522 0.0675956 3.52667 0.193131C3.46451 0.25529 3.4152 0.329084 3.38156 0.410299C3.34792 0.491513 3.33061 0.578559 3.33061 0.666465C3.33061 0.843999 3.40113 1.01426 3.52667 1.1398L5.72667 3.33313H0.666667C0.489856 3.33313 0.320287 3.40337 0.195262 3.52839C0.070238 3.65342 0 3.82299 0 3.9998C0 4.17661 0.070238 4.34618 0.195262 4.4712C0.320287 4.59623 0.489856 4.66646 0.666667 4.66646H5.72667L3.52667 6.8598C3.46418 6.92177 3.41459 6.99551 3.38074 7.07675C3.34689 7.15799 3.32947 7.24512 3.32947 7.33313C3.32947 7.42114 3.34689 7.50828 3.38074 7.58952C3.41459 7.67075 3.46418 7.74449 3.52667 7.80646C3.58864 7.86895 3.66238 7.91855 3.74362 7.95239C3.82486 7.98624 3.91199 8.00366 4 8.00366C4.08801 8.00366 4.17515 7.98624 4.25638 7.95239C4.33762 7.91855 4.41136 7.86895 4.47333 7.80646L7.80667 4.47313C7.86736 4.40973 7.91494 4.33497 7.94667 4.25313C8.01335 4.09082 8.01335 3.90877 7.94667 3.74646Z" fill="#0D99FF"></path>
                        </svg>
                    </div> -->
                </div>
            </a>
            <a class=" flex items-center justify-center gap-[12px] md:gap-[22px] max-w-[900px] mx-auto flex-col mt-[12px] relative z-10  md:flex-row-reverse">
                <div class="mt-[22px] rounded-[12px] pt-[20px] overflow-hidden max-w-[420px] w-full " left" style="background-color: rgb(208, 239, 229);"><img class="landing__on__scroll h-[240px] sm:h-[255px]" src="assets/images/Achievements/Concierge Bookings.png" alt=""></div>
                <div class="md:block hidden">
                    <div class="text-2xl text-white rounded-full min-w-10 min-h-10 bg-[#8AAAD2] flex items-center justify-center stories__after">
                        <span class="">2</span>
                    </div>
                </div>
                <div class="mt-[22px] max-w-[420px] w-full landing__on__scroll">
                    <h2 class="text-[22px] text-[#0A0E19] font-[600] line-clamp-1 ">EasyRSV</h2>
                    <p class="text-[13px] mt-[4px] text-[#0A0E19] line-clamp-4 ">EasyRSV is a project designed to streamline the process of exploring and reserving exceptional dining experiences.</p>
                    <!-- <div class="border border-[#0D99FF] mt-[12px] cursor-pointer max-w-max rounded-[12px] px-[18px] py-[9px] flex items-center justify-center gap-[7px] bg-[#fff] ">
                        <p class="text-[#0D99FF] text-[12px] font-[500] ">More info</p><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.94667 3.74646C7.91494 3.66463 7.86736 3.58987 7.80667 3.52646L4.47333 0.193131C4.41117 0.130972 4.33738 0.0816653 4.25617 0.0480251C4.17495 0.0143849 4.08791 -0.00292969 4 -0.00292969C3.82247 -0.00292969 3.6522 0.0675956 3.52667 0.193131C3.46451 0.25529 3.4152 0.329084 3.38156 0.410299C3.34792 0.491513 3.33061 0.578559 3.33061 0.666465C3.33061 0.843999 3.40113 1.01426 3.52667 1.1398L5.72667 3.33313H0.666667C0.489856 3.33313 0.320287 3.40337 0.195262 3.52839C0.070238 3.65342 0 3.82299 0 3.9998C0 4.17661 0.070238 4.34618 0.195262 4.4712C0.320287 4.59623 0.489856 4.66646 0.666667 4.66646H5.72667L3.52667 6.8598C3.46418 6.92177 3.41459 6.99551 3.38074 7.07675C3.34689 7.15799 3.32947 7.24512 3.32947 7.33313C3.32947 7.42114 3.34689 7.50828 3.38074 7.58952C3.41459 7.67075 3.46418 7.74449 3.52667 7.80646C3.58864 7.86895 3.66238 7.91855 3.74362 7.95239C3.82486 7.98624 3.91199 8.00366 4 8.00366C4.08801 8.00366 4.17515 7.98624 4.25638 7.95239C4.33762 7.91855 4.41136 7.86895 4.47333 7.80646L7.80667 4.47313C7.86736 4.40973 7.91494 4.33497 7.94667 4.25313C8.01335 4.09082 8.01335 3.90877 7.94667 3.74646Z" fill="#0D99FF"></path>
                        </svg>
                    </div> -->
                </div>
            </a>
            <a class=" flex items-center justify-center gap-[12px] md:gap-[22px] max-w-[900px] mx-auto flex-col mt-[12px] relative z-10  md:flex-row">
                <div class="mt-[22px] rounded-[12px] pt-[20px] overflow-hidden max-w-[420px] w-full " right" style="background-color: rgb(177, 209, 243);"><img class="landing__on__scroll h-[240px] sm:h-[255px]" src="assets/images/Achievements/OneMove.png" alt=""></div>
                <div class="md:block hidden">
                    <div class="text-2xl text-white rounded-full min-w-10 min-h-10 bg-[#8AAAD2] flex items-center justify-center ">
                        <span class="">3</span>
                    </div>
                </div>
                <div class="mt-[22px] max-w-[420px] w-full landing__on__scroll">
                    <h2 class="text-[22px] text-[#0A0E19] font-[600] line-clamp-1 ">OneMove</h2>
                    <p class="text-[13px] mt-[4px] text-[#0A0E19] line-clamp-4 ">One Move offers a variety of truck services to meet your transportation needs for homes, offices, or other materials.</p>
                    <!-- <div class="border border-[#0D99FF] mt-[12px] cursor-pointer max-w-max rounded-[12px] px-[18px] py-[9px] flex items-center justify-center gap-[7px] bg-[#fff] ">
                        <p class="text-[#0D99FF] text-[12px] font-[500] ">More info</p><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.94667 3.74646C7.91494 3.66463 7.86736 3.58987 7.80667 3.52646L4.47333 0.193131C4.41117 0.130972 4.33738 0.0816653 4.25617 0.0480251C4.17495 0.0143849 4.08791 -0.00292969 4 -0.00292969C3.82247 -0.00292969 3.6522 0.0675956 3.52667 0.193131C3.46451 0.25529 3.4152 0.329084 3.38156 0.410299C3.34792 0.491513 3.33061 0.578559 3.33061 0.666465C3.33061 0.843999 3.40113 1.01426 3.52667 1.1398L5.72667 3.33313H0.666667C0.489856 3.33313 0.320287 3.40337 0.195262 3.52839C0.070238 3.65342 0 3.82299 0 3.9998C0 4.17661 0.070238 4.34618 0.195262 4.4712C0.320287 4.59623 0.489856 4.66646 0.666667 4.66646H5.72667L3.52667 6.8598C3.46418 6.92177 3.41459 6.99551 3.38074 7.07675C3.34689 7.15799 3.32947 7.24512 3.32947 7.33313C3.32947 7.42114 3.34689 7.50828 3.38074 7.58952C3.41459 7.67075 3.46418 7.74449 3.52667 7.80646C3.58864 7.86895 3.66238 7.91855 3.74362 7.95239C3.82486 7.98624 3.91199 8.00366 4 8.00366C4.08801 8.00366 4.17515 7.98624 4.25638 7.95239C4.33762 7.91855 4.41136 7.86895 4.47333 7.80646L7.80667 4.47313C7.86736 4.40973 7.91494 4.33497 7.94667 4.25313C8.01335 4.09082 8.01335 3.90877 7.94667 3.74646Z" fill="#0D99FF"></path>
                        </svg>
                    </div> -->
                </div>
            </a>
        </div>
        <a href="/case-studies" class="landing__on__scroll flex items-center justify-center mt-[52px]  ">
            <div class="flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer">
                <p class="text-[#fff] text-[15px] font-[500] select-none ">Explore Projects</p>
                <div class="bg-[#fff] rounded-[50px] p-[6px] "><svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                    </svg></div>
            </div>
        </a>
    </div>
</div>
<div class="w-full bg-[#fff]  ">
    <div class="max-w-[1338px] mx-auto pt-[32px] px-[15px] md:px-[20px] ">
        <h2 class="landing__on__scroll text-center text-[#0A0E19] font-[600] mt-[20px] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px] ">Unlocking Business Potential Through Our Expertise</h2>
        <div class="landing__on__scroll w-full flex items-center overflow-auto py-[22px] gap-[12px] mt-[15px]">
            <div class="business-expertise-prev cursor-pointer flex items-center justify-center px-[16px] py-[12px] bg-[#0D99FF] rounded-[7px] text-[15px] cursor-pointer select-none font-[400] gap-[7px] ">
                <div class="bg-[#fff] rounded-[50px] flex items-center justify-center h-[24px] w-[24px] ">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
            </div>
            <div class="swiper business-expertise  w-full">
                    <div class="swiper-wrapper" id='techStackSlider1' style="transition-duration: 0ms; transform: translate3d(-511.875px, 0px, 0px); transition-delay: 0ms;  "></div>
            </div>
            <div class="business-expertise-next cursor-pointer flex items-center justify-center px-[16px] py-[12px] bg-[#0D99FF] rounded-[7px] text-[15px] cursor-pointer select-none font-[400] gap-[7px] ">
                <div class="bg-[#fff] rounded-[50px] flex items-center justify-center h-[24px] w-[24px] ">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto px-[15px] md:px-[20px]">
        <div class="flex items-center justify-center gap-[22px] mt-[22px] flex-col lg:flex-row min-h-60 landing__on__scroll" id='techStackDetailWrapper'>
            <img class="w-full lg:w-[600px] lg:h-[350px] rounded-[20px] " id='tech__stack_detail__image' src = 'https://i.pinimg.com/564x/79/c6/2d/79c62d94154fb332afb84191a996e66f.jpg' ></img>
            <div class="flex-1">
                <h2 class=" text-[22px] text-[#001436] font-[600]" id = 'tech__stack__name'  >Data Analytics</h2>
                <p class=" text-[12px] text-[#001436] mt-[6px] line-clamp-[8] " id = 'tech__stack__desc' >Lorem Ipsum&nbsp;is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker
                    including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="mt-[70px] rounded-[20px] bg-[#0D99FF] px-[30px] md:px-[50px] py-[32px] md:py-[42px] flex justify-between lg:flex-row flex-col gap-[18px] md:gap-[22px] items-center landing__on__scroll">
            <h3 class=" text-[22px] md:text-[28px] xl:text-[35px] text-[#fff] font-[600] text-center ">Ready To Empower Your Product Vision With Us?</h3>
            <a href='#contact_form' class="flex items-center gap-[14px] bg-[#FFFFFF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max">
                <p class=" text-[#0D99FF] text-[15px] font-[500] select-none whitespace-nowrap ">Get Quote</p>
                <div class="bg-[#0D99FF] rounded-[50px] p-[6px] "><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28976 13.0104C8.95781 13.3424 8.41962 13.3424 8.08768 13.0104C7.75573 12.6785 7.75573 12.1403 8.08768 11.8083L12.896 7L8.08768 2.19167C7.75573 1.85973 7.75573 1.32154 8.08768 0.989592C8.41962 0.657647 8.95781 0.657647 9.28976 0.989592L14.6991 6.39896ZM0.0730858 6.15H14.0981V7.85H0.0730858V6.15Z" fill="white"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    @include('partials.technology')
    <div class="max-w-[1200px] mx-auto px-[15px] pb-[32px] md:px-[20px]">
        @include('partials.awards&recognitions')
    </div>
</div>
@include('partials.portfolio-slider')
@endsection

@push('scripts')
<!-- Initialize Swiper -->
<script>
    // var ainlockingliationSwiper = new Swiper('.ainlockingliation-swiper', {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     centeredSlides: true,
    //     loop: true,
    //     autoplay: {
    //         delay: 1900,
    //         disableOnInteraction: false,
    //     },
    //     navigation: {
    //         nextEl: '.swiper-button-next-affiliation',
    //         prevEl: '.swiper-button-prev-affiliation',
    //     },
    //     breakpoints: {
    //         100: {
    //             slidesPerView: 1,
    //         },
    //         340: {
    //             slidesPerView: 2,
    //         },
    //         600: {
    //             slidesPerView: 4,
    //         },
    //         1024: {
    //             slidesPerView: 5,
    //         },
    //         1440: {
    //             slidesPerView: 6,
    //         },
    //     },
    // });








//   var businessExpertiseSwiper = new Swiper('.business-expertise , business-expertise-second', {
//     slidesPerView: 10,
//     spaceBetween: 10,
//     centeredSlides: true,
//     loop: true,
//     navigation: {
//         nextEl: ".business-expertise-next , business-expertise-second-next",
//         prevEl: ".business-expertise-prev , busbusiness-expertise-second-prev",
//       },
//     breakpoints: {
//         100: {
//             slidesPerView: 5,
//         },
//         1024: {
//             slidesPerView: 5,
//         },
//         1440: {
//             slidesPerView: 5,
//         },
//     },
// });

// var businessExpertiseSwiper = new Swiper('.business-expertise-second', {
//     slidesPerView: 10,
//     spaceBetween: 10,
//     centeredSlides: true,
//     loop: true,
//     navigation: {
//         nextEl: ".business-expertise-second-next",
//         prevEl: ".business-expertise-second-prev",
//       },
//     breakpoints: {
//         100: {
//             slidesPerView: 5,
//         },
//         1024: {
//             slidesPerView: 5,
//         },
//         1440: {
//             slidesPerView: 5,
//         },
//     },
// });

//     const swiper = new Swiper('.swiper1', {
//         slidesPerView: 1,
//         spaceBetween: 10,
//         pagination: {
//             el: '.swiper-pagination',
//         },
//         breakpoints: {
//             320: {
//                 slidesPerView: 1,
//             },
//         },
//         autoplay: {
//             delay: 1600,
//             disableOnInteraction: false,
//         },
//     })



// const logos = [
//     ['/assets/images/Clients Images/1.png', '/assets/images/Clients Images/2.png', '/assets/images/Clients Images/3.png', '/assets/images/Clients Images/4.png'],
//     ['/assets/images/Clients Images/5.png', '/assets/images/Clients Images/6.png', '/assets/images/Clients Images/7.png', '/assets/images/Clients Images/8.png'],
//     ['/assets/images/Clients Images/9.png', '/assets/images/Clients Images/10.png', '/assets/images/Clients Images/11.png', '/assets/images/Clients Images/12.png'],
//     ['/assets/images/Clients Images/13.png', '/assets/images/Clients Images/14.png', '/assets/images/Clients Images/15.png', '/assets/images/Clients Images/16.png'],
//     ['/assets/images/Clients Images/17.png', '/assets/images/Clients Images/18.png', '/assets/images/Clients Images/19.png', '/assets/images/Clients Images/20.png']
// ];

// // Create a new array that repeats the logos array 10 times
// const repeatedLogos = Array(10).fill(logos).flat();

// const logoSlider = document.getElementById('logoSlider');

// repeatedLogos.forEach(logoSet => {
//     const slide = document.createElement('div');
//     slide.className = 'logo-slide flex items-center justify-center gap-4';

//     logoSet.forEach(src => {
//         const img = document.createElement('img');
//         img.className = 'w-32';
//         img.src = src;
//         img.alt = '';
//         slide.appendChild(img);
//     });

//     logoSlider.appendChild(slide);
// });






    // const logoSliderContainer = document.querySelector('.logo-slider-container');

    // logoSliderContainer.addEventListener('mouseenter', () => {
    //     logoSlider.classList.add('paused');
    // });

    // logoSliderContainer.addEventListener('mouseleave', () => {
    //     logoSlider.classList.remove('paused');
    // });




    const swiper = new Swiper('.swiper-container', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
        },
        navigation: {
            nextEl: '.swiper-button-next-header',
            prevEl: '.swiper-button-prev-header',
            enabled: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        on: {
            init: function () {
                animateSlide(this.slides[this.activeIndex]);
            },
            slideChange: function () {
                const prevSlide = this.slides[this.previousIndex];
                const currentSlide = this.slides[this.activeIndex];
                
                resetAnimations(prevSlide);

                animateSlide(currentSlide);
            },
        },
    });

    function animateSlide(slide) {
        slide.querySelectorAll('.animate-heading').forEach((element) => {
            element.classList.add('animate-heading-active');
        });

        setTimeout(() => {
            slide.querySelectorAll('.scale-up-bottom').forEach((element) => {
            element.classList.add('scale-up-bottom-active');
        });
        }, 400);

        setTimeout(() => {
            slide.querySelectorAll('.animate-paragraph').forEach((element) => {
                element.classList.add('animate-paragraph-active');
            });
        }, 200);

        setTimeout(() => {
            slide.querySelectorAll('.animate-button').forEach((element) => {
                element.classList.add('animate-button-active');
            });
        }, 300);



        setTimeout(() => {
            slide.querySelectorAll('.animate-images1').forEach((element) => {
                element.classList.add('animate-images1-active');
            });
        }, 500);
        setTimeout(() => {
            slide.querySelectorAll('.animate-images2').forEach((element) => {
                element.classList.add('animate-images2-active');
            });
        }, 650);
        setTimeout(() => {
            slide.querySelectorAll('.animate-images3').forEach((element) => {
                element.classList.add('animate-images3-active');
            });
        }, 800);
        setTimeout(() => {
            slide.querySelectorAll('.animate-images4').forEach((element) => {
                element.classList.add('animate-images4-active');
            });
        }, 950);

        slide.querySelectorAll('img').forEach((img) => {
            img.classList.add('light-effect');
        });
        console.log(slide);
    }

    function resetAnimations(slide) {
        slide.querySelectorAll('.animate-heading').forEach((element) => {
            element.classList.remove('animate-heading-active');
        });

        slide.querySelectorAll('.animate-paragraph').forEach((element) => {
            element.classList.remove('animate-paragraph-active');
        });

        slide.querySelectorAll('.animate-button').forEach((element) => {
            element.classList.remove('animate-button-active');
        });

        slide.querySelectorAll('.animate-images1').forEach((element) => {
            element.classList.remove('animate-images1-active');
        });
        slide.querySelectorAll('.animate-images2').forEach((element) => {
            element.classList.remove('animate-images2-active');
        });
        slide.querySelectorAll('.animate-images3').forEach((element) => {
            element.classList.remove('animate-images3-active');
        });
        slide.querySelectorAll('.animate-images4').forEach((element) => {
            element.classList.remove('animate-images4-active');
        });

        slide.querySelectorAll('img').forEach((img) => {
            img.classList.remove('light-effect');
        });
    }

    window.addEventListener('load', () => {
        const initialSlide = document.querySelector('.swiper-slide-active');
        if (initialSlide) {
            animateSlide(initialSlide);
        }
    });


    const logoSlider = document.getElementById('logoSlider');
// const clonedSlider = logoSlider.cloneNode(true);
logoSlider.parentNode.appendChild(clonedSlider);

</script>
@endpush