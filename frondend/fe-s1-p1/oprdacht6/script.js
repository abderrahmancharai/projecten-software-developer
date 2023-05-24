// setInterval executes the slide function every 5000 milliseconds (5 seconds).
setInterval(function(){ slide() }, 5000);

// Start slide function.
function slide() {
  // Two elements are selected.
  // The active slide and the slide after that.
  let activeSlide = document.querySelector('div.slider-item.active'),
      nextSlide = activeSlide.nextElementSibling;

  // If the nextSlide is empty, it means the active slide is the last in the series.
  // The first slide in the masthead will be selected.
  if (!nextSlide) {
    nextSlide = document.querySelector('div#masthead div.slider-item:first-of-type');
  }

  // The active slide will slide to the left.
  activeSlide.classList.remove('active');
  activeSlide.classList.add('sliding');

  //The next slide into view.
  nextSlide.classList.add('active');

  // After a timeout of 800 milliseconds (.8 seconds) the sliding slide will become inactive.
  // And will slide to the right in the background.
  setTimeout(function(){
    document.querySelector('div.slider-item.sliding').classList.remove('sliding');
  }, 800);
}

// Set the menuButton variable. And add a Click Event Listener to fire the menu_toggle functin.
let menuButton = document.querySelector('header button.hamburger');
menuButton.addEventListener('click', function() { menu_toggle() } );

// Menu toggle function
function menu_toggle() {
  // Set buttonEl and menuEl.
  let buttonEl = document.querySelector('header button.hamburger'),
      menuEl = document.querySelector('header nav');

  // Toggle is-active class.
  buttonEl.classList.toggle('is-active');
  menuEl.classList.toggle('is-active');
}
