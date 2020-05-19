import Flickity from 'flickity';
import Gumshoe from 'gumshoejs';
let spy = new Gumshoe('#my-awesome-nav a');

const playBtn = document.querySelector(".play-pouse-btn");
const menuBtn = document.querySelector(".c-btn-menu");
const btnHamburger = document.querySelector(".o-btn-hamburguer");
const menu = document.querySelector(".c-menu");
const topBar  = document.querySelector(".c-header_top-bar");
const menuItens = document.querySelector('.c-menu_list').querySelectorAll
('.c-menu_list-item');

menuBtn.addEventListener("click", ()=>{
  menu.classList.toggle("c-menu-open");
  btnHamburger.classList.toggle("ac");
});

window.onscroll = scroll

function scroll() {
  if (window.pageYOffset >= 20) topBar.classList.add("top-bc");
  else topBar.classList.remove("top-bc");
}

menuItens.forEach(elm => {
  elm.addEventListener("click", ()=>{
    menu.classList.remove("c-menu-open");
    btnHamburger.classList.remove("ac")
  });
});


let playing = false;
const asset = '/assets/images/'
const video = document.querySelector('.c-wt-our-story_vd');
playBtn.addEventListener('click', ()=>{
  changeImage(playing);
  playVideo(playing);
  playing ? playing = false : playing = true;  
});

function changeImage(playing) {
  playing ? playBtn.firstElementChild.setAttribute('src', asset + 'play-btn.svg') : playBtn.firstElementChild.setAttribute('src', asset + 'pause-btn.svg');

  playing ? video.style.opacity = '0' : video.style.opacity = '1'
}

function playVideo(playing){
  playing ? video.pause() : video.play();
  playing ? playBtn.style.opacity = '1' : playBtn.style.opacity = '0'; 
}