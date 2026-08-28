<?php

require_once __DIR__ . '/../src/config/config.php';
$page_title = 'Collections';
require_once __DIR__ . '/../src/views/components/header.php';
require_once __DIR__ . '/../src/views/components/navbar.php';

$collections = [
    [
        'title' => 'Travel Lover',
        'desc' => 'For those who collect memories, not things.',
        'long_desc' => 'Built for wanderers — pages designed to hold boarding passes, pressed flowers, city maps, and the small details you\'ll want to remember long after the trip ends.',
        'cover' => 'travel_lover.webp',
    ],
    [
        'title' => 'Couple Diary',
        'desc' => 'Your love story deserves its own pages.',
        'long_desc' => 'A shared journal for two — anniversaries, inside jokes, little notes to each other, and the everyday moments that quietly become your favorite ones.',
        'cover' => 'couple_diary.webp',
    ],
    [
        'title' => 'Student Planner',
        'desc' => 'Plan better, achieve more, build your future.',
        'long_desc' => 'Structured layouts for timetables, deadlines, and goals — made to keep a busy student year organized without losing the personal touch.',
        'cover' => 'student_planner.webp',
    ],
    [
        'title' => 'Fitness Journey',
        'desc' => 'Track your progress. Celebrate your strength.',
        'long_desc' => 'Log workouts, meals, and milestones in one place — designed to keep you motivated on the days that are hard and proud on the days that are easy.',
        'cover' => 'fitness_diary.webp',
    ],
    [
        'title' => 'Pet Lover',
        'desc' => 'For the ones who leave paw prints on our hearts.',
        'long_desc' => 'A keepsake for every walk, vet visit, and nap in the sun — because the years with them deserve to be remembered in detail.',
        'cover' => 'pet_lover.webp',
    ],
    [
        'title' => 'Professional',
        'desc' => 'Stay productive, set goals, achieve more.',
        'long_desc' => 'Clean, focused layouts for meeting notes, quarterly goals, and daily priorities — made for the version of you that\'s building something.',
        'cover' => 'professional_diary.webp',
    ]
];
?>
<main class="">

    <!-- Hero -->
    <div class="relative bg-secondary overflow-hidden">
        <svg class="absolute -top-10 -right-10 opacity-[0.06] pointer-events-none" width="280" height="280" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="1">
            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
        </svg>

        <div class="relative mx-5 md:mx-20 py-16 md:py-20 flex flex-col items-center text-center gap-y-5">
            <p class="uppercase tracking-[0.3em] text-xs text-button_color font-semibold" data-reveal>Browse By Story</p>
            <h1 class="text-4xl md:text-6xl font-serif tracking-tight text-dark_text max-w-2xl" data-reveal>
                Diaries for every story
            </h1>
            <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" class="h-5" data-reveal>
            <p class="text-gray-500 max-w-lg tracking-wide" data-reveal>
                Every collection starts from a feeling — a person, a season, a habit worth keeping.
                Explore the styles below to see the kind of story we'd love to help you tell.
            </p>
        </div>
    </div>

    <!-- Collections grid -->
    <div class="mx-5 md:mx-20 my-16 md:my-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-reveal-group>

            <?php foreach ($collections as $each_collection): ?>
                <div class="group relative overflow-hidden rounded-3xl bg-white shadow-sm hover:shadow-xl transition-all duration-300" data-reveal-item>

                    <div class="h-72 overflow-hidden">
                        <img
                            class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="<?= BASE_URL . 'assets/images/collections/' . $each_collection['cover'] ?>"
                            alt="<?= htmlspecialchars($each_collection['title']) ?>">
                    </div>

                    <!-- gradient overlay for text legibility on hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="p-6 flex flex-col gap-y-2">
                        <p class="font-serif text-xl text-dark_text"><?= htmlspecialchars($each_collection['title']) ?></p>
                        <p class="text-sm text-button_color font-semibold tracking-wide"><?= htmlspecialchars($each_collection['desc']) ?></p>
                        <p class="text-sm text-gray-500 leading-relaxed mt-1"><?= htmlspecialchars($each_collection['long_desc']) ?></p>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Coming soon notice -->
    <div class="mx-5 md:mx-20 mb-20">
        <div class="bg-secondary rounded-3xl px-8 py-12 md:py-16 flex flex-col items-center text-center gap-y-5" data-reveal="zoom">
            <span class="flex h-14 w-14 items-center justify-center rounded-full bg-white shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="rgb(129 47 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 3H8" />
                    <path d="m15.007 5.008 3.987 3.986" />
                    <path d="M20 15v4" />
                    <path d="M21.174 6.813a2.82 2.82 0 0 0-3.986-3.987L3.842 16.175a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                    <path d="M22 17h-4" />
                    <path d="M4 5v4" />
                    <path d="M6 7H2" />
                    <path d="M9 2v2" />
                </svg>
            </span>
            <h2 class="text-2xl md:text-3xl font-serif text-dark_text max-w-md">
                Full collections launching soon
            </h2>
            <p class="text-gray-500 tracking-wide max-w-md">
                We're putting the finishing touches on our shop. In the meantime, tell us
                your story and we'll design something one-of-a-kind, just for you.
            </p>
            <a href="<?= BASE_URL . 'contact.php' ?>" class="bg-button_color text-white flex items-center gap-3 px-6 py-3 rounded-md mt-2 hover:brightness-110 transition-all duration-200">
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
<script src="<?= BASE_URL . 'assets/scripts/scroll-effects.js' ?>"></script>