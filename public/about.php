<?php

require_once __DIR__ . '/../src/config/config.php';
$page_title = 'About Us';
require_once __DIR__ . '/../src/views/components/header.php';
require_once __DIR__ . '/../src/views/components/navbar.php';
?>
<main class="">

    <!-- Hero / intro -->
    <div class="relative bg-secondary overflow-hidden">
        <svg class="absolute -top-10 -right-10 opacity-[0.06] pointer-events-none" width="280" height="280" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="1">
            <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
        </svg>

        <div class="relative mx-5 md:mx-20 py-20 flex flex-col items-center text-center gap-y-5">
            <p class="uppercase tracking-[0.3em] text-xs text-button_color font-semibold">Our Story</p>
            <h1 class="text-4xl md:text-6xl font-serif tracking-tight text-dark_text max-w-2xl">
                Every diary begins <br class="hidden md:block"> with a story worth keeping.
            </h1>
            <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" class="h-5">
            <p class="text-gray-500 max-w-lg tracking-wide">
                Dearly was born from a simple belief — that the small, quiet moments of life
                deserve a beautiful place to live. We craft personalized diaries and planners
                that turn memories, dreams, and passions into something timeless.
            </p>
        </div>
    </div>

    <!-- Origin story -->
    <div class="mx-5 md:mx-20 my-16 md:my-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="order-2 md:order-1">
                <p class="uppercase tracking-[0.3em] text-xs text-button_color font-semibold mb-3">How It Started</p>
                <h2 class="text-3xl md:text-4xl font-serif text-dark_text mb-5">
                    A love letter to the everyday
                </h2>
                <p class="text-gray-500 tracking-wide leading-relaxed mb-4">
                    It started with a single handwritten journal, gifted to a friend going through
                    a season of change. What began as one thoughtful, personal gift grew into a
                    mission — to help people hold onto their stories in a way that feels as
                    meaningful as the memories themselves.
                </p>
                <p class="text-gray-500 tracking-wide leading-relaxed">
                    Today, every diary we make is still designed the same way that first one was:
                    with care, intention, and a genuine curiosity about the person it's for.
                </p>
            </div>
            <div class="order-1 md:order-2">
                <div class="rounded-3xl overflow-hidden shadow-xl h-72 md:h-96">
                    <img class="w-full h-full object-cover" src="<?= BASE_URL . 'assets/images/collections/couple_diary.webp' ?>" alt="Handcrafted diary">
                </div>
            </div>
        </div>
    </div>

    <!-- Values -->
    <div class="bg-secondary py-16 md:py-20">
        <div class="mb-12 flex flex-col items-center gap-y-4 px-5">
            <p class="uppercase tracking-[0.3em] text-xs text-button_color font-semibold">What We Stand For</p>
            <h2 class="text-2xl md:text-4xl font-serif text-dark_text text-center">Our Values</h2>
            <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" class="h-5">
        </div>

        <div class="mx-5 md:mx-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white rounded-2xl shadow-sm p-7 flex flex-col items-center text-center gap-y-3 hover:-translate-y-1 hover:shadow-md transition-all duration-200">
                <div class="bg-red-200 w-14 h-14 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                <p class="font-semibold text-dark_text">Personalized Design</p>
                <p class="text-sm text-gray-500 tracking-tight">Every piece is designed around your story — never off-the-shelf.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-7 flex flex-col items-center text-center gap-y-3 hover:-translate-y-1 hover:shadow-md transition-all duration-200">
                <div class="bg-red-200 w-14 h-14 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                </div>
                <p class="font-semibold text-dark_text">Premium Quality</p>
                <p class="text-sm text-gray-500 tracking-tight">Carefully sourced materials built to be kept, not discarded.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-7 flex flex-col items-center text-center gap-y-3 hover:-translate-y-1 hover:shadow-md transition-all duration-200">
                <div class="bg-red-200 w-14 h-14 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z" />
                        <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                        <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                        <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                        <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <p class="font-semibold text-dark_text">Honest Craftsmanship</p>
                <p class="text-sm text-gray-500 tracking-tight">Every diary is finished by hand, with real attention to detail.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-7 flex flex-col items-center text-center gap-y-3 hover:-translate-y-1 hover:shadow-md transition-all duration-200">
                <div class="bg-red-200 w-14 h-14 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 14h2a2 2 0 0 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 16" />
                        <path d="m14.45 13.39 5.05-4.694C20.196 8 21 6.85 21 5.75a2.75 2.75 0 0 0-4.797-1.837.276.276 0 0 1-.406 0A2.75 2.75 0 0 0 11 5.75c0 1.2.802 2.248 1.5 2.946L16 11.95" />
                        <path d="m2 15 6 6" />
                        <path d="m7 20 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a1 1 0 0 0-2.75-2.91" />
                    </svg>
                </div>
                <p class="font-semibold text-dark_text">Delivered With Care</p>
                <p class="text-sm text-gray-500 tracking-tight">Thoughtfully packed, so it feels special from the moment it arrives.</p>
            </div>

        </div>
    </div>

    <!-- Stats -->
    <div class="mx-5 md:mx-20 my-16 md:my-24">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 text-center">
            <div>
                <p class="text-3xl md:text-5xl font-serif text-button_color"><?= DIARIES_DELIVERED ?></p>
                <p class="text-sm text-gray-500 tracking-widest mt-2 uppercase">Diaries Delivered</p>
            </div>
            <div>
                <p class="text-3xl md:text-5xl font-serif text-button_color"><?= AVERAGE_RATING ?>★</p>
                <p class="text-sm text-gray-500 tracking-widest mt-2 uppercase">Average Rating</p>
            </div>
            <div>
                <p class="text-3xl md:text-5xl font-serif text-button_color"><?= PERSONALISED ?></p>
                <p class="text-sm text-gray-500 tracking-widest mt-2 uppercase">Personalised</p>
            </div>
            <div>
                <p class="text-3xl md:text-5xl font-serif text-button_color"><?= GIFT_SATISFACTION ?></p>
                <p class="text-sm text-gray-500 tracking-widest mt-2 uppercase">Gift Satisfaction</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="mx-5 md:mx-20 mb-20">
        <div class="bg-primary rounded-3xl px-8 py-14 md:py-20 flex flex-col items-center text-center gap-y-5 relative overflow-hidden">
            <svg class="absolute -bottom-14 -left-10 opacity-[0.07] pointer-events-none" width="260" height="260" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                <circle cx="12" cy="12" r="10" />
            </svg>
            <h2 class="relative text-2xl md:text-4xl font-serif text-white max-w-lg">
                Ready to turn your story into something timeless?
            </h2>
            <p class="relative text-gray-200 tracking-wide max-w-md">
                Let's design a diary or planner that's made entirely for you.
            </p>
            <a href="<?= BASE_URL . 'contact' ?>" class="relative bg-button_color text-white flex items-center gap-3 px-6 py-3 rounded-md mt-2 hover:brightness-110 transition-all duration-200">
                Tell Us Your Story
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8L22 12L18 16" />
                    <path d="M2 12H22" />
                </svg>
            </a>
        </div>
    </div>

</main>
<?php
require_once __DIR__ . '/../src/views/components/footer.php';
?>