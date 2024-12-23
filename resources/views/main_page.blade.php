
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
                Since my earliest memories, technology has always been a source of fascination and wonder for me. From the moment I laid my hands on my first computer, I was captivated by the endless possibilities it offered and the way it seamlessly integrated into every aspect of our lives.<br>
                As I grew older, my interest in technology only intensified, leading me to explore different fields within the vast landscape of IT. However, it was <b class="font-semibold text-[#ffffff]">web development</b> that truly captured my imagination and sparked my curiosity.<br>
                These days, I spend my time building dummy websites to practice my web design and development skills. I recently completed an Internship at a Nigerian Company named <b class="font-semibold text-[#ffffff]">Safe Recruits</b>. I was their only developer but I was only tasked with fixing up the front-end of their website.
            </p>
            </p>
            <p class="flex flex-col gap-y-3 lg:text-[1.1em]">
            <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em] mt-6">EXPERIENCE AND SKILLS</h4>
            <p class="font-semibold text-sm md:text-base text-[#ffffffb4] mt-2">
                I am a <b class="font-semibold text-[#ffffff]">full-stack developer</b> specializing in <b class="font-semibold text-[#ffffff]">ReactJs</b> for frontend development and <b class="font-semibold text-[#ffffff]">ExpressJs</b> for backend development.
                I have <b class="font-semibold text-[#ffffff]">three</b> years of experience with both, along with proficiency in <b class="font-semibold text-[#ffffff]">HTML</b>, <b class="font-semibold text-[#ffffff]">CSS</b>, <b class="font-semibold text-[#ffffff]">JavaScript</b>, <b class="font-semibold text-[#ffffff]">MySQL</b>, <b class="font-semibold text-[#ffffff]">MongoDB</b>, <b class="font-semibold text-[#ffffff]">Laravel</b>, <b class="font-semibold text-[#ffffff]">TailwindCSS</b>, <b class="font-semibold text-[#ffffff]">AlpineJS</b> and <b class="font-semibold text-[#ffffff]">Livewire</b>.
                I design my web apps using <b class="font-semibold text-[#ffffff]">Figma</b>, Develop the front-end using <b class="font-semibold text-[#ffffff]">ReactJs</b>, The backend using <b class="font-semibold text-[#ffffff]">ExpressJs</b> and <b class="font-semibold text-[#ffffff]">MongoDB</b> or <b class="font-semibold text-[#ffffff]">MySQL</b> to manage the database.<br>
                But as of recently, After gaining some proficiency in <b class="font-semibold text-[#ffffff]">Laravel</b> and <b class="font-semibold text-[#ffffff]">TailwindCSS</b>, I began using them to build full applications. In my opinion they greatly simplify the development process.<br>
                I first interned at a tech company in the UK called <b class="font-semibold text-[#ffffff]">First Stack Ltd</b> for six months, where I was trained in the execution of web development projects.
                The knowledge and experience I gained there were invaluable in the development of my QR attendance system project.<br>
                Then in <b class="font-semibold text-[#ffffff]">August 2024</b>, a week after my graduation from university, I interned at a recruitment agency called <b class="font-semibold text-[#ffffff]">Safe Recruits</b> for 3 months, as the <b class="font-medium text-[#ffffff]">sole developer</b> tasked with beautifying their website.
                <h5 class="font-black text-[#ffffffed] text-[0.75em] md:text-[0.85em] mt-5">Recent Experience</h5>
                <p class="font-semibold text-[#ffffffb4] mt-4 text-sm md:text-base">Web Developer Intern | Safe Recruits Ltd | Victoria Island, Lagos, Nigeria | August 2024 - November 2024</p>
                <ul class="flex flex-col gap-y-5 font-semibold text-sm md:text-base text-[#ffffffb4] mt-5">
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Acquired proficiency in Laravel, AlpineJs, Livewire and Tailwind CSS.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Designed and implemented web page styles for authentication, payment, home and dashboard pages.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Developed and integrated frontend code to match designed styles.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Effectively managed both frontend and backend aspects of the website.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Troubleshooted technical issues encountered by job candidates.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Utilized Livewire for efficient component management.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Leveraged AlpineJs for simplified JavaScript functionality.</p>
                    </li>
                    <li class="flex flex-row items-center">
                        <img src="{{ asset('images/period.png') }}" class="w-5 h-5 object-contain"/>
                        <p>Employed Tailwind CSS for responsive design and mobile-first development.</p>
                    </li>
                </ul>
            </p>
            </p>
            <p class="flex flex-col gap-y-3 text-xs md:text-base lg:text-[1.1em] mt-6">
            <h4 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">EDUCATION</h4>
            <p class="font-semibold text-[#ffffffb4] text-sm md:text-base mt-2">
                I am a recent graduate of <b class="font-semibold text-[#ffffff]">Babcock University's School of Computing Sciences</b>. 
                I enrolled in January 2021 and graduated in August 2024. 
                The school taught me a lot about managing projects and gathering requirements. 
                However, learning the programming languages was largely a personal effort.
            </p>
            </p>
            <div class="flex flex-col gap-y-3 mt-6">
                <h1 class="font-black text-[#ffffffde] text-[0.75em] md:text-[0.85em] lg:text-[1em]">WEBPAGES I HAVE DONE</h1>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
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