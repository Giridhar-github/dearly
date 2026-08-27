const track = document.querySelector('#category-track');
const prevButton = document.querySelector('#category-prev');
const nextButton = document.querySelector('#category-next');

let position = 0;
let isButtonMoving = false;
let setWidth = 0;
let slideAmount = 0;

const gap = 32;

// ------------------------------------
// Clone the set (so markup only needs one)
// ------------------------------------

function buildClones() {

    const originalSet = track.querySelector('.category-set');

    // Measure before cloning
    const firstCard = originalSet.querySelector('.category-card');
    const cardWidth = firstCard.offsetWidth;
    slideAmount = cardWidth + gap;

    // Clone enough copies to guarantee at least 2x track width
    // (covers cases with few cards / wide screens)
    const viewportWidth = track.parentElement.offsetWidth;
    let totalWidth = originalSet.offsetWidth;

    while (totalWidth < viewportWidth * 2) {
        const clone = originalSet.cloneNode(true);
        track.appendChild(clone);
        totalWidth += originalSet.offsetWidth;
    }

    // Always ensure at least one clone exists for the loop math below
    if (track.querySelectorAll('.category-set').length < 2) {
        track.appendChild(originalSet.cloneNode(true));
    }

    setWidth = originalSet.offsetWidth;
}

buildClones();

// ------------------------------------
// Apply position
// ------------------------------------

function setPosition() {
    track.style.transform = `translate3d(${position}px, 0, 0)`;
}

// ------------------------------------
// NEXT BUTTON
// ------------------------------------

nextButton.addEventListener('click', function () {
    if (isButtonMoving) return;
    isButtonMoving = true;

    position -= slideAmount;

    track.style.transition = 'transform 600ms cubic-bezier(0.22, 1, 0.36, 1)';
    setPosition();
});

// ------------------------------------
// PREVIOUS BUTTON
// ------------------------------------

prevButton.addEventListener('click', function () {
    if (isButtonMoving) return;
    isButtonMoving = true;

    position += slideAmount;

    track.style.transition = 'transform 600ms cubic-bezier(0.22, 1, 0.36, 1)';
    setPosition();
});

// ------------------------------------
// TRANSITION END
// ------------------------------------

track.addEventListener('transitionend', function () {
    isButtonMoving = false;
    track.style.transition = 'none';

    // Moved too far LEFT
    if (position <= -setWidth * 2) {
        position += setWidth;
        setPosition();
    }

    // Moved too far RIGHT
    if (position >= 0) {
        position -= setWidth;
        setPosition();
    }
});

// ------------------------------------
// AUTO SCROLL
// ------------------------------------

function autoScroll() {
    if (!isButtonMoving) {
        position -= 0.5;

        // Infinite loop
        if (position <= -setWidth * 2) {
            position += setWidth;
        }

        setPosition();
    }

    requestAnimationFrame(autoScroll);
}

autoScroll();


// testimonial slider
document.addEventListener('DOMContentLoaded', function () {

    const track = document.querySelector('#testimonial-track');
    const prevButton = document.querySelector('#testimonial-prev');
    const nextButton = document.querySelector('#testimonial-next');

    if (!track || !prevButton || !nextButton) return;

    let position = 0;
    let isMoving = false;
    let setWidth = 0;
    let slideAmount = 0;

    const gap = 28; // matches md:gap-7 (28px)

    function buildClones() {
        const originalSet = track.querySelector('.testimonial-set');
        const firstCard = originalSet.querySelector('.testimonial-card');
        const cardWidth = firstCard.offsetWidth;
        slideAmount = cardWidth + gap;

        const viewportWidth = track.parentElement.offsetWidth;
        let totalWidth = originalSet.offsetWidth;

        while (totalWidth < viewportWidth * 2) {
            const clone = originalSet.cloneNode(true);
            track.appendChild(clone);
            totalWidth += originalSet.offsetWidth;
        }

        if (track.querySelectorAll('.testimonial-set').length < 2) {
            track.appendChild(originalSet.cloneNode(true));
        }

        setWidth = originalSet.offsetWidth;
    }

    buildClones();

    function setPosition() {
        track.style.transform = `translate3d(${position}px, 0, 0)`;
    }

    nextButton.addEventListener('click', function () {
        if (isMoving) return;
        isMoving = true;
        position -= slideAmount;
        track.style.transition = 'transform 500ms cubic-bezier(0.22, 1, 0.36, 1)';
        setPosition();
    });

    prevButton.addEventListener('click', function () {
        if (isMoving) return;
        isMoving = true;
        position += slideAmount;
        track.style.transition = 'transform 500ms cubic-bezier(0.22, 1, 0.36, 1)';
        setPosition();
    });

    track.addEventListener('transitionend', function () {
        isMoving = false;
        track.style.transition = 'none';

        if (position <= -setWidth * 2) {
            position += setWidth;
            setPosition();
        }

        if (position >= 0) {
            position -= setWidth;
            setPosition();
        }
    });

});