<?php

?>
@include('frontView.home.meta')
@include('frontView.home.scripts')

<form method="post" style="" action="{{action('BlogController@updateAction',['id'=>$blog->id])}}" class="" >
    <br>
    <h1>Upraviť správu</h1>
    <div class="form-group-lg">
        <br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Názov univerzity:</label>
            <input type="text" name="nazov_univerzity"  class="form-control" value="{{$blog->nazov_univerzity}}" >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Autor:</label>
            <input type="text" name="autor" class="form-control"  value="{{$blog->autor}}" >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Email:</label>
            <input type="text" name="email" class="form-control"  value="{{$blog->email}}" >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Študijný odbor:</label>
            <input type="text" name="studijny_odbor" class="form-control" value="{{$blog->studijny_odbor}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Začiatok:</label>
            <input type="date" name="zaciatok" class="form-control" value="{{$blog->zaciatok}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Koniec:</label>
            <input type="date" name="koniec" class="form-control" value="{{$blog->koniec}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Stručný popis:</label>
            <input type="text" name="strucny_popis" class="form-control" value="{{$blog->strucny_popis}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Príprava pobytu:</label>
            <input type="text" name="priprava_pobytu" class="form-control" value="{{$blog->priprava_pobytu}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Štúdium:</label>
            <input type="text" name="studium" class="form-control" value="{{$blog->studium}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Ďalší text:</label>
            <input type="text" name="dalsi_text" class="form-control" value="{{$blog->dalsi_text}}">
        </div>
        <br><br><br><br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br><br><br><br><br>
    <button type="submit" style="margin-left: 20px" class="btn btn-success">Upraviť</button>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
