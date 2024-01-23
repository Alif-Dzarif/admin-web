const bannerEl = document.querySelector('.banner_box');

const showBanner = () => {
  bannerEl.classList.add('show');
}

window.addEventListener('load', showBanner());