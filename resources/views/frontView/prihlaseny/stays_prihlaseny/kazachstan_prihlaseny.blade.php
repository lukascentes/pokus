<!doctype html>
<html>
<head>

    <title> Kazachstan </title>

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
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/18500300-a8f9-4268-9ea8-3218a44cc4f1/d4tw4fp-b1a5beb2-e602-42ad-b1e2-1f872a722669.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzE4NTAwMzAwLWE4ZjktNDI2OC05ZWE4LTMyMThhNDRjYzRmMVwvZDR0dzRmcC1iMWE1YmViMi1lNjAyLTQyYWQtYjFlMi0xZjg3MmE3MjI2NjkuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.xE5A8fs5M1iQPKhHISYItQR1opRhvmxqWhektKrhqFI" style="height: 500px" width="95%">
    </div>
    <br>

    <div class="vertical-menu">
        <a class="active">Študijný pobyt</a>
        <a href="#Základné informácie">Základné informácie</a>
        <a href="#Partnerskeuniverzity">Vyhásenie súťaže</a>
        <a href="#Podmienky výjazdu">Správy účastníkov</a>
        <a href="#Vyhlaseniesutaze">Vyhlásenie súťaže</a>
        <a href="#predodjazdom">Pred odjazdom</a>
        <a href="#ponavrate">Po návrate</a>
        <a href="#foto">Fotogaléria</a>
    </div>

    <p id="Základné informácie">
        <div class="container-wrap2" style="top: 300px">
            <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Základné informácie</p></h2>
    <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
        Fakulta informatiky a managementu stále rozšiřuje počet partnerských univerzit v zahraničí. V roce 2013 jsme uzavřeli smlouvu o spolupráci s Karaganda State Technical University v Kazachstánu, kam dosud vycestovalo 6 našich studentů. <br>
        <br>
        Smyslem těchto pobytů je umožnit studentům poznat prostředí na partnerských univerzitách a život v cizí zemi. Pobyt studenta v zahraničí je chápán jako integrální součást studia na FIM a na základě potvrzení od přijímající univerzity mohou být po návratu studentům uznány ty předměty, které na dané univerzitě studovali.
    </p>
</div>
</p>


<p id="Partnerskeuniverzity">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Partnerské univerzity</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";></p>
<div style="position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 35px">
    <table>
        <tr>
            <th>Univerzita</th>
            <th>Mesto</th>
            <th>Kontaktná osoba</th>
        </tr>
        <tr>
            <td>Karaganda State Technical University</td>
            <td>Karaganda</td>
            <td>Anastassiya Yudintseva</td>
        </tr>
    </table>
    </p>
</div>
</div>


<p id="Podmienky výjazdu">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Partnerská univerzita</p></h2>

<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Student musí mít absolvovaný minimálně první ročník studia na FIM, tzn. musí být v době výjezdu zapsán do vyššího než prvního ročníku studia na FIM. Výjimkou jsou studenti prvního ročníku navazujícího magisterského studia, kteří absolvovali bakalářské studium na FIM. ,<br>
    <br>
    Výběr studentů bude proveden na úvodní schůzce na základě indexu, který odráží počet kreditů získaných v jednotlivých letech studia na FIM UHK a průměrný prospěch (údaje v systému STAG k 31. 8. 2016). Aby bylo možné obě kvantitativní charakteristiky sloučit, index je dán počtem získaných kreditů lomeno průměrný prospěch, a to zprůměrováno přes jednotlivé roky studia.<br><br>
    Přihlášení na mobilitu je možné na tomto webu do 28. 11. 2019.
    <br><br>
    kde Ki je počet kreditů získaných v i-tém roce, Pi je průměrný prospěch v i-tém roce a n je počet ukončených roků studia. Na základě takto vypočteného indexu bude vytvořeno pořadí, které bude rozhodující pro udělení stipendií.
    <br><br>
    Po celé období studijního pobytu v zahraničí musí být student řádně zapsán ke studiu na vysílající instituci, nemůže tedy ukončit studium před ukončením studijního pobytu v zahraničí.    <br><br>
</p>
</div>
</p>

<p id="Vyhláseniesutaze">
    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Vyhásenie súťaže</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 935px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Hradec Králové 7. března 2017</p>

<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";>

    Vážená studentko, vážený studente,<br>
    <br>
    Fakulta informatiky a managementu Univerzity Hradec Králové již několik let spolupracuje s Karaganda State Technical University v Kazachstánu a dostala nabídku vyslat na tuto univerzitu v zimním semestru akademického roku 2017/18 čtyři studenty. Jedná se o pětiměsíční pobyty (září 2017 – leden 2018).
    <br><br>
    Smyslem těchto pobytů je umožnit studentům poznat prostředí na partnerských univerzitách a rozvinout naši vzájemnou spolupráci. Pobyt studenta v zahraničí je chápán jako integrální součást jeho studia na FIM a na základě potvrzení přijímající organizace mohou být po návratu studentům uznány ty předměty, které na dané univerzitě absolvovali.
    <br><br>
    Partnerské univerzity nebudou od našich studentů vybírat školné, ale i tak si cesta do Kazachstánu vyžádá značné finanční prostředky. Kromě vlastní letenky a dalších nákladů spojených s vycestováním musí každý student počítat s pobytovými náklady zhruba ve výši 10 000,- Kč na měsíc. Naše fakulta má na uskutečnění výše uvedených pobytů opravdový zájem, a proto jsme připraveni poskytnout vyjíždějícím studentům příspěvek na letenku a pětiměsíční pobyt v celkové výši 59 000,- Kč.
    <br><br>
    Podmínkou účasti v tomto programu je absolvování minimálně prvního ročníku studia na FIM, přičemž uchazeč musí být registrován jako řádný student denního studia (bakalářské, inženýrské).
    <br><br>
    Další podmínkou výjezdu je osobní účast na informační schůzce, která se bude konat 6. 4. 2017 v 10:00 hod. v zasedací místnosti FIM.
    <br><br>
    Studenti budou (jako u podobných mobilit) vybráni na základě kvantitativních kritérií (kredity a prospěch). Upozorňujeme, že hromadně uznané kredity z předchozích let budou rozpočítány do jednotlivých roků, kdy byly předměty skutečně absolvovány.  Doporučujeme zájemcům o tuto mobilitu komunikativní znalost ruského jazyka.
    <br><br>
    Přihlásit se můžete na tomto webu do 2. 4. 2017 (včetně).
    <br><br>
    Vaše případné dotazy ohledně stáže v Kazachstánu zodpoví paní Monika Hebková (monika.hebkova@uhk.cz) na děkanátu FIM.
    <br><br>
    S přáním mnoha úspěchů
    <br><br>
    doc. RNDr. Petra Poulová, Ph.D.
    <br><br>
    proděkanka FIM
</p>
</div>
</p>

<p id="predodjazdom">
    <div class="container-wrap2" style="top: 300px">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Čo zariadiť pred odjazdom</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
    1) Odevzdat přihlášku ke studiu na zahraniční univerzitě na zahr. oddělení FIM.
    <br>
    2) Očkování – Fakultní nemocnice, Centrum očkování a cestovní medicíny.
    <br>
    3) Cestovní pojištění na celou dobu pobytu. Musí být v souladu se směrnicí kvestora č. 2/2013.
    <br>
    4) Vízum.
    <br>
    5) Zakoupit letenku.
    <br>
    6) Podepsat finanční dohodu, ve které jsou specifikovány podmínky stáže a udělení stipendia.
</p>
</div>
</p>

<p id="ponavrate">
    <div class="container-wrap2" style="top: 300px">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Čo odovzdať po návrate</p></h2>
<p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px;  position: center";>
    1) Dokument potvrzující období studia v zahraničí
    <br>
    2) Výpis výsledků studia (úspěšné splnění min. 3 předmětů)
    <br>
    3) Závěrečná zpráva ze studijiního pobytu (osnovu lze stáhnout zde)
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