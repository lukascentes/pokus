<!doctype html>
<html>
<head>

    <title> @yield('title_area') </title>

    @include('frontView.home.meta')

    @include('frontView.home.scripts')

    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>


</head>

<body>

<div class="fh5co-loader"></div>

<div id="page">

    <!-- NAVBAR -->
@include('frontView.home.navbar')



        <div class="container-wrap2" style="top: 300px">
    <div class="row">
        <div class="column" style="position: relative; left: 20px; bottom: 8px; top: 8px">
            <img src="{{ asset('frontEnd') }}/images/univerzity/uni1.jpg" style="left: 10px"; width="450px"; height="260px">
        </div>
        <div class="column" style="position: relative; top: 7px; right: 50px" >
            <a href="sprava1"><h2><b>JV Asie – Chang Jung Christian University </b></h2></a>
            <p> Autor: Patrik Balcar	Rok: 2015	Univerzita: Chang Jung Christian University
            <br>
        <br>
        Osobní údaje Jméno: Patrik Balcar Studijní obor: Management cestovního ruchu (německý jazyk) Kontaktní email: patrik.balcar@seznam.cz Délka pobytu: 27. leden – 17. červenec 2015 Kontaktní osoba na UHK: Vendula Pourová Kontaktní osoba na CJCU: Winnie Hung, Pei-yin   2. Příprava pobytu Pojištění Pojištění jsem si zařídil od Fio banky a pokud to bude i příští rok </p>
            <a href="sprava1" style="position: relative; left: 0px; font-size: medium">Čítajte viac</a>
</div>
    </div>
</div>




    <div class="container-wrap2">
        <div class="row">
            <div class="column" style="position: relative; left: 20px; bottom: 8px; top: 8px">
                <img src="{{ asset('frontEnd') }}/images/univerzity/uni2.jpg" style="left: 10px"; width="450px"; height="260px">
            </div>
            <div class="column" style="position: relative; top: 7px; right: 50px" >
                <a href=""><h2><b>JV Asie – Wenzao Ursuline College of Languages </b></h2></a>
<p >  Autor: Tomáš Archalous	Rok: 2015	Univerzita: Wenzao Ursuline College of Languages
    <br>
    <br>
    1) Osobní údaje Jméno, příjmení: Tomáš Archalous Email: tomas.archalous@uhk.cz Obor, ročník: IM2, 2. ročník Délka pobytu: cca 5 měsíců Vysílající VŠ: Univerzita Hradec Králové, Fakulta informatiky a managementu Kontaktní osoba: Bc. Vendula Pourová Přijímající VŠ: Wenzao Ursuline College of Languages Kontaktní osoba: Constance Chen
    <br>
    <a href="" style="position: relative; left: 0px; font-size: medium">Čítajte viac</a>
</div>
</div>
</div>




    <div class="container-wrap2">

        <div class="row">
            <div class="column" style="position: relative; left: 20px; bottom: 8px; top: 8px">
                <img src="{{ asset('frontEnd') }}/images/univerzity/uni3.jpg" style="left: 10px; bottom: 8px";  width="450px";  height="260px">
            </div>
            <div class="column" style="position: relative; top: 7px; right: 50px" >
                <a href=""><h2><b>JV Asie – Wenzao Ursuline University of Languages </b></h2></a>
<p>  Autor: Denisa Andrlová	Rok: 2016	Univerzita: Wenzao Ursuline University of Languages
    <br>
<br>
    1. Osobní údaje Jméno a příjmení: Denisa Andrlová Email: denisa.andrlova@gmail.com Délka pobytu: 5 měsíců (únor – červen 2016) Vysílající instituce: Univerzita Hradec Králové Obor: Informační management – IM2 Přijímající instituce: Wenzao Ursuline University of Languages Kontaktní osoba na UHK: Bc. Vendula Pourová a Hui-Ju Chung
    <br>
    <a href="" style="position: relative; left: 0px; font-size: medium">Čítajte viac</a>
</div>
</div>
</div>




    <div class="container-wrap2">

        <div class="row">
            <div class="column" style="position: relative; left: 20px; bottom: 8px; top: 8px">
                <img src="{{ asset('frontEnd') }}/images/univerzity/uni4.jpg" style="left: 10px"; width="450px"; height="260px">
            </div>
            <div class="column" style="position: relative; top: 7px; right: 50px" >
                <a href=""> <h2><b>Erasmus – Polytechnic Institute of Viana do Castelo, Portugalsko  </b></h2></a>
<p>   Autor: Anastázie Kudelková	Rok: 2018	Univerzita: Polytechnic Institute of Viana do Castelo
    <br>
<br>
    Na Erasmus do Portugalska jsem se vydala společně se svojí kamarádkou ze školy Pájou. Po dlouhém uvažování jsme se nakonec rozhodly, že pojedeme do Portugalska, protože tam bude krásně teplo. Opak byl ale pravdou. Ze začátku sice svítilo sluníčko a mohly jsme se opalovat na naší krásné terase s výhledem na oceán, ale po chvíli se
    <br>
    <a href="" style="position: relative; left: 0px; font-size: medium">Čítajte viac</a>
</div>
</div>
</div>




</div><!-- END container-wrap -->

@include('frontView.home.footer')

</body>
</html>