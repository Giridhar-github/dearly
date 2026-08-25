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
