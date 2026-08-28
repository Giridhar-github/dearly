<?php

require_once __DIR__ . '/../src/config/config.php';
$page_title = 'Contact Us';
require_once __DIR__ . '/../src/views/components/header.php';
require_once __DIR__ . '/../src/views/components/navbar.php';


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>


<main class="">

    <!-- Page heading -->
    <div class="my-12 flex flex-col items-center gap-y-4">
        <h2 class="text-2xl md:text-4xl">GET IN TOUCH</h2>
        <img src="<?= BASE_URL . 'assets/images/underline.png' ?>" alt="" class="h-5">
        <p class="text-center text-gray-500 max-w-md px-5">
            Have a question about a custom diary or planner? We'd love to hear your story.
        </p>
    </div>

    <!-- Contact section -->
    <div class="mx-5 md:mx-20 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 shadow-2xl rounded-[2rem] overflow-hidden">

            <!-- Left: contact info -->
            <div class="relative bg-gradient-to-br from-primary to-[#4a3226] text-white p-10 md:p-12 flex flex-col gap-y-8 justify-center overflow-hidden">

                <!-- decorative background pattern -->
                <svg class="absolute -top-10 -right-10 opacity-10" width="220" height="220" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                    <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                </svg>
                <svg class="absolute -bottom-14 -left-10 opacity-5" width="260" height="260" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                    <circle cx="12" cy="12" r="10" />
                </svg>

                <div class="relative">
                    <p class="uppercase tracking-[0.3em] text-[11px] text-light_accent mb-3">Let's Talk</p>
                    <h3 class="text-3xl md:text-4xl font-serif mb-3">Contact Information</h3>
                    <div class="h-[3px] w-14 bg-accent rounded-full mb-4"></div>
                    <p class="text-sm text-gray-200 tracking-wide leading-relaxed max-w-xs">
                        Fill out the form and our team will get back to you within 24 hours.
                    </p>
                </div>

                <div class="relative flex flex-col gap-y-5">
                    <a href="mailto:dearly@gmail.com" class="flex items-center gap-x-4 group">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white/10 border border-white/20 backdrop-blur-sm group-hover:bg-accent group-hover:border-accent transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                <rect x="2" y="4" width="20" height="16" rx="2" />
                            </svg>
                        </span>
                        <p class="text-sm tracking-wide"><?= EMAIL ?></p>
                    </a>

                    <a href="tel:+9111545445454" class="flex items-center gap-x-4 group">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white/10 border border-white/20 backdrop-blur-sm group-hover:bg-accent group-hover:border-accent transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2a9 9 0 0 1 9 9" />
                                <path d="M13 6a5 5 0 0 1 5 5" />
                                <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                            </svg>
                        </span>
                        <p class="text-sm tracking-wide"><?= PHONE ?></p>
                    </a>

                    <div class="flex items-center gap-x-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white/10 border border-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </span>
                        <p class="text-sm tracking-wide"><?= ADDRESS ?></p>
                    </div>
                </div>

                <div class="relative flex gap-x-3 mt-2">
                    <a class="flex h-10 w-10 items-center justify-center border border-white/40 rounded-full hover:bg-accent hover:border-accent transition-colors duration-200" href="">
                        <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/insta.svg' ?>" alt="">
                    </a>
                    <a class="flex h-10 w-10 items-center justify-center border border-white/40 rounded-full hover:bg-accent hover:border-accent transition-colors duration-200" href="">
                        <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/pinterest.svg' ?>" alt="">
                    </a>
                    <!-- <a class="flex h-10 w-10 items-center justify-center border border-white/40 rounded-full hover:bg-accent hover:border-accent transition-colors duration-200" href="">
                        <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/fb.svg' ?>" alt="">
                    </a> -->
                </div>
            </div>

            <!-- Right: contact form -->
            <div class="bg-white p-10 md:p-12 flex flex-col justify-center">

                <!-- Response banner (populated by AJAX) -->
                <div id="contact-response" class="hidden mb-5"></div>

                <form id="contact-form" method="POST" action="<?= BASE_URL . 'contact-form.php' ?>" class="flex flex-col gap-y-5">
                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

                    <!-- Honeypot: hidden from real users, bots tend to fill every input -->
                    <div class="absolute -left-[9999px] top-0 h-0 w-0 overflow-hidden opacity-0" aria-hidden="true" style="pointer-events: none;">
                        <label for="hp_field">Leave this field empty</label>
                        <input type="text" id="hp_field" name="hp_field" tabindex="-1" autocomplete="off" aria-hidden="true">
                    </div>
                    <div class="flex flex-col md:flex-row gap-5">
                        <div class="flex-1 flex flex-col gap-y-1.5">
                            <label for="name" class="text-sm text-dark_text font-semibold tracking-wide">Name</label>
                            <input type="text" id="name" name="name" required placeholder="Your full name"
                                class="bg-secondary/50 border border-transparent rounded-xl px-4 py-3 text-sm placeholder:text-gray-400 focus:outline-none focus:bg-white focus:border-accent focus:ring-4 focus:ring-accent/15 transition-all duration-200">
                            <span class="field-error hidden text-xs text-red-500"></span>
                        </div>

                        <div class="flex-1 flex flex-col gap-y-1.5">
                            <label for="email" class="text-sm text-dark_text font-semibold tracking-wide">Email</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com"
                                class="bg-secondary/50 border border-transparent rounded-xl px-4 py-3 text-sm placeholder:text-gray-400 focus:outline-none focus:bg-white focus:border-accent focus:ring-4 focus:ring-accent/15 transition-all duration-200">
                            <span class="field-error hidden text-xs text-red-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-5">
                        <div class="flex-1 flex flex-col gap-y-1.5">
                            <label for="phone" class="text-sm text-dark_text font-semibold tracking-wide">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210"
                                pattern="^[0-9+\-\s()]{7,15}$"
                                class="bg-secondary/50 border border-transparent rounded-xl px-4 py-3 text-sm placeholder:text-gray-400 focus:outline-none focus:bg-white focus:border-accent focus:ring-4 focus:ring-accent/15 transition-all duration-200">
                            <span class="field-error hidden text-xs text-red-500"></span>
                        </div>

                        <div class="flex-1 flex flex-col gap-y-1.5">
                            <label for="subject" class="text-sm text-dark_text font-semibold tracking-wide">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="What's this about?"
                                class="bg-secondary/50 border border-transparent rounded-xl px-4 py-3 text-sm placeholder:text-gray-400 focus:outline-none focus:bg-white focus:border-accent focus:ring-4 focus:ring-accent/15 transition-all duration-200">
                            <span class="field-error hidden text-xs text-red-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-1.5">
                        <label for="message" class="text-sm text-dark_text font-semibold tracking-wide">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            placeholder="Tell us about the story you'd like to capture..."
                            class="bg-secondary/50 border border-transparent rounded-xl px-4 py-3 text-sm placeholder:text-gray-400 resize-none focus:outline-none focus:bg-white focus:border-accent focus:ring-4 focus:ring-accent/15 transition-all duration-200"></textarea>
                        <span class="field-error hidden text-xs text-red-500"></span>
                    </div>

                    <button type="submit" id="contact-submit-btn"
                        class="mt-2 bg-button_color hover:brightness-110 text-white flex items-center justify-center gap-3 px-6 py-3.5 rounded-xl w-max shadow-lg shadow-button_color/30 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 disabled:opacity-60 disabled:cursor-not-allowed disabled:hover:translate-y-0">
                        <span id="btn-text">Send Message</span>
                        <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg>
                        <svg id="btn-spinner" class="hidden animate-spin" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                        </svg>
                    </button>

                </form>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../src/views/components/footer.php';
?>