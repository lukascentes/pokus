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
        @foreach($blog as $row)
            <div class="row">
                <div class="column" style="position: relative; left: 20px; bottom: 8px; top: 8px">
                    <img src="{{asset ('uploads/highlights/' . $row['image'])}}" alt="Image" style="left: 10px"; width="450px"; height="260px">
                </div>
                <div class="column" style="position: relative; top: 7px; right: 50px" >
                    <a href="sprava1"><h2><b>{{$row['nazov_univerzity']}}</b></h2></a>
                    <p> Autor: {{$row['autor']}}<br>
                        Rok: {{$row['zaciatok']}} -	{{$row['koniec']}}<br>
                        Univerzita: {{$row['nazov_univerzity']}}
                        <br>
                        <br>
                        {{$row['strucny_popis']}}
                        <br>
                        <a href="sprava1" style="position: relative; left: 0px; font-size: medium">Čítajte viac</a>
                </div>
            </div>
        @endforeach
    </div>

</div>
<!-- END container-wrap -->

@include('frontView.home.footer')

</body>
</html>