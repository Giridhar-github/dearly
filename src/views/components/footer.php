<footer class="relative px-5 md:px-10 bg-primary text-white pt-16 overflow-hidden">

    <!-- decorative background accents -->
    <svg class="absolute -top-16 -left-16 opacity-[0.06] pointer-events-none" width="280" height="280" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
        <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
    </svg>
    <svg class="absolute -bottom-24 -right-20 opacity-[0.05] pointer-events-none" width="320" height="320" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
        <circle cx="12" cy="12" r="10" />
    </svg>
    <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-accent to-transparent"></div>

    <div class="relative flex flex-col md:flex-row md:justify-between gap-10 md:gap-6 pb-12 max-w-6xl mx-auto">

        <!-- Brand column -->
        <div class="flex-[1.3] text-wrap">
            <div class="flex justify-center md:justify-start">
                <a href="<?= BASE_URL ?>">
                    <img class="h-16 w-auto" src="<?= BASE_URL . 'assets/images/logo_white.png' ?>" alt="" srcset="">
                </a>
            </div>
            <p class="text-wrap px-7 md:px-0 text-center md:text-left text-sm text-gray-300 leading-relaxed mt-3 max-w-xs mx-auto md:mx-0">
                We turn memories, dreams and passions into personalized diaries that inspire every day.
            </p>
            <div class="flex justify-center md:justify-start gap-x-3 mt-5">
                <a class="flex h-10 w-10 items-center justify-center border border-white/30 rounded-full hover:bg-accent hover:border-accent hover:-translate-y-0.5 transition-all duration-200" href="">
                    <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/insta.svg' ?>" alt="">
                </a>
                <a class="flex h-10 w-10 items-center justify-center border border-white/30 rounded-full hover:bg-accent hover:border-accent hover:-translate-y-0.5 transition-all duration-200" href="">
                    <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/pinterest.svg' ?>" alt="">
                </a>
                <!-- <a class="flex h-10 w-10 items-center justify-center border border-white/30 rounded-full hover:bg-accent hover:border-accent hover:-translate-y-0.5 transition-all duration-200" href="">
                    <img class="h-4 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/fb.svg' ?>" alt="">
                </a> -->
            </div>
        </div>

        <!-- Quick Links -->
        <div class="flex-1 hidden md:block">
            <h6 class="font-bold tracking-wide text-accent uppercase text-xs mb-1">Quick Links</h6>
            <div class="h-[2px] w-8 bg-accent/50 rounded-full mb-4"></div>
            <div class="flex flex-col gap-y-2.5 text-sm text-gray-300">
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="#collections">Shop All</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="<?= BASE_URL . 'collections.php' ?>">Collections</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="#howItWorks">How it Works</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="<?= BASE_URL . 'about.php' ?>">About Us</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="<?= BASE_URL . 'contact.php' ?>">Contact Us</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">FAQs</a>
            </div>
        </div>

        <!-- Help & Support -->
        <div class="flex-1 hidden md:block">
            <h6 class="font-bold tracking-wide text-accent uppercase text-xs mb-1">Help & Support</h6>
            <div class="h-[2px] w-8 bg-accent/50 rounded-full mb-4"></div>
            <div class="flex flex-col gap-y-2.5 text-sm text-gray-300">
                <!-- <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">Track Your Orders</a> -->
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">Shipping & Delivery</a>
                <!-- <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">Returns & Refunds</a> -->
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">Terms & Conditions</a>
                <a class="w-max hover:text-white hover:translate-x-1 transition-all duration-200" href="">Privacy Policy</a>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="flex-1">
            <h6 class="font-bold tracking-wide text-accent uppercase text-xs mb-1 text-center md:text-left">Contact Us</h6>
            <div class="h-[2px] w-8 bg-accent/50 rounded-full mb-4 mx-auto md:mx-0"></div>
            <div class="flex flex-col items-center md:items-start gap-y-3 text-sm text-gray-300">
                <a class="flex items-center gap-x-2 hover:text-white transition-colors duration-200" href="mailto:dearly@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent shrink-0">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                        <rect x="2" y="4" width="20" height="16" rx="2" />
                    </svg>
                    <?= EMAIL ?>
                </a>
                <a class="flex items-center gap-x-2 hover:text-white transition-colors duration-200" href="tel:+9111545445454">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent shrink-0">
                        <path d="M13 2a9 9 0 0 1 9 9" />
                        <path d="M13 6a5 5 0 0 1 5 5" />
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                    </svg>
                    <?= PHONE ?>
                </a>
                <a class="flex items-center gap-x-2 hover:text-white transition-colors duration-200" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent shrink-0">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    <?= ADDRESS ?>
                </a>
            </div>
        </div>

    </div>

    <div class="relative text-center text-gray-300 border-t border-white/15 py-4 max-w-6xl mx-auto">
        <p class="text-[11px] tracking-wide">
            &copy; <?= date('Y') ?>
            <span class="text-white font-semibold"><?= htmlspecialchars(APP_NAME) ?></span>.
            All rights reserved.
        </p>
    </div>

</footer>
</body>
<script src="<?= BASE_URL . 'assets/scripts/script.js' ?>"></script>
<script src="<?= BASE_URL . 'assets/scripts/slider.js' ?>"></script>
<script src="<?= BASE_URL . 'assets/scripts/scroll-effects.js' ?>"></script>

</html>