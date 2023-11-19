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

/********************  Slide start **********************/


document.addEventListener('DOMContentLoaded', function() {

    // Create and mount the thumbnails slider.
    var secondarySlider = new Splide('#secondary-slider', {
        rewind: true,
        fixedWidth: 100,
        fixedHeight: 64,
        isNavigation: true,
        gap: 10,
        focus: 'center',
        pagination: false,
        cover: true,
        breakpoints: {
            '600': {
                fixedWidth: 66,
                fixedHeight: 40,
            }
        }
    }).mount();

    // Create the main slider.
    var primarySlider = new Splide('#primary-slider', {
        type: 'fade',
        // heightRatio: 0.5,
        pagination: false,
        arrows: false,
        cover: true,
    });

    // Set the thumbnails slider as a sync target and then call mount.
    primarySlider.sync(secondarySlider).mount();
});

/********************  Slide end **********************/