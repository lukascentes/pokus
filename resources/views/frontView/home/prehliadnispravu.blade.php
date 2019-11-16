<!doctype html>
<head>

    <title> Detail spravy </title>

    @include('frontView.home.meta')
    @include('frontView.home.scripts')

</head>


<div class="fh5co-loader"></div>
<div id="page">

    @include('frontView.home.navbar')

    <div class="container-wrap2" style="top: 300px">

        <p>Autor: {!!$row->autor!!}</p>

    </div>


    <p id="foto">
        @include('frontView.home.gallery')
    </p>
</div>
<br>
@include('frontView.home.footer')


</body>
</html>