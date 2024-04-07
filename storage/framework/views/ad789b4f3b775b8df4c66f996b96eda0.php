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
        <div class="h-screen w-screen flex flex-col font-inter">
                <span class="ml-[10rem] mb-[1rem] mt-[3rem] text-[60px] font-inter font-bold text-blue">
                    NEWS AND UPDATES
                </span>
                <div class="flex flex-row">
                    <div class="mt-[9rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="150px" height="150px" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </div>
                    
                <div class="border border-blue rounded-[1.75rem]">
                    <div class="flex flex-row">
                        <img class="w-[697px] h-[486px]" src="/images/Group 8686.png">
                        <span class="absolute ml-[3rem] mt-[27rem] text-[24px] font-inter font-semibold text-white-10">
                            LOREM IPSUM DOLOR SIT AMET  
                        </span>
                        <div class="flex flex-col">
                        <span class=" mx-[3rem] pr-[3rem] mt-[3.5rem] whitespace-pre-line text-[24px] font-inter font-bold text-blue-pressed ">
                            LOREM IPSUM DOLOR SIT AMET, 
                            CONSECTETUR ADISPISCING ELIT   
                        </span>
                        <span class="mx-[3rem] pr-[3rem] mt-[2rem] text-[20px] font-inter font-bold text-black-300 ">
                            BY Office of Public Affairs 
                        </span>
                        <span class="mx-[3rem] pr-[3rem] text-[18px] font-inter font-bold text-black-300 ">
                            November 13, 2023
                        </span>
                        <span class="mx-[3rem] pr-[3rem] whitespace-pre-line text-[18px] text-left font-medium font-inter text-black-200">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="#" href="#" onclick="window.location.href='/resources/views/News2.html'" class="font-bold font-inter dark:text-blue hover:underline ">
                                View More
                            </a> 
                        </span> 
                    </div>     
                </div>    
                </div>
                <div class="mt-[9rem]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="150px" height="150px" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                    </div>
                </div>

            <!--Search & Year-->
            <div class="pt-[2rem] text-left flex flex-row"> 
                <div class="ml-[7rem] text-[1.2rem] font-medium">
                    Search by Article Title
                </div>
                <div class="ml-[1rem] w-1/2 h-[31px] bg-white bg-opacity-60 rounded-[10px] shadow-inner border border-slate-500">
                    <div class="relative mb-3" x-data="{ search: '' }">
                        <input type="search" 
                          class="text-[1.2rem] peer block w-full rounded border-0 bg-transparent landing-[1rem] px-3 pb-[2rem] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" 
                          id="NewsSearch"
                          x-model="search"
                          x-on:focus="placeholder = 'Searching...'"
                          x-on:blur="placeholder = 'Type query'" />
                       </div>
                </div>
                <div class="ml-[1rem] text-[1.2rem] font-medium">
                    Year
                </div>
                <div class="ml-[1rem] -mr-[20rem] h-[31px] bg-white bg-opacity-60 rounded-[10px] shadow-inner border border-slate-500">
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

            <!--MORE CONTENT-->
            <div class="mt-12 px-[7.25rem] flex flex-row place-content-evenly">
                <!--NEWS 1-->
                <div class=" flex flex-col bg-white-10 border-r-2 border-black">
                    <div class=" flex flex-row font-inter font-bold text-blue">
                        <span class="ml-[1.5rem] text-[1.5rem] py-3">
                            TITLE
                        </span>
                    </div>
                    <div class="ml-[1.5rem] font-inter font-light text-[1.2rem]">
                        <div class="py-4">
                            <span>LOREM IPSUM DOLOR SIT AMET,
                                CONSECTETUR ADIPISCING ELIT </span>
                        </div>
                        <div class="font-inter text-black flex flex-row pb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                            <span class="ml-2">
                                Location
                            </span>
                            <a href="#" href="#" onclick="window.location.href='/resources/views/mainpage.html'" class="text-blue-hover pl-28 font-inter dark:text-blue hover:underline text-[18px]">
                                View More
                            </a>
                        </div>
                    </div>  
                </div>
        
               <!--NEWS 2-->
               <div class=" flex flex-col bg-white-10 border-r-2 border-black">
                <div class=" flex flex-row font-inter font-bold text-blue">
                    <span class="ml-[1.5rem] text-[1.5rem] py-3">
                        TITLE
                    </span>
                </div>
                <div class="ml-[1.5rem] font-inter font-light text-[1.2rem]">
                    <div class="py-4">
                        <span>LOREM IPSUM DOLOR SIT AMET,
                            CONSECTETUR ADIPISCING ELIT </span>
                    </div>
                    <div class=" font-inter text-black flex flex-row pb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                        <span class="ml-2">
                            Location
                        </span>
                        <a href="#" href="#" onclick="window.location.href='/resources/views/mainpage.html'" class="text-blue-hover pl-28 font-inter dark:text-blue hover:underline text-[18px]">
                            View More
                        </a>
                    </div>
                </div>  
            </div>
        
         <!--NEWS 3-->
         <div class=" flex flex-col bg-white-10 border-r-2 border-black">
            <div class="flex flex-row font-inter font-bold text-blue">
                <span class="ml-[1.5rem] text-[1.5rem] py-3">
                    TITLE
                </span>
            </div>
            <div class="ml-[1.5rem] font-inter font-light text-[1.2rem]">
                <div class="py-4">
                    <span>LOREM IPSUM DOLOR SIT AMET,
                        CONSECTETUR ADIPISCING ELIT </span>
                </div>
                <div class=" font-inter text-black flex flex-row pb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                    <span class="ml-2">
                        Location
                    </span>
                    <a href="#" href="#" onclick="window.location.href='/resources/views/mainpage.html'" class="text-blue-hover pl-28 font-inter dark:text-blue hover:underline text-[18px]">
                        View More
                    </a>
                </div>
            </div>  
        </div>

            <!--NEW 4-->
            <div class=" flex flex-col bg-white-10 border-black">
                <div class="flex flex-row font-inter font-bold text-blue">
                    <span class="ml-[1.5rem] text-[1.5rem] py-3">
                        TITLE
                    </span>
                </div>
                <div class="ml-[1.5rem] font-inter font-light text-[1.2rem]">
                    <div class="py-4">
                        <span>LOREM IPSUM DOLOR SIT AMET,
                            CONSECTETUR ADIPISCING ELIT </span>
                    </div>
                    <div class=" font-inter text-black flex flex-row pb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                        <span class="ml-2">
                            Location
                        </span>
                        <a href="#" href="#" onclick="window.location.href='/resources/views/mainpage.html'" class="text-blue-hover pl-28 font-inter dark:text-blue hover:underline text-[18px]">
                            View More
                        </a>
                    </div>
                </div>  
            </div>
            </div>

            <!--Footer-->
    <div class="mt-10 w-screen relative">
        <img class="w-screen h-[50rem] top-0 absolute" src="/img/FOOTER.png" />
        <div class="absolute justify-center flex flex-row items-center inline-flex">
            <!--PLM SIDE-->
            <div class="pt-[7rem] flex flex-col">
                <div class="flex flex row">
                <img class="w-[6rem] h-[6rem] ml-[5rem]" src="/img/image-6.png" />
                <div class=" py-3 ml-6 flex flex-col">
                <h1 class="text-[30px] font-katibeh mt-3 -mb-3 text-white-10">
                    PAMANTASAN NG LUNGSOD NG MAYNILA
                 </h1>
                 <h2 class="-mt-1 text-[13px] text-light font-inter text-white-10">
                    UNIVERSITY OF THE CITY OF MANILA
                 </h2>
                </div>
            </div>
            <div class="ml-[5rem] py-[5rem] flex flex-col text-white-10">
                <span class="text-[20px] text-bold font-inter ">
                    Get in Touch
                </span>
                <span class="pt-4 text-light text-left text-[20px]">
                    Gen. Luna corner Muralla St., Intramuros Manila,
                </span>
                <span class="text-light text-left text-[20px]">
                    Philippines 1002
                </span>
            </div>
            </div>
            </div>
                           
            <!--GOT A QUESTION?-->
            <div class="absolute justify-center flex flex-col items-center inline-flex">
            <div class="flex flex-col pt-[7rem] pl-[35rem] ml-[19rem] w-3/4 flex flex-col">
                <h1 class="pb-[3rem] text-center font-inter font-bold text-white-10 text-[55px]">
                    GOT A QUESTION?
                </h1>
                <span class="text-center font-inter opacity-60 leading-7 text-white-10 text-[20px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua.
                </span>
                <!--Name And Email Add-->
            <div class="mt-[2rem] flex flex-row justify-center ">
                <div class="mr-[2rem] h-[2.5rem] bg-white-10 rounded-[14px] py-2 border border-white-10" x-data="{Name: '' }">
                    <input class="font-inter text-left px-[2rem] focus:outline-none" type="text" x-model="Name" placeholder="Name (LN, FN, MI.)">
                  </div>
                  <div class="h-[2.5rem] bg-white-10 rounded-[14px] py-2 border border-white-10" x-data="{EmailAddress: '' }">
                    <input class="font-inter text-left px-[2rem] focus:outline-none" type="text" x-model="EmailAddress" placeholder="Email Address">
                  </div> 
              </div> 
           </div>

            <!--Year And Course-->
            <div class="mt-[1rem] ml-[54rem] flex flex-row justify-center ">
                <div class="mr-[2rem] h-[2.5rem] bg-white-10 rounded-[14px] py-2 border border-white-10" x-data="{GradYear: '' }">
                    <input class="font-inter text-left px-[2rem] focus:outline-none" type="GradYear" x-model="Name" placeholder="Year of Graduation">
                  </div>
                  <div class="h-[2.5rem] bg-white-10 rounded-[14px] py-2 border border-white-10" x-data="{Course: '' }">
                    <input class="font-inter text-left px-[2rem] focus:outline-none" type="text" x-model="Course" placeholder="Course/Program">
                  </div> 
              </div>
            
              <!--Type of Help Requested-->
            <div class=" mt-[1rem] ml-[54rem] flex flex-row justify-start">
                <div class="relative h-[2.5rem] px-[13rem] text-left bg-white-10 rounded-[14px] py-2 border border-blue" x-data="{color: '' }">
                    <select class=" w-64 bg-gold font-inter px-[2rem] focus:outline-none appearance-none bg-transparent" x-model="color">
                        <option value="" disabled>Type of Help Requested</option>
                        <option>Offices</option>
                        <option>Academics</option>
                    </select>
                 </div>
                 <div class="absolute ml-[39rem] mt-1"> 
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-up-down" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M18 10l-6 -6l-6 6h12" />
                        <path d="M18 14l-6 6l-6 -6h12" />
                    </svg>
                 </div>
                 </div>

                 <div class="mt-[1rem] ml-[54rem] h-[6rem] w-[42rem] bg-white-10 rounded-[14px] py-2 border border-white-10 whitespace-normal flex-nowrap" x-data="{name: '' }">
                    <input class="whitespace-normal w-[42rem] h-fit font-inter text-left justify-start px-[2rem] focus:outline-none" type="text" x-model="name" placeholder="Message">
                 </div>                 
                 
                 <div class=" absolute w-full py-20 mt-[47rem] pl-[74rem] flex">
                    <button class="font-inter text-center text-10 whitespace-nowrap text-blue py-4 my-5 px-14 bg-white-10 rounded-[1rem] border-[1px] border-blue hover:bg-gold" >
                        SUBMIT
                    </button>
                    </div>
                </div>
            </div>
            

            <!--CREDITS--> 
                <div class="pt-[29rem] text-[20px] text-center font-inter text-white-10">
                    © 1967 - 2024 Pamantasan ng Lungsod ng Maynila. All Rights Reserved
                </div>
            </div>
    </div>

</body>

<?php /**PATH C:\Users\Marie\laravel_SE\resources\views/News.blade.php ENDPATH**/ ?>