@extends('layouts.app')

@section('title', $title)

@section('content')

<section>
    <div class="menu-content menu-content--bg">
        <h4 class="menu-content__h4 text-center text-transform-uppercase">ÉTLAP</h4>

        <div class="menu-content__text-box d-flex">

            <div class="menu-content__text-box__div">

                <div class="menu-content__text-box__div__margin-right-box">
                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">LEVESEK • SUPPEN • SOUPS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            FÁCÁNLEVES GAZDAGON zöldséggel,
                            csigatésztával <br> <i class="menu-content__text-box__div__text-box__p__i">Fasanensuppe
                                reichhaltig mit
                                Gemüse und Schneckennudeln</i>
                            <br> <i class="menu-content__text-box__div__text-box__p__i">Pheasant soup with vegetables
                                and spiral noodles</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong">Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            TÁRKONYOS BORJÚRAGULEVES
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Kalbsragout Suppe mit Estragon</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Veal stew soup with tarragon</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            IDÉNYJELLEGŰ GYÜMÖLCSKRÉMLEVES
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Saisonale Fruchtcremesuppe</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Seasonal fruit cream soup</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SZÁRNYASÉTELEK •
                        GEFLÜGELGERICHTE
                        • POULTY DISHES</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSIRKEMELL FŰSZERVAJJAL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Hähnchenbrust mit Gewürzbutter</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Chicken breast with spicy butter</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            RÁNTOTT CSIRKEMELL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Panierte Hähnchenbrust</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Breaded chicken</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SERTÉSÉTELEK•
                        SCHWEINEFLEISCHGERICHTE
                        • PORK DISHES</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            RÁNTOTT SZELET KARAJBÓL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Paniertes kotelettschnitzel</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Breaded cutlet</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZENNAI ZSEBES HÚS (sajt, füstölt kolbász, hagyma, mustár, szalonna)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Taschenfleisch aus Szenna (Käse,
                                geräucherte Wurst, Zwiebeln, Senf, Speck)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Pocketed pork from Szenna (stuffed
                                with cheese, smoked sausage, onion, mustard, bacon)</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            ZELICI SERTÉSPOFA ERDEI GOMBAMÁRTÁSSAL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Schweinebacke aus Zselic mit
                                Waldpilzsoße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Pork chop from Zselic with wild
                                mushroom sauce</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSÜLÖK JÓASSZONY MÓDRA (vöröshagyma, zöldborsó, gomba, szalonna)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Haxen nach guter Frauenart (Zwiebeln,
                                grüne Erbsen, Pilze, Speck)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Knuckle of pork in Bonne Femme style
                                (onion, pea, mushroom, bacon)</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            TÜZES CSÜLÖK CHILIVEL ÉS MÉZZEL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Feurig knöchel mit Chili und
                                Honig</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Ardent knuckle with chili and
                                honey</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>


                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CIGÁNYPECSENYE
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Zigeunerbraten</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Fried pork cutles</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">VADÉTELEK • WILDGERICHTE • GAME
                        DISHES</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZARVASSÜLT ÉRMÉK NARANCSMÁRTÁSSAL (narancskockák, borókabogyó,
                            kakukkfű, rozmaring) (G)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gebratene Wildbret Münzen mit
                                Orangensoße (Orangenwürfel, Wacholderbeeren,
                                Thymian, Rosmarin)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Roasted venison medallions with
                                orange sauce (orange cubes, juniper berries, thyme,
                                rosemary)</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            ZSELICI SZARVASSÜLT ZÖLDBORSMÁRTÁSSAL (I, G, J)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Rehbraten aus Zselic mit grüner
                                Pfeffersoße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Zselici roast venison with green
                                pepper sauce</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SÜLT VADDISZNÓ BARNAMÁRTÁSSAL (I, J)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gebratener Eber mit brauner Soße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Roasted boar with brown sauce</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZENNAI TŰZDELT VADDISZNÓ ÉRMÉK ROZMARINGMÁRTÁSSAL (I, J)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Mit Senna besetzte Wildschweinmünzen
                                mit Rosmarinsauce</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Senna studded wild boar coins with
                                rosemary sauce</i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">
                        MARHÁBÓL KÉSZÜLT ÉTELEK
                        • RINDFLEISCHGERICHTE • BEEF DISH</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            VÖRÖSBOROS MARHAPÖRKÖLT GALUSKÁVAL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Rindereintopf in Rotwein mit
                                Nudeln</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Beef stew in red vine with noodle
                                RIB EYE STEAK </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">TÁLAK • UNSERE PLATTEN • DISHES
                    </h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            2 SZEMÉLYES TÁL – Szennai zsebeshús, csülök jóasszony módra, fűszervajas natúr
                            csirkemell, rántott sajt, rizs, hasábburgonya, friss saláta
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Teller für zwei Personen –
                                Taschenfleisch aus Szenna, Haxen nach guter Frauenart,
                                Hähnchenbrust mit Gewürzbutter, panierter Käse, Reis, Pommes Frites, frischer Salat</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Bowl for 2 people – Poketed pork from
                                Szenna, knuckle of pork in Bonne Femme style,
                                plain chicken breast with spicy butter, breaded cheese, rice, French fries, fresh salad
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            VADÁSZTÁL – sertéspofa, vaddisznósült, szarvasérmék zöldbors mártással, krokettel és rizzsel
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Jagdplatte – Schweinebacke aus
                                Zselic, Gebratener Eber, Hirschragout aus Zselic
                                mit grüner Pfeffersoße, mit Kartoffelkroketten und Reis</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Hunter's dish – pork chop, roasted
                                wild boar, roasted venison medallions with green
                                pepper sauce, croquette, rice
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZENNA TÁL (2 személyes) – Rántott szelet, Szennai zsebeshús, cigánypecsenye,
                            rántott sajt, vegyes köret
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Szenna-Platte (für 2 Personen) –
                                Gebratene Scheibe, Senna-Taschenfleisch, Zigeunersteak,
                                gebratener Käse, gemischte Beilage</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Szenna bowl (for 2 people) – Fried
                                slice, Senna pocket meat, gypsy steak, fried cheese, mixed side dish
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">HALÉTELEK • FISCHFÜHRUNGSMITTEL
                        • FISH FOODS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            LAZACFILÉ CITROMMÁRTÁSSAL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Lachsfilet mit Zitronensauce</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Salmon fillet with lemon sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">VEGA ÉTELEK • VEGETARIANE
                        GERICHTE
                        • VEGETARIAN DISHES</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            VEGA MENÜ – rántott karfiol, gomba, hagymakarika, rántott sajt, hasábburgonya,
                            grill zöldségek
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Veganes Menü – gebratener Blumenkohl,
                                Pilze, Zwiebelringe, panierter Käse,
                                Pommes Frites, gegrilltes Gemüse</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Vegetarian menu/vega menu – breaded
                                cauliflower, breaded mushroom, fried onion rings,
                                breaded cheese, French fries, grilled vegetables
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            RÁNTOTT CAMEMBERT ÁFONYALEKVÁRRAL
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Panierter Camembert mit
                                Blaubeermarmelade</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Breaded Camembert with bluberry jam
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">HAMBURGEREK • HAMBURGER •
                        HAMBURGERS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            RETRO HAMBURGER 100% marhahúsból, saláta, paradicsom, uborka, hagyma,
                            házi hamburgerszósz (A, C, G, J)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Retro-hamburger aus 100% Rindfleisch,
                                Salat, Tomate, Gurke, Zwiebel,
                                hausgemachte Hamburgersoße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Retro hamburger, 100% beef, lettuce,
                                tomato, cucumber, onion, homemade hamburger
                                sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            FEKETE EXTRA BURGER hasábburgonyával, salátával
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Schwarzer Extra-Burger, mit Pommes
                                Frites und Salat</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Black extra burger, French fries,
                                lettuce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CHEDAR BURGER 100% marhahúsból, saláta, paradicsom, uborka, hagyma, Chedar sajt,
                            házi hamburger szósz
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Cheddar-Burger aus 100% Rindfleisch,
                                Salat, Tomate, Gurke, Zwiebel, Cheddar-Käse,
                                hausgemachte Hamburgersoße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Cheddar Burger,100% beef, lettuce,
                                tomato, cucumber, onion, cheddar cheese,
                                hamburger sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            DUPLA HÚSOS CHEDAR BURGER 100% marhahúsból, saláta, paradicsom, uborka,
                            hagyma, Chedar sajt, házi hamburger szósz
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Doppelfleisch Cheddar-Burger aus 100%
                                Rindfleisch, Salat, Tomate, Gurke, Zwiebel,
                                Cheddar-Käse, hausgemachte Hamburgersoß</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Double beef Cheddar Burger,100% beef,
                                lettuce, tomato, cucumber, onion, cheddar cheese,
                                hamburger sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            MÉRGES BURGER 100% marhahúsból, Chedar sajt, yolo peppa paprika, saláta,
                            paradicsom, uborka, hagyma
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Scharfe Burger aus 100% Rindfleisch,
                                Cheddar-Käse, Yolo-Peppa Paprika, Salat, Tomate,
                                Gurke, Zwiebel</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Hot burger, 100% beef, cheddar
                                cheese, yoloppepuya pepper, lettuce, cucumber, tomato, onion
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                </div>

            </div>

            <div class="menu-content__text-box__div">
                <div class="menu-content__text-box__div__margin-left-box">
                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">PIZZA</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Margarita</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Sicilian</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Son Goku</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2700 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Magyaros</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Tonhalas</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Húsimádó</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2700 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Szennai tüzes</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">4 sajtos</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Napsütötte</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2700 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Séf ajánlata</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Hawaii</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Kukori</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2700 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Csibém</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Kívánság</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">TÉSZTA</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Bolognai spagetti</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Sajtos tészta</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">GYROS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Gyros tál</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1450 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Dupla húsos gyros tál</p>
                        <strong class="menu-content__text-box__div__text-box__strong">2950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">KÖRET</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Jázmin rizs</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Galuska</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Hasábburgonya</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Burgonyakrokett</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Grillezett zöldségek</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SALÁTA</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Friss saláta</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Csirkesaláta</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Görög saláta</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SAVANYÚSÁG</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Káposztasaláta</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Csemege uborka</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Csípős almapaprika</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Vegyes savanyúság</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">DESSZERT</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Fagylaltkehely</p>
                        <strong class="menu-content__text-box__div__text-box__strong">950 Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p class="menu-content__text-box__div__text-box__p">Csoki brownie vaníliás fagylalttal</p>
                        <strong class="menu-content__text-box__div__text-box__strong">1950 Ft</strong>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection