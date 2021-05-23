const toggleMenu = document.querySelector('.toggle-menu')
const toggleMenuButton = document.querySelector('.toggle-menu__button-box')
const header = document.querySelector('header')
const content = document.querySelector('header + div')

console.log(document.querySelector(".toggle-menu + div"))

toggleMenuButton.addEventListener('click', () => {
    
    if (toggleMenu.classList.contains('active')) {
        setTimeout(() => {
            toggleMenu.classList.remove('active')
        }, 900)
    } else {
        toggleMenu.classList.add('active')
    }

    toggleMenuButton.classList.toggle('active')
    header.classList.toggle('menu-is-active')
    content.classList.toggle('menu-is-active')
})