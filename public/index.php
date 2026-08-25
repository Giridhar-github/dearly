<?php

require_once __DIR__ . '/../src/config/config.php';
$page_title = 'Home';
require_once __DIR__ . '/../src/views/components/header.php';
require_once __DIR__ . '/../src/views/components/navbar.php';
?>
<main class="">
    <!-- hero section -->
    <div class="">
        <div class="h-full bg-cover py-10" style="background-image: url(<?= BASE_URL . 'assets/images/hero.webp' ?>);">
            <div class="mx-5 md:mx-20">
                <div class="flex flex-col gap-y-5">
                    <h2 class="tracking-wider text-6xl font-[Brush_Script_MT] font-extralight">We design.</h2>
                    <h1 class="text-6xl tracking-tight font-normal font-bold font-serif">You live your <br>precious moments</h1>
                    <h6 class="mt-3 text-gray-500 text-md tracking-wide text-md">We create personalized diaries & planners <br>that turn their stories, memories and <br>passions into something timeless.</h6>
                    <div class="">
                        <button class="bg-button_color text-white flex gap-4 px-3 py-3 rounded-md">Tell Us Your Story <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                                <path d="M18 8L22 12L18 16" />
                                <path d="M2 12H22" />
                            </svg></button>
                    </div>
                    <div class="flex flex-col md:flex-row gap-x-5 gap-y-3 mt-5 mb-10">
                        <div class="flex items-center gap-x-2 md:border-r-2 pe-5 md:border-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-icon lucide-user-round">
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 0 0-16 0" />
                            </svg>
                            <p class="text-sm text-gray-500 tracking-widest">100% personalised</p>
                        </div>
                        <div class="flex items-center gap-x-2 md:border-r-2 pe-5 md:border-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                            <p class="text-sm text-gray-500 tracking-widest">Premium Quality</p>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart">
                                <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                            </svg>
                            <p class="text-sm text-gray-500 tracking-widest">Made With Love</p>
                        </div>
                    </div>
                </div>
                <div class="mt-10 flex justify-center">
                    <div class="bg-white px-5 py-3 shadow-2xl flex justify-center rounded-3xl">
                        <div class="flex flex-col md:flex-row justify-center items-start">
                            <div class="flex flex-col gap-y-1 min-w-48 w-60 items-center justify-start p-5 ">
                                <div class="bg-red-200 w-16 p-5 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-sparkles-icon lucide-pencil-sparkles">
                                        <path d="M10 3H8" />
                                        <path d="m15.007 5.008 3.987 3.986" />
                                        <path d="M20 15v4" />
                                        <path d="M21.174 6.813a2.82 2.82 0 0 0-3.986-3.987L3.842 16.175a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                        <path d="M22 17h-4" />
                                        <path d="M4 5v4" />
                                        <path d="M6 7H2" />
                                        <path d="M9 2v2" />
                                    </svg>
                                </div>
                                <p class="text-wrap text-center font-semibold text-sm">Designed By Us, For You</p>
                                <p class="text-wrap text-center text-[0.8rem] tracking-tight">Unique designs based on their story and personality</p>
                            </div>
                            <div class="flex flex-col gap-y-1 min-w-48 w-60 items-center justify-center p-5 ">
                                <div class="bg-red-200 w-16 p-5 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-heart-icon lucide-book-heart">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                        <path d="M8.62 9.8A2.25 2.25 0 1 1 12 6.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z" />
                                    </svg>
                                </div>
                                <p class="text-wrap text-center font-semibold text-sm">Thoughtfully Personalized</p>
                                <p class="text-wrap text-center text-[0.8rem] tracking-tight">Every detail crafted only for you.</p>
                            </div>
                            <div class="flex flex-col gap-y-1 min-w-48 w-60 items-center justify-center p-5">
                                <div class="bg-red-200 w-16 p-5 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette-icon lucide-palette">
                                        <path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z" />
                                        <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                                        <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                                        <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                                        <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                                    </svg>
                                </div>
                                <p class="text-wrap text-center font-semibold text-sm">Premium Craftsmanship</p>
                                <p class="text-wrap text-center text-[0.8rem] tracking-tight">High quality materials for a lasting experience.</p>
                            </div>
                            <div class="flex flex-col gap-y-1 min-w-48 w-60 items-center justify-center p-5">
                                <div class="bg-red-200 w-16 p-5 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-heart-icon lucide-hand-heart">
                                        <path d="M11 14h2a2 2 0 0 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 16" />
                                        <path d="m14.45 13.39 5.05-4.694C20.196 8 21 6.85 21 5.75a2.75 2.75 0 0 0-4.797-1.837.276.276 0 0 1-.406 0A2.75 2.75 0 0 0 11 5.75c0 1.2.802 2.248 1.5 2.946L16 11.95" />
                                        <path d="m2 15 6 6" />
                                        <path d="m7 20 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a1 1 0 0 0-2.75-2.91" />
                                    </svg>
                                </div>
                                <p class="text-wrap text-center font-semibold text-sm">Delivered With Love & Care</p>
                                <p class="text-wrap text-center text-[0.8rem] tracking-tight">Carefully packed and delivered to your door.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collections -->
    <div class="my-12">
        <div class="flex flex-col items-center gap-y-4 mb-4">
            <h2 class="text-2xl md:text-4xl">DIARIES FOR EVERY STORIES</h2>
            <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" srcset="" class="h-5">
        </div>
        <div class="mx-5 flex gap-x-8 gap-y-2 justify-center flex-wrap">
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/travel_lover.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Travel Lover</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">For those who collect memories, not things.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/couple_diary.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Couple Diary</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">Your love story deserves its own pages.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/student_planner.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Student Planner</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">Plan better, achieve more, build your future.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/fitness_diary.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Fitness Journey</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">Track your progress. Celebrate your strength.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/pet_lover.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Pet Lover</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">For the ones who leave paw prints on our hearts.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
            <div class="w-48 flex flex-col shadow-sm bg-background">
                <div class="flex-3/4">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/professional_diary.webp' ?>" alt="">
                </div>
                <div class="flex-1/4 px-1 flex flex-col items-center gap-y-3 py-5">
                    <p class="font-bold">Professional</p>
                    <p class="text-wrap font-semibold text-[12px] text-center tracking-wider">Stay productive, set goals, achieve more.</p>
                    <a class="flex items-center gap-x-2 text-button_color" href="">Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once __DIR__ . '/../src/views/components/footer.php';
?>