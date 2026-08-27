const navbar_hamburger = document.querySelector('.navbar_hamburger')
const navbar_close = document.querySelector('.navbar_close')
const phone_only_menus = document.querySelector('.phone_only_menus')
let counter = 0;
navbar_hamburger.addEventListener('click', function () {
    phone_only_menus.classList.remove('hidden')
    phone_only_menus.classList.add('block')
    navbar_hamburger.classList.add('hidden')
    navbar_hamburger.classList.remove('block')
    navbar_close.classList.remove('hidden')
    navbar_close.classList.add('block')

})
navbar_close.addEventListener('click', function () {
    phone_only_menus.classList.remove('block')
    phone_only_menus.classList.add('hidden')
    navbar_close.classList.add('hidden')
    navbar_close.classList.remove('block')
    navbar_hamburger.classList.remove('hidden')
    navbar_hamburger.classList.add('block')


})

// ----------------------------------------------------------- contact form section starts here
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contact-form');
    if (!form) return;

    const responseBox = document.getElementById('contact-response');
    const submitBtn = document.getElementById('contact-submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnIcon = document.getElementById('btn-icon');
    const btnSpinner = document.getElementById('btn-spinner');

    function clearFieldErrors() {
        form.querySelectorAll('.field-error').forEach(function (el) {
            el.textContent = '';
            el.classList.add('hidden');
        });
        form.querySelectorAll('input, textarea').forEach(function (el) {
            el.classList.remove('border-red-400', 'ring-4', 'ring-red-100');
        });
    }

    function showFieldError(name, message) {
        const input = form.querySelector('[name="' + name + '"]');
        if (!input) return;
        input.classList.add('border-red-400', 'ring-4', 'ring-red-100');
        const errorEl = input.closest('div').querySelector('.field-error');
        if (errorEl) {
            errorEl.textContent = message;
            errorEl.classList.remove('hidden');
        }
    }

    function showResponse(type, title, message) {
        const isSuccess = type === 'success';

        responseBox.innerHTML = `
            <div class="flex items-start gap-3 rounded-xl border px-4 py-3.5 ${isSuccess
                ? 'bg-green-50 border-green-200 text-green-800'
                : 'bg-red-50 border-red-200 text-red-800'
            }">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full ${isSuccess ? 'bg-green-500' : 'bg-red-500'
            }">
                    ${isSuccess
                ? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>'
                : '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>'
            }
                </span>
                <div>
                    <p class="font-semibold text-sm">${title}</p>
                    <p class="text-sm opacity-90 mt-0.5">${message}</p>
                </div>
            </div>
        `;

        responseBox.classList.remove('hidden');
        responseBox.style.opacity = '0';
        responseBox.style.transform = 'translateY(-8px)';
        responseBox.style.transition = 'all 300ms ease';

        requestAnimationFrame(function () {
            responseBox.style.opacity = '1';
            responseBox.style.transform = 'translateY(0)';
        });

        responseBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function setLoading(isLoading) {
        submitBtn.disabled = isLoading;
        btnText.textContent = isLoading ? 'Sending...' : 'Send Message';
        btnIcon.classList.toggle('hidden', isLoading);
        btnSpinner.classList.toggle('hidden', !isLoading);
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        clearFieldErrors();
        responseBox.classList.add('hidden');
        setLoading(true);

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            body: formData
        })
            .then(function (res) {
                return res.json().then(function (data) {
                    return { status: res.status, body: data };
                });
            })
            .then(function (result) {
                setLoading(false);

                if (result.status === 200 && result.body.success) {
                    showResponse('success', 'Message sent!', result.body.message || "We'll get back to you within 24 hours.");
                    form.reset();
                    if (result.body.csrf_token) {
                        form.querySelector('[name="csrf_token"]').value = result.body.csrf_token;
                    }
                } else if (result.status === 422 && result.body.errors) {
                    showResponse('error', 'Please check your details', 'Some fields need your attention below.');
                    Object.keys(result.body.errors).forEach(function (field) {
                        showFieldError(field, result.body.errors[field]);
                    });
                } else {
                    showResponse('error', 'Something went wrong', result.body.message || 'Please try again in a moment.');
                }
            })
            .catch(function () {
                setLoading(false);
                showResponse('error', 'Network error', 'Could not reach the server. Please check your connection and try again.');
            });
    });

});