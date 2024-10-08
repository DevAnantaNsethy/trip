function changeheadingText1() {
  var heading = document.getElementById('heading');
  heading.innerHTML = 'Where to?'
}

function changeheadingText2() {
  var heading = document.getElementById('heading');
  heading.innerHTML = 'Stay somewhere great'
}

function changeheadingText3() {
  var heading = document.getElementById('heading');
  heading.innerHTML = 'Do something fun'
}

function changeheadingText4() {
  var heading = document.getElementById('heading');
  heading.innerHTML = 'Find places to eat'
}

function changeheadingText5() {
  var heading = document.getElementById('heading');
  heading.innerHTML = 'Explore places to rent'
}

document.addEventListener("DOMContentLoaded", function () {
  const sliderImages = document.querySelector('.slider-images'); const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');

  let counter = 0;

  nextBtn.addEventListener('click', () => {
    counter++;
    slideImages();
  });

  prevBtn.addEventListener('click', () => {
    counter--;
    slideImages();
  });

  function slideImages() {
    sliderImages.style.transform = `translateX(-${counter * (100 / 3)}%)`;
  }
});


document.addEventListener("DOMContentLoaded", function() {

  function initSlider(container) {
    const slider = container.querySelector('.slider-images');
    const prevBtn = container.querySelector('.prev');
    const nextBtn = container.querySelector('.next');
    const slideImages = container.querySelectorAll('.slide-img');

    let counter = 0;


    function updateSlider() {
      slider.style.transform = `translateX(-${counter * (100 / 3)}%)`;
    }

    nextBtn.addEventListener('click', () => {
      counter++;
      if (counter > slideImages.length - 3) {
        counter = slideImages.length - 3;
      }
      updateSlider();
    });

    prevBtn.addEventListener('click', () => {
      counter--;
      if (counter < 0) {
        counter = 0;
      }
      updateSlider();
    });
  }


  const slider1 = document.querySelector('.image-slider');
  const slider2 = document.querySelector('.image-slider2');
  initSlider(slider1);
  initSlider(slider2);
});
$(document).ready(function(){
	var accordionOpen = $('.first_depth p'),
			secondDepth = $('.second_depth');
	
	accordionOpen.on('click',function(){
			accordionOpen.closest('.first_depth').removeClass('on');
			$(this).closest('.first_depth').addClass('on');
			
	});
});

