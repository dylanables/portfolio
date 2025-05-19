let text = document.getElementById('text');
let moon = document.getElementById('moon');
let cloudsLeft = document.getElementById('clouds-left');
let cloudsRight = document.getElementById('clouds-right');
let nav = document.getElementById('nav');
let parallax = document.getElementById('parallax');
let about = document.getElementById('about');
let projects = document.getElementById('projects');
let contact = document.getElementById('contact');

let mouseContainer = document.getElementById('mouse-container');
let mouse = document.getElementById('mouse-container');

let aboutLink = document.getElementById('about-link');
let projectsLink = document.getElementById('projects-link');
let contactLink = document.getElementById('contact-link');

const [red, green, blue] = [19, 28, 52];
const bg = document.querySelector('.parallax');

window.addEventListener('scroll', () => {
    fadeOutOnScroll(mouseContainer);
    let value = window.scrollY;

    text.style.marginTop = Math.min(value * 1.5, about.offsetTop) + 'px';
    moon.style.top = Math.min(value * 2.5, about.offsetTop) + 'px';
    cloudsLeft.style.left = value * -1.5 + 'px';
    cloudsRight.style.left = value * 1.5 + 'px';

    const y = 1 + (window.scrollY || window.pageYOffset) / 100
    const [r, g, b] = [red*y, green*y, blue*y].map(Math.round)
    bg.style.backgroundColor = `rgb(${r}, ${g}, ${b})`

    if (value >= (about.offsetTop - nav.offsetHeight) ) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }

    if (value >= (about.offsetTop - nav.offsetHeight) && value < (projects.offsetTop - nav.offsetHeight)) {
        aboutLink.classList.add("active");
        projectsLink.classList.remove("active");
        contactLink.classList.remove("active");
    } else if (value >= (projects.offsetTop - nav.offsetHeight) && value < (contact.offsetTop - nav.offsetHeight)) {
        projectsLink.classList.add("active");
        aboutLink.classList.remove("active");
        contactLink.classList.remove("active");
    } else if (value >= (contact.offsetTop - nav.offsetHeight) && value < (footer.offsetTop - nav.offsetHeight)) {
        contactLink.classList.add("active");
        aboutLink.classList.remove("active");
        projectsLink.classList.remove("active");
    } else {
        aboutLink.classList.remove("active");
        projectsLink.classList.remove("active");
        contactLink.classList.remove("active");
    }

})

function fadeOutOnScroll(element) {
    if (!element) {
      return;
    }
    
    var distanceToTop = window.pageYOffset + element.getBoundingClientRect().top;
    var elementHeight = element.offsetHeight;
    var scrollTop = document.documentElement.scrollTop;
    
    var opacity = 1;
    
    if (scrollTop > distanceToTop) {
      opacity = 1 - (scrollTop - distanceToTop) / (elementHeight * 0.5);
    }
    
    if (opacity >= 0) {
      element.style.opacity = opacity;
    }
  }