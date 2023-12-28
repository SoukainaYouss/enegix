window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    var nav2 = document.querySelector('.Nav-2');
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        nav2.classList.add('sticky');
    } else {
        nav2.classList.remove('sticky');
    }
}

let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}



