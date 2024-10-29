@extends('layouts.master')
@section('title', ' About Us - Hashed System | Transforming Vision into Reality')
@section('description', 'Learn about Hashed System’s expert software solutions, approach, and values. Discover how we deliver exceptional bespoke softwares.')
@section('content')
<section class="w-full bg-[#062345] landing__on__scroll ">
    <div class="max-w-[900px] w-[90%] md:w-full mx-auto py-[120px] px-[15px] md:px-[20px] ">
        <h2 class="text-[34px] sm:text-[42px] md:text-[55px] font-[600] text-[#fff] text-center ">About Us
        </h2>
        <p class=" text-[14px] sm:text-[16px] md:text-[18px] text-[#fff] text-center font-[300] mt-[12px] ">
            We're a team of passionate problem-solvers who cultivate a culture of expertise, collaboration, and continuous innovation. We empower businesses to thrive through cutting-edge software and SaaS solutions.</p>
    </div>
</section>
<main class="bg-[#fff] w-full ">
    <div class="max-w-[1200px] mx-auto py-[74px] px-[15px] md:px-[20px] ">
        <div class="max-w-[900px] mx-auto ">
            <div class="flex items-center justify-center gap-1 text-[#0D99FF] text-[16px] md:text-[18px] text-center font-[400]">
                Defining <h3 class="text-[#0D99FF] text-[16px] md:text-[18px] text-center font-[400]"> Our Culture</h3>
            </div>
            <p class="landing__on__scroll text-[20px] md:text-[22px] text-[#000000] text-center mt-[11px] font-[300] ">
                Our culture is the heartbeat of our organization. Built on curiosity, collaboration, and unwavering integrity, it fuels our passion for delivering innovative software solutions. This shared spirit empowers us to stay adaptable, think creatively, and drive growth for our clients in an ever-evolving digital landscape.</p>
        </div>
        <div class="flex items-start justify-center mt-[62px] gap-[72px] flex-wrap ">
            <div class="flex items-center justify-center flex-col max-w-[180px] landing__on__scroll">
                <h2 class="text-[#0D99FF] text-[34px] md:text-[42px] font-[600] text-center flex items-center gap-[0px] " id="counter">
                    <p class="num" data-valur="90">0</p>+
                </h2>
                <p class="text-center text-[12px] md:text-[13px] text-[#001436] line-clamp-3 ">Product
                    solutions delivered</p>
            </div>
            <div class="flex items-center justify-center flex-col max-w-[180px] landing__on__scroll">
                <h2 class="text-[#0D99FF] text-[34px] md:text-[42px] font-[600] text-center flex items-center gap-[0px] ">
                    <p class="num" data-valur="12">0</p>
                </h2>
                <p class="text-center text-[12px] md:text-[13px] text-[#001436] line-clamp-3 ">Business
                    Domain</p>
            </div>
            <div class="flex items-center justify-center flex-col max-w-[180px] landing__on__scroll">
                <h2 class="text-[#0D99FF] text-[34px] md:text-[42px] font-[600] text-center flex items-center gap-[0px] ">
                    <p class="num" data-valur="20">0</p>+
                </h2>
                <p class="text-center text-[12px] md:text-[13px] text-[#001436] line-clamp-3 ">Skill-gaps
                    bridges through staff augmentation</p>
            </div>
            <div class="flex items-center justify-center flex-col max-w-[180px] landing__on__scroll">
                <h2 class=" text-[#0D99FF] text-[34px] md:text-[42px] font-[600] text-center flex items-center gap-[0px] ">
                    <p class="num" data-valur="150">0</p>+
                </h2>
                <p class=" text-center text-[12px] md:text-[13px] text-[#001436] line-clamp-3 ">Skilled
                    professional</p>
            </div>
        </div>
    </div>
</main>
<div class="w-full bg-[#E8F0FA] ">
    <div class=" max-w-[1200px] mx-auto py-[36px] px-[15px] md:px-[20px] ">
        <h2 class="mt-[46px] text-center text-[#0A0E19] font-[600] leading-[32px] sm:leading-[50px] text-[22px] sm:text-[30px] md:text-[42px] ">
            Our Values
        </h2>
        <div class="mt-[22px] flex items-center justify-center gap-[22px] flex-wrap ">
            <div class="landing__on__scroll bg-[#fff] max-w-[285px] w-full flex flex-col items-center justify-center p-8 rounded-[20px] ">
                <img class=" h-[95px] " src="data:image/png;base64,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" alt="">
                <h3 class=" text-[#0A0E19] text-center text-[18px] font-[600] mt-[16px] line-clamp-1 ">
                    Integrity
                </h3>
                <p class=" text-[12px] text-[#0A0E19] text-center mt-[12px] line-clamp-4 ">
                    Building long lasting trust through unwavering honesty, transparency, and delivering excellence.
                </p>
            </div>
            <div class="bg-[#fff] landing__on__scroll max-w-[285px] w-full flex flex-col items-center justify-center p-8 rounded-[20px] ">
                <img class=" h-[95px] " src="data:image/png;base64,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" alt="">
                <h3 class=" text-[#0A0E19] text-center text-[18px] font-[600] mt-[16px] line-clamp-1 ">
                    Innovation
                </h3>
                <p class=" text-[12px] text-[#0A0E19] text-center mt-[12px] line-clamp-4 ">
                    Embracing innovative tech to drive business evolution, fuel growth, and shape the future.
                </p>
            </div>
            <div class="landing__on__scroll bg-[#fff] max-w-[285px] w-full flex flex-col items-center justify-center p-8 rounded-[20px] ">
                <img class="h-[95px] " src="data:image/png;base64,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" alt="">
                <h3 class="text-[#0A0E19] text-center text-[18px] font-[600] mt-[16px] line-clamp-1 ">
                    Client-Centric
                </h3>
                <p class="text-[12px] text-[#0A0E19] text-center mt-[12px] line-clamp-4 ">
                    Tailoring bespoke tech solutions to clients' unique challenges, empowering their success every step forward.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="w-full bg-[#fff] ">
    <div class="max-w-[1200px] mx-auto flex items-center pt-[50px] lg:pt-[110px] pb-[110px] px-[15px] md:px-[20px] lg:flex-row flex-col ">
        <div class="flex-1 lg:pr-[120px] ">
            <h2 class="landing__on__scroll text-[#0A0E19] font-[600] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px] ">
                Empowering Industrial Landscape through Innovative Solutions
            </h2>
            <div class="landing__on__scroll text-[#0a0e19cd] mt-[22px] space-y-5 ">
                <p class="">
                    We revolutionize industries with pioneering technology solutions. Our expert software development and IT services amplify productivity, streamline operations, and drive business growth. By fusing human insight with cutting-edge innovation, we craft tailored solutions that overcome complexities and unlock new possibilities.
                </p>
                <div class="space-y-2">
                    <p class="">
                        Our transformative approach empowers businesses to thrive. We boost efficiency, enhance decision-making, and foster sustainable growth through:
                    </p>
                    <ul class="list-disc">
                        <li class="">Collaborative expertise</li>
                        <li class="">Seamless integration</li>
                        <li class="">Future-proof innovations</li>
                    </ul>
                    <p>Together, let's reshape the industrial landscape and propel your business forward.</p>
                </div>
            </div>
        </div>
        <div class=" flex sm:flex-1 items-center justify-end sm:max-w-max w-full relative mt-[26px] lg:mt-[0px] ">
            <img class="landing__on__scroll h-[340px] sm:h-[390px] md:h-[430px] " src="/assets/images/aboutPage/InnovativeSolutions.png" alt="">
            <img class="landing__on__scroll h-[300px] sm:h-[390px] md:h-[400px] absolute right-[24%] sm:right-[30%] top-[26%] " src="/assets/images/aboutPage/IndustrialLandscape.png" alt="">
        </div>
    </div>
</div>
<div class="w-full bg-[#E8F0FA]  ">
    <div class="max-w-[1200px] mx-auto px-[12px] md:px-[20px] py-[50px] ">
        <h2 class="landing__on__scroll text-[#0A0E19] font-[600] leading-[1.4] text-[22px] sm:text-[30px] md:text-[42px] ">
            Our Approach
        </h2>
        <p class="landing__on__scroll text-[14px] sm:text-[15px] text-[#0a0e19cd] mt-[11px] ">Our approach combines expertise with collaboration, transforming your vision into a successful digital product. Our client-centric approach ensures your goals are our top priority. With open communication, iterative refinement, and continuous improvement, we deliver impactful digital products that empower your success.</p>
        <div class="flex items-center justify-center gap-[18px] mt-[30px] flex-wrap ">
            <div class="swiper ourCoreValue-swiper flex swiper-initialized swiper-horizontal mySwiper w-full">
                <div class="swiper-wrapper flex" style="transition-duration: 0ms; transform: translate3d(-804.375px, 0px, 0px); transition-delay: 0ms;">
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">01</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                Problem Diagnosis
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Unlocking your success starts with understanding. We engage in comprehensive discussions to grasp your business goals, challenges, and vision, gather requirements, and set clear expectations.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">02</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                Strategy Formulation
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Charting your path to success. We craft a tailored roadmap, defining project scope, timeline, milestones, and key performance indicators to ensure focused execution and measurable progress.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">03</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                Prototyping
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Bringing ideas to life. We craft interactive prototypes with intuitive, user-friendly interfaces, gather your feedback, and refine them to ensure seamless functionality and exceptional user experience.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">04</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                Development of the Product
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Transforming vision into reality. Our expert developers turn prototypes into scalable, customizable software solutions, leveraging industry best practices and cutting-edge technology.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">05</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                Testing and Quality Assurance
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Ensuring flawless performance. Our rigorous testing process scrutinizes software functionalities, security standards, and user experience, delivering bug-free solutions that exceed expectations.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">06</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3">
                                Deployment and Launch
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Your solution, live. We expertly deploy and launch your software, ensuring seamless integration, optimal performance, and timely delivery, marking the start of your success story.</p>
                        </div>
                    </div>
                    <div class="swiper-slide !flex items-center justify-center" style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                        <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full !min-h-[300px]">
                            <!-- <div class="flex items-center justify-between w-full ">
                                <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">06</p>
                                <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                            </div> -->
                            <h3 class="landing__on__scroll mt-[8px] text-[#fff] font-medium text-2xl w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3">
                                Support and Maintenance
                            </h3>
                            <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 line-clamp-[7] ">Your partner for the long haul. Our dedicated support team ensures seamless maintenance, timely updates, and expert troubleshooting, empowering your ongoing success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="flex items-center justify-center lg:items-start mt-[42px] gap-[22px]">
                        <div class="swiper swiper-initialized swiper-horizontal mySwiper w-full">
                            <div class="swiper-wrapper"
                                style="transition-duration: 0ms; transform: translate3d(-356.667px, 0px, 0px); transition-delay: 0ms;">
                                <div class="swiper-slide !flex items-center justify-center"
                                    style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="0">
                                    <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full ">
                                        <div class="flex items-center justify-between w-full ">
                                            <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">01</p>
                                            <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                                        </div>
                                        <h2
                                            class="landing__on__scroll mt-[8px] text-[#fff] font-[500] text-[32px] line-clamp-1 w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                            People first</h2>
                                        <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 ">Get
                                            smart with the data as we audit, consult, and implement effective data
                                            strategies for your business to gain an edge in this data-driven world. Our
                                            specialized team will help you digest the abstract data with attractive
                                            visualizations and insightful reports.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev !flex items-center justify-center"
                                    style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="1">
                                    <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full ">
                                        <div class="flex items-center justify-between w-full ">
                                            <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">02</p>
                                            <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                                        </div>
                                        <h2
                                            class="landing__on__scroll mt-[8px] text-[#fff] font-[500] text-[32px] line-clamp-1 w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                            Passion-Driven</h2>
                                        <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 ">Get
                                            smart with the data as we audit, consult, and implement effective data
                                            strategies for your business to gain an edge in this data-driven world. Our
                                            specialized team will help you digest the abstract data with attractive
                                            visualizations and insightful reports.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active !flex items-center justify-center"
                                    style="width: 346.667px; margin-right: 10px;" data-swiper-slide-index="2">
                                    <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full ">
                                        <div class="flex items-center justify-between w-full ">
                                            <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">03</p>
                                            <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                                        </div>
                                        <h2
                                            class="landing__on__scroll mt-[8px] text-[#fff] font-[500] text-[32px] line-clamp-1 w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                            Embracing challenges</h2>
                                        <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 ">Get
                                            smart with the data as we audit, consult, and implement effective data
                                            strategies for your business to gain an edge in this data-driven world. Our
                                            specialized team will help you digest the abstract data with attractive
                                            visualizations and insightful reports.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next !flex items-center justify-center"
                                    data-swiper-slide-index="3" style="width: 346.667px; margin-right: 10px;">
                                    <div class="bg-[#10335A] rounded-[20px] px-[22px] py-[22px] max-w-[320px] w-full ">
                                        <div class="flex items-center justify-between w-full ">
                                            <p class="landing__on__scroll text-[#0D99FF] text-[14px] ">04</p>
                                            <div class="landing__on__scroll bg-[#0D99FF] rounded-[12px] h-[52px] w-[52px] "></div>
                                        </div>
                                        <h2
                                            class="landing__on__scroll mt-[8px] text-[#fff] font-[500] text-[32px] line-clamp-1 w-full border-b border-[#0D99FF] py-[4px] max-w-[85%] pb-3 ">
                                            Dream Big, Act Fast</h2>
                                        <p class="landing__on__scroll text-[13px] mt-[16px] text-[#ffffffcf] max-w-[80%] leading-6 ">Get
                                            smart with the data as we audit, consult, and implement effective data
                                            strategies for your business to gain an edge in this data-driven world. Our
                                            specialized team will help you digest the abstract data with attractive
                                            visualizations and insightful reports.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
    </div>
</div>
@include('partials.awards&recognitions')
<div class="w-full bg-[#fff] ">
    <div class="max-w-[1200px] mx-auto mt-[20px] md:mt-[72px] px-[12px] sm:px-[20px] ">
        <h2 class="landing__on__scroll text-[#0A0E19] font-[600] leading-[32px] sm:leading-[60px] text-[22px] sm:text-[30px] md:text-[42px] ">
            Our People and Culture
        </h2>
        <p class="landing__on__scroll mt-3 text-[13px] text-[#0A0E19] ">Our community is built on a simple yet powerful idea: that together, we're unstoppable. We open the doors to creativity, encouraging bold ideas and diverse perspectives. Collaboration is woven into everything we do, from brainstorming sessions to celebratory milestones. Every voice matters, and every contribution counts. We own our successes and learn from setbacks, growing together as individuals and as a team. The result? A vibrant culture where excellence is the norm and growth knows no bounds.</p>
        <div class="mt-7 flex items-center gap-[22px] md:flex-row flex-col ">
            <div class="flex flex-col gap-[22px] flex-1 ">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/Inclusivity&Diversity.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Inclusivity & Diversity</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">Striving to do the highest
                        Unity in diversity. We blend diverse backgrounds, perspectives, and ideas to craft innovative solutions that meet our clients' needs</p>
                </div>
            </div>
            <div class="flex flex-col gap-[22px] flex-1">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/Teamwork&Collaboration.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Teamwork & Collaboration</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">United for client success. Open communication, bold ideas, and seamless collaboration drive exceptional results, exceeding expectations and forging lasting relationships.</p>
                </div>
            </div>
            <div class="flex flex-col gap-[22px] flex-1 ">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/Creativity&Innovation.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Creativity & Innovation</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">Igniting creativity, inspiring innovation. We encourage bold thinking, empower novel solutions, and foster continuous learning to tackle complex challenges.</p>
                </div>
            </div>
        </div>
        <div class="my-[70px] flex items-center gap-[22px] md:flex-row flex-col ">
            <div class="flex flex-col gap-[22px] flex-1">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/TakingOwnership.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Taking Ownership</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">Own it. Empowered to lead, equipped to succeed. We trust our team to take charge, drive results, and make a lasting impact every day, with passion and excellence.</p>
                </div>
            </div>
            <div class="flex flex-col gap-[22px] flex-1">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/Recognition.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Recognition</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">Appreciating excellence every step of the way. We recognize and reward achievements, timely deliveries, and extra-mile efforts that drive our success.</p>
                </div>
            </div>
            <div class="flex flex-col gap-[22px] flex-1">
                <div class="landing__on__scroll h-[270px] sm:h-[300px] bg-cover bg-no-repeat bg-center rounded-[20px] " src="" alt="" style="background-image: url(/assets/images/aboutPage/Accountability.jpeg);">
                </div>
                <div class="flex-1 ">
                    <h3 class="landing__on__scroll text-[22px] text-[#001436] font-[600] ">Accountability</h3>
                    <p class="landing__on__scroll text-[12px] text-[#001436] mt-[6px] line-clamp-4 ">Own your actions and earn client trust. We hold ourselves accountable for delivering exceptional experiences, fostering transparency, and upholding the highest standards.</p>
                </div>
            </div>
        </div>
        @include('partials.clienttestimonials')
    </div>
</div>
@include('partials.portfolio-slider')
@endsection

@push('scripts')
<!-- Initialize Swiper -->
<script>
    var ainlockingliationSwiper = new Swiper('.ourCoreValue-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        autoplay: {
            delay: 1900,
            disableOnInteraction: false,
        },
        // navigation: {
        //     nextEl: '.swiper-button-next-affiliation',
        //     prevEl: '.swiper-button-prev-affiliation',
        // },
        breakpoints: {
            100: {
                slidesPerView: 1,

            },
            350: {
                slidesPerView: 1,

            },
            700: {
                slidesPerView: 2,

            },
            1024: {
                slidesPerView: 3,

            },
            1440: {
                slidesPerView: 3,

            },
        },
    });

    const swiper = new Swiper('.swiper1', {
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