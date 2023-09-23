<?php
include("navbar/navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/445aa1d2b6.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!--  -->
    <div id="overlay" class="">
        <div class="ml-[11%] mt-[21%] text-white text-[550%] font-bold">
            <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
                Designs
            </div>
            <div class="mt-[-1%] ml-[5%]" data-aos="fade-up" data-aos-delay="650" data-aos-duration="1500">
                & Build.
            </div>
            <div class="ml-[5%] font-light text-[17%]" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1500">
                We design and build award-winning commercial interiors.
            </div>
        </div>
    </div>

    <div class="video-container">
        <video muted autoplay loop>
            <source src="Architect_files/videos/Homepage.mp4" type="video/mp4">
        </video>
    </div>


    <div class="mt-[830px]"></div>

    <!-- About us -->
    <div class="mx-[50px] grid grid-cols-2">
        <div class="text-center">
            <h1 class="text-6xl font-bold">About us.</h1>
            <h1 class="mt-[15px] text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum assumenda accusantium doloremque incidunt laudantium repudiandae, officia minus, repellat quia dolore neque commodi ipsam soluta nobis rem? Dolores, totam illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur omnis architecto minus aperiam at libero dolorem nihil, modi asperiores non provident quae perferendis obcaecati labore, porro nobis ipsum excepturi illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium incidunt nisi quod accusantium necessitatibus iste qui odio laborum rem ullam accusamus, eligendi totam quibusdam quae repellat ad error optio culpa!</h3>
                <h1 class="mt-[30px] text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum assumenda accusantium doloremque incidunt laudantium repudiandae, officia minus, repellat quia dolore neque commodi ipsam soluta nobis rem? Dolores, totam illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur omnis architecto minus aperiam at libero dolorem nihil, modi asperiores non provident quae perferendis obcaecati labore, porro nobis ipsum excepturi illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium incidunt nisi quod accusantium necessitatibus iste qui odio laborum rem ullam accusamus, eligendi totam quibusdam quae repellat ad error optio culpa!</h3>
                    <h1 class="mt-[30px] text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum assumenda accusantium doloremque incidunt laudantium repudiandae, officia minus, repellat quia dolore neque commodi ipsam soluta nobis rem? Dolores, totam illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur omnis architecto minus aperiam at libero dolorem nihil, modi asperiores non provident quae perferendis obcaecati labore, porro nobis ipsum excepturi illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium incidunt nisi quod accusantium necessitatibus iste qui odio laborum rem ullam accusamus, eligendi totam quibusdam quae repellat ad error optio culpa!</h3>
        </div>

        <div class="mx-auto bg-black w-[500px] h-[600px] mb-[100px]">
            <div class="flex relative ml-[30px] mt-[40px]">
                <img class="absolute inset-0 h-[260px] w-[165px] object-cover transform transition-all duration-300 hover:scale-110 hover:h-[265px] hover:w-[170px]" src="Architect_files/images/hylands.jpg">
                <div class="text-white ml-[190px] bg-gray-500 h-[290px] w-[250px] text-center">
                    <h1 class="mt-[110px] text-sm">HELLO THERE.</h1>
                    <h1 class="font-extrabold text-black text-2xl">HELLO THERE.</h1>
                    <h1 class="text-sm">HELLO THERE.</h1>
                </div>
            </div>

            <div class="relative ml-[170px] mt-[38px]">
                <img class="absolute h-[195px] w-[295px] object-cover transform transition-all duration-300 hover:scale-110 hover:h-[200px] hover:w-[300px]" src="Architect_files/images/best.jpg">
            </div>
        </div>
    </div>

    <div class="my-8 text-center font-bold text-7xl">Our Showcase</div>

    <!--1st Carousel -->
    <div class="mx-[50px] grid grid-cols-2">
        <div class="">
            <div id="default-carousel" class="relative w-[1100px]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[700px] w-[full] overflow-hidden">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/paint.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/pencils.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="my-auto ml-[198px] h-[600px] text-white bg-black">
            <div class="mt-[100px] ml-[60px] w-[550px]">
                <h1 class="text-sky-600 text-2xl font-bold">Design Consultancy</h1>
                <h1 class="text-5xl font-bold my-4">Amazon Singapore</h1>
                <h1 class="text-xl">Tech-giant amazon scales up their presence in Singapore through a new office spanning three floors at Asia Square.
                    The new space will house up to 700 employees from Amazon's consumer business and corporate functions.
                </h1>
                <h1><i class="fa-solid fa-plus mt-[30px] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
            </div>
        </div>
    </div>

    <!-- 2nd Carousel -->
    <div class="mx-[50px] mt-[120px] grid grid-cols-2">
        <div class="my-auto h-[500px] w-[903px] text-white bg-black">
            <div class="mt-[100px] ml-[60px] w-[550px]">
                <h1 class="text-sky-600 text-2xl font-bold">Design Consultancy</h1>
                <h1 class="text-5xl font-bold my-4">Amazon Singapore</h1>
                <h1 class="text-xl">Tech-giant amazon scales up their presence in Singapore through a new office spanning three floors at Asia Square.
                    The new space will house up to 700 employees from Amazon's consumer business and corporate functions.
                </h1>
                <h1><i class="fa-solid fa-plus mt-[30px] text-2xl py-[10px] px-[15px] bg-blue-600 rounded-full"></i><a href=""><span class="ml-[15px] text-xl font-bold hover:text-blue-600 cursor-pointer">View more.</span></a></h1>
            </div>
        </div>

        <div class="">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[650px] w-full overflow-hidden">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/paint.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="Architect_files/images/pencils.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>

                </div>
                <!-- Slider indicators -->
                <div class="absolute mb-[95px] z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

<!-- check more project -->
    <div class="text-center font-bold text-3xl text-gray-800 mb-[50px]">
       <a class="hover:text-sky-700" href="">See More Projects </a><i class="fa-solid fa-plus mb-[15px] mt-[30px] text-xl text-white bg-sky-600 px-4 py-2 rounded-full"></i>
    </div>

    <!-- Carousel of the Team -->
<div id="indicators-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-[500px] overflow-hidden">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <div class="bg-gray-700 h-full w-full">
                <h1 class="text-center pt-[240px] text-5xl font-bold text-white">Introduce Yourself</h1>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <div class="bg-gray-700 h-full w-full">
                <h1 class="text-center pt-[240px] text-5xl font-bold text-white">Introduce Yourself</h1>
            </div>
        </div>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!--  -->


<!-- contact -->
<div class="bg-black w-full h-[200px] text-center pt-[50px]">
<h1 class="text-gray-400 text-xl font-bold">Universidad de Dagupan</h1>
<h1 class="text-gray-400 text-xl font-bold">jakemerlin1133@gmail.com</h1>
<h1 class="text-gray-400 text-xl font-bold">+63 9187584371</h1>

</div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>