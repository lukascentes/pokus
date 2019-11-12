<!doctype html>
<html>
<head>

    <title> Pridanie správy </title>

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="fh5co-loader"></div>

<div id="page">

    <!-- NAVBAR -->
    @include('frontView.prihlaseny.navbar_prihlaseny')

    <div class="container-wrap2" style="top: 300px; ">
         <div class="container">
             <form action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Zadajte názov univerzity</label>
                     <input type="text" name="nazov_univerzity" class="form-control" placeholder="">
                 </div>

                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Zadajte meno autora</label>
                     <input type="text" name="autor" class="form-control" placeholder="">
                 </div>

                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Zadajte začiatok pôsobenia</label>
                     <input type="date" name="zaciatok" class="form-control" placeholder="">
                 </div>

                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Zadajte dátum ukončnia</label>
                     <input type="date" name="koniec" class="form-control" placeholder="">
                 </div>

                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Zadajte študijny odbor</label>
                     <input type="text" name="studijny_odbor" class="form-control" placeholder="popíšte stáz pobyt">
                 </div>

                 <div class="form-group">
                     <label style="font-style: normal; font-size: 15px">Uveďte stručný popis</label>
                     <input type="text" name="strucny_popis" class="form-control" placeholder="">
                 </div>

                 <div class="input-group">
                     <div class="custom-file">
                     <input type="file" name="image" class="custom-file-input">
                     <label class="custom-file-label">Vyberte úvodný obrázok</label>
                     </div>
                 </div>
                 <button type="submit" name="submit" class="btn btn-primary">Uložiť dáta</button>
             </form>
         </div>
</div><!-- END container-wrap -->
<br>
    <br>
    <br><br>
    <br><br><br><br><br><br><br><br><br><br><br>
@include('frontView.home.footer')

</body>
</html>