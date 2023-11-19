@extends('layouts.app')

@section('content')
<section>
    <div class="slider-content">
        <img class="slider-content__img" src="img/slider/slider.png" alt="szenna">
    </div>
</section>

<section>
    Étlap
</section>

<section>
    <div class="about-content">

        <h1 class="about-content__h1 text-center text-transform-uppercase">RÓLUNK</h1>

        <div class="about-content__flex-box d-flex">

            <div class="about-content__flex-box__div"></div>

            <div class="about-content__img-text-box">

                <div class="about-content__img-text-box__text-box">
                    <h2 class="about-content__img-text-box__text-box__h2 text-transform-uppercase">MI VAGYUNK A</h2>
                    <h3 class="about-content__img-text-box__text-box__h3 text-transform-uppercase">BOJTOROS FALATOZÓ
                    </h3>

                    <p class="about-content__img-text-box__text-box__p">1997-ben indult kedves kisvárosi éttermünk egy
                        hosszú
                        és ízletes kulináris utazásnak adott kezdetet.
                        Az eltelt évek során büszkén vártuk az éhes szájakat a vendégszeretettel teli helyszínünkön.
                        Egyedi
                        hangulatunk és elragadó enteriőrünk mindenki számára otthonos érzést kínál, amely párosul a
                        gazdag
                        étlapunk sokszínűségével. Friss helyi alapanyagokból készült ételválasztékunk változatossága a
                        hagyományos ízek és kreatív fogások harmonikus találkozását tükrözi. Örömmel várjuk az
                        érdeklődőket,
                        hogy megízlelhessék az évek óta folyamatosan finomodó konyhánk remekeit, és részesei lehessenek
                        éttermünk hosszú távú sikerének.</p>
                </div>

            </div>

        </div>

    </div>
</section>

<section>

    <div class="gallery-content">
        <h4 class="gallery-content__h4 text-center text-transform-uppercase">GALÉRIA</h4>

        <div id="primary-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/458766/pexels-photo-458766.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/1308881/pexels-photo-1308881.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="http://wallpaperswide.com/download/the_elder_scrolls_v_skyrim_key_art-wallpaper-2560x1080.jpg">
                    </li>
                </ul>
            </div>
        </div>

        <div id="secondary-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/458766/pexels-photo-458766.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="https://images.pexels.com/photos/1308881/pexels-photo-1308881.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    </li>
                    <li class="splide__slide">
                        <img
                            src="http://wallpaperswide.com/download/the_elder_scrolls_v_skyrim_key_art-wallpaper-2560x1080.jpg">
                    </li>
                </ul>
            </div>
        </div>


    </div>

</section>

@endsection