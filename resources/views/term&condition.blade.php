@extends('layouts.master')
@section('title', 'Terms & Conditions - Hashed System')
@section('description', '')
@section('content')
            <section class="max-w-[1200px] mx-auto px-[15px] md:px-[20px] py-[72px]  ">
                <h2
                    class="text-center text-[#0A0E19] landing__on__scroll font-[600] leading-[32px] sm:leading-[50px] text-[22px] sm:text-[30px] md:text-[42px]  ">
                    Terms & Conditions</h2>
                <div class="mt-[52px] landing__on__scroll ">
                    <div class="border-b-[0.6px] border-[#000000] single_row_main transition">
                        <div class="flex-1 w-full transition ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex transition items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    1. Definitions</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p>1.1. In these Terms and Conditions, the following words and expressions shall have the meanings set out below:</p>
                                <li class="list-disc mt-[18px] ">Agreement: Refers to these Terms and Conditions, including any amendments or addendums.
                                </li>
                                <li class="list-disc ">Client: The business or individual entering into a contract for services with the software house.
                                </li>
                                <li class="list-disc ">Software House: Refers to [Your Software House Name] responsible for providing the services.
                                </li>
                                <li class="list-disc ">Project: The specific task or set of tasks agreed upon between the Software House and the Client, as outlined in the Project Specification.
                                </li>
                                <li class="list-disc ">Specification: The document or agreement annexed to the Letter of Engagement, which details the project scope.
                                </li>
                                    <p class="list-decimal ">1.2. Governing Law: The construction, validity, and performance of these conditions shall be governed by [Country] law.
                                    </p>
                                    <p class="list-decimal ">1.3. Validity of Terms: These Terms apply to all services provided by the Software House to the Client.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    2. Projects' Deal and Development</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">2.1. Upon signing the Agreement, the Software House commits to providing services as outlined in the Specification document.</p>
                                <p class="list-disc ">2.2. The Client must supply all required information and resources to start and complete the project on time.</p>
                                <p class="list-disc ">2.3. Any changes to the project scope after the agreement must be documented and may result in additional costs or changes in delivery time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    3. Improvised Specification</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">3.1. Any improvisation or change in the project Specification must be agreed upon by both parties.</p>
                                <p class="list-disc ">3.2. The Client agrees that such changes may result in additional fees or time required to complete the work.</p>
                                <p class="list-disc ">3.3. The Software House reserves the right to reject major changes that deviate from the original scope without a new agreement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    4. Payment</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">4.1. Payments shall be made as per the milestones set in the agreement.</p>
                                <p class="list-disc">4.2. Invoices are due within [x] days of the issuance date.</p>
                                <p class="list-disc ">4.3. Late payments will incur a late fee of [x%] per month after the due date.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    5. Outstanding Payments</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">5.1. If the Client has outstanding payments beyond [x] days, the Software House reserves the right to halt further development until the outstanding balance is settled.</p>
                                <p class="list-disc">5.2. Failure to pay outstanding fees within [x] days may result in legal action or referral to a collection agency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    6. Client Obligations</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">6.1. The Client agrees to provide accurate, up-to-date information necessary for the completion of the project.

                                </p>
                                <p class="list-disc">6.2. The Client shall ensure prompt communication and cooperation for timely project completion.

</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    7. Warranties</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">7.1. The Software House guarantees that the services provided will substantially meet the project Specification.
                                </p>
                                <p class="list-disc ">7.2. The Client acknowledges that software is complex, and as such, there may be minor bugs or issues, which the Software House will attempt to resolve promptly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    8. Copyright and Ownership</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">8.1. Upon full payment, the Client shall hold the rights to the deliverables, excluding third-party software or frameworks used in development.</p>
                                <p class="list-disc ">8.2. The Software House retains the right to use the project for promotional purposes unless specifically requested otherwise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    9. Agreement</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">9.1. This Agreement forms the entire agreement between the parties and supersedes any previous agreements or discussions.</p>
                                <p class="list-disc ">9.2. Any amendments to this Agreement must be made in writing and signed by both parties.

</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-[0.6px] border-[#000000] single_row_main">
                        <div class="flex-1 w-full ">
                            <div
                                class="py-[9px] px-[22px] bg-transparent flex items-center justify-between gap-[14px] text-[#001436da] cursor-default single_row ">
                                <p class="text-[15px] md:text-[17px] font-[600] ">
                                    10. Compensations</p>
                                <p class="text-[32px] cursor-pointer px-[5px] plus_btn select-none " onclick="plus_btn(this)" >+</p>
                            </div>
                            <div class="px-[22px] py-[9px] bg-[#fff] hidden hidden_div transition text-[13px] text-[#001436] ">
                                <p class="list-decimal ">10.1. The Software House will not be liable for any indirect or consequential loss arising from the project.</p>
                                <p class="list-disc ">10.2. Any disputes will be resolved through negotiation; however, if the resolution fails, legal action may be pursued in [jurisdiction].</p>

                            </div>
                        </div>
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


    // ==> core JS
    // 
    // 
    // terms & condition
    // 
    // 



    let value = true;

    function plus_btn(e) {
        let singleRowMain = e.closest('.single_row_main');
        let plusBtn = singleRowMain.querySelector('.plus_btn');
        let singleRow = singleRowMain.querySelector('.single_row');
        let hiddenDiv = singleRowMain.querySelector('.hidden_div');
        
        if (value == true) {
            plusBtn.innerHTML = '-';
            singleRow.classList.add('!text-[#fff]');
            singleRow.classList.add('!bg-[#0D99FF]');
            hiddenDiv.classList.add('!block');
            value = false;
        }else{
            plusBtn.innerHTML = '+';
            singleRow.classList.remove('!text-[#fff]');
            singleRow.classList.remove('!bg-[#0D99FF]');
            hiddenDiv.classList.remove('!block');
            value = true;
        }
    }
    </script>
@endpush