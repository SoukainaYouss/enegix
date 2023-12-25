window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    var nav2 = document.querySelector('.Nav-2');
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        nav2.classList.add('sticky');
    } else {
        nav2.classList.remove('sticky');
    }
}

