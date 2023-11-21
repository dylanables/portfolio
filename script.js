let text = document.getElementById('text');
let mountain6 = document.getElementById('mountain6');
let cloudsLeft = document.getElementById('clouds-left');
let cloudsRight = document.getElementById('clouds-right');
let nav = document.getElementById('nav');
let about = document.getElementById('about');

const [red, green, blue] = [19, 28, 52]
const bg = document.querySelector('.parallax')

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 1.5 + 'px';
    mountain6.style.top = value * 2.5 + 'px';
    cloudsLeft.style.left = value * -1.5 + 'px';
    cloudsRight.style.left = value * 1.5 + 'px';

    const y = 1 + (window.scrollY || window.pageYOffset) / 100
    const [r, g, b] = [red*y, green*y, blue*y].map(Math.round)
    bg.style.backgroundColor = `rgb(${r}, ${g}, ${b})`

    if (value >= (about.offsetTop - nav.offsetHeight) ) {
        nav.classList.add("scrolled");
    } 
    else {
        nav.classList.remove("scrolled");
    }
})