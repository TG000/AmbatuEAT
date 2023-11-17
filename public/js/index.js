window.onload = () => {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);

    if (scrollFunction != null || scrollFunction != undefined) {
        scrollFunction();
    }
    
    const intro_1 = document.querySelector('.intro-first');
    const intro_2 = document.querySelector('.intro-second');
    const intro_3 = document.querySelector('.intro-third');
    const intro_4 = document.querySelector('.intro-final');
    
    try {
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
    }
    catch {

    }
    
    dropdown.forEach(element => {
        dropdownHeight.push(window.getComputedStyle(element).height);
    
        element.style.maxHeight = '0px';
        element.style.overflow = 'hidden';
    });
};

$(window).scroll(() => {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    scrollFunction();
});



// ====================== Back To Top Button ========================== //

let backtopBtn = document.getElementById("btn-back-to-top");

if (backtopBtn != null) {
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
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



// ====================== Navbar Close Button ========================== //

const navbarCloseBtn = document.querySelector('#navbar-close');

if (navbarCloseBtn != null) {
    navbarCloseBtn.addEventListener('click', () => {
        navbarCloseBtn.parentElement.classList.remove('show');
    });
}



// ====================== Navbar Dropdown For Small Device ========================== //

const navBtn = document.querySelectorAll("#menu-btn");
const dropdown = document.querySelectorAll(".custom-menu");
const navBtnArr = Array.prototype.slice.call(navBtn);

var dropdownHeight = [];

navBtn.forEach(element => {
    element.addEventListener('click', () => {
        var index = navBtnArr.indexOf(element);
        var dropdownMenu = element.parentElement.nextElementSibling;

        if (dropdownMenu.style.maxHeight != '0px') {
            dropdownMenu.style.maxHeight = '0px';
        }
        else {
            dropdownMenu.style.maxHeight = dropdownHeight[index];
        }
    });
});



// ====================== Carousel ========================== //

const carouselDetails = document.querySelector('#carouselDetails');
const carouselChefs = document.querySelector('#carouselChefs');
const carouselPost = document.querySelector('#carouselPost');
const indicatorButtonsDetails = document.querySelectorAll('.carousel-indicators-details button');
const indicatorButtonsPost = document.querySelectorAll('.carousel-indicators-post button');

try {
    var carouselChefsWidth = $('#carouselChefs-inner')[0].scrollWidth;
    var cardChefsWidth = $('.carousel-chefs-item').width();

    var scrollPosition = 0;

    if (window.matchMedia("(min-width: 992px)").matches) {
        carouselDetails.addEventListener('slide.bs.carousel', function(event) {
            event.preventDefault();
        });
        carouselChefs.addEventListener('slide.bs.carousel', function(event) {
            event.preventDefault();
        });
        carouselPost.addEventListener('slide.bs.carousel', function(event) {
            event.preventDefault();
        });

        $('.carousel-back-details').on('click', () => {
            if (indicatorButtonsDetails[1].classList.contains("active")) {
                $('.carousel-inner-details').animate({
                    scrollLeft: -500,
                }, 600);

                indicatorButtonsDetails[0].classList.add('active');
                indicatorButtonsDetails[1].classList.remove('active');
            }
        });
        
        $('.carousel-next-details').on('click', () => {
            if (indicatorButtonsDetails[0].classList.contains("active")) {
                $('.carousel-inner-details').animate({
                    scrollLeft: 500,
                }, 600);

                indicatorButtonsDetails[0].classList.remove('active');
                indicatorButtonsDetails[1].classList.add('active');
            }
        });

        $('.carousel-back-post').on('click', () => {
            if (indicatorButtonsPost[1].classList.contains("active")) {
                $('.carousel-inner-post').animate({
                    scrollLeft: -1300,
                }, 600);

                indicatorButtonsPost[0].classList.add('active');
                indicatorButtonsPost[1].classList.remove('active');
            }
        });
        
        $('.carousel-next-post').on('click', () => {
            if (indicatorButtonsPost[0].classList.contains("active")) {
                $('.carousel-inner-post').animate({
                    scrollLeft: 1300,
                }, 600);

                indicatorButtonsPost[0].classList.remove('active');
                indicatorButtonsPost[1].classList.add('active');
            }
        });

        $('.carousel-control-prev').on('click', () => {
            if (scrollPosition > 0) {
                scrollPosition = scrollPosition - cardChefsWidth;

                $('.carousel-inner-chefs').animate({
                    scrollLeft: scrollPosition,
                }, 600);
            }
            else {
                scrollPosition = carouselChefsWidth - (cardChefsWidth * 3);

                $('.carousel-inner-chefs').animate({
                    scrollLeft: scrollPosition,
                }, 600);
            }
        });
        
        $('.carousel-control-next').on('click', () => {
            if (scrollPosition <= (carouselChefsWidth - (cardChefsWidth * 4))) {
                scrollPosition = scrollPosition + cardChefsWidth;

                $('.carousel-inner-chefs').animate({
                    scrollLeft: scrollPosition,
                }, 600);
            }
            else {
                scrollPosition = 0;

                $('.carousel-inner-chefs').animate({
                    scrollLeft: scrollPosition,
                }, 600);
            }
        });

        $(function() {
            $('#carouselDetails').swipe( {
                swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
                    if (direction === "left") {
                        if (indicatorButtonsDetails[0].classList.contains("active")) {
                            $('.carousel-inner-details').animate({
                                scrollLeft: 500,
                            }, 600);
                
                            indicatorButtonsDetails[0].classList.remove('active');
                            indicatorButtonsDetails[1].classList.add('active');
                        }
                        else {
                            $('.carousel-inner-details').animate({
                                scrollLeft: -500,
                            }, 600);
                
                            indicatorButtonsDetails[0].classList.add('active');
                            indicatorButtonsDetails[1].classList.remove('active');
                        }
                        
                    }
                    else if (direction === "right") {
                        if (indicatorButtonsDetails[1].classList.contains("active")) {
                            $('.carousel-inner-details').animate({
                                scrollLeft: -500,
                            }, 600);
                
                            indicatorButtonsDetails[0].classList.add('active');
                            indicatorButtonsDetails[1].classList.remove('active');
                        }
                        else {
                            $('.carousel-inner-details').animate({
                                scrollLeft: 500,
                            }, 600);
                
                            indicatorButtonsDetails[0].classList.remove('active');
                            indicatorButtonsDetails[1].classList.add('active');
                        }
                    }
                }
            });
        
            $('#carouselChefs').swipe( {
                swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
                    if (direction === "left") {
                        if (scrollPosition <= (carouselChefsWidth - (cardChefsWidth * 4))) {
                            scrollPosition = scrollPosition + cardChefsWidth;
                
                            $('.carousel-inner-chefs').animate({
                                scrollLeft: scrollPosition,
                            }, 600);
                        }
                        else {
                            scrollPosition = 0;
                
                            $('.carousel-inner-chefs').animate({
                                scrollLeft: scrollPosition,
                            }, 600);
                        }
                    }
                    else if (direction === "right") {
                        if (scrollPosition > 0) {
                            scrollPosition = scrollPosition - cardChefsWidth;
                
                            $('.carousel-inner-chefs').animate({
                                scrollLeft: scrollPosition,
                            }, 600);
                        }
                        else {
                            scrollPosition = carouselChefsWidth - (cardChefsWidth * 3);
                
                            $('.carousel-inner-chefs').animate({
                                scrollLeft: scrollPosition,
                            }, 600);
                        }
                    }
                }
            });
        
            $('#carouselPost').swipe( {
                swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
                    if (direction === "left") {
                        if (indicatorButtonsPost[0].classList.contains("active")) {
                            $('.carousel-inner-post').animate({
                                scrollLeft: 1300,
                            }, 600);
                
                            indicatorButtonsPost[0].classList.remove('active');
                            indicatorButtonsPost[1].classList.add('active');
                        }
                        else {
                            $('.carousel-inner-post').animate({
                                scrollLeft: -1300,
                            }, 600);
                
                            indicatorButtonsPost[0].classList.add('active');
                            indicatorButtonsPost[1].classList.remove('active');
                        }
                    }
                    else if (direction === "right") {
                        if (indicatorButtonsPost[1].classList.contains("active")) {
                            $('.carousel-inner-post').animate({
                                scrollLeft: -1300,
                            }, 600);
                
                            indicatorButtonsPost[0].classList.add('active');
                            indicatorButtonsPost[1].classList.remove('active');
                        }
                        else {
                            $('.carousel-inner-post').animate({
                                scrollLeft: 1300,
                            }, 600);
                
                            indicatorButtonsPost[0].classList.remove('active');
                            indicatorButtonsPost[1].classList.add('active');
                        }
                    }
                }
            });
        });
    }
}
catch {

}



// ====================== Animated ========================== //

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
const statsMenu = document.querySelector(".stats-menu");
const statsRate = document.querySelector(".stats-rate");
const statsCustomer = document.querySelector(".stats-customer");
const statsBranches = document.querySelector(".stats-branches");

try {
    animateValue(statsMenu, 0, parseInt(statsMenu.innerHTML), 5000);
    animateValue(statsRate, 0, parseInt(statsRate.innerHTML), 5000);
    animateValue(statsCustomer, 0, parseInt(statsCustomer.innerHTML), 5000);
    animateValue(statsBranches, 0, parseInt(statsBranches.innerHTML), 5000);
}
catch {

}



// ====================== Admin Menu Dropdown ========================== //

if (window.matchMedia("(min-width: 1305px)").matches) {
    const adminNavBtn = document.querySelectorAll("#admin-nav-btn");
    const adminDropdown = document.querySelectorAll("#admin-dropdown");
    const adminNavBtnArr = Array.prototype.slice.call(adminNavBtn);
    
    var dropdownHeight = [];
    
    adminDropdown.forEach(element => {
        dropdownHeight.push(window.getComputedStyle(element).height);

        element.style.maxHeight = '0px';
        element.style.overflow = 'hidden';
    });
    
    adminNavBtn.forEach(element => {
        element.addEventListener('click', () => {
            var lastActiveBtn;
            var index = adminNavBtnArr.indexOf(element);
            var dropdownMenu = element.nextElementSibling;
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                if (adminNavBtn[i].classList.contains("admin-nav-active")) {
                    lastActiveBtn = adminNavBtn[i];
                    break;
                }
            }
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                adminNavBtn[i].classList.remove("admin-nav-active");
                adminDropdown[i].style.maxHeight = '0px';
            }
    
            if (element === lastActiveBtn) {
                element.classList.remove("admin-nav-active");
                dropdownMenu.style.maxHeight = '0px';
            }
            else {
                element.classList.add("admin-nav-active");
                dropdownMenu.style.maxHeight = dropdownHeight[index];
            }
        });
    });
}
else {
    const adminNavBtn = document.querySelectorAll("#admin-nav-btn");
    const adminDropdown = document.querySelectorAll("#admin-dropdown");
    const adminNavBtnArr = Array.prototype.slice.call(adminNavBtn);
    
    var dropdownHeight = [];

    adminDropdown.forEach(element => {
        dropdownHeight.push(window.getComputedStyle(element).height);

        element.style.maxHeight = '0px';
    });
    
    adminNavBtn.forEach(element => {
        element.addEventListener('click', () => {
            var lastActiveBtn;
            var index = adminNavBtnArr.indexOf(element);
            var dropdownMenu = element.nextElementSibling;
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                if (adminNavBtn[i].classList.contains("admin-nav-active")) {
                    lastActiveBtn = adminNavBtn[i];
                    break;
                }
            }
    
            for (var i = 0; i < adminNavBtn.length; i++) {
                adminNavBtn[i].classList.remove("admin-nav-active");
                adminDropdown[i].style.maxHeight = '0px';
            }
    
            if (element === lastActiveBtn) {
                element.classList.remove("admin-nav-active");
                dropdownMenu.style.maxHeight = '0px';
            }
            else {
                element.classList.add("admin-nav-active");
                dropdownMenu.style.maxHeight = dropdownHeight[index];
            }
        });
    });
}



// ====================== User Info Dropdown ========================== //

const userBtnDropdown = document.querySelector("#navbar-dropdown");

if (userBtnDropdown != null) {
    userBtnDropdown.addEventListener('click', () => {
        var dropdown = userBtnDropdown.nextElementSibling;
        if (dropdown.classList.contains("d-none")) {
            dropdown.classList.remove('d-none');
            dropdown.classList.add('d-flex');
        }
        else {
            dropdown.classList.remove('d-flex');
            dropdown.classList.add('d-none');
        }
    });
}