<!doctype html>
<div>
    <head>

        <title> Taiwan </title>

        @include('frontView.home.meta')
        @include('frontView.home.scripts')

        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            th {
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>

    <div class="fh5co-loader"></div>

    <div id="page">

        <!-- NAVBAR -->
        @include('frontView.prihlaseny.navbar_prihlaseny')

        <button class="button" onclick="window.location.href = ''">Prihlásiť sa na stáž</button>

        <br>
        <div style="margin-left: 70px ">
            <img src="https://theyrecallingtome.files.wordpress.com/2014/02/img_2587_89_91_taipei-panorama.jpg" style="height: 500px" width="95%">
        </div>
        <br>

        <div class="vertical-menu">
            <a class="active">Pracovná stáž</a>
            <a href="#Základné informácie">Základné informácie</a>
            <a href="#Podmienky výjazdu">Podmienky výjazdu</a>
            <a href="#vyhlasenie">Vyhlášení soutěže</a>
            <a href="#foto">Fotogaléria</a>
        </div>


        <p id="Základné informácie">
            <div class="container-wrap2" style="top: 300px">
                <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Základné informácie</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
            Od roku 2015 jsou v rámci programu Erasmus+ nově podporovány výměny studentů a zaměstnanců vysokých škol se zeměmi mimo Evropu. Fakulta informatiky a managementu loni poprvé uspěla v žádosti o financování mobilit s partnerskými zeměmi. Díky schválenému projektu mezinárodní kreditové mobility budeme moci v tomto roce vyslat 6 studentů na Tchaj-wan a 2 studenty do Malajsie s vyšší finanční podporou než u běžných mimoevropských mobilit.
        </p>
    </div>


    <p id="Podmienky výjazdu">
        <div class="container-wrap2">
            <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Podmienky výjazdu</p></h2>
    <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

        Student musí být zapsán do akreditovaného bakalářského, magisterského nebo doktorského studijního programu na vysílající vysoké škole. Může být občanem jakékoliv země, ale musí studovat v České republice v akreditovaném studijním programu. Student musí být řádně zapsán do minimálně druhého ročníku vysokoškolského studia na vysílající vysoké škole (platí pouze pro bakalářskou úroveň studia).  Po celé období studijního pobytu v zahraničí musí být student řádně zapsán ke studiu na vysílající instituci, nemůže tedy přerušit ani ukončit studium před ukončením studijního pobytu v zahraničí.
        <br>
        Projekt mezinárodní kreditové mobility patří pod program Erasmus+, v rámci kterého může student strávit v zahraničí maximálně 12 měsíců za studijní cyklus (bakalářský, magisterský, doktorský) . Předchozí pobyty (Erasmus studijní pobyt či Erasmus praktická stáž) se do této doby započítávají.
    </p>
</div>

<p id="vyhlasenie">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Vyhlášení soutěže LS 2019-2020</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 935px; padding-right: 35px; padding-bottom: 15px; position: center";>
    Hradec Králové 31. října 2019</p>
<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Vážená studentko, vážený studente,
    <br><br>
    Fakulta informatiky a managementu Univerzity Hradec Králové vyhlašuje soutěž o stipendia na studijní pobyty v rámci programu Mezinárodní kreditová mobilita (MKM – tzv. mimoevropský Erasmus).    <br><br>
    S potěšením Vám oznamuji, že díky schválenému projektu MKM jsme připraveni v letním semestru akademického roku 2019/20 vyslat 6 studentů viz tabulka níže:     <br><br>
    TCHAJ-WAN

<div style="position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 35px">
    <table>
        <tr>
            <th>Univerzita</th>
            <th>Počet miest</th>
            <th>Stupeň studia</th>
            <th>Obor</th>
            <th>Dĺžka pobytu (mes.)</th>
            <th>Výška grantu- pobytové náklady (eur/mes.)</th>
            <th>Výška grantu- cestovné náklady (eur)</th>
        </tr>
        <tr>
            <td>National Taiwan University of Science and Technology, Taipei</td>
            <td>3</td>
            <td>nav. mag. nebo 3.ročník Bc.</td>
            <td>ai/izm alebo fm</td>
            <td>4</td>
            <td>700</td>
            <td>1500</td>
        </tr>
        <tr>
            <td>Wenzao Ursuline University of Languages, Kaohsiung</td>
            <td>3</td>
            <td>Bc.</td>
            <td>mcr, fm</td>
            <td>4</td>
            <td>700</td>
            <td>1500</td>
        </tr>
    </table>
</p>
</div>

<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Smyslem těchto pobytů je umožnit studentům poznat prostředí na partnerských univerzitách a rozvinout naši vzájemnou spolupráci. Pobyt studenta v zahraničí je chápán jako integrální součást jeho studia na FIM a na základě potvrzení přijímající organizace mohou být po návratu studentům uznány ty předměty, které na dané univerzitě absolvovali (u bakalářských a magisterských studentů se předpokládá zisk min. 15 ECTS kreditů během jednoho semestru v zahraničí).    <br><br>
    Podmínkou účasti v tomto programu je absolvování minimálně prvního ročníku studia na FIM, přičemž uchazeč musí být registrován po celou dobu pobytu v zahraničí jako řádný student prezenčního nebo kombinovaného studia (bakalářského, magisterského, doktorského). Po celou délku zahraničního studijního pobytu nesmí mít student uzavřené/přerušené studium na FIM.
    <br><br>
    Projekt Mezinárodní kreditové mobility patří pod program Erasmus+, v rámci kterého může student strávit v zahraničí maximálně 12 měsíců za studijní cyklus (bakalářský, magisterský, doktorský). Předchozí pobyty (Erasmus studijní pobyt či Erasmus praktická stáž) se do této doby započítávají.
    <br><br>
    Přihláška:
    <br><br>
    Přihlášení na mobilitu je možné elektronicky na tomto webu do 20. 10. 2019 (včetně).
    <br><br>
    Dále uchazeč do stejného termínu odevzdá na děkanát FIM (p. Monice Hebkové) podepsaný motivační dopis v české a anglické verzi vždy na 1 stranu A4 (mimo jiné bude obsahovat zdůvodnění, jakým způsobem stáž přispěje k profesnímu růstu studenta).
    <br><br>
    Vyhodnocení přihlášek provede komise jmenovaná děkanem fakulty, která zohlední následující kritéria:
    <br><br>
    Dosavadní studijní výsledky.
    <br><br>
    Kvalitu předloženého motivačního dopisu.
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



<p id="foto">
    @include('frontView.home.gallery')
</p>
<br>
@include('frontView.home.footer')


</body>
</html>