gsap.registerPlugin(ScrollTrigger, TweenMax);

TweenMax.to('.overlay-logo', 1.5, {
	delay: 0,
	y: 0,
	ease: Expo.easeInOut
})

TweenMax.to('.overlay-logo', 1.5, {
	delay: 2,
	y: -100,
	ease: Expo.easeInOut
})

TweenMax.to('.firts', 1.5, {
	delay: .7,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.second', 1.5, {
	delay: .9,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.third', 1.5, {
	delay: 1.1,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.four', 1.5, {
	delay: 1.3,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.five', 1.5, {
	delay: 1.5,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.six', 1.5, {
	delay: 1.7,
	height: "0%",
	ease: Expo.easeInOut
})



const header = document.querySelector('header');
const panelBtn = document.querySelector('.header__btn-panel');
const slidebar = document.querySelector('.activity__panel');


window.addEventListener('scroll', () => {
    header.classList.toggle('sticky', window.pageYOffset > 0);
    panelBtn.classList.toggle('active', window.pageYOffset > 0);
})

function panelActive() {
    const panel = document.querySelector('.panel');
    const wrapper = document.querySelector('.wrapper');
    const body = document.body;

    body.classList.toggle('active');
    panel.classList.toggle('active');
    wrapper.classList.toggle('active');
    panelBtn.classList.toggle('hover');
};

const aboutSlider = new Swiper('.about__item-wrapper ', {
    speed: 600,
    slidesPerView: 3,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.about__slide-arrow-next',
        prevEl: '.about__slide-arrow-prev',
    },
    
    // breakpoints: {
    //     0: {
    //         slidesPerView: 1,
    //         spaceBetween: 10,
    //     },
    //     680: {
    //         slidesPerView: 3,
    //         spaceBetween: 60,
    //         autoplay: false
    //     }
    // },
});

console.log(window.innerWidth);