<!doctype html>
<html>
<head>

    <title> @yield('title_area') </title>

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
<body>
<div class="fh5co-loader"></div>
<div id="page">

    @include('frontView.home.navbar')

    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Dokumenty k stiahnutiu</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";></p>
        <div style="position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 35px">
            <table>
                <tr>
                    <th>Dokument</th>
                    <th>Link</th>
                </tr>

                    <tr>
                        <td><a style="color: black">Informácie pre študentov</a></td>
                        <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/Informacie_pre_stud_staz_Erasmus_KA103_2019.pdf">Stiahni tu</a></td>
                    </tr>
                <tr>
                    <td><a style="color: black">Výška Erasmus+ grantov</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/Sadzby_grantov_pre_VS_zamestnancov_a_studentov_Erasmus_KA103_2019.pdf">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Manuál Study Abroad pre študentov</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/manual-studab-stud-staz_2013.pdf">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">
                            Zápisnica z výberového konania Erasmus</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Zapisnica_z_vvber-konania_Erasmus_2015.doc">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Learning Agreement for Traineeships v SJ</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/KA103_VS_Zmluva_o_stazi_2016_SK.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Learning Agreement for Traineeships v AJ</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/KA103_HE_Learning_agreement_traineeships_form_EN_2016.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Inštrukcie k používaniu Zmluvy o stáži</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/VS_Instrukcie_k_Zmluve_o_stazi_2016_SK.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Erasmus Charta študenta v SJ</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Erasmus_Student_Charter_2015_SK_FIN.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Erasmus Charta študenta v AJ</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Erasmus_Student_Charter_2015_SK_FIN.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Informácie do zmluvy</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Erasmus_Student_Charter_2015_EN_FIN.docx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Žiadosť o predĺženie pobytu študenta/Erasmus Prolongation Application Form</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Prolongation_Application_Form_Erasmus.doc">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Žiadosť o doplatok ku grantu Erasmus</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Ziadost_o_doplatok_ku_grantu_Erasmus_new.doc">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Potvrdenie o dĺžke stáže/Confirmation of Erasmus placement </a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Confirmation_of_Erasmus_traineeship.doc">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Žiadosť o zrušenie ERASMUS+ mobility študenta</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Ziados%C5%A5_o_zrusenie_stud-mobility_Erasmus.doc">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Zoznam schválených Erasmus stáží študentov na akad. rok 2018/2019</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/Erasmus_SMP_18_19_na_web.xlsx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Zoznam schválených Erasmus stáží študentov na akad. rok 2018/2019 (2. kolo)</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/Erasmus_SMP_18_19_2.kolo_na_web.xlsx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Zoznam schválených Erasmus stáží študentov na akad. rok 2018/2019 (3. kolo)</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/Erasmus_SMP_18_19_3.kolo_na_web.xlsx">Stiahni tu</a></td>
                </tr>
                <tr>
                    <td><a style="color: black">Zoznam schválených Erasmus stáží študentov na akad. rok 2019/2020</a></td>
                    <td><a href="https://www.ukf.sk/images/medzinarodne_vztahy/erasmus/Erasmus_SMP_19_20.xlsx">Stiahni tu</a></td>
                </tr>





            </table>
        </div>
    </div>
</div>
@include('frontView.home.footer')
</body>

</html>