<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="output.css">
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Katibeh:wght@400&display=swap"
  />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="/dist/app.css">
</head>
<body>
     <!--HEADER-->
     <div class="flex flex-row bg-white border border-black w-screen"></div>
     <div class="flex flex-row">
     
       <!--PLM HEADER-->
         <img class="h-[5.5rem] w-[5.5rem] ml-8 my-2" src="Logo only.png">
         <div class = " py-3 w-4/5 ml-5 flex flex-col">
          <h1 class="text-[35px] font-katibeh mt-0 -mb-2 text-gold">
             PAMANTASAN NG LUNGSOD NG MAYNILA
          </h1>
          <h2 class="-mt-2 text-[15px] font-inter text-black-200">
             UNIVERSITY OF THE CITY OF MANILA
          </h2>
          </div>  
     
          <!--BUTTONS-->
          <div class="flex flex-row -ml-[4rem] ">
           <button class=" font-inter text-center text-16 whitespace-nowrap text-white-10 my-7 px-14 bg-blue rounded border-[1px] border-blue">
                 LOG IN
         </button>
         </div>
     </div>
     
     <!--NAVBAR-->
     <div class="bg-blue h-1/5 w-screen">
         <navbar class="text-white-30 text-paragraph3 py-2 place-content-evenly font-inter w-screen flex flex-row">
             <div>
                 APPLY FOR PARTNERSHIP
             </div>
             <div>
                 NEWS AND UPDATE
             </div>
             <div>
                 SERVICES
                 <button>
                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M13.5 6.75L9 11.25L4.5 6.75" stroke="white"/>
                         </svg>            
                 </button>
             </div>
             <div>
                 CAREERS
                 <button>
                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M13.5 6.75L9 11.25L4.5 6.75" stroke="white"/>
                         </svg>            
                 </button>
             </div>    
             <div>
                 ALUMNI EVENTS
                 <button>
                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M13.5 6.75L9 11.25L4.5 6.75" stroke="white"/>
                         </svg>            
                 </button>
             </div>    
         </navbar>
         </div>
     
         <!--MAIN PAGE-->
     <div class="h-screen w-screen flex flex-row">

        <div class="flex flex-row">
        <img class= " w-[411.5px] h-[965px]" src="/images/EVENT IMAGE.png">
        <div class="pt-7  w-screen ml-[50px] flex flex-col">
            <span class="text-[50px] font-inter font-bold text-blue ">
                ALUMNI EVENTS
            </span>
       
        
        <div class=" absolute mt-[1.700rem] ml-[28rem] text-black text-[18px] font-medium font-['Inter']">
            Year
        </div>
        <div class="absolute mt-[1rem] ml-[31rem] h-[40px] w-[150px] bg-white-10 rounded-[15px] py-3 border border-blue" x-data="{name: '' }">
            <select class="font-inter text-center px-[4rem] focus:outline-none" type="text" x-model="name">
                <option value="" disabled>None</option>
                <option> </option>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>
            <span x-text="name"></span>
          </div> 

        <div class=" absolute mt-[1.700rem] ml-[47rem] text-black text-[18px] font-medium font-['Inter']">
            Status
        </div>
        <div class="absolute mt-[1rem] ml-[51rem] h-[40px] w-[150px] bg-white-10 rounded-[15px] py-3 border border-blue" x-data="{name: '' }">
            <select class="font-inter text-center px-[4rem] focus:outline-none" type="text" x-model="name">
                <option value="" disabled>None</option>
                <option> </option>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>
            <span x-text="name"></span>
          </div> 
        
        

        <!--Event-->
        <button>  
           <div class="absolute w-[20.551rem] h-[5.438rem] bg-blue rounded top-[18.625rem] left-[28.125rem]"></div>
           <div class="absolute w-[20.551rem] h-[15.438rem] bg-white shadow-2xl top-[18.625rem] left-[28.125rem]"></div>
           <div class="absolute top-[19.500rem] left-[30.125rem] text-white-10 text-[42px] font-bold font-['Inter']">
               25
           </div>
           <div class="absolute top-[20.500rem] left-[38.125rem] text-white-10 text-[25px] font-bold font-['Inter']">
              DECEMBER
           </div>

           <div class="absolute top-[25.500rem] left-[30.125rem] text-blue-hover text-xl font-medium font-['Inter'] tracking-wide">
              LOREM IPSUM DOLOR SIT</div>

           <img class= "absolute top-[29.500rem] left-[30.125rem] w-[25px] h-[25px]" 
            src="/images/Pin_light.png">
           <div class="absolute top-[29.500rem] left-[32rem] text-black-300 text-[20px] font-medium font-['Inter'] tracking-wide">
              Location</div>
           <div class="absolute top-[29.800rem] left-[42rem] opacity-70 text-blue-pressed text-[15px] font-medium font-['Inter'] tracking-wide">
              View More
           </div>
        </button>

 
</body>
</html><?php /**PATH C:\Users\Marie\laravel_SE\resources\views/Upcoming Event1.blade.php ENDPATH**/ ?>