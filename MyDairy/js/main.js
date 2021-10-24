const prev = document.getElementById('strelkaleft'),
    next = document.getElementById('strelkaright'),
    stopinterval = document.getElementById('stop-interval'),
    slides = document.querySelectorAll('.slide');

index = 0;

const activeSlide = n => {
    for (slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}

const nextSlide = () => {
    if (index == slides.length - 1) {
        index = 0
        activeSlide(index);
    } else {
        index++;
        activeSlide(index);
    }
}

const prevSlide = () => {
    clearInterval(interval);
    if (index == 0) {
        index = slides.length - 1;
        activeSlide(index);
    } else {
        index--;
        activeSlide(index);
    }
}

const stopInterval = () => {
    clearInterval(interval);
}

next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);
stopinterval.addEventListener('click', stopInterval);

var interval = setInterval(nextSlide, 2000);
