<!doctype html>
<p>
    <head>

        <title> Velka Britania</title>

        @include('frontView.home.meta')
        @include('frontView.home.scripts')

    </head>

<p>

<div class="fh5co-loader"></div>

<div id="page">

    <!-- NAVBAR -->
    @include('frontView.home.navbar')

    <button class="button">Prihlásiť sa na pobyt</button>

    <br>
    <div style="margin-left: 0px ">
        <img src="https://amiowealth.com/wp-content/uploads/2017/04/Fotolia_131878025_L.jpg" style="height: 500px" width="100%">
    </div>
    <br>


    <div class="vertical-menu">
        <a class="active">Študijný pobyt</a>
        <a href="#Základné informácie">Základné informácie</a>
        <a href="#Vyhlásenie">Vyhásenie súťaže</a>
        <a href="#Prezentace zástupce University of Huddersfield">Prezentace zástupce University of Huddersfield</a>
        <a href="#foto">Fotogaléria</a>
    </div>


    <p id="Základné informácie">
        <div class="container-wrap2" style="top: 300px">
            <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Základné informácie</p></h2>
    <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
        Pro studenty FIM máme nabídku k získání bakalářského titulu BA (Hons) na partnerské univerzitě ve Velké Británii.
        <br><br>
        Po ukončení 2. ročníku studia na FIM (lze i později) se student může přihlásit ke studiu na University of Huddersfield. Studium trvá dva semestry, školní rok začíná v průběhu září a končí zhruba v polovině května. Student s přihláškou přikládá seznam předmětů, které vystudoval na FIM. Dále musí během svého ročního studia ve Velké Británii splnit předepsaný počet kreditů s vyhovujícím prospěchem. Po návratu domů student dostuduje na FIM UHK a po úspěšném ukončení studia na FIM získá druhý titul Bc.
        <br><br>
        Pro přijetí ke studiu jsou posuzovány pouze studijní výsledky na zdejší fakultě, žádné přijímací zkoušky předepsány nejsou. Úroveň anglického jazyka a schopnost studia v angličtině jsou ponechány na vlastním posouzení studenta. Počet přijímaných studentů není ze strany partnerské univerzity omezený.
    </p>
</div>
</p>

<p id="Vyhlásenie">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Vyhásenie súťaže</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 935px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Hradec Králové 23. března 2017</p>

<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Vážená studentko, vážený studente,<br>
    <br>
    tímto vyhlašuji soutěž o 2 stipendijní místa pro studijní pobyt v rámci programu Double Degree na University of Huddersfield – Velká Británie pro studenty FIM UHK v akademickém roce 2017/2018.
    <br><br>
    Student nastoupí na přijímající univerzitě do třetího ročníku bakalářského studia oboru International Business a po splnění předepsaného počtu kreditů získá během dvou semestrů titul BA (Bachelor of Arts). Po návratu domů dostuduje na FIM UHK a po úspěšném ukončení studia získá druhý titul Bc.
    <br><br>
    Studentům bude poskytnuto stipendium v max. výši 60 000 Kč.
    <br><br>
    Informativní schůzka ke studiu na University of Huddersfield proběhne dne 6. 4. 2017 od 10:00 v učebně J2. Prezentaci bude mít kolega z partnerské univerzity Kevin Rowles, který Vás seznámí s podmínkami přijetí a průběhem studia.
    <br><br>
    Přihlásit se můžete na tomto webu nejpozději do 30. 4. 2017 (včetně).
    <br><br>
    Vaše případné dotazy ohledně zahraničních stáží zodpoví paní Monika Hebková (monika.hebkova@uhk.cz) na děkanátu FIM.
    <br><br>
    S přáním mnoha úspěchů
    <br><br>
    doc. RNDr. Petra Poulová, Ph.D.
    <br><br>
    proděkanka FIM
</p>
</div>
</p>


<p id="Prezentace zástupce University of Huddersfield">
    <div class="container-wrap2" style="top: 300px">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Prezentace zástupce University of Huddersfield</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
    Prezentaci je možné stáhnout <a href="http://fim.uhk.cz/mobility2/data/doc/doubledegree/Czech Bachelor Presentation April 2017.pptx">zde</a>
</p>
</div>
</p>



<p id="foto">
    @include('frontView.home.gallery')
</p>
<br>
@include('frontView.home.footer')


</body>
</html>