<div class="w-full bg-[#fff] landing__on__scroll !z-0" id="contact_form">
    <form class="max-w-[1200px] mx-auto py-[50px] px-[15px] md:px-[20px]" method="POST" action="{{ route('leads.store') }}" id="leadForm">
        @csrf
        <input type="hidden" name="type" value="lead">
        <h2 class="text-center text-[#0A0E19] font-[600] mt-[20px] leading-[32px] sm:leading-[50px] text-[22px] sm:text-[30px] md:text-[42px] max-w-[660px] mx-auto">
            Have a project? Let's discuss
        </h2>
        <p class="text-[14px] sm:text-[15px] text-[#0A0E19] text-center mt-[16px]">Once you submit this form, expect to hear back from us within 24 hours.</p>
        <div class="flex items-start gap-20 pt-9">
            <div class="flex-1">
                <div class="space-y-3">
                    <div class="flex items-start gap-7 w-full flex-col sm:flex-row">
                        <div class="flex-1 w-full">
                            <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="name">Your Name *</label>
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]" type="text" placeholder="Enter Your Name" id="name" name="name" required>
                            <p class="text-red-500 text-sm mt-1 hidden" id="nameError">Please enter your name.</p>
                        </div>
                        <div class="flex-1 w-full">
                            <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="mobile">Your Phone *</label>
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]" type="text" placeholder="Enter Your Phone" id="mobile" name="mobile" required>
                            <p class="text-red-500 text-sm mt-1 hidden" id="mobileError">Please enter your phone number.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-7 w-full flex-col sm:flex-row">
                        <div class="flex-1 w-full">
                            <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="company">Company</label>
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]" type="text" placeholder="Enter Company" name="company" id="company">
                            <p class="text-red-500 text-sm mt-1 hidden" id="companyError">Please enter your company name.</p>
                        </div>
                        <div class="flex-1 w-full">
                            <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="email">Email *</label>
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]" type="email" placeholder="Enter Email" id="email" name="email" required>
                            <p class="text-red-500 text-sm mt-1 hidden" id="emailError">Please enter a valid email address.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-7 w-full flex-col sm:flex-row">
                    <div class="flex-1 w-full">
                        <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="service">Service *</label>
                        <div class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]">
                            <select class="w-full h-full bg-transparent border-none focus:border-none focus:outline-none" name="service" id="service" required>
                                <option value="">Select a Service</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Mobile Apps Development">Mobile Apps Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Product Development">Product Development</option>
                                <option value="WordPress Development">WordPress Development</option>
                                <option value="AWS Cloud">AWS Cloud</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="serviceError">Please select a service.</p>

                        <!-- Hidden input for custom service -->
                        <div class="mt-3 hidden" id="customServiceDiv">
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1]" type="text" placeholder="Enter service" name="customService" id="customService">
                            <p class="text-red-500 text-sm mt-1 hidden" id="customServiceError">Please enter your custom service.</p>
                        </div>
                    </div>
                    <div class="flex-1 w-full">
                        <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="industry">Industry *</label>
                        <div class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px]">
                            <select class="w-full h-full bg-transparent border-none focus:border-none focus:outline-none" name="industry" id="industry" required>
                                <option value="">Select an Industry</option>
                                <option value="SaaS">SaaS</option>
                                <option value="E-Commerce">E-Commerce</option>
                                <option value="Logistic Apps">Logistic Apps</option>
                                <option value="Rider Apps">Rider Apps</option>
                                <option value="Custom Web Solutions">Custom Web Solutions</option>
                                <option value="Market Places">Market Places</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="industryError">Please select an industry.</p>

                        <!-- Hidden input for custom industry -->
                        <div class="mt-3 hidden" id="customIndustryDiv">
                            <input class="w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1]" type="text" placeholder="Enter industry" name="customIndustry" id="customIndustry">
                            <p class="text-red-500 text-sm mt-1 hidden" id="customIndustryError">Please enter your custom industry.</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="w-full mt-[26px]">
                    <div class="flex-1">
                        <label class="text-[#0A0E19] text-base pb-1 font-[300] whitespace-nowrap" for="message">Your Message *</label>
                        <textarea class="resize-none w-full border-[1px] rounded-[5px] outline-none text-[#1E2549] text-[14px] p-[11px] border-[#CECDD1] mt-[3px] h-40" name="message" id="message" placeholder="Write Your Message" required></textarea>
                        <p class="text-red-500 text-sm mt-1 hidden" id="messageError">Please enter your message.</p>
                    </div>
                </div>
                <div class="pt-5">
                    <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                    <div class="recaptcha-error" style="color: red;"></div>
                </div>
                <div class="flex items-center w-fit gap-[14px] mt-5 bg-[#0D99FF] rounded-[7px] px-[22px] py-[12px] cursor-pointer" id="submitBtn">
                    <p class="text-[#fff] text-[15px] font-[500] select-none">Submit</p>
                    <div class="bg-[#fff] rounded-[50px] p-[6px]">
                        <svg width="12" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6991 6.39896C15.0311 6.7309 15.0311 7.2691 14.6991 7.60104L9.28977 13.0104C8.95783 13.3424 8.41964 13.3424 8.08769 13.0104C7.75575 12.6785 7.75575 12.1403 8.08769 11.8083L12.896 7L8.08769 2.19167C7.75575 1.85973 7.75575 1.32154 8.08769 0.989592C8.41964 0.657647 8.95783 0.657647 9.28977 0.989592L14.6991 6.39896ZM0.073101 6.15H14.0981V7.85H0.073101V6.15Z" fill="#3B2E71"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-1 pt-20 hidden lg:block">
                <img src="{{ asset('assets/images/get__in__touch.png') }}" alt="">
            </div>
        </div>

    </form>
    <div class="rounded-[10px] bg-[#11335A] max-w-[420px] w-full p-[12px] fixed -top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-10 popup transition-five-second top">
        <span class="bg-[#0D99FF] rounded-[50%] ml-[6px] h-[100px] md:h-[110px] w-[100px] md:w-[110px] flex items-center justify-center absolute translate-y-[50%] -translate-x-[50%] -top-[36%] left-[50%]">
            <i class="fa-solid fa-check text-[50px] md:text-[70px] text-[#fff]"></i>
        </span>
        <div class="px-[8px] md:px-[20px]">
            <h2 class="text-[24px] md:text-[32px] font-[600] text-center text-[#fff] pt-[80px]">Thank You!</h2>
            <p class="text-[#fff] text-center text-[13px] md:text-[15px] mt-[10px]">Your message has been successfully submitted. Our team will contact you as soon as possible. Thanks!</p>
        </div>
        <div onclick="closePopup()" class="rounded-[7px] select-none font-[600] w-full flex items-center mt-[42px] justify-center py-[9px] text-[#fff] cursor-pointer bg-[#0D99FF]">
            Ok
        </div>
    </div>
</div>
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    var recaptcha = document.querySelector(".g-recaptcha");
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault();
        let isValid = true;

        const fields = [{
                id: 'name',
                errorId: 'nameError'
            },
            {
                id: 'mobile',
                errorId: 'mobileError'
            },
            // { id: 'company', errorId: 'companyError' },
            {
                id: 'email',
                errorId: 'emailError'
            },
            {
                id: 'service',
                errorId: 'serviceError'
            },
            {
                id: 'industry',
                errorId: 'industryError'
            },
            {
                id: 'message',
                errorId: 'messageError'
            },
        ];

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const error = document.getElementById(field.errorId);
            if (input.value.trim() === '') {
                input.classList.add('border-red-500');
                error.classList.remove('hidden');
                isValid = false;
            } else if (field.id === 'email' && !emailRegex.test(input.value)) {
                input.classList.add('border-red-500');
                error.textContent = 'Please enter a valid email address.';
                error.classList.remove('hidden');
                isValid = false;
            } else {
                input.classList.remove('border-red-500');
                error.classList.add('hidden');
            }
        });

        if (isValid) {
            // Check if reCAPTCHA is checked
            if (grecaptcha.getResponse().length === 0) {
                // If reCAPTCHA is not checked, display an error message
                var recaptchaError = document.querySelector(".recaptcha-error");
                recaptchaError.textContent = "Please complete the reCAPTCHA.";
            } else {
                // If reCAPTCHA is checked, submit the form
                document.querySelector("#leadForm").submit();
            }
        }
    });


    document.getElementById('service').addEventListener('change', function() {
        const customServiceDiv = document.getElementById('customServiceDiv');
        if (this.value === 'Other') {
            customServiceDiv.classList.remove('hidden');
        } else {
            customServiceDiv.classList.add('hidden');
            document.getElementById('customService').value = ''; // Reset custom input if hidden
        }
    });

    document.getElementById('industry').addEventListener('change', function() {
        const customIndustryDiv = document.getElementById('customIndustryDiv');
        if (this.value === 'Other') {
            customIndustryDiv.classList.remove('hidden');
        } else {
            customIndustryDiv.classList.add('hidden');
            document.getElementById('customIndustry').value = ''; // Reset custom input if hidden
        }
    });
</script>
@endpush