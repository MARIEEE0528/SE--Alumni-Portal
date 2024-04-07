<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Upcoming Event</title>
    <link rel="stylesheet" href="/dist/app.css">
    <link rel="stylesheet" href="/dist/output.css">
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
    <img class= "w-screen h-[65rem] inset-0" src="/images/Background.jpg">  

    <div class="absolute pt-7 pl-[37rem] text-center font-inter font-bold text-[64px] text-white-20">EVENT TITLE</div>
    <div class="absolute pt-[9rem] pl-[40rem] text-center font-inter font-medium text-[30px] text-white-20">25 December 2023</div>
    <div class="absolute pt-[12rem] pl-[45rem] text-center font-inter font-medium text-[30px] text-white-20">Location</div>
    <div class="absolute pt-[15rem] pl-[25rem] text-center font-inter font-medium whitespace-pre-line text-[20px] text-white-20">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
         incididunt ut labore et dolore magna aliqua. 
    </div>

    <!--PHOTO-->
    <div class=" absolute mx-auto lg:px-32 lg:pt-12 mt-[450px] ">
        <div class=" flex flex-nowrap md:-m-2">
      
          <div class="flex w-1/3 flex-wrap">
            <div class="w-full p-1 md:p-2">
              <img class="w-[313px] h-[313px]  object-cover object-center" src="/images/Rectangle 4355.png"/>
                <img class="w-[304px] h-[311px] top-[47px] object-cover object-center absolute " src="/images/Image Rec.png"/>

            </div>
          </div>
      
          <div class="flex w-1/3 flex-wrap">
            <div class="w-full p-1 md:p-2">
              <img class="w-[313px] h-[313px]  object-cover object-center" src="/images/Rectangle 4355.png"/>
                <img class="w-[304px] h-[311px] top-[47px] object-cover object-center absolute " src="/images/Image Rec.png"/>
            </div>
          </div>
      
          <div class="flex w-1/3 flex-wrap">
            <div class="w-full p-1 md:p-2">
              <img class="w-[313px] h-[313px]  object-cover object-center" src="/images/Rectangle 4355.png"/>
                <img class="w-[304px] h-[311px] top-[47px] object-cover object-center absolute " src="/images/Image Rec.png"/>
            </div>
          </div>
      
          <div class="flex w-1/3 flex-wrap">
            <div class="w-full p-1 md:p-2">
              <img class="w-[313px] h-[313px]  object-cover object-center" src="/images/Rectangle 4355.png"/>
                <img class="w-[304px] h-[311px] top-[47px] object-cover object-center absolute " src="/images/Image Rec.png"/>
            </div>
          </div>
        </div>
      </div>

</body>
</html><?php /**PATH C:\Users\Marie\laravel_SE\resources\views/Alumni Gallery2.blade.php ENDPATH**/ ?>