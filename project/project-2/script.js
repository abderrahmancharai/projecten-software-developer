const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})


setInterval(function(){ slide() }, 5000);


function slide() {
  
  let activeSlide = document.querySelector('div.slider-item.active'),
      nextSlide = activeSlide.nextElementSibling;

 
  if (!nextSlide) {
    nextSlide = document.querySelector('div#masthead div.slider-item:first-of-type');
  }

 
  activeSlide.classList.remove('active');
  activeSlide.classList.add('sliding');

  
  nextSlide.classList.add('active');

  
  setTimeout(function(){
    document.querySelector('div.slider-item.sliding').classList.remove('sliding');
  }, 800);
}
  

menuButton.addEventListener('click', function() { menu_toggle() } );


function menu_toggle() {
 
  let buttonEl = document.querySelector('header button.hamburger'),
      menuEl = document.querySelector('header nav');

  
  buttonEl.classList.toggle('is-active');
  menuEl.classList.toggle('is-active');
}



