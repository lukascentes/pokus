<!doctype html>
<head>

    <title> USA </title>

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
    @include('frontView.home.navbar')
    <button class="button" onclick="window.location.href = 'login'">Prihlásiť sa na stáž</button>

    <br>
    <div style="margin-left: 70px ">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Newark_October_2016_panorama.jpg/1800px-Newark_October_2016_panorama.jpg" style="height: 500px" width="95%">
        </div>
    <br>


    <div class="vertical-menu">
        <a class="active">Pracovná stáž</a>
        <a href="#Základné informácie">Základné informácie</a>
        <a href="#Vyhlásenie">Vyhásenie súťaže</a>
        <a href="#Správy">Správy účastníkov</a>
        <a href="#Lokalita">Kde sa univerzita nachádza</a>
        <a href="#foto">Fotogaléria</a>
    </div>


    <p id="Základné informácie">
    <div class="container-wrap2" style="top: 300px">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Základné informácie</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
        Florida Institute for Human and Machine Cognition (IHMC) se nachází ve městě Pensacola na Floridě (USA). Jedná se o výzkumné centrum, jehož primárním cílem je vývoj systémů propojujících člověka a technologie. Díky tomuto zaměření je mnoho projektů financováno americkou armádou. Aktuální výzkumné projekty zahrnují vývoj robotických exoskeletonů, humanoidních robotů, vizualizací síťového provozu, vývoj hlavových displejů, systémy pro tvorbu kognitivních map (CMap Tools), práce s mobilními zařízeními, Google Glass a mnohé jiné.
        <br>
        <br>
        Většina projektů vyžaduje od stážistů velmi dobrou znalost programování, některé projekty jsou výhradně softwarové. Obvykle se očekává perfektní znalost Javy, alespoň základy C, C++, Pythonu a schopnost se rychle přeorientovat na jiné jazyky.
        </p>
    </div>
</p>

    <p id="Vyhlásenie">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Vyhásenie súťaže</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 935px; padding-right: 35px; padding-bottom: 15px; position: center";>
        
            Hradec Králové 31. října 2019</p>

        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

        Vážená studentko, vážený studente,<br>
            <br>
        Fakulta informatiky a managementu vyhlašuje soutěž o získání stipendií na stáž ve výzkumném institutu Florida Institute for Human & Machine Cognition v USA. Jedná se o minimálně tříměsíční stáž v období leden – srpen 2020. Studenti budou vybráni na základě několika kritérií (prospěch, schopnost programovat v jazyku JAVA a C/C++, zkušenosti s tvorbou mobilních aplikací, znalosti z oblasti počítačových sítí). Studentům bude poskytnuto stipendium ve výši 85 000 Kč.
    <br><br>
        Přihlášení na mobilitu je možné na tomto webu do 28. 11. 2019.
            <br><br>
        Výběrová schůzka proběhne v prosinci, konkrétní termín bude ještě upřesněn. Pozvaní studenti si připraví stručnou prezentaci SW nebo HW projektu, na jehož řešení se podíleli.
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

    <p id="Správy">

    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Správy účastníkov</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>
        Závěrečné zprávy studentů, kteří se zúčastnili pobytu na Floridě v minulých letech:
        </p>
        <div style="position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 35px">
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Savings</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
        </table>
            </div>

    </div>
    </p>

<p id="Lokalita">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Kde sa univerzita nachádza</p></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.8817599536105!2d-87.20990014919181!3d30.411529956258732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8890c0b19c0cd243%3A0xfd1a93656f33ba24!2sInstitute%20for%20Human%20and%20Machine%20Cognition!5e0!3m2!1ssk!2ssk!4v1573481655952!5m2!1ssk!2ssk" width="1150" height="450" frameborder="0" style="border:0; margin-left: 25px" allowfullscreen=""></iframe>
<br><br>
</div>
</p>

    <p id="foto">
@include('frontView.home.gallery')
    </p>
    <br>
@include('frontView.home.footer')


</body>
</html>