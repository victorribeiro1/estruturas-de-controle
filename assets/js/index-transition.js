const button = document.getElementById('button')
const intro = document.querySelector('.intro')
const menu = document.querySelector('.menu')

console.log(button)

button.addEventListener('click', () => {
    intro.style.opacity = 0
    menu.style.opacity = 1
})