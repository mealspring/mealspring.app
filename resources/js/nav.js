const burger = document.querySelector('#burger');
const navbarMenu = document.querySelector('#nav-links'); 
burger.addEventListener('click', ()=>{
    navbarMenu.classList.toggle('is-active');
})