AOS.init();
const navbar = document.getElementById('main-navbar');

function handleScroll() {
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', handleScroll);
function toggleParagraphVisibility() {
    const hiddenParagraph = document.getElementById("hidden-paragraph");
    const readMoreButton = document.querySelector(".btn-primary");

    if (hiddenParagraph.style.display === "none") {
        hiddenParagraph.style.display = "block";
        readMoreButton.textContent = "Read less";
    } else {
        hiddenParagraph.style.display = "none";
        readMoreButton.textContent = "Read more";
    }
}

const audio = document.getElementById('myAudio');

audio.volume = 0.2;


let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

setTimeout(function () {
    document.getElementById('overlayer').style.display = 'none';
    document.getElementById('content').style.display = 'block';
}, 3000); 