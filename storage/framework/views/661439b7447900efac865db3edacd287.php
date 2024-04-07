<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Alumni Gallery</title>
    <link rel="stylesheet" href="output.css">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="/dist/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Katibeh:wght@400&display=swap" />
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>


<body>
    <body class="bg-white-10 flex flex-col flex-nowrap">

        <!--HEADER-->
        <div class="flex flex-row bg-white border border-black w-screen"></div>
        <div class="flex flex-row">

            <!--PLM HEADER-->
            <img class="h-[5.5rem] w-[5.5rem] ml-8 my-2" src="/images/Logo only.png">
            <div class = " py-3 w-4/5 ml-5 flex flex-col">
                <h1 class="text-[35px] font-katibeh mt-0 -mb-2 text-gold">
                    PAMANTASAN NG LUNGSOD NG MAYNILA
                </h1>
                <h2 class="-mt-0 text-[15px] font-inter text-black-200">
                    UNIVERSITY OF THE CITY OF MANILA
                </h2>
            </div>

            <!--BUTTONS-->
            <div class="flex flex-row -ml-[4rem] ">
                <button
                    class=" font-inter text-center text-16 whitespace-nowrap text-white-10 my-7 px-14 bg-blue rounded border-[1px] border-blue">
                    <a href="#" onclick="window.location.href='/resources/views/login.html'"
                        class ="hover:text-gold">
                        LOG IN
                    </a>
                </button>
            </div>
        </div>


        <!--NAVBAR-->
        <div class="bg-blue  h-1/5 w-screen">
            <navbar
                class="text-bold text-white-30 text-paragraph3 py-[0.5rem] place-content-evenly font-inter w-screen flex flex-row">
                <div>
                     <a href="<?php echo e(url('applypartnership')); ?>" onclick="" class ="hover:text-gold">
                        APPLY PARTNERSHIP
                    </a>
                </div>

                <div>
                    <a href="#" onclick="window.location.href='<?php echo e(url('news1')); ?>'"
                        class ="hover:text-gold">
                        NEWS AND UPDATES
                    </a>
                </div>

                <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
                    <div>
                        <a href="#" onclick="window.location.href='/resources/views/services.html'"
                            class ="hover:text-gold">
                            SERVICES
                        </a>
                    </div>
                    <svg class="dropdown flex flex-col" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" @click="open = !open">
                        <path :d="open ? 'M13.5 11.25L9 6.75L4.5 11.25' : 'M13.5 6.75L9 11.25L4.5 6.75'" stroke="white"
                            class="hover:fill-current hover:text-gold" />
                    </svg>
                    <div class="bg-blue dropdown-menu absolute top-full mt-2 z-10 text-left px-[1.15rem] whitespace-nowrap"
                        :class="{ 'scale-100': open, 'scale-0': !open }" x-show="open" id="dropdownMenu">
                        <div @click="navigate('/resources/views/mainlogin.html')"
                            class="dropdown-menu-item hover:text-gold duration-150">Request For Documents</div>
                        <div @click="navigate('/resources/views/mainlogin.html')"
                            class="dropdown-menu-item hover:text-gold duration-150">Job Opportunities</div>
                        <div @click="navigate('/resources/views/mainlogin.html')"
                            class="dropdown-menu-item hover:text-gold duration-150">Print Resume</div>
                        <div @click="navigate('/resources/views/mainlogin.html')"
                            class="dropdown-menu-item hover:text-gold duration-150">Networking</div>
                    </div>
                </div>

                <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
                    <div>
                        <a href="#" onclick="window.location.href='/resources/views/careers.html'"
                            class ="hover:text-gold">
                            CAREERS
                        </a>
                    </div>
                    <svg class="dropdown flex flex-col" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" @click="open = !open">
                        <path :d="open ? 'M13.5 11.25L9 6.75L4.5 11.25' : 'M13.5 6.75L9 11.25L4.5 6.75'" stroke="white"
                            class="hover:fill-current hover:text-gold" />
                    </svg>
                    <div class="bg-blue dropdown-menu absolute top-full mt-2 z-10 text-left px-[1.15rem] whitespace-nowrap"
                        :class="{ 'scale-100': open, 'scale-0': !open }" x-show="open" id="dropdownMenu">
                        <div onclick="window.location.href='<?php echo e(url('jobsearching1')); ?>'"
                            class="dropdown-menu-item hover:text-gold duration-150">Job Searching</div>
                        <div onclick="window.location.href='<?php echo e(url('jobposting')); ?>'"
                            class="dropdown-menu-item hover:text-gold duration-150">Job Posting</div>
                    </div>
                </div>
                <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
                    <div>
                        <a href="#" onclick="window.location.href='<?php echo e(url('')); ?>'"
                            class ="hover:text-gold">
                            ALUMNI EVENTS
                        </a>
                    </div>
                    <svg class="dropdown flex flex-col" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" @click="open = !open">
                        <path :d="open ? 'M13.5 11.25L9 6.75L4.5 11.25' : 'M13.5 6.75L9 11.25L4.5 6.75'" stroke="white"
                            class="hover:fill-current hover:text-gold" />
                    </svg>
                    <div class="bg-blue dropdown-menu absolute top-full mt-2 z-10 text-left pl-[1rem] pr-[2.25rem] whitespace-nowrap"
                        :class="{ 'scale-100': open, 'scale-0': !open }" x-show="open" id="dropdownMenu">
                        <div onclick="window.location.href='<?php echo e(url('bookevent')); ?>'"
                            class="dropdown-menu-item hover:text-gold duration-150">Book an Event</div>
                        <div onclick="window.location.href='<?php echo e(url('gallery1')); ?>'"
                            class="dropdown-menu-item hover:text-gold duration-150">Gallery</div>
                        <div onclick="window.location.href='<?php echo e(url('event1')); ?>'"
                            class="dropdown-menu-item hover:text-gold duration-150">Upcoming Events</div>
                    </div>
                </div>
            </navbar>
        </div>

        <script>
            function toggleDropdown() {
                var dropdownMenu = document.getElementById("dropdownMenu");
                dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
            }

            function navigate(url) {
                window.location.href = url;
            }
        </script>


         <!--MAIN PAGE-->
     <div class="h-screen w-screen flex flex-col">

        <div class="flex flex-row">
        <img class= " w-[411.5px] h-[965px]" src="/images/EVENT IMAGE.png">
        <div class="pt-7  w-screen ml-[50px] flex flex-col">
            <span class="text-[50px] font-inter font-bold text-blue ">
                ALUMNI EVENTS
            </span>
       
        
        <div class=" absolute flex flex-row mt-[1.700rem] ml-[28rem] text-black text-[18px] font-medium font-['Inter']">
            Year
        <div class=" flex ml-[1rem] w-1/2 h-[31px] bg-white bg-opacity-60 rounded-[10px] shadow-inner border border-slate-500">
            <div class="relative mb-3" x-data="{ search: '' }">
                <input type="search" 
                  class="text-[1.2rem] peer block w-full rounded border-0 bg-transparent landing-[1rem] px-3 pb-[2rem] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" 
                  id="NewsSearch"
                  x-model="search"
                  x-on:focus="placeholder = 'Searching...'"
                  x-on:blur="placeholder = 'Type query'" />
               </div>
        </div>
        </div>

        <div class=" absolute flex flex-row mt-[1.700rem] ml-[47rem] text-black text-[18px] font-medium font-['Inter']">
            Status
            <div class=" flex ml-[1rem] w-1/2 h-[31px] bg-white bg-opacity-60 rounded-[10px] shadow-inner border border-slate-500">
                <div class="relative mb-3" x-data="{ search: '' }">
                    <input type="search" 
                      class="text-[1.2rem] peer block w-full rounded border-0 bg-transparent landing-[1rem] px-3 pb-[2rem] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" 
                      id="NewsSearch"
                      x-model="search"
                      x-on:focus="placeholder = 'Searching...'"
                      x-on:blur="placeholder = 'Type query'" />
                   </div>
            </div>
            </div>
        
        

        <!--Event-->
        <button onclick="window.location.href='/resources/views/Upcoming_Event2.html'">  
            <div class=" mt-[5rem] w-[24rem] bg-white-10 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.3)]">
                <div class="px-10 flex flex-row bg-blue font-inter font-bold text-white-10">
                    <span class="text-[34px] px-5 py-3">
                        25
                    </span>
                    <span class="text-[34px] bg-blue px-5 py-3">
                        December
                    </span>
                </div>
                <div class="ml-6 font-inter font-light text-[20px]">
                    <div class="py-4 text-blue-hover">
                        <span>LOREM IPSUM DOLOR SIT</span>
                    </div>
                    <div class="font-inter text-black flex flex-row pb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                        <span class="ml-2">
                            Location
                        </span>
                        <a href="#" href="#" onclick="window.location.href='/resources/views/mainpage.html'" class="text-blue-hover pl-28 font-inter dark:text-blue hover:underline text-[18px]">
                            View More
                        </a>
                    </div>
                </div>  
            </div>
            </button>


            <!--Overlay/Event-->
       
            <div class="absolute w-[17325px] h-[965px] right-0 -mt-[1.75rem] opacity-50 bg-white-30"> </div>
            <button onclick="window.location.href='/resources/views/Upcoming_Event1.html'">
            <img class="w-[400px] h-[450px] top-[25rem] left-[730px] absolute" src="/images/Rectangle 4355.png"/>
            <span class="text-blue text-[23px] font-bold font-inter absolute top-[26rem] left-[760px] ">
               Christmas Party 2023
            </span>
            <img class="w-[398px] h-[200px] top-[29rem] left-[730px] absolute" src="/images/Image Rec.png"/>
            <span class="text-blue-hover w-[370px] text-[10px] font-[inter] absolute top-[43rem] left-[750px] ">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </span>
            <span class="text-blue-hover w-[370px] text-[10px] font-bold font-inter absolute top-[48rem] left-[600px] ">
               Location:
            </span>
            <span class="text-blue-hover w-[370px] text-[10px] font-bold font-inter absolute top-[48.75rem] left-[614px] ">
              Date and Time:
            </span>
            <span class="text-blue-hover w-[370px] text-[10px] font-bold font-inter absolute top-[50rem] left-[600px] ">
              Register:
            </span>
            </button>
    </div>
    </div>
    
<?php /**PATH C:\Users\Marie\laravel_SE\resources\views/Upcoming_Event2.blade.php ENDPATH**/ ?>