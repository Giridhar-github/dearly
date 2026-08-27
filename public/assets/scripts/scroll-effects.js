document.addEventListener('DOMContentLoaded', function () {

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ------------------------------------
    // Scroll reveal (fade/slide/zoom in on enter)
    // ------------------------------------

    const revealTargets = document.querySelectorAll('[data-reveal], [data-reveal-group]');

    if (revealTargets.length && !prefersReducedMotion && 'IntersectionObserver' in window) {

        const observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -60px 0px'
        });

        revealTargets.forEach(function (el) {
            observer.observe(el);
        });

    } else {
        // No IntersectionObserver support, or reduced motion — just show everything
        revealTargets.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

    // ------------------------------------
    // Parallax hero background
    // ------------------------------------

    const heroEl = document.querySelector('.parallax-hero');

    if (heroEl && !prefersReducedMotion) {

        let ticking = false;
        const speed = 0.35; // lower = subtler effect

        function updateParallax() {
            const rect = heroEl.getBoundingClientRect();
            // Only compute while the hero is anywhere near the viewport
            if (rect.bottom > 0 && rect.top < window.innerHeight) {
                const offset = window.scrollY * speed;
                heroEl.style.backgroundPosition = 'center ' + offset + 'px';
            }
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }, { passive: true });

        updateParallax();
    }

});