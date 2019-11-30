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
    <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Celosvetová mapa partnerských univerzít</p></h2>
    <iframe src="https://www.google.com/maps/d/u/1/embed?mid=144evabLppvxjjkuga4xzOoI6BIL7rvWM" width="1150" height="450" frameborder="0" style="border:0; margin-left: 25px" allowfullscreen=""></iframe>
    <br><br>
    </div>

    <div class="container-wrap2">
        <h2><p style="font-style: normal; color: black; position: relative; padding-left: 35px; padding-top: 15px">Partnerské univerzity</p></h2>
        <p style="font-style: normal; color: black;  position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 15px; position: center";></p>
        <div style="position: relative; padding-left: 35px; padding-right: 35px; padding-bottom: 35px">
            <table>
                    <tr>
                    <th>Štat</th>
                    <th>Univerzita</th>
                    <th>Adresa</th>
                </tr>
                @foreach($partnerskeuniverzity as $puni)
                <tr>
                    <td>{{$puni['stat']}}</td>
                    <td>{{$puni['nazov']}}</td>
                    <td>{{$puni['adresa']}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('frontView.home.footer')
    </body>

</html>