// document.addEventListener('DOMContentLoaded', () => {
const services = [
    {
        image: '/assets/images/Services/web-dev.png',
        title: 'Custom Web Applications',
        description: 'Craft impactful online presence with expert website development. We build responsive, scalable, and secure websites leveraging the latest technologies.',
        detailedDescription: "Craft impactful online presence with expert website development. We build responsive, scalable, and secure websites leveraging the latest technologies. Driving engagement and conversions through intuitive, user-centric design experiences.",
        href: ''
    },
    {
        image: '/assets/images/Services/mobile-application-service-icon.png',
        title: 'Mobile Apps Development',
        description: "Build seamless mobile apps with Flutter. Its layered architecture enables flexible designs and high-speed rendering, allowing us to focus on optimized user experiences. ",
        detailedDescription: "Build seamless mobile apps with Flutter. Its layered architecture enables flexible designs and high-speed rendering, allowing us to focus on optimized user experiences. Flutter empowers us to deliver customized front-end and back-end mobile solutions.",
        href: ''
    },
    {
      image: '/assets/images/Services/uiux-solutions.png',
      title: 'UI/UX Design',
      description: "Craft intuitive experiences with our UI/UX design expertise. Our team creates user-centered interfaces, balancing aesthetics and functionality.",
      detailedDescription: "Craft intuitive experiences with our UI/UX design expertise. Our team creates user-centered interfaces, balancing aesthetics and functionality. Enhance engagement, conversion, and brand loyalty through seamless digital interactions.",
      href: ''
    },
    {
      image: '/assets/images/Services/product-service-icon.png',
      title: 'Product Development',
      description: 'Bring your product vision to life with our expert team. We develop innovative software products using the latest technologies to meet your requirements',
      detailedDescription: 'Bring your product vision to life with our expert team. We develop innovative software products using the latest technologies to meet your requirements. With intelligent solutions and seamless execution, we help transform your ideas into successful reality.',
      href: ''
    },
    {
        image: '/assets/images/Services/DigitalMarketing.png',
        title: 'Digital Marketing',
        description: "Unlock digital growth with strategic marketing expertise. Our tailored campaigns combine SEO, content, and paid advertising for maximum ROI.",
        detailedDescription: "Unlock digital growth with strategic marketing expertise. Our tailored campaigns combine SEO, content, and paid advertising for maximum ROI. By amplifying your brand's online potential, we drive measurable results and sustainable business success.",
        href: ''
    },
];

let currentlyOpenIndex = null;

function renderServices(services) {
    const container = document.getElementById('servicesContainer');
    if (container) { 
      container.innerHTML = "";
    }

    services.forEach((service, index) => {
        const serviceDiv = document.createElement('div');
        serviceDiv.className = `service mt-[18px] w-full px-[18px] md:px-[32px] py-[9px] rounded-[20px] border-[0.7px] border-[#CECDD1] flex items-center bg-[#fff] gap-[12px] sm:gap-[18px] md:gap-[28px] overflow-auto sm:flex-row flex-col transition-all`;
        serviceDiv.id = `service-${index}`;

        serviceDiv.innerHTML = `
            <div class="flex items-center justify-start gap-[18px] md:gap-[28px] flex-1 full_width">
                <img class="max-h-[100px] min-h-[100px] object-contain max-w-[90px]" src="${service.image}" alt="${service.title}">
                <h3 class="text-start leading-6 text-[18px] flex-1">${service.title}</h3>
            </div>
            <div class="flex items-center gap-[18px] md:gap-[28px] flex-[3]">
                <p class="text-[14px] text-[#001436] text-start flex-[5] line-clamp-3">${service.description}</p>
                <div class="bg-[#ABDCFF] cursor-pointer rounded-[50px] p-[9px] flex items-center justify-center" onclick="showDetail(${index})">
                    <svg width="13" height="13" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.36797 9.41719V15.2332C9.36797 15.8992 8.82809 16.4391 8.16211 16.4391C7.49613 16.4391 6.95625 15.8992 6.95625 15.2332V9.41719H1.19766C0.536209 9.41719 0 8.88098 0 8.21953C0 7.55808 0.53621 7.02187 1.19766 7.02187H6.95625V1.20586C6.95625 0.539881 7.49613 0 8.16211 0C8.82809 0 9.36797 0.539882 9.36797 1.20586V7.02187H15.1266C15.788 7.02187 16.3242 7.55808 16.3242 8.21953C16.3242 8.88098 15.788 9.41719 15.1266 9.41719H9.36797Z" fill="#0D99FF"></path>
                    </svg>
                </div>
            </div>
        `;

        if (container) {
          container.appendChild(serviceDiv);
        }
    });
}

function showDetail(index) {
    if (currentlyOpenIndex !== null && currentlyOpenIndex !== index) {
        // Hide the currently open detailed view
        hideDetail(currentlyOpenIndex);
    }

    const service = services[index];
    // Show the detailed view
    const container = document.getElementById(`service-${index}`);
    container.style.padding = '0';
    container.classList.add = 'transition-all';

    container.innerHTML = `
        <div class="bg-[#0D99FF] w-full rounded-[20px] p-[30px] flex gap-[42px] items-center flex-col-reverse sm:flex-row">
            <div class="flex-[4]">
                <h2 class="text-[#fff] font-[500] text-[24px] md:text-[28px] text-start">${service.title}</h2>
                <p class="text-[12px] sm:text-[13px] text-[#FFFFFF] text-start mt-[12px] line-clamp-4">${service.detailedDescription}</p>
                <div class="flex items-center justify-between mt-[22px]">
                  <div class="sm:hidden block">
                      <div class="flex items-center justify-end">
                          <div class="bg-[#ABDCFF] rounded-[50px] h-[32px] w-[32px] flex items-center justify-center cursor-pointer" onclick="hideDetail(${index})">
                              <svg width="17" height="3" viewBox="0 0 17 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.1266 0.0214844H1.19766C0.536209 0.0214844 0 0.557693 0 1.21914C0 1.88059 0.53621 2.4168 1.19766 2.4168H15.1266C15.788 2.4168 16.3242 1.88059 16.3242 1.21914C16.3242 0.557693 15.788 0.0214844 15.1266 0.0214844Z" fill="#0D99FF"></path>
                              </svg>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class=" flex items-center justify-center flex-1">
                <div class="w-full">
                    <img class="w-[110px] sm:w-[140px] md:w-[180px] object-contain" src="${service.image}" alt="${service.title}">
                    <div class="hidden sm:block">
                        <div class="flex items-center justify-end">
                            <div class="bg-[#ABDCFF] rounded-[50px] h-[32px] w-[32px] flex items-center justify-center cursor-pointer" onclick="hideDetail(${index})">
                                <svg width="17" height="3" viewBox="0 0 17 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1266 0.0214844H1.19766C0.536209 0.0214844 0 0.557693 0 1.21914C0 1.88059 0.53621 2.4168 1.19766 2.4168H15.1266C15.788 2.4168 16.3242 1.88059 16.3242 1.21914C16.3242 0.557693 15.788 0.0214844 15.1266 0.0214844Z" fill="#0D99FF"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    container.classList.remove('hidden');
    currentlyOpenIndex = index;
}

function hideDetail(index) {
    currentlyOpenIndex = null;
    renderServices(services);
}

document.addEventListener('DOMContentLoaded', () => {
    renderServices(services);
});





// ***************   Animation Script ***************


const headerAnimation = (elementsSelector, animationClass, delay = 0) => {
    const elements = document.querySelectorAll(elementsSelector);

    const handleAnimation = () => {
        elements.forEach((item, index) => {
            item.style.animationDelay = `${delay * index}ms`;
            item.classList.add(animationClass);
        });
    };

    // Initial animation check
    handleAnimation();
};

// Define all your animations with the generic function
headerAnimation('.herder__img', 'landing__zoom__out');
headerAnimation('.header__main__heading', 'landing__slide__up', 200);
    
let animationItems = document.querySelectorAll('.landing__on__scroll')
        const showAnimationItems = () => {
            const windowHeight = window.innerHeight;

            animationItems.forEach(item => {
                const topFromWindow = item.getBoundingClientRect().top;
                if (topFromWindow < windowHeight) {
                    item.classList.add('landing__on__scroll__active')
                }
            });
        }

        showAnimationItems();
        window.addEventListener('scroll', showAnimationItems)


// 
// Counting on scroll JS
// 

let valueDisplays = document.querySelectorAll('.num');
let interval = 2200;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-valur"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function() {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    } , duration)
})

// *************** Technologies And TechStack  **************
const technologies = [
    {
      id: 1,
        svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_1_527)">
        <mask id="mask0_1_527" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
        <path d="M0 0H24V24H0V0Z" fill="white"/>
        </mask>
        <g mask="url(#mask0_1_527)">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6836 9.6C16.7556 10.3548 16.8 11.1504 16.8 12C16.8 12.3183 16.6736 12.6235 16.4485 12.8485C16.2235 13.0736 15.9183 13.2 15.6 13.2C15.2817 13.2 14.9765 13.0736 14.7515 12.8485C14.5264 12.6235 14.4 12.3183 14.4 12C14.4 11.1444 14.3532 10.3464 14.274 9.6H9.7104C9.5436 11.196 9.5424 12.804 9.7056 14.4H12C12.3183 14.4 12.6235 14.5264 12.8485 14.7515C13.0736 14.9765 13.2 15.2817 13.2 15.6C13.2 15.9183 13.0736 16.2235 12.8485 16.4485C12.6235 16.6736 12.3183 16.8 12 16.8H10.0992C10.662 19.296 11.5416 20.892 12.0012 21.6C12.0012 21.6 12.948 21.6156 13.1124 21.6024C13.4293 21.5818 13.7415 21.6867 13.9818 21.8944C14.222 22.1021 14.3709 22.3959 14.3964 22.7124C14.4195 23.0297 14.3157 23.3432 14.1078 23.5839C13.8999 23.8247 13.6049 23.9731 13.2876 23.9964C13.1748 24.0048 12 24 12 24C5.3832 24 0 18.6168 0 12C0 5.382 5.3832 0 12 0C18.6168 0 24 5.382 24 12C24 12.4548 23.9568 12.8988 23.9052 13.3392C23.8575 13.6464 23.6927 13.9231 23.4452 14.1112C23.1978 14.2994 22.887 14.3842 22.5783 14.348C22.2696 14.3118 21.9869 14.1574 21.7897 13.9171C21.5925 13.6768 21.4961 13.3695 21.5208 13.0596C21.5628 12.7104 21.6 12.36 21.6 12C21.6 11.1696 21.4824 10.368 21.2844 9.6H16.6836ZM11.9856 2.4432C11.5224 3.1704 10.6656 4.7604 10.1088 7.2H13.8732C13.314 4.7604 12.4512 3.1704 11.9856 2.4432ZM2.7156 14.4H7.2984C7.22348 13.6038 7.18544 12.8045 7.1844 12.0048C7.1844 11.2008 7.224 10.3992 7.2996 9.6H2.7156C2.50887 10.3833 2.40281 11.1898 2.4 12C2.403 12.8101 2.50905 13.6166 2.7156 14.4ZM3.6984 16.8C4.88339 18.8445 6.77824 20.3823 9.0228 21.1212C8.39752 19.7391 7.93521 18.289 7.6452 16.8H3.6984ZM7.6476 7.2C7.93759 5.70996 8.40073 4.25891 9.0276 2.8764C6.78081 3.61478 4.88403 5.15365 3.6984 7.2H7.6476ZM16.3344 7.2H20.3004C19.1099 5.14401 17.2017 3.60038 14.9424 2.8656C15.5753 4.25061 16.0425 5.70547 16.3344 7.2Z" />
        <path d="M18.2675 22.7344L15.2075 16.0024C15.157 15.8912 15.1416 15.7673 15.1635 15.6471C15.1853 15.527 15.2432 15.4164 15.3295 15.33C15.4159 15.2437 15.5265 15.1858 15.6467 15.1639C15.7668 15.1421 15.8907 15.1575 16.0019 15.208L22.7339 18.268C22.8373 18.3148 22.9253 18.3899 22.9877 18.4846C23.0501 18.5794 23.0843 18.6899 23.0865 18.8033C23.0886 18.9168 23.0585 19.0285 22.9997 19.1255C22.9409 19.2226 22.8558 19.301 22.7543 19.3516L20.6639 20.3956C20.548 20.4539 20.4541 20.5482 20.3963 20.6644L19.3511 22.7548C19.3005 22.8563 19.2221 22.9414 19.1251 23.0002C19.028 23.059 18.9163 23.0891 18.8029 23.087C18.6894 23.0848 18.5789 23.0506 18.4842 22.9882C18.3894 22.9258 18.3143 22.8378 18.2675 22.7344Z" />
        </g>
        </g>
        <defs>
        <clipPath id="clip0_1_527">
        <rect width="24" height="24"/>
        </clipPath>
        </defs>
        </svg>      
`,
      name: "Web",
      detailImage:'https://i.pinimg.com/564x/79/c6/2d/79c62d94154fb332afb84191a996e66f.jpg',
      detail: "Transform your online presence with our expert web design and development services. We create responsive, user-friendly websites that blend cutting-edge technology with stunning visuals. Our custom solutions prioritize performance, security, and scalability, ensuring your site stands out digitally and drives business growth.",
      techStack: [
        {
          techName: 'JavaScript',
          techLogo: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUhdFgKwWT0BD32WAPhBz04H7yjV1VMu7axw&s',
          desc: 'A programming language for building user interfaces.'
        },
        {
          techName: 'ReactJS',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg',
          desc: 'A JavaScript library for building user interfaces.'
        },
        {
          techName: 'NextJS',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Nextjs-logo.svg',
          desc: 'A React framework for server-side rendering and static site generation.'
        },
        {
          techName: 'Python',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg',
          desc: 'A programming language that lets you work quickly and integrate systems more effectively.'
        },
        {
          techName: 'Laravel',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png',
          desc: 'A programming language that lets you work quickly and integrate systems more effectively.'
        }
      ]
    },
    {
      id: 2,
      svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.0755 0H7.96759C6.58917 0 5.41797 1.12393 5.41797 2.50197V21.5009C5.41797 22.8789 6.56439 24 7.94281 24L16.064 23.9912C17.4423 23.9912 18.5698 22.87 18.5698 21.4917L18.5816 2.50063C18.5815 1.11764 17.4594 0 16.0755 0ZM10.8502 1.50004H13.2026C13.4092 1.50004 13.5775 1.66779 13.5775 1.875C13.5775 2.08221 13.4092 2.24996 13.2026 2.24996H10.8502C10.801 2.24998 10.7522 2.24029 10.7067 2.22145C10.6612 2.20262 10.6199 2.175 10.5851 2.14018C10.5502 2.10535 10.5226 2.06401 10.5038 2.01851C10.4849 1.97301 10.4753 1.92424 10.4753 1.875C10.4753 1.82575 10.4849 1.77698 10.5038 1.73148C10.5226 1.68598 10.5502 1.64464 10.5851 1.60982C10.6199 1.575 10.6612 1.54738 10.7067 1.52854C10.7522 1.5097 10.801 1.50002 10.8502 1.50004ZM9.43675 1.61937C9.57571 1.48059 9.82867 1.47869 9.96745 1.61937C10.0379 1.69013 10.0777 1.7858 10.0782 1.88567C10.0782 1.98327 10.037 2.08049 9.96745 2.15007C9.89825 2.21965 9.80046 2.26063 9.70305 2.26063C9.60373 2.26063 9.50823 2.21965 9.43675 2.15007C9.36755 2.08068 9.32809 1.98327 9.32809 1.88567C9.3279 1.78617 9.36755 1.68876 9.43675 1.61937ZM11.9507 23.2567C11.3319 23.2567 10.8287 22.7531 10.8287 22.1345C10.8287 21.5158 11.3319 21.0123 11.9507 21.0123C12.5695 21.0123 13.0727 21.5158 13.0727 22.1345C13.0727 22.7531 12.5693 23.2567 11.9507 23.2567ZM17.4177 20.2496H6.73043V3.56261H17.4177V20.2496Z" />
            </svg>      
`,
      name: "Mobile App",
      detailImage:'https://i.pinimg.com/564x/02/ab/14/02ab146f0f4a5818751b9c41c72deb07.jpg',
      detail: "Unlock the power of mobile with our Flutter-based app development. We create sleek, high-performance apps for iOS and Android, ensuring a consistent user experience across platforms. Our custom mobile solutions combine stunning design with robust functionality, helping your business thrive in the mobile-first world.",
      techStack: [
        {
          techName: 'Flutter',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png',
          desc: 'An open-source UI software development kit created by Google.'
        },
        // {
        //   techName: 'React Native',
        //   techLogo: '',
        //   desc: 'A framework for building native apps using React.'
        // }
      ]
    },
    {
      id: 3,
      svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 10.5L6.5 6L9 8.5L12.5 2.5M1 1V13.5H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>        
`,
      name: "Data Analytics",
      detailImage:'https://i.pinimg.com/564x/56/9d/08/569d0846a270fa455f5b2c34567d771d.jpg',
      detail: "Harness the power of your data with our advanced analytics solutions. We transform raw information into actionable insights, driving informed decision-making and business growth. Our data analytics expertise helps you uncover trends, optimize operations, and gain a competitive edge in today's data-driven marketplace.",
      techStack: [
        {
          techName: 'Python',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg',
          desc: 'A programming language that lets you work quickly and integrate systems more effectively.'
        },
        // {
        //   techName: 'R',
        //   techLogo: 'https://upload.wikimedia.org/wikipedia/commons/1/1b/R_logo.svg',
        //   desc: 'A programming language and software environment for statistical computing and graphics.'
        // }
      ]
    },
    {
      id: 4,
      svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 19V5C0.25 4.00544 0.645088 3.05161 1.34835 2.34835C2.05161 1.64509 3.00544 1.25 4 1.25H20C20.9946 1.25 21.9484 1.64509 22.6517 2.34835C23.3549 3.05161 23.75 4.00544 23.75 5V19C23.75 19.9946 23.3549 20.9484 22.6517 21.6517C21.9484 22.3549 20.9946 22.75 20 22.75H4C3.0056 22.7495 2.05208 22.3542 1.34893 21.6511C0.645788 20.9479 0.25053 19.9944 0.25 19ZM1.75 8.75V19C1.75 19.5967 1.98705 20.169 2.40901 20.591C2.83097 21.0129 3.40326 21.25 4 21.25H20C20.5967 21.25 21.169 21.0129 21.591 20.591C22.0129 20.169 22.25 19.5967 22.25 19V8.75H1.75ZM11 4C10.7348 4 10.4804 4.10536 10.2929 4.29289C10.1054 4.48043 10 4.73478 10 5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6C11.2652 6 11.5196 5.89464 11.7071 5.70711C11.8946 5.51957 12 5.26522 12 5C12 4.73478 11.8946 4.48043 11.7071 4.29289C11.5196 4.10536 11.2652 4 11 4ZM8 4C7.73478 4 7.48043 4.10536 7.29289 4.29289C7.10536 4.48043 7 4.73478 7 5C7 5.26522 7.10536 5.51957 7.29289 5.70711C7.48043 5.89464 7.73478 6 8 6C8.26522 6 8.51957 5.89464 8.70711 5.70711C8.89464 5.51957 9 5.26522 9 5C9 4.73478 8.89464 4.48043 8.70711 4.29289C8.51957 4.10536 8.26522 4 8 4ZM5 4C4.73478 4 4.48043 4.10536 4.29289 4.29289C4.10536 4.48043 4 4.73478 4 5C4 5.26522 4.10536 5.51957 4.29289 5.70711C4.48043 5.89464 4.73478 6 5 6C5.26522 6 5.51957 5.89464 5.70711 5.70711C5.89464 5.51957 6 5.26522 6 5C6 4.73478 5.89464 4.48043 5.70711 4.29289C5.51957 4.10536 5.26522 4 5 4Z" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 16.25C8.88143 16.2504 9.01165 16.2248 9.13315 16.1747C9.25466 16.1246 9.36505 16.0509 9.45799 15.958C9.55093 15.8651 9.62457 15.7547 9.67469 15.6332C9.7248 15.5116 9.7504 15.3814 9.75 15.25V13C9.75 12.8011 9.82902 12.6103 9.96967 12.4697C10.1103 12.329 10.3011 12.25 10.5 12.25C10.6989 12.25 10.8897 12.329 11.0303 12.4697C11.171 12.6103 11.25 12.8011 11.25 13V15.25C11.25 15.913 10.9866 16.5489 10.5178 17.0178C10.0489 17.4866 9.41304 17.75 8.75 17.75C8.08696 17.75 7.45107 17.4866 6.98223 17.0178C6.51339 16.5489 6.25 15.913 6.25 15.25V13C6.25 12.8011 6.32902 12.6103 6.46967 12.4697C6.61032 12.329 6.80109 12.25 7 12.25C7.19891 12.25 7.38968 12.329 7.53033 12.4697C7.67098 12.6103 7.75 12.8011 7.75 13V15.25C7.7496 15.3814 7.7752 15.5116 7.82531 15.6332C7.87543 15.7547 7.94907 15.8651 8.04201 15.958C8.13495 16.0509 8.24534 16.1246 8.36685 16.1747C8.48835 16.2248 8.61857 16.2504 8.75 16.25ZM12.47 13.53C12.4004 13.4604 12.3452 13.3778 12.3075 13.2868C12.2699 13.1959 12.2505 13.0984 12.2505 13C12.2505 12.9016 12.2699 12.8041 12.3075 12.7132C12.3452 12.6222 12.4004 12.5396 12.47 12.47C12.5396 12.4004 12.6222 12.3452 12.7132 12.3075C12.8041 12.2699 12.9016 12.2505 13 12.2505C13.0984 12.2505 13.1959 12.2699 13.2868 12.3075C13.3778 12.3452 13.4604 12.4004 13.53 12.47L17.53 16.47C17.5996 16.5396 17.6548 16.6222 17.6925 16.7132C17.7301 16.8041 17.7495 16.9016 17.7495 17C17.7495 17.0984 17.7301 17.1959 17.6925 17.2868C17.6548 17.3778 17.5996 17.4604 17.53 17.53C17.4604 17.5996 17.3778 17.6548 17.2868 17.6925C17.1959 17.7301 17.0984 17.7495 17 17.7495C16.9016 17.7495 16.8041 17.7301 16.7132 17.6925C16.6222 17.6548 16.5396 17.5996 16.47 17.53L12.47 13.53Z" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.47 12.4695C16.5396 12.3999 16.6222 12.3447 16.7132 12.3071C16.8041 12.2694 16.9016 12.25 17 12.25C17.0985 12.25 17.1959 12.2694 17.2869 12.3071C17.3778 12.3447 17.4604 12.3999 17.53 12.4695C17.5996 12.5391 17.6548 12.6218 17.6925 12.7127C17.7302 12.8036 17.7496 12.9011 17.7496 12.9995C17.7496 13.098 17.7302 13.1954 17.6925 13.2864C17.6548 13.3773 17.5996 13.4599 17.53 13.5295L13.53 17.5295C13.4604 17.5991 13.3778 17.6543 13.2869 17.692C13.1959 17.7297 13.0985 17.7491 13 17.7491C12.9016 17.7491 12.8041 17.7297 12.7132 17.692C12.6223 17.6543 12.5396 17.5991 12.47 17.5295C12.4004 17.4599 12.3452 17.3773 12.3075 17.2864C12.2699 17.1954 12.2505 17.098 12.2505 16.9995C12.2505 16.9011 12.2699 16.8036 12.3075 16.7127C12.3452 16.6218 12.4004 16.5391 12.47 16.4695L16.47 12.4695Z" />
      </svg>      
`,
      name: "UI/UX",
      detailImage:'https://i.pinimg.com/564x/16/cd/d2/16cdd25ce81fbdc672ac89755094c0b3.jpg',
      detail: "Elevate your digital presence with our UI/UX expertise. We craft intuitive, visually stunning interfaces that captivate users and enhance engagement. Our designs blend aesthetics with functionality, ensuring seamless user experiences that drive conversions and boost customer satisfaction across web and mobile platforms.      ",
      techStack: [
        {
          techName: 'Figma',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg',
          desc: 'A web-based UI design and prototyping tool.'
        },
        // {
        //   techName: 'Sketch',
        //   techLogo: 'https://upload.wikimedia.org/wikipedia/commons/9/93/Sketch_Logo.svg',
        //   desc: 'A vector graphics editor for macOS.'
        // }
      ]
    },
    {
      id: 5,
      svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1_554)">
      <path d="M4.8172 16.7764C2.9046 15.0688 1.88699 12.7273 1.92009 10.1489C1.98576 5.03475 6.25481 0.897988 11.4166 0.937785C11.49 0.938347 11.5633 0.939472 11.6362 0.94116C16.8829 1.06313 20.8694 5.66377 20.2682 10.8175C20.2403 11.0567 20.2229 11.2254 20.2229 11.2731C20.2229 11.282 20.2226 11.2909 20.2226 11.2998L22.0036 14.494C22.2099 14.8641 21.9812 15.3245 21.5595 15.3884L20.3303 15.5956L19.9556 19.3191C19.6914 20.4035 18.6051 21.0841 17.5034 20.8539C16.5128 20.6469 14.4964 20.4406 14.013 20.4318V21.6534C14.013 22.4316 13.3822 23.0624 12.604 23.0624H10.5352C9.75698 23.0624 9.12618 22.4316 9.12618 21.6534V19.0965M7.42828 2.0715V8.0348" stroke-width="2.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M7.42845 11.4778C6.51089 11.4778 5.76706 10.7336 5.76706 9.81555C5.76706 8.89753 6.51089 8.15332 7.42845 8.15332C8.34601 8.15332 9.08984 8.89753 9.08984 9.81555C9.08984 10.7336 8.34601 11.4778 7.42845 11.4778Z" stroke-width="2.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M15.2429 11.4778C14.3253 11.4778 13.5815 10.7336 13.5815 9.81555C13.5815 8.89753 14.3253 8.15332 15.2429 8.15332C16.1605 8.15332 16.9043 8.89753 16.9043 9.81555C16.9043 10.7336 16.1605 11.4778 15.2429 11.4778Z" stroke-width="2.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M11.7997 1.10938V7.89833L13.75 8.96431" stroke="#0D99FF" stroke-width="2.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </g>
      <defs>
      <clipPath id="clip0_1_554">
      <rect width="24" height="24" fill="white" transform="matrix(-1 0 0 1 24 0)"/>
      </clipPath>
      </defs>
      </svg>      
`,
      name: "Artificial Intelligence",
      detailImage:'https://i.pinimg.com/564x/ba/5d/cd/ba5dcdccd6b099a51b6bbf3310e095dc.jpg',
      detail: "Revolutionize your business with our cutting-edge AI solutions. We integrate intelligent algorithms and machine learning to automate processes, enhance decision-making, and unlock new opportunities. Our AI expertise helps you stay ahead of the curve, driving innovation and efficiency across your operations.",
      techStack: [
        {
          techName: 'TensorFlow',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/2/2d/Tensorflow_logo.svg',
          desc: 'An open-source platform for machine learning.'
        },
        {
          techName: 'PyTorch',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/9/96/Pytorch_logo.png',
          desc: 'An open-source machine learning library based on the Torch library.'
        }
      ]
    },
    {
      id: 6,
      svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1_562)">
      <path d="M2.67797 6.40674C2.67765 6.05203 2.72793 5.69908 2.82731 5.35857C3.28017 3.80943 4.71134 2.67792 6.40679 2.67792C6.57477 2.67792 6.73511 2.70594 6.89718 2.72742C7.53588 1.59074 8.73889 0.999953 10.1356 0.999953C12.195 0.999953 13.8644 2.48286 13.8644 4.54233V19.4576C13.8644 21.517 12.195 23 10.1356 23C8.73889 23 7.53588 22.4092 6.89718 21.2725C6.73511 21.294 6.57477 21.322 6.40679 21.322C4.34746 21.322 2.67797 19.6525 2.67797 17.5932C2.67797 17.4252 2.70598 17.2649 2.72747 17.1029C1.59079 16.4641 1 15.2611 1 13.8644C1 13.1817 1.19688 12.5504 1.51723 12C1.19688 11.4496 1 10.8182 1 10.1356C1 8.73875 1.59079 7.53583 2.72747 6.89708C2.70598 6.73502 2.67797 6.57473 2.67797 6.40674Z" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M6.40674 10.1356L8.27115 12H19.2712" stroke="#0D99FF" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M6.40674 13.8652L8.27115 12.0008" stroke="#0D99FF" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M17.4067 2.8641C17.4067 1.83444 18.2414 0.999694 19.2711 0.999694C20.3009 0.999694 21.1356 1.83444 21.1356 2.8641C21.1356 3.89377 20.3009 4.72852 19.2711 4.72852C18.2414 4.72852 17.4067 3.89377 17.4067 2.8641Z" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M19.2715 12.0008C19.2715 10.9712 20.1062 10.1364 21.1359 10.1364C22.1656 10.1364 23.0003 10.9712 23.0003 12.0008C23.0003 13.0305 22.1656 13.8652 21.1359 13.8652C20.1062 13.8652 19.2715 13.0305 19.2715 12.0008Z" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M17.4067 21.1356C17.4067 20.1059 18.2414 19.2712 19.2711 19.2712C20.3009 19.2712 21.1356 20.1059 21.1356 21.1356C21.1356 22.1653 20.3009 23 19.2711 23C18.2414 23 17.4067 22.1653 17.4067 21.1356Z" stroke="#0D99FF" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M19.2715 19.2715V17.5935C19.2715 16.5638 18.4368 15.7291 17.4071 15.7291H10.1359C9.10618 15.7291 8.27148 16.5638 8.27148 17.5935V18.5257" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M19.2715 4.7291V6.40707C19.2715 7.43674 18.4368 8.27148 17.4071 8.27148H10.1359C9.10618 8.27148 8.27148 7.43674 8.27148 6.40707V5.47487" stroke-width="2" stroke-miterlimit="10"/>
      </g>
      <defs>
      <clipPath id="clip0_1_562">
      <rect width="24" height="24" fill="white"/>
      </clipPath>
      </defs>
      </svg>      
`,
      name: "Machine Learning",
      detailImage:'https://i.pinimg.com/564x/0a/6c/7c/0a6c7c72d826a0b9cae104538bcd964d.jpg',
      detail: "Empower your business with our advanced machine-learning solutions. We develop intelligent systems that learn and adapt, automating complex tasks and uncovering valuable patterns in your data. Our ML expertise drives predictive analytics, personalization, and intelligent decision-making, giving you a competitive edge in your industry.",
      techStack: [
        {
          techName: 'Scikit-learn',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/0/05/Scikit_learn_logo_small.svg',
          desc: 'A free software machine learning library for the Python programming language.'
        },
        {
          techName: 'Keras',
          techLogo: 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Keras_logo.svg',
          desc: 'An open-source software library that provides a Python interface for artificial neural networks.'
        }
      ]
    },
    {
        id: 4,
        svg:`<svg class='stroke-[#0D99FF] group-hover:stroke-white' width="24" height="11" viewBox="0 0 24 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.6 0C21.58 0 24 2.38 24 5.38C24 8.34 21.58 10.75 18.6 10.75C17.15 10.75 15.8 10.19 14.78 9.18L12 6.72L9.17 9.23C8.2 10.2 6.84 10.76 5.4 10.76C2.42 10.76 0 8.34 0 5.38C0 2.42 2.42 0 5.4 0C6.84 0 8.2 0.56 9.22 1.58L12 4.04L14.83 1.53C15.8 0.56 17.16 0 18.6 0ZM7.8 7.77L10.5 5.38L7.84 3.03C7.16 2.35 6.31 2 5.4 2C3.53 2 2 3.51 2 5.38C2 7.25 3.53 8.76 5.4 8.76C6.31 8.76 7.16 8.41 7.8 7.77ZM16.2 2.99L13.5 5.38L16.16 7.73C16.84 8.41 17.7 8.76 18.6 8.76C20.47 8.76 22 7.25 22 5.38C22 3.51 20.47 2 18.6 2C17.69 2 16.84 2.35 16.2 2.99Z"/>
        </svg>        
  `,
        name: "DevOps",
        detailImage:'https://i.pinimg.com/736x/1e/5c/2c/1e5c2c61237f328b776c119b1a0ed50f.jpg',
        detail: "Streamline your software development and operations with our DevOps expertise. We implement agile methodologies and automation tools to enhance collaboration, speed up deployments, and improve product quality. Our DevOps solutions optimize your workflow, ensuring faster time to market and increased reliability for your digital products.        ",
        techStack: [
          {
            techName: 'Figma',
            techLogo: 'https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg',
            desc: 'A web-based UI design and prototyping tool.'
          },
          {
            techName: 'Sketch',
            techLogo: 'https://upload.wikimedia.org/wikipedia/commons/5/59/Sketch_Logo.svg',
            desc: 'A vector graphics editor for macOS.'
          }
        ]
      },
  ];
  
  
  const techStackSlider1 = document.querySelector('#techStackSlider1');
  const techStackSlider2 = document.querySelector('#techStackSlider2');
  const stackDetailWrapper = document.querySelector('#techStackDetailWrapper');
  const techLogoWrapper = document.querySelector('#techLogoWrapper');
  const techLogosContainer = document.createElement('div');
  techLogosContainer.classList.add('logo__containers');
  techLogosContainer.classList.add('w-full');
  var activeTechStack = false;
  var activeTechStack2 = false;

  function updateTechDetails(selectedTech) {
      const selectedTechnology = technologies.find(tech => tech.name === selectedTech);
      if (selectedTechnology && stackDetailWrapper) {
          stackDetailWrapper.querySelector('#tech__stack__name').textContent = selectedTechnology.name;
          stackDetailWrapper.querySelector('#tech__stack__desc').textContent = selectedTechnology.detail;
          stackDetailWrapper.querySelector('#tech__stack_detail__image').src = selectedTechnology.detailImage;

          const previouslySelected = techStackSlider1.querySelector('.swiper-slide.selected');
          if (previouslySelected) previouslySelected.classList.remove('selected');

          if (activeTechStack) {
              const clickedTechItem = techStackSlider1.querySelector(`.swiper-slide[data-tech-name="${selectedTech}"]`);
              clickedTechItem.classList.add('selected');
          }
      }
  }

  function updateTechDetails2(selectedTech) {
      const selectedTechnology = technologies.find(tech => tech.name === selectedTech);
      if (selectedTechnology) {
          techLogosContainer.innerHTML = '';
          selectedTechnology.techStack.forEach(techItem => {
              const techLogo = document.createElement('img');
              techLogo.src = techItem.techLogo;
              techLogo.alt = techItem.techName;
              techLogosContainer.appendChild(techLogo);
          });

          const previouslySelected = techStackSlider2.querySelector('.swiper-slide.selected');
          if (previouslySelected) previouslySelected.classList.remove('selected');

          if (activeTechStack2) {
              const clickedTechItem = techStackSlider2.querySelector(`.swiper-slide[data-tech-name="${selectedTech}"]`);
              clickedTechItem.classList.add('selected');
          }
      }
  }

  function createTechItem(tech, updateFunction, slider, slidingFlag) {
      const techItem = document.createElement('div');
      techItem.classList.add('swiper-slide', 'tech__item__style', 'group');
      techItem.dataset.techName = tech.name;
      techItem.innerHTML = `
          <div class="flex items-center gap-[7px] px-[16px] py-[12px] transition-all cursor-pointer group justify-center ">
              <div class="h-[22px] w-[22px] flex items-center justify-center ">${tech.svg}</div>
              <p class="text-[#001436] text-[16px] font-[600] group-hover:text-[#FFFFFF] whitespace-nowrap ">${tech.name}</p>
          </div>
      `;
      techItem.addEventListener('click', () => {
        activeTechStack = true;
        activeTechStack2 = true;
          updateFunction(tech.name);
      });
      if (slider) {
        slider.appendChild(techItem);
      }
  }

  if (techStackSlider1) {
    techStackSlider1.innerHTML = '';
  }if (techStackSlider2) {
    techStackSlider2.innerHTML = '';
  }if (techLogoWrapper) {
    techLogoWrapper.innerHTML = '';
  }

  technologies.forEach(tech => {
      createTechItem(tech, updateTechDetails, techStackSlider1, activeTechStack);
      createTechItem(tech, updateTechDetails2, techStackSlider2, activeTechStack2);
  });

  if (techLogoWrapper) {
    techLogoWrapper.appendChild(techLogosContainer);
  }
  updateTechDetails(technologies[0].name);
  updateTechDetails2(technologies[0].name);





  const portfolioArray = [
    
  ]

  let PortfolioMain = document.getElementById('portfolioMain');

  PortfolioMain.forEach(element => {
    
    let newData = ` <div class="max-w-[430px] w-full landing__on__scroll ">
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
  </div>`
 });