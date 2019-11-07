<!doctype html>
<html>
<head>

    <title> @yield('title_area') </title>

    @include('frontView.home.meta')

    @include('frontView.home.scripts')

    <style>
        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>


</head>

<body>

<div class="fh5co-loader"></div>

<div id="page">

<!-- NAVBAR -->
@include('frontView.home.navbar')

<br>
    <div class="container-wrap3">


<!--<div style="margin-left: 200px">
        <img src="https://www.tlu.ee/sites/default/files/styles/image_1300xn/public/2019-10/Erasmus-2018-fb-20%25-eng%201.png?itok=h5yKFn4K" style="height: 500px" width="80%">
</div>-->


        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('frontEnd') }}/images/double-tail-spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

                <div style="background-color:#000000;">
                    <img data-u="image" src="{{ asset('frontEnd') }}/images/britain_slide.jpg" />
                    <div data-ts="flat" data-p="408" style="left:20px;top:18px;width:726px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:725px;top:12px;width:905px;height:90px;position:absolute;overflow:hidden;">
                            <div data-to="50% 50%" data-arr="1" style="left:73px;top:19px;width:386px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.05em;">Londýn</div>
                            <div data-to="50% 50%" data-arr="2" style="left:30px;top:47px;width:709px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">Veľká Británia</span></div>
                        </div>
                    </div>
                </div>

                <div>
                    <img data-u="image" src="{{ asset('frontEnd') }}/images/china_slide.jpg" />
                    <div data-ts="flat" data-p="408" style="left:20px;top:18px;width:726px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="3" style="left:725px;top:12px;width:905px;height:90px;position:absolute;overflow:hidden;">
                            <div data-to="50% 50%" data-arr="4" style="left:73px;top:19px;width:386px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">Peking</div>
                            <div data-to="50% 50%" data-arr="5" style="left:72px;top:47px;width:709px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">Čína</span></div>
                        </div>
                    </div>
                </div>

                <div>
                    <img data-u="image" src="{{ asset('frontEnd') }}/images/Astana_slide.jpg"/>
                    <div data-ts="flat" data-p="408" style="left:20px;top:18px;width:726px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:725px;top:12px;width:905px;height:90px;position:absolute;overflow:hidden;">
                            <div data-to="50% 50%" data-arr="7" style="left:73px;top:19px;width:386px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">Astana</div>
                            <div data-to="50% 50%" data-arr="8" style="left:35px;top:47px;width:709px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">Kazachstan</span></div>
                        </div>
                    </div>
                </div>

                <div>
                    <img data-u="image" src="{{ asset('frontEnd') }}/images/moskva_slide.jpg" />
                    <div data-ts="flat" data-p="408" style="left:20px;top:18px;width:726px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="9" style="left:725px;top:12px;width:905px;height:90px;position:absolute;overflow:hidden;">
                            <div data-to="50% 50%" data-arr="10" style="left:73px;top:19px;width:386px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">Moskva</div>
                            <div data-to="50% 50%" data-arr="11" style="left:70px;top:47px;width:709px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">Rusko</span></div>
                        </div>
                    </div>
                </div>

                <div>
                    <img data-u="image" src="{{ asset('frontEnd') }}/images/taiwan_slide.jpg" />
                    <div data-ts="flat" data-p="408" style="left:20px;top:18px;width:726px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="12" style="left:725px;top:12px;width:905px;height:90px;position:absolute;overflow:hidden;">
                            <div data-to="50% 50%" data-arr="13" style="left:73px;top:19px;width:386px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">Taipei</div>
                            <div data-to="50% 50%" data-arr="14" style="left:58px;top:47px;width:709px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">Taiwan</span></div>
                        </div>
                    </div>
                </div><a data-u="any" href="https://www.jssor.com" style="display:none">slider web design</a>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();
        </script>
        <!-- #endregion Jssor Slider End -->


        <div id="fh5co-blog">
            <div class="row">
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="usa" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/usa1.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Pracovná stáž</span>
                            <h2>USA</h2>
                            <p>Florida Institute for Human and Machine Cognition (IHMC) se nachází ve městě Pensacola na Floridě (USA).</p>
                            <ul class="stuff">

                                <li><a href="usa">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="kazachstan" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/astana.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Kazachstan</h2>
                            <p>V roce 2013 jsme uzavřeli smlouvu o spolupráci s Karaganda State Technical University v Kazachstánu, kam dosud vycestovalo 6 našich studentů.                                                  </p>
                            <ul class="stuff">
                                <li><a href="kazachstan">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="malajzia" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/malajzia.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Malajzia</h2>
                            <p>Od roku 2015 jsou v rámci programu Erasmus+ nově podporovány výměny studentů a zaměstnanců vysokých škol se zeměmi mimo Evropu.</p>
                            <ul class="stuff">
                                <li><a href="malajzia">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                        <div class="col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="rusko" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/rusko.jpg);"></a>
                                <div class="blog-text">
                                    <span class="posted_on">Študijný pobyt</span>
                                    <h2>Rusko</h2>
                                    <p>V loňském roce jsme uzavřeli smlouvu se Saint-Petersburg University of Management Technologies and Economics.</p>
                                    <ul class="stuff">

                                        <li><a href="rusko">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="britain" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/britain.jpg	);"></a>
                                <div class="blog-text">
                                    <span class="posted_on">Študijný poby</span>
                                    <h2>Velká Británia</h2>
                                    <p>Pro studenty FIM máme nabídku k získání bakalářského titulu BA (Hons) na partnerské univerzitě ve Velké Británii.                                                  </p>
                                    <ul class="stuff">
                                        <li><a href="britain">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="hong_kong" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/hong.jpg);"></a>
                                <div class="blog-text">
                                    <span class="posted_on">Študijný pobyt</span>
                                    <h2>Hong-Kong</h2>
                                    <p>Studentům FIM nabízíme jedinečnou příležitost zúčastnit se měsíční letní školy na City University of Hong Kong.</p>
                                    <ul class="stuff">
                                        <li><a href="hong_kong">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                                <div class="col-md-4">
                                    <div class="fh5co-blog animate-box">
                                        <a href="taiwan" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/taiwan.jpg);"></a>
                                        <div class="blog-text">
                                            <span class="posted_on">Pracovná stáž</span>
                                            <h2>Taiwan</h2>
                                            <p>Od roku 2015 jsou v rámci programu Erasmus+ nově podporovány výměny studentů a zaměstnanců vysokých škol se zeměmi mimo Evropu.</p>
                                            <ul class="stuff">

                                                <li><a href="taiwan">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="fh5co-blog animate-box">
                                        <a href="polsko" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/polsko.jpg	);"></a>
                                        <div class="blog-text">
                                            <span class="posted_on">Pracovná stáž</span>
                                            <h2>Polsko</h2>
                                            <p>Wroclaw University of Science and Technology je dlouholetým partnerem naší fakulty.                                                 </p>
                                            <ul class="stuff">
                                                <li><a href="polsko">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="fh5co-blog animate-box">
                                        <a href="cina" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/cina.jpg);"></a>
                                        <div class="blog-text">
                                            <span class="posted_on">Študijný pobyt</span>
                                            <h2>Čína</h2>
                                            <p>Žadatelé a účastníci musí respektovat veškerá nařízení platná pro vnější pomoc EU, stanovená Evropskou radou. </p>
                                            <ul class="stuff">
                                                <li><a href="cina">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



            </div>
        </div>
    </div><!-- END container-wrap -->
</div>
<br>
@include('frontView.home.footer')

</body>
</html>

