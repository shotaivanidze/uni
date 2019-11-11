let slides = [
    {
      id: 1,
      image: "red",
      url: "http://google.com"
    },
    {
      id: 2,
      image: "blue",
      url: "http://google.com"
    },
    {
      id: 3,
      image: "green",
      url: "http://google.com"
    }
  ];
  
// Create slider elements
slider = document.createElement('div');
sliderItems = document.createElement('div');
sliderWrapper = document.createElement('div');
buttonLeft = document.createElement('button');
buttonRight = document.createElement('button');
navContainer = document.createElement('div');
navWrapper = document.createElement('div');
buttonLeft.innerHTML = 'Left';
buttonRight.innerHTML = 'Right';


// Give classes and IDs to elements
slider.id = 'slider';
sliderItems.id = 'sliderItems';
sliderWrapper.id = 'sliderWrapper';
buttonLeft.classList.add('navigation' , 'navigation-left');
buttonRight.classList.add('navigation', 'navigation-right');
navContainer.id = 'navContainer';
navWrapper.id = 'navWrapper';

// Create slider elements with loop
for (i = 0; i < slides.length; i++){
    slide = document.createElement('a');
    slide.classList.add('slide');
    slide.id = slides[i].id;
    slide.style.backgroundColor = slides[i].image;
    slide.setAttribute('href', slides[i].url);
    sliderWrapper.appendChild(slide);
}

// Create navigation bubbles
for (i = 0; i < slides.length; i++){
    bubble = document.createElement('div');
    bubble.id = 'nav' + i;
    bubble.style.width = '5px';
    bubble.style.height = '5px';
    bubble.style.borderRadius = '10px';
    bubble.style.backgroundColor = 'gray';
    bubble.style.float = 'left';
    bubble.style.margin = '1px';
    bubble.style.display = 'inline-block';
    navWrapper.appendChild(bubble);
}


// Construct slider with appendChild s
navContainer.appendChild(navWrapper);
sliderWrapper.appendChild(navContainer);
sliderItems.appendChild(sliderWrapper);
slider.appendChild(buttonLeft);
slider.appendChild(buttonRight);
slider.appendChild(sliderItems);
document.body.appendChild(slider);


let currentSlide = 1;


  
  document.querySelectorAll(".navigation").forEach(item => {
    item.addEventListener("click", event => {
      if (event.target.classList.contains("navigation-left")) {
        if (currentSlide === 1) {
          currentSlide = slides.length;
        } else {
          currentSlide = currentSlide - 1;
        }
      } else {
        if (currentSlide >= slides.length) {
          currentSlide = 1;
        } else {
          currentSlide = currentSlide + 1;
        }
      }
  
      let left = (currentSlide - 1) * 500;
      document.getElementById("sliderWrapper").style.left = "-" + left + "px";
    });
  });

obj.watch(currentSlide, () => {
    current = document.getElementById('nav'+ (currentSlide + 1));
    current.style.backgroundColor = 'cyan';
})

console.log()
