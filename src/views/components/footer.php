<footer class="px-5  bg-primary text-white pt-5">
    <div class="flex justify-evenly">
        <div class="flex-1 text-wrap px-5">
            <div class="flex justify-center">
                <img class="h-20 w-auto" src="<?= BASE_URL . 'assets/images/logo_white.png' ?>" alt="" srcset="">
            </div>
            <p class="text-justify text-wrap px-7">We turn memories, dreams and passions into personalized diaries that inspire every day.</p>
            <div class="flex justify-center">
                <a class="border-white rounded-full p-4" href="">
                    <img class="h-5 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/insta.svg' ?>" alt="" srcset="">
                </a>

                <a class="border-white rounded-full p-4" href="">
                    <img class="h-5 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/pinterest.svg' ?>" alt="" srcset="">
                </a>

                <a class="border-white rounded-full p-4" href="">
                    <img class="h-5 invert w-auto" src="<?= BASE_URL . 'assets/images/icons/fb.svg' ?>" alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="flex-1 ">
            <h6 class="font-bold">Quick Links</h6>
            <div class="flex flex-col mt-2 gap-y-1">
                <a href="">Shop All</a>
                <a href="">Collections</a>
                <a href="">How it Works</a>
                <a href="">About Us</a>
                <a href="">Contact Us</a>
                <a href="">FAQs</a>
            </div>
        </div>
        <div class="flex-1 ">
            <h6 class="font-bold">Help & Support</h6>
            <div class="flex flex-col mt-2 gap-y-1">
                <a href="">Track Your Orders</a>
                <a href="">Shipping & Delivery</a>
                <a href="">Returns & Refunds</a>
                <a href="">Terms & Conditions</a>
                <a href="">Privacy Policy</a>
            </div>
        </div>
        <div class="flex-1 ">
            <h6 class="font-bold">Contact Us</h6>
            <div class="flex flex-col mt-2 gap-y-1">
                <a class="flex items-center gap-x-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>sss@gmail.com</a>
                <a class="flex items-center gap-x-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call-icon lucide-phone-call"><path d="M13 2a9 9 0 0 1 9 9"/><path d="M13 6a5 5 0 0 1 5 5"/><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>+91 988895656565</a>
                <a class="flex items-center gap-x-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>Kochi, Kerala, Indai</a>
            </div>
        </div>
    </div>
    <div class="text-center text-white">
        <p class="text-[10px]">
            &copy; <?= date('Y') ?>
            <?= htmlspecialchars(APP_NAME) ?>.
            All rights reserved.
        </p>
    </div>

</footer>

</body>

</html>