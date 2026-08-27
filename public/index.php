<?php

require_once __DIR__ . '/../src/config/config.php';
$page_title = 'Home';
require_once __DIR__ . '/../src/views/components/header.php';
require_once __DIR__ . '/../src/views/components/navbar.php';

$collections = [
    [
        'title' => 'Travel Lover',
        'desc' => 'For those who collect memories, not things.',
        'cover' => 'travel_lover.webp',
    ],
    [
        'title' => 'Couple Diary',
        'desc' => 'Your love story deserves its own pages.',
        'cover' => 'couple_diary.webp',
    ],
    [
        'title' => 'Student Planner',
        'desc' => 'Plan better, achieve more, build your future.',
        'cover' => 'student_planner.webp',
    ],
    [
        'title' => 'Fitness Journey',
        'desc' => 'Track your progress. Celebrate your strength.',
        'cover' => 'fitness_diary.webp',
    ],
    [
        'title' => 'Pet Lover',
        'desc' => 'For the ones who leave paw prints on our hearts.',
        'cover' => 'pet_lover.webp',
    ],
    [
        'title' => 'Professional',
        'desc' => 'Stay productive, set goals, achieve more.',
        'cover' => 'professional_diary.webp',
    ]
];

$testimonials = [
    [
        'author' => 'Ananya S',
        'cover' => '',
        'content' => 'The diary was beyond my expectations. Every page felt like it was made just for me.',
        'rating' => 5,
        'is_female' => true
    ],
    [
        'author' => 'Rohit M',
        'cover' => '',
        'content' => 'Such a unique and thoughtful gift. The team really captured every detail perfectly.',
        'rating' => 5,
        'is_female' => false
    ],
    [
        'author' => 'Priya N',
        'cover' => '',
        'content' => "Finally a diary that feels like 'me'. I use it every single day. Love it!",
        'rating' => 5,
        'is_female' => true
    ]
];
$male_avatar = BASE_URL . 'assets/images/icons/male_avatar.svg';
$female_avatar = BASE_URL . 'assets/images/icons/female_avatar.svg';

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
    <?php if (empty($collections)) { ?>

        <div class="my-12 overflow-hidden">
            <!-- Heading -->
            <div class="mb-8 flex flex-col items-center gap-y-4">
                <h2 class="text-2xl md:text-4xl">
                    DIARIES FOR EVERY STORY
                </h2>
                <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" class="h-5">
            </div>

            <!-- Carousel wrapper -->
            <div class="relative z-0 flex justify-center items-center">

                <!-- Previous button -->
                <button id="category-prev" type="button" aria-label="Previous category" class="absolute left-2 top-1/2 z-10 -translate-y-1/2 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-lg transition-all duration-200 hover:scale-110 hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </button>

                <!-- Carousel viewport -->
                <div id="category-carousel" class="overflow-hidden w-[95%]">
                    <!-- Moving track -->
                    <div id="category-track" class="flex w-max">
                        <div class="category-set flex shrink-0 gap-8 px-4">
                            <!-- Card -->
                            <?php foreach ($collections as $each_collection) { ?>
                                <div class="category-card w-48 shrink-0 overflow-hidden bg-background shadow-sm">
                                    <div class="h-64">
                                        <img class="h-full w-full object-cover" src="<?= BASE_URL . 'assets/images/collections/' . $each_collection['cover'] ?>" alt="Travel Lover">
                                    </div>
                                    <div class="flex flex-col items-center gap-y-3 px-2 py-5">
                                        <p class="font-bold"><?= $each_collection['title'] ?></p>
                                        <p class="text-center text-[12px] font-semibold tracking-wider"><?= $each_collection['desc'] ?></p>
                                        <a class="flex items-center gap-x-2 text-button_color" href="#"> Explore<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 8L22 12L18 16" />
                                                <path d="M2 12H22" />
                                            </svg></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Next button -->
                <button id="category-next" type="button" aria-label="Next category" class="absolute right-2 top-1/2 z-10 -translate-y-1/2 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-lg transition-all duration-200 hover:scale-110 hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>
    <?php } ?>

    <!-- How It Works -->
    <section class="bg-[#fcf7f4] py-12 md:py-16 overflow-hidden">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">

            <!-- Heading -->
            <div class="mb-10">
                <h2 class="font-serif text-2xl font-semibold tracking-wide text-[#292525] md:text-3xl">
                    HOW IT WORKS <span class="font-normal text-[#b65b68]">♡</span>
                </h2>
            </div>


            <!-- Main content -->
            <div class="grid items-center gap-10 lg:grid-cols-[1fr_280px] xl:grid-cols-[1fr_320px]">


                <!-- Steps -->
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-0">


                    <!-- STEP 1 -->
                    <div class="relative flex flex-col items-center text-center lg:px-5">

                        <!-- Number + Icon -->
                        <div class="relative mb-5">

                            <span class="absolute -left-7 top-1/2 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full bg-[#a94754] text-xs font-semibold text-white">
                                1
                            </span>

                            <div class="flex h-20 w-20 items-center justify-center rounded-full border-2 border-[#ead6d1] bg-[#fffaf8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#a94754" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                    <path d="M8 8h.01" />
                                    <path d="M12 8h.01" />
                                    <path d="M16 8h.01" />
                                </svg>
                            </div>

                        </div>


                        <h3 class="mb-3 text-sm font-bold text-[#302b2b] md:text-base">
                            Share Your Story
                        </h3>

                        <p class="max-w-[190px] text-xs leading-6 tracking-wide text-gray-500">
                            Tell us about their interests, memories & preferences.
                        </p>


                        <!-- Arrow -->
                        <div class="absolute right-[-20px] top-9 hidden w-10 lg:block">
                            <svg viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                <path d="M2 10C15 5 28 5 43 10" stroke="#dfa1a8" stroke-width="1.5" stroke-dasharray="5 5" />
                                <path d="M39 6L46 10L39 14" stroke="#dfa1a8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                    </div>



                    <!-- STEP 2 -->
                    <div class="relative flex flex-col items-center text-center lg:px-5">

                        <!-- Number + Icon -->
                        <div class="relative mb-5">

                            <span class="absolute -left-7 top-1/2 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full bg-[#a94754] text-xs font-semibold text-white">
                                2
                            </span>

                            <div class="flex h-20 w-20 items-center justify-center rounded-full border-2 border-[#ead6d1] bg-[#fffaf8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#a94754" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                                    <path d="m15 5 3 3" />
                                </svg>
                            </div>

                        </div>


                        <h3 class="mb-3 text-sm font-bold text-[#302b2b] md:text-base">
                            We Design with Love
                        </h3>

                        <p class="max-w-[190px] text-xs leading-6 tracking-wide text-gray-500">
                            Our creative team designs a unique diary just for them.
                        </p>


                        <!-- Arrow -->
                        <div class="absolute right-[-20px] top-9 hidden w-10 lg:block">
                            <svg viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                <path d="M2 10C15 5 28 5 43 10" stroke="#dfa1a8" stroke-width="1.5" stroke-dasharray="5 5" />
                                <path d="M39 6L46 10L39 14" stroke="#dfa1a8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                    </div>



                    <!-- STEP 3 -->
                    <div class="relative flex flex-col items-center text-center lg:px-5">

                        <!-- Number + Icon -->
                        <div class="relative mb-5">

                            <span class="absolute -left-7 top-1/2 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full bg-[#a94754] text-xs font-semibold text-white">
                                3
                            </span>

                            <div class="flex h-20 w-20 items-center justify-center rounded-full border-2 border-[#ead6d1] bg-[#fffaf8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#a94754" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>

                        </div>


                        <h3 class="mb-3 text-sm font-bold text-[#302b2b] md:text-base">
                            Preview & Approve
                        </h3>

                        <p class="max-w-[190px] text-xs leading-6 tracking-wide text-gray-500">
                            We show you the design. You review & approve it.
                        </p>

                        <!-- Arrow -->
                        <div class="absolute right-[-20px] top-9 hidden w-10 lg:block">
                            <svg viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                <path d="M2 10C15 5 28 5 43 10" stroke="#dfa1a8" stroke-width="1.5" stroke-dasharray="5 5" />
                                <path d="M39 6L46 10L39 14" stroke="#dfa1a8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                    </div>



                    <!-- STEP 4 -->
                    <div class="relative flex flex-col items-center text-center lg:px-5">

                        <!-- Number + Icon -->
                        <div class="relative mb-5">

                            <span class="absolute -left-7 top-1/2 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full bg-[#a94754] text-xs font-semibold text-white">
                                4
                            </span>

                            <div class="flex h-20 w-20 items-center justify-center rounded-full border-2 border-[#ead6d1] bg-[#fffaf8]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#a94754" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="14" x="3" y="8" rx="2" />
                                    <path d="M12 8V3" />
                                    <path d="m9 3 3-3 3 3" />
                                    <path d="M3 12h18" />
                                </svg>
                            </div>

                        </div>


                        <h3 class="mb-3 text-sm font-bold text-[#302b2b] md:text-base">
                            Handcrafted & Delivered
                        </h3>

                        <p class="max-w-[190px] text-xs leading-6 tracking-wide text-gray-500">
                            We craft it with care and deliver it to your doorstep.
                        </p>

                    </div>

                </div>



                <!-- Image -->
                <div class="hidden lg:block">
                    <div class="relative mx-auto h-[300px] w-[250px] rotate-[-4deg]">

                        <div class="absolute inset-0 overflow-hidden bg-white p-3 shadow-xl">
                            <img src="<?= BASE_URL . 'assets/images/how_it_works.webp' ?>" alt="Our handcrafted diary" class="h-full w-full object-cover">
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- testimonials -->
    <?php if (!empty($testimonials)) { ?>
        <div class="my-16 md:my-24 mx-5 md:mx-10">
            <div class="relative rounded-[2rem] overflow-hidden bg-gradient-to-br from-[#fdf1f0] via-[#fdf6f0] to-[#fdf1f0] px-6 md:px-10 py-14 md:py-16">

                <!-- decorative soft blobs -->
                <div class="absolute -top-20 -left-20 w-72 h-72 rounded-full bg-button_color/5 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-16 w-80 h-80 rounded-full bg-accent/10 blur-3xl pointer-events-none"></div>

                <div class="relative flex items-center gap-4 md:gap-8">

                    <!-- Previous button -->
                    <button id="testimonial-prev" type="button" aria-label="Previous testimonial"
                        class="hidden md:flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white shadow-lg transition-all duration-200 hover:scale-110 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </button>
                    <!-- Left: heading -->
                    <div class="shrink-0 w-full md:w-64 lg:w-72 flex flex-col gap-y-3 mb-6 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="rgb(129 47 61)" opacity="0.5">
                            <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17c0 2.62 1.9 4.7 4.34 5.1.2 2-1.14 3.4-1.14 3.4 2.9-.1 5.3-2.3 5.3-6.5V11.2A5.17 5.17 0 0 0 7.17 6Zm10 0A5.17 5.17 0 0 0 12 11.17c0 2.62 1.9 4.7 4.34 5.1.2 2-1.14 3.4-1.14 3.4 2.9-.1 5.3-2.3 5.3-6.5V11.2A5.17 5.17 0 0 0 17.17 6Z" />
                        </svg>
                        <h2 class="text-3xl md:text-4xl font-serif text-dark_text leading-snug">
                            More than a diary.<br>
                            A lifetime of memories.
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline-block align-middle ml-1 -translate-y-1">
                                <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                            </svg>
                        </h2>
                    </div>
                    <!-- Right: testimonial carousel -->
                    <div id="testimonial-carousel" class="overflow-hidden flex-1">
                        <div id="testimonial-track" class="flex w-max">
                            <div class="testimonial-set flex shrink-0 gap-6 md:gap-7">
                                <?php foreach ($testimonials as $each_testimonial) { ?>
                                    <!-- Card 1 -->
                                    <div class="testimonial-card w-72 md:w-80 shrink-0 bg-white rounded-2xl shadow-md px-6 py-7 flex flex-col gap-y-4">
                                        <div class="flex items-center justify-between">
                                            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-secondary text-button_color">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                                                </svg>
                                            </span>
                                            <div class="flex gap-0.5 text-amber-400">
                                                <?php for ($i = 0; $i < $each_testimonial['rating']; $i++): ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z" />
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-600 tracking-wide leading-relaxed text-center">
                                            "<?= $each_testimonial['content'] ?>"
                                        </p>
                                        <div class="flex items-center justify-center gap-x-3 mt-1">
                                            <?php if ($each_testimonial['cover'] != '') { ?>
                                                <img class="h-9 w-9 rounded-full object-cover" src="<?= BASE_URL . 'assets/images/testimonials/ananya.webp' ?>" alt="<?= $each_testimonial['author'] ?>">
                                            <?php } else { ?>
                                                <img class="h-9 w-9 rounded-full object-cover" src="<?= $each_testimonial['is_female'] ? $female_avatar : $male_avatar ?>" alt="<?= $each_testimonial['author'] ?>">
                                            <?php } ?>
                                            <p class="text-sm font-semibold text-dark_text">— <?= $each_testimonial['author'] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Next button -->
                    <button id="testimonial-next" type="button" aria-label="Next testimonial"
                        class="hidden md:flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white shadow-lg transition-all duration-200 hover:scale-110 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    <?php } ?>

</main>
<?php
require_once __DIR__ . '/../src/views/components/footer.php';
?>