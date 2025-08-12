
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>William Busari's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex bg-[#242424] text-white font-sans scrollbar-hidden overflow-hidden">
    <div class="flex flex-col md:flex-row gap-3 lg:gap-x-7 justify-between mx-auto w-[80%] md:w-[90%] lg:w-[80%] max-w-screen-2xl mt-3 md:mt-20 lg:mt-20 text-center items-center md:items-start">
        <div class="w-[90%] text-center md:text-left">
            <h1 class="font-semibold text-2xl md:text-3xl lg:text-4xl xl:text-[3em] mt-6 mb-1 md:mt-0 lg:mb-4 xl:mb-5">William Busari</h1>
            <p class="text-base md:text-lg lg:text-xl lg:text-[1.5em] mb-2 lg:mb-4 xl:mb-6 font-semibold text-gray-300">Full Stack Developer</p>
            <p class="flex font-semibold text-[#ffffff80] text-xs lg:text-[0.9em] text-center mx-auto md:mx-0 md:text-left w-full md:w-[70%] xl:w-[65%] mb-4 md:mb-2 lg:mb-6 xl:mb-8 leading-5">
                I build very easy to use software systems with
                quick response times and unambiguous interfaces
            </p>
            <ul class="flex flex-row gap-x-3 md:gap-x-1 mx-auto m-1 md:mt-4 lg:mt-8 md:mx-0 justify-evenly xl:justify-between w-full md:max-w-64 lg:max-w-72 xl:max-w-80">
                <li><a href="https://x.com/bubuDwarrior"><img src="{{ asset('images/twitter.png') }}" alt="x_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
                <li><a href="https://www.instagram.com/busari.007/#"><img src="{{ asset('images/instagram.png') }}" alt="ig_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
                <li><a href="mailto:williambusari@gmail.com"><img src="{{ asset('images/gmail.png') }}" alt="gmail_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
                <li><a href="https://github.com/busari007"><img src="{{ asset('images/github.png') }}" alt="github_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
                <li><a href="https://api.whatsapp.com/send/?phone=%2B2348131032512&text&type=phone_number&app_absent=0"><img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
                <li><a href="https://discord.com/channels/@me/1238300904252243992/"><img src="{{ asset('images/discord.png') }}" alt="discord_logo" class="w-6 h-6 md:w-7 md:h-7 xl:w-9 xl:h-9 object-contain hover:cursor-pointer"/></a></li>
            </ul>
            <div class="text-sm lg:text-base text-[#48bcb9] px-8 md:px-7 py-3 lg:p-3 border border-[#48bcb9] text-center w-fit md:w-40 lg:w-52 rounded-lg hover:border-[#19bab5] mt-4 xl:mt-8 mx-auto md:mx-0 md:ml-10 xl:ml-12 mb-7">Contact Me!</div>
        </div>
        <div class="flex flex-col text-left  w-full md:max-h-[22rem] xl:max-h-[30rem] overflow-y-scroll scrollbar-hidden mb-12">
           <p class="flex flex-col gap-y-3 text-xs md:text-base lg:text-[1.1em]">
            <h4 class="font-black  text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">ABOUT</h4>
            <p class="font-semibold text-sm md:text-base text-[#ffffffb4] mt-2">
               Since I first laid my hands on a computer, I’ve been captivated by the endless possibilities technology offers.<br>
                Over time, my fascination evolved into a focused passion for web development, where I’ve found the perfect blend of creativity and problem-solving. <br>
                Building elegant, user-friendly, and functional web applications drives my curiosity and fuels my professional growth.
            </p>
            </p>
            <p class="flex flex-col gap-y-3 lg:text-[1.1em]">
            <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em] mt-6">EXPERIENCE AND SKILLS</h4>
            <p class="font-semibold text-sm md:text-base text-[#ffffffb4] mt-2">
                I am a full-stack developer with <b class="font-semibold text-[#ffffff]">3 years</b> of experience building robust web applications using <b class="font-semibold text-[#ffffff]">ReactJs</b> (frontend) and <b class="font-semibold text-[#ffffff]">ExpressJs</b> (backend). <br>
                I excel in designing seamless user interfaces, implementing scalable backend systems, and managing efficient databases with <b class="font-semibold text-[#ffffff]">MySQL</b> and <b class="font-semibold text-[#ffffff]">MongoDB</b>. <br>
                I specialize in using modern frameworks such as <b class="font-semibold text-[#ffffff]">Laravel</b>, <b class="font-semibold text-[#ffffff]">TailwindCSS</b>, <b class="font-semibold text-[#ffffff]">AlpineJS</b>, and <b class="font-semibold text-[#ffffff]">Livewire</b> to simplify development and optimize user experiences.
              
                <h5 class="font-black text-[#ffffffed] text-[0.85em] md:text-[1em] mt-5">Core Skills</h5>
                <ul class="flex flex-col gap-y-5 font-semibold text-sm md:text-base text-[#ffffffb4] mt-5">
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p><b class="font-semibold text-[#ffffff]">Frontend:</b> ReactJs, HTML, CSS, JavaScript, TailwindCSS, AlpineJS</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p><b class="font-semibold text-[#ffffff]">Backend:</b> ExpressJs, Laravel</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p><b class="font-semibold text-[#ffffff]">Database:</b> MySQL, MongoDB</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p><b class="font-semibold text-[#ffffff]">Tools:</b> Figma, Livewire</p>
                    </li>
                </ul>
                
                <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em] mt-6">PROFESSIONAL EXPERIENCE</h4>
                <p class="font-semibold text-[#ffffffb4] mt-4 text-sm md:text-base">
                <b class="font-semibold text-[#ffffff]">Laravel Developer Intern | Safe Recruits Ltd | Victoria Island, Lagos, Nigeria | August 2024 - November 2024</b>
                </p>
                <ul class="flex flex-col gap-y-5 font-semibold text-sm md:text-base text-[#ffffffb4] mt-5">
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Designed and implemented responsive web pages (authentication, payment, home, and dashboard) using Laravel, TailwindCSS, and Livewire.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Developed and integrated frontend code to align with UI/UX designs, ensuring a seamless user experience.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Managed both frontend and backend aspects of the website effectively.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Troubleshot technical issues encountered by job candidates, ensuring smooth functionality.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Leveraged Livewire for efficient component management and AlpineJs for simplified JavaScript functionality.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Improved mobile responsiveness through TailwindCSS.</p>
                    </li>
                </ul>
                <p class="font-semibold text-[#ffffffb4] mt-6 text-sm md:text-base">
                    <b class="font-semibold text-[#ffffff]">Web Development Intern | First Stack Ltd | United Kingdom | Jan 2022 - June 2022</b>
                </p>
                <ul class="flex flex-col gap-y-5 font-semibold text-sm md:text-base text-[#ffffffb4] mt-5">
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Trained in executing end-to-end web development projects.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Collaborated with senior developers to deliver scalable and functional applications.</p>
                    </li>
                </ul>
            </p>
            </p>
            <p class="flex flex-col gap-y-3 text-xs md:text-base lg:text-[1.1em] mt-6">
            <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">EDUCATION</h4>
            <p class="font-semibold text-[#ffffffb4] text-sm md:text-base mt-2 mb-4">
                <b class="font-semibold text-[#ffffff]"> Bachelor of Science in Software Engineering | Babcock University</b>
            </p>
            <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">LICENSCES AND CERTIFICATIONS</h4>
            <p class="font-semibold text-[#ffffffb4] text-sm md:text-base mt-2">
            <ul class="flex flex-col gap-y-5 font-semibold text-sm md:text-base text-[#ffffffb4] mt-2">
                <li class="flex flex-row items-center">
                    <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                    <a href="https://www.coursera.org/account/accomplishments/records/WHSUH2Q8J4FR" class="no-underline text-blue-500 hover:text-blue-700">Technical Support Fundamentals</a>
                </li>
                <li class="flex flex-row items-center">
                    <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                    <a href="https://www.coursera.org/account/accomplishments/records/49B22H2AFDC7" class="no-underline text-blue-500 hover:text-blue-700">IT Security: Defense against the digital dark arts</a>
                </li>
                <li class="flex flex-row items-center">
                    <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                    <a href="https://www.coursera.org/account/accomplishments/records/3QKPL2VDMYLW" class="no-underline text-blue-500 hover:text-blue-700">Operating Systems and You: Becoming a Power User</a>
                </li>
                <li class="flex flex-row items-center">
                    <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                    <a href="https://www.coursera.org/account/accomplishments/records/D92GC782DD42" class="no-underline text-blue-500 hover:text-blue-700">System Administration and IT Infrastructure Services</a>
                </li>
                <li class="flex flex-row items-center">
                    <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                    <a href="https://www.coursera.org/account/accomplishments/records/2C69ZEWDTMBF" class="no-underline text-blue-500 hover:text-blue-700">The Bits and Bytes of Computer Networking</a>
                </li>
            </ul>
            </p>
            </p>
            <div class="flex flex-col gap-y-3 mt-6">
                <h1 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">WEBSITES/WEBPAGES I HAVE DONE</h1>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <button class="relative w-32 group hover:cursor-pointer hover:bg-gray-700">
                    <a href="https://omose-ceutiques.vercel.app/">
                        <img src="{{ asset('images/designs/mums-website-screenshot.png') }}" alt="design_image" class="w-full object-contain"/>
                    </a>
                </button>
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot1'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot1.png') }}" alt="design_image" class="w-full object-contain"/>
                </button>   
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot7'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot7.png') }}" alt="design_image" class="w-full object-contain"/>
                </button> 
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot3'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot3.png') }}" alt="design_image" class="w-full object-contain"/>
                </button> 
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot2'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot2.png') }}" alt="design_image" class="w-full object-contain"/>
                </button> 
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot5'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot5.png') }}" alt="design_image" class="w-full object-contain"/>
                </button> 
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot6'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot6.png') }}" alt="design_image" class="w-full object-contain"/>
                </button> 
                <button x-data x-on:click="$dispatch('open-modal', {name : 'Screenshot4'})" class="relative w-32 group">
                    <!-- The overlay div -->
                    <div class="absolute inset-0 hidden group-hover:block bg-gray-700 opacity-70 z-10"></div>
                    <!-- The image -->
                    <img src="{{ asset('images/designs/Screenshot4.png') }}" alt="design_image" class="w-full object-contain"/>
                </button>     
                </div>         
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <x-modal imageName="Screenshot1" name="Screenshot1"></x-modal>
                <x-modal imageName="Screenshot7" name="Screenshot7"></x-modal>
                <x-modal imageName="Screenshot3" name="Screenshot3"></x-modal>
                <x-modal imageName="Screenshot2" name="Screenshot2"></x-modal>
                <x-modal imageName="Screenshot5" name="Screenshot5"></x-modal>
                <x-modal imageName="Screenshot6" name="Screenshot6"></x-modal>
                <x-modal imageName="Screenshot4" name="Screenshot4"></x-modal>
            </div>
            </div>
         </div>
     <p class="absolute bottom-0 right-0 text-[0.70rem] md:text-xs font-semibold text-gray-200">Built using Laravel and TailwindCSS</p>
     </div>
     <div class="-z-20 w-52 h-52 md:w-80 md:h-80 bg-[#ffffff80] absolute -top-36 -left-32 md:-top-44 md:-left-60 xl:-top-36 xl:-left-32 rounded-full blur-[70px]"></div>
     <div class="-z-20 w-44 h-44 md:w-60 md:h-60 bg-[#50505080] absolute -bottom-4 left-[25%] md:left-[45%] rounded-full blur-[80px]"></div>
     <div class="-z-20 w-32 h-32 md:w-40 md:h-40 bg-[#21378180] absolute top-[7.9rem] md:top-28 right-0 rounded-full blur-[60px]"></div>
 </body>
