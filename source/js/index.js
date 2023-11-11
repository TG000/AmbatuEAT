window.onload = () => {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    scrollFunction();

    const intro_1 = document.querySelector('.intro-first');
    const intro_2 = document.querySelector('.intro-second');
    const intro_3 = document.querySelector('.intro-third');
    const intro_4 = document.querySelector('.intro-final');

    intro_1.classList.add('animation-play');
    setTimeout(() => {
        intro_2.classList.add('animation-play');
        setTimeout(() => {
            intro_3.classList.add('animation-play');
            setTimeout(() => {
                intro_4.classList.add('animation-play');

                intro_4.addEventListener('animationend', () => {
                    intro_1.classList.remove('animation-play');
                    intro_2.classList.remove('animation-play');
                    intro_3.classList.remove('animation-play');
                    intro_4.classList.remove('animation-play');
                });
            }, 300);
        }, 300);
    }, 500);
};

$(window).scroll(() => {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    scrollFunction();
});

let backtopBtn = document.getElementById("btn-back-to-top");

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
    {
        backtopBtn.style.opacity = "1";
    } 
    else {
        backtopBtn.style.opacity = "0";
    }
}

// When the user clicks on the button, scroll to the top of the document
backtopBtn.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}