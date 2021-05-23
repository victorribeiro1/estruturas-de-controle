const toggleMenu = document.querySelector('.toggle-menu')
const toggleMenuButton = document.querySelector('.toggle-menu__icons-box')

toggleMenuButton.addEventListener('click', () => toggleMenu.classList.toggle('active'))