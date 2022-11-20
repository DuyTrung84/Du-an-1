let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

let cart=document.querySelector(".cart");
let dark=document.querySelector(".dark");
let dong=document.querySelector(".close");
let mo=document.querySelector("#fo");

mo.addEventListener('click', () => {
    cart.style.display = "block";
    dark.style.display = "block";
    dong.style.display = "block";
});

function close(){
    
}
dong.addEventListener('click', () => {
    cart.style.display = "none";
    dark.style.display = "none";
    dong.style.display = "none";
});
dark.addEventListener('click', () => {
    cart.style.display = "none";
    dark.style.display = "none";
    dong.style.display = "none";
});
  