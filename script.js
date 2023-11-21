let text = document.getElementById('text');
let mountain6 = document.getElementById('mountain6');
let cloudsLeft = document.getElementById('clouds-left');
let cloudsRight = document.getElementById('clouds-right');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 1.5 + 'px';
    mountain6.style.top = value * 2.5 + 'px';
    cloudsLeft.style.left = value * -1.5 + 'px';
    cloudsRight.style.left = value * 1.5 + 'px';
})