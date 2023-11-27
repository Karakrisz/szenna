@extends('layouts.app')

@section('title', $title)

@section('content')

<section>
    <div class="about-content">

        <h1 class="about-content__h1 text-center text-transform-uppercase">RÓLUNK</h1>

        <div class="about-content__flex-box d-flex">

            <div class="about-content__flex-box__div"></div>

            <div class="about-content__img-text-box position-relative">
                <div class="about-content__img-text-box__bg-box position-absolute"></div>
                <div class="about-content__img-text-box__text-box position-relative">
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

@endsection