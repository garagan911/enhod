console.log('INIT');

function globalAnimate() {
    const ticket = document.querySelector('#ticket');
    const ellipseBlue = document.querySelector('#ellipse-blue');
    const ellipseViolet = document.querySelector('#ellipse-violet');
    const tlH = gsap.timeline();
    const tlA = gsap.timeline();
    // tl Home
    tlH.fromTo(ellipseBlue, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
      .fromTo(ticket, {x: -150, opacity: 0, scale: .5}, {duration: 3, x: 0, opacity: 1, scale: 1, ease: "expo.out"} , "-=2")

    // tl About

    tlA.fromTo(ellipseViolet, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
}

function showBalloon() {
    $('.home-top-banner, .glera-story').addClass('show');
}
// $('.top-balloon circle').addClass('show');
function removePreloader() {
    $('.preloader').animate({
        opacity: '0'
    }, 800, function () {
        $(this).remove();
    });
    setTimeout(function (){
        showBalloon()
        globalAnimate()
    }, 800);

}


$(document).ready(function(){
    // Init Slick
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        appendArrows: $('.wrap-slider .controls'),
        nextArrow: '<button class="slide-next btn-slide"></button>',
        prevArrow: '<button class="slide-prev btn-slide"></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]

    });

    //Slick News Home
    $('.our-news__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        appendArrows: $('#controls-news'),
        nextArrow: '<button class="slide-next btn-slide"></button>',
        prevArrow: '<button class="slide-prev btn-slide"></button>',
        responsive: [
            {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //Slick About
    $('#our-office_slider1').slick({
        centerMode: true,
        slidesToShow: 1,
        appendArrows: $('#our-office_slider-controls1'),
        nextArrow: '<button class="slide-next btn-slide"></button>',
        prevArrow: '<button class="slide-prev btn-slide"></button>'
    });

    $('#our-office_slider2').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        appendArrows: $('#our-office_slider-controls2'),
        nextArrow: '<button class="slide-next btn-slide"></button>',
        prevArrow: '<button class="slide-prev btn-slide"></button>'
    });

    $('#our-office_slider3').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        appendArrows: $('#our-office_slider-controls3'),
        nextArrow: '<button class="slide-next btn-slide"></button>',
        prevArrow: '<button class="slide-prev btn-slide"></button>'
    });

    $('.wrap-slider .slick-track').css('display', 'flex');

    //Mob-menu

    $('.glera__menu-toggle').click(function (){
        $('.main-navigation').toggleClass('show')
        $('body').toggleClass('overflow-hidden')
    })

    // mob menu fix
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

});

// General

$(window).on('load', function () {
    removePreloader();
    $(window).scroll();
});

// animation

document.addEventListener("DOMContentLoaded", function (event) {

    let animationCompany = document.querySelector('#mascot');

    let data = '/wp-content/themes/glera/assets/animations/mascot_with_phone.json';
    // let data = '/wp-content/themes/glera/assets/animations/robot_postman/robot_postman.json';
    let animBlue = {
        name: 'data',
        container: animationCompany,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: data
    };

    bodymovin.loadAnimation(animBlue);
});






