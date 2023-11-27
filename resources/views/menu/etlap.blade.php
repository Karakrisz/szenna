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
                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">PIZZÁK • PIZZAS • PIZZAS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            MARGARITAMargherita • Margherita
                            (paradicsomszósz, rukkola, sajt) A, C, G
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Rucola, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, rucola, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SONKÁS • Schinken • Ham
                            (paradicsomszósz, sonka, paradicsomkarika, sajt) A, C, G
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Schinken,
                                Tomatenringe, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, ham, tomato ring,
                                cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SON-GO-KU
                            (paradicsomszósz, sonka, gomba, kukorica, rukkola, sajt) A, C, G
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Schinken, Pilze, Mais,
                                Rucola, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, ham, mushroom, sweet
                                corn, rucola, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            MAGYAROS • Ungarisch • Hungarian
                            (paradicsomszósz, szalámi, bacon, hagyma, paradicsom, pepperoni, sajt) A, C, G
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Salami, Speck,
                                Zwiebeln, Tomaten, Peperoni, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, salami, bacon, onion,
                                tomato, pepperoni, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            TONHALAS • Thunfisch • Tuna
                            (paradicsomszósz, tonhal, hagyma, oliva, rukkola, citrom, sajt) A, C, G, D
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Thunfisch, Zwiebeln,
                                Oliven, Rucola, Zitrone, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, tuna, onion, olive,
                                rucola, lemon, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            HÚSIMÁDÓ • Fleischliebhaber • Meat lover
                            (paradicsomszósz, sonka, szalámi, bacon, gyros hús, rukkola, sajt) A, C, G
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Schinken, Salami,
                                Speck, Gyrosfleisch, Rucola, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, ham, salami, bacon,
                                gyro meat,rucola,cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZENNAI TÜZES • Feurig von Szenna • Fiery from Senna
                            (paradicsomszósz, húsos ragu, szalámi, sonka, hegyes erős paprika, rukkola, fokhagyma, sajt)
                            A, C, G, D, N
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Fleischragout, Salami,
                                Schinken, scharfe Peperoni, Rucola, Knoblauch, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, pork stew, salami,
                                ham, hot green pepper, rucola, garlic, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            4 SAJTOS • 4 Käse • 4 cheese
                            (paradicsomszósz, sajt mix, paradicsom, rukkola) A, C, G, D, N
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Käsemischung, Tomaten,
                                Rucola)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, cheese mix, tomato,
                                rucola,)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            NAPSÜTÖTTE • Es war sonnig • It was sunny
                            (tejfölös szósz, bacon, kukorica, hagyma, tojás, sajt) A, C, G, S, N
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Sauerrahmsauce, Speck, Mais,
                                Zwiebeln, Ei, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(sour cream sauce, bacon, corn,
                                onion, egg, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SÉFBATYU • Chefkoch ”Batyu” • Chef ”Batyu”
                            (paradicsomszósz, csirkemell, vöröshagyma, gomba, sajt) A, C, G, D, N
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Hähnchenbrust, rote
                                Zwiebeln, Pilze, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, chicken breast, red
                                onion, mushroom, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            HAWAII • Hawaii • Hawaii
                            (paradicsomszósz, sonka, ananász, oliva, sajt) A, C, G, D
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Schinken, Ananas,
                                Oliven, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, ham, pineapple, olive,
                                cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            KUKORI • Kukori • Kukori
                            (paradicsomszósz, sonka, kukorica, sajt) A, C, G, D
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Tomatensauce, Schinken, Mais,
                                Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(tomato sauce, ham, corn, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSIBÉM • Mein Küken • My chick
                            (tejfölös alap, csirkehús, jalapeno paprika, sonka, sajt) A, C, G, D
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Sauerrahmbasis, Hühnerfleisch,
                                Jalapenopfeffer, Schinken, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(sour cream base, chicken meat,
                                jalapeno pepper, ham, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            KÍVÁNSÁG • Wunsch • Wish
                            (alap + 5 feltét) A, C, G, D, N
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Basis + 5 Toppings)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(basic + 5 toppings)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">TÉSZTÁK • PASTA • PASTA</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            BOLOGNAI SPAGETTI
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Spaghetti Bolognese</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i"> Spaghetti Bolognese
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SAJTOS TÉSZTA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Nudeln mit Käse</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Pasta with cheese
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">GYROSOK • GYROS • GYROS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            GYROS TÁL – hasábburgonya, gyroshús, vegyes zöldség
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gyros-Teller – Pommes Frites,
                                Gyros-Fleisch, gemischtes Gemüse, Soße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gyros plate – French fries, gyro
                                meat, mixed vegetables
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            DUPLA HÚSOS GYROS TÁL választható szósszal
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Doppelfleisch Gyros-Teller mit
                                optionaler Soße</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gyros plate with double gyros meat
                                with optional sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>


                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SZÓSZOK: csípős, kapros, fokhagymás
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Soßen: scharf, Dill, Knoblauch</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Sauces: hot, dill, garlic
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">KÖRETEK • BEILAGEN • GARNISHES
                    </h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            JÁZMIN RIZS
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Jasmin Reis </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Jasmine
                                rice
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            GALUSKA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Nudeln </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Noodle
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            HASÁBBURGONYA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Pommes frittes </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">French fries
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            BURGONYAKROKETT
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Kartoffelkroketten </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Croquette
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            GRILL ZÖLDSÉGEK (A, E, H, I)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gegrilltes Gemüse </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Grilled vegetables
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SALÁTÁK • SALATE • SALADS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            FRISS SALÁTA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Frischer Salat</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Fresh salad
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSIRKESALÁTA • Hühnersalat • Chicken salad
                            (saláta, paradicsom, paprika, uborka, lilahagyma, grillezett csirkehúsok, sajt) (A, C, G, I)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Salat, Tomate, Paprika, Gurke, rote
                                Zwiebel, gegrilltes Hähnchen, Käse)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(lettuce, tomato, green pepper,
                                cucumber, red onion, grilled chicken breast sticks, cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            GÖRÖG SALÁTA • Griechischer Salat • Greek salad
                            (saláta, paprika, paradicsom, uborka, lilahagyma, olivabogyó, feta sajt) (G, I)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(Salat, Paprika, Tomate, Gurke rote
                                Zwiebl, Oliven, Feta-Käsa)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">(lettuce, green pepper, tomato,
                                cucumber, red onion, olives, feta cheese)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">SAVANYÚSÁG • SAUER EINGELEGTES
                        GEMÜSE• PICKLES</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            KÁPOSZTASALÁTA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Krautsalat</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Cabbage salad
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSEMEGEUBORKA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Eingelegte Gurke</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Pickled gherkins
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSÍPŐS ALMAPAPRIKA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Eingelegte scharfe Apfelpaprika</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Hot pepper
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            VEGYES SAVANYÚSÁG
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Gemischte Gemüse</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Mixed pickles
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">DESSZERTEK • NACHSPEISEN •
                        DESSERTS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            FAGYLALTKEHELY (G)
                            (2 gombóc, tejszínhab, erdei gyümölccsel)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Eisbecher
                                (2 Kugeln, Schlagsahne, mit Waldfrüchten)</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Ice Cream Cup
                                (2 scoops, whipped cream, with forest fruit)
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            CSOKI BROWNIE VANÍLIA FAGYIVAL (A, C, E, G, H)
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Schokoladen-Brownie mit
                                Vanilleeis</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Chocolate brownie with vanilla ice
                                cream
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <h6 class="menu-content__text-box__div__h6 text-transform-uppercase">EGYEBEK • EXTRAS • EXTRAS</h6>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            KENYÉR
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Bread</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Bread
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            MUSTÁR, KETCHUP, MAJONÉZ, SÉFSZÓSZ
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Senf, Ketchup, Mayonnaise</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Chefsauce • Mustard, ketchup,
                                mayonnaise, chef sauce
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            SAJT
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Käse</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Cheese
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            HÚS FELTÉT PIZZÁRA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Fleischbelag für Pizza </i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Meat topping onto pizza
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                    <div class="menu-content__text-box__div__text-box d-flex">
                        <p
                            class="menu-content__text-box__div__text-box__p menu-content__text-box__div__text-box__p--margin">
                            HAL PIZZÁRA
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Fisch auf Pizza</i>
                            <br>
                            <i class="menu-content__text-box__div__text-box__p__i">Fish topping onto pizza
                            </i>
                        </p>
                        <strong class="menu-content__text-box__div__text-box__strong"> Ft</strong>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection