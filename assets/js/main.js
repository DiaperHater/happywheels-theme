"use strict";

// document onscroll
(function () {

  let lastKnownScrollPosition = 0;
  let ticking = false;

  function narrowHeaderOnScroll(scrollPos) {

    const headerHeight = document.querySelector('header').offsetHeight;
    const header = document.querySelector('header');

    if (window.scrollY > headerHeight) {
      if (!header.classList.contains('narrow')) {
        header.classList.add('narrow');
      }
    } else {
      header.classList.remove('narrow');
    }
  }

  document.addEventListener("scroll", (event) => {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(() => {
        narrowHeaderOnScroll(lastKnownScrollPosition);
        ticking = false;
      });

      ticking = true;
    }
  });
})();

// Swiper
(function () {

  const swiperTestimonials = new Swiper('.swiper-testimonials', {
    slidesPerView: 1.1,
    spaceBetween: 24,
    freeMode: {
      enabled: true,
      sticky: false
    },
    mousewheel: {
      forceToAxis: true,
      releaseOnEdges: true
    },
    grabCursor: true,
    breakpoints: {
      768: {
        slidesPerView: 1.4,
        spaceBetween: 48,
      },
      1024: {
        slidesPerView: 2.25,
        spaceBetween: 48,
      }
    }
  });
})();

function burgerOnClick() {

  toggleBurger();
  toggleMobileMenu();
}

function toggleBurger() {
  const burger = document.querySelector('.burger');
  burger.classList.toggle('active');
}

function toggleMobileMenu() {

  const menu = document.querySelector('.mobile-menu');
  menu.classList.toggle('left-full');
  menu.classList.toggle('left-0');

  const headerInner = document.querySelector('.header__inner');
  headerInner.classList.toggle('!rounded-b-none');
}

function playPauseVideo(player) {

  const video = player.querySelector('video');
  const playBtn = player.querySelector('button');

  // If video loaded played and not paused
  if (video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2) {

    video.pause();

    // show btn
    playBtn.classList.remove('hidden');

  } else {

    video.play();

    // if button is not hidden
    if (!playBtn.classList.contains('hidden')) {

      // hide btn
      playBtn.classList.add('hidden');
    }
  }

}