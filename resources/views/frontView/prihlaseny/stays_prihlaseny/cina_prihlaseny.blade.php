<!doctype html>
<head>

    <title> Čína </title>

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

    <button class="button" onclick="window.location.href = ''">Prihlásiť sa na pobyt</button>

    <br>
    <div style="margin-left: 70px ">
        <img src="https://www.travelbook.lt/wp-content/uploads/2017/07/kinija.jpg" style="height: 500px" width="95%">
    </div>
    <br>


    <div class="vertical-menu">
        <a class="active">Študijný pobyt</a>
        <a href="#Vyhlásenie">Vyhásenie súťaže</a>
        <a href="#foto">Fotogaléria</a>
    </div>



    <p id="Vyhlásenie">
        <div class="container-wrap2">
            <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Vyhásenie súťaže</p></h2>
    <p style="font-style: normal; color: black;  position: relative; padding-left: 935px; padding-right: 35px; padding-bottom: 15px; position: center";>

        V Hradci Králové 11.3. 2019</p>

    <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

        Vážená studentko, vážený studente,<br>
        <br>
        společnost Huawei, přední dodavatel síťové infrastruktury telekomunikačních operátorů a korporací a 3. největší výrobce chytrých telefonů a příslušenství, vyhlašuje soutěž o účast v projektu Seeds for the Future.    <br><br>
        Tento mezinárodní program, zaměřený na studenty vysokých škol, je jedinečnou možností pro studenty informatiky vycestovat do Číny a navštívit vývojové centrum společnosti Huawei. V tomto centru studenti absolvují výuku zaměřenou na praktické využití inovativních technologií společnosti Huawei. Každá participující vysoká škola má možnost nominovat studenty oborů souvisejících s ICT, kteří po splnění vstupních kritérií a absolvování výběrového řízení mohou být zařazeni do programu. Součástí cesty do Číny je seznámení s čínskou kulturou v Pekingu a jeho okolí a navazující stáž v centrále společnosti Huawei v Shenzenu.     <br><br>
        Termín cesty do Číny je 3. 6. – 14. 6. 2019. Náklady na cestu, včetně vyřízení víza, ubytování a stravování studentů hradí společnost Huawei. Ideální kandidáti jsou studenti ICT oborů od druhých ročníků (ve školním roce 2018/2019), upřednostněni budou studenti doktorského programu. Uchazeči musí být české národnosti a musí jim být méně než 30 let. Z ČR bude vybráno celkem 10 finalistů ze všech participujících univerzit.    <br><br>
        Podmínky přihlášení do projektu:
        <br><br>
        Přihlásit se elektronicky na tomto webu.
        <br><br>
        Napsat esej – An essay demonstrating the student’s opinion on or interest in the ICT industry, his/her eligibility for the program, and his/her thoughts and suggestions on the country´s ICT industry development. – rozsah 1-2 strany A4, PDF, jazyk: angličtina.
        <br>
        Videoklip s představením studenta – info o sobě, o studiu, o budoucím uplatnění – délka max 2 min, link na youtube či soubor ve formátu MP4, AVI, jazyk: angličtina.
        <br>
        Doporučující dopis „Reference Letter“ od přímého vyučujícího – formát: naskenovaný dopis v  PDF, dopis musí být podepsán a opatřen razítkem vysoké školy, jazyk: angličtina.
        <br><br>
        Motivační esej, video a doporučující dopis zašlete na email monika.hebkova@uhk.cz do 22. 2. 2019.     <br><br>
        Fakulta informatiky a managementu poté nominuje tři uchazeče do výběrového řízení, které proběhne ve společnosti Huawei (je třeba počítat s tím, že uchazeči budou pozváni k pohovoru). Cca 1 týden před odjezdem je plánována “Departure ceremony”, kde studenti musejí být přítomni.
        <br><br>
        Přeji Vám mnoho zdaru
        <br><br>
        doc. RNDr. Petra Poulová, Ph.D.
        <br><br>
        proděkanka pro rozvoj a zahraniční styky
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