@extends('layouts.master')
@section('title', 'Error - Hashed System')
@section('description', '')
@section('content')

<section class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] gap-[30px] h-[calc(100vh-78px)] justify-between flex items-center lg:flex-row flex-col ">
    <div class="flex-1">
        <h3 class="text-[#0A0E19] font-[500] text-[24px] sm:text-[28px] md:text-[34px] " >Accept our appologies!</h3>
        <p class="text-[14px] sm:text-[15px] text-[#0A0E19] mt-[8px] ">The page you were looking for doesn't exist. You may have misstyped the address or the page may have moved.</p>
        <a href="/" class=" flex items-center gap-[14px] bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer max-w-max mt-[16px] sm:mt-[22px] ">
            <p class="text-[#fff] text-[15px] font-[500] select-none ">Go to Home page</p>
            <div class="bg-[#fff] rounded-[50px] p-[6px] ">
                <svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                </svg>
            </div>
        </a>
    </div>
    <div class="">
        <h2 class="text-[150px] sm:text-[220px] md:text-[280px] font-[300] ">404</h2>
    </div>
</section>

@php
    $isErrorPage = true;
@endphp

@endsection