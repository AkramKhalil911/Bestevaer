const Menuflex = document.getElementsByClassName('Menuflex')[0]
const Menulinks = document.getElementsByClassName('Menulinks')[0]

Menuflex.addEventListener('click', () => {
  Menulinks.classList.toggle('active')
})

AOS.init();