@extends('layouts.master')
@section('title', 'Blog Details - Hashed System')
@section('description', '')
@section('content')
            <main class=" w-full bg-[#fff] ">
                <section class="max-w-[1000px] mx-auto px-[15px] md:px-[20px] py-[52px] landing__on__scroll ">
                    <p class=" text-center text-[18px] font-[300] text-[#0D99FF] ">Blog Details</p>
                    <h2
                        class="text-center text-[#0A0E19] font-[600] mt-[20px] leading-[32px] sm:leading-[50px] text-[22px] sm:text-[30px] md:text-[42px]  ">
                        {{$blog->name}}</h2>
                    <div
                        class=" border-t border-[#99A1A5] py-[13px] mt-[22px] flex items-center justify-between gap-[22px] flex-wrap ">

                        <span class="rounded-[30px] bg-[#DDF0FF] px-[16px] py-[4px] flex items-center justify-center text-[#0D99FF] text-[11px] font-[500] "> {{ ucfirst($blog->type) }}</span>


                        <div class=" flex items-center gap-[15px] flex-row-reverse ">
                            <p class="text-[#0D99FF] text-[11px] font-[500] whitespace-nowrap ">{{ $blog->created_at->format('d F Y') }}</p>
                        </div>
                    </div>
                    <div class="h-[500px] w-full rounded-[20px] bg-cover bg-no-repeat bg-center landing__on__scroll "
                         style="background-image: url('{{ asset('storage/' . $blog->banner_image) }}');"></div>
                    <p class="mt-[32px] text-[13px] text-[#0A0E19] font-[400] ">{!! $blog->description !!}</p>
                    <div class="flex items-center gap-[22px] py-[32px] flex-col sm:flex-row ">
                        <div class="h-[280px] sm:h-[320px] w-full sm:flex-1 bg-cover bg-no-repeat bg-center rounded-[20px] landing__on__scroll "
                             style="background-image: url('{{ asset('storage/' . $blog->second_image) }}');"></div>
                        <div class="h-[280px] sm:h-[320px] w-full sm:flex-1 bg-cover bg-no-repeat bg-center rounded-[20px] landing__on__scroll "
                             style="background-image: url('{{ asset('storage/' . $blog->third_image) }}');">
                        </div>
                    </div>


                </section>
            </main>

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
