<!doctype html>
<html>
<head>

    <title> @yield('title_area') </title>

    @include('frontView.home.meta')

    @include('frontView.home.scripts')



</head>

<body>

<div class="fh5co-loader"></div>

<div id="page">

    <!-- NAVBAR -->
@include('frontView.prihlaseny.navbar_prihlaseny')

<!---
Zaciatok
-->

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/taipei_slide.jpg" />
            </div>
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/moskva_slide.jpg" />
            </div>
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/Astana_slide.jpg" />
            </div>
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/britain_slide.jpg" />
            </div>
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/hong_slideň.jpg" />
            </div>
            <div>
                <img data-u="image" src="{{ asset('frontEnd') }}/images/china_slide.jpg" />
            </div><a data-u="any" href="https://www.jssor.com" style="display:none">slider bootstrap</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>




    <br>
    <div class="container-wrap3">
        <br>
        <div id="fh5co-blog">
            <div class="row">


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="kazachstan_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/astana.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Kazachstan</h2>
                            <p>V roce 2013 jsme uzavřeli smlouvu o spolupráci s Karaganda State Technical University v Kazachstánu, kam dosud vycestovalo 6 našich studentů.                                                  </p>
                            <ul class="stuff">
                                <li><a href="kazachstan_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="malajzia_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/malajzia.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Malajzia</h2>
                            <p>Od roku 2015 jsou v rámci programu Erasmus+ nově podporovány výměny studentů a zaměstnanců vysokých škol se zeměmi mimo Evropu.</p>
                            <ul class="stuff">
                                <li><a href="malajzia_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="rusko_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/rusko.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Rusko</h2>
                            <p>V loňském roce jsme uzavřeli smlouvu se Saint-Petersburg University of Management Technologies and Economics.</p>
                            <ul class="stuff">

                                <li><a href="rusko_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="britain_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/britain.jpg	);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný poby</span>
                            <h2>Velká Británia</h2>
                            <p>Pro studenty FIM máme nabídku k získání bakalářského titulu BA (Hons) na partnerské univerzitě ve Velké Británii.                                                  </p>
                            <ul class="stuff">
                                <li><a href="britain_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="hong_kong_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/hong.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Hong-Kong</h2>
                            <p>Studentům FIM nabízíme jedinečnou příležitost zúčastnit se měsíční letní školy na City University of Hong Kong.</p>
                            <ul class="stuff">
                                <li><a href="hong_kong_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="cina_prihlaseny" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/cina.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Čína</h2>
                            <p>Žadatelé a účastníci musí respektovat veškerá nařízení platná pro vnější pomoc EU, stanovená Evropskou radou. </p>
                            <ul class="stuff">
                                <li><a href="cina_prihlaseny">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>




            </div><!-- END container-wrap -->
        </div>
    </div>
    <br>

@include('frontView.home.footer')

</body>
</html>