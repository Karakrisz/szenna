// ********************  Menu start **********************

class MenuManager {
    constructor(hamburgerId, menuId, navbarSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu = document.getElementById(menuId);
        this.navbar = document.querySelector(navbarSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));
    }

    toggle = () => {

        if (this.isOpen) {
            // Zárás animáció
            this.menu.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu.style.opacity = 1;
            this.menu.style.transform = "translateX(0)";
        }

        this.menu.classList.toggle('active');
        this.navbar.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

// TODO ezt át kell írni szebben úgy, hogy css-bol jöjjenek az adatok 

const menuManager = new MenuManager('hamburger', 'menu', '.navbar');

// ********************  Menu end **********************

// ********************  Slider start **********************

class ScrollBottomAnimation {
    constructor(selector) {
        this.element = document.querySelector(selector);
        this.init();
    }

    init() {
        this.addScrollListener();
    }

    addScrollListener() {
        window.addEventListener('scroll', () => this.checkScroll());
    }

    checkScroll() {
        const boxTop = this.element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (boxTop < windowHeight) {
            this.element.classList.add('animate-in');
            window.removeEventListener('scroll', () => this.checkScroll);
        }
    }
}

const scrollBottomAnimation = new ScrollBottomAnimation('.slider-content__img');

// ********************  Slider end **********************

// ********************  About start **********************


class ScrollAnimation {
    constructor(selector) {
        this.element = document.querySelector(selector);
        this.init();
    }

    init() {
        this.setInitialStyles();
        this.addScrollListener();
    }

    setInitialStyles() {
        this.element.style.opacity = 0;
        this.element.style.transform = 'translateX(100%)';
        this.element.style.transition = 'opacity 1.5s, transform 1.5s';
    }

    addScrollListener() {
        window.addEventListener('scroll', () => this.checkScroll());
    }

    checkScroll() {
        const boxTop = this.element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (boxTop < windowHeight) {
            this.element.classList.add('animate-in');
        }
    }
}

const scrollAnimation = new ScrollAnimation('.about-content__img-text-box');

// ********************  About end **********************

/********************  Slide start **********************/


document.addEventListener('DOMContentLoaded', function() {

    var secondarySliderElement = document.getElementById('secondary-slider');

    if (secondarySliderElement) {

        var secondarySlider = new Splide('#secondary-slider', {
            rewind: true,
            fixedWidth: 100,
            fixedHeight: 200,
            isNavigation: true,
            focus: 'center',
            pagination: false,
            cover: true,
            perPage: 6,
            gap: 5,
        }).mount();

        function updateFixedHeight() {

            var windowWidth = window.innerWidth;

            if (windowWidth >= 2200 || windowWidth >= 2000) {
                secondarySlider.options.fixedHeight = 300;
            } else if (windowWidth >= 1800) {
                secondarySlider.options.fixedHeight = 250;
            } else if (windowWidth >= 1500) {
                secondarySlider.options.fixedHeight = 220;
            } else if (windowWidth >= 1400) {
                secondarySlider.options.fixedHeight = 200;
            } else if (windowWidth >= 1200) {
                secondarySlider.options.fixedHeight = 170;
            } else if (windowWidth >= 992) {
                secondarySlider.options.fixedHeight = 150;
            } else if (windowWidth >= 768) {
                secondarySlider.options.fixedHeight = 100;
            } else if (windowWidth >= 300) {
                secondarySlider.options.fixedHeight = 50;
            } else {
                secondarySlider.options.fixedHeight = 200;
            }

            secondarySlider.refresh();
        }

        window.addEventListener('resize', updateFixedHeight);

        updateFixedHeight();
    }

    var primarySliderElement = document.getElementById('primary-slider');

    if (primarySliderElement) {
        var primarySlider = new Splide('#primary-slider', {
            type: 'fade',
            pagination: false,
            arrows: false,
            cover: true,
        });

        primarySlider.sync(secondarySlider).mount();
    }

});

/********************  Slide end **********************/