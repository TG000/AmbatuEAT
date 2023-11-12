const carouselDetails = document.querySelector('#carouselDetails');
const carouselChefs = document.querySelector('#carouselChefs');
const carouselPost = document.querySelector('#carouselPost');
const indicatorButtonsDetails = document.querySelectorAll('.carousel-indicators-details button');
const indicatorButtonsPost = document.querySelectorAll('.carousel-indicators-post button');

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