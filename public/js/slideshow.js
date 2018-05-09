var slideIndex = 1;
showSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}


function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 10000); // Change image every 1 seconds
}