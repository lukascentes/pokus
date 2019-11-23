<?php

?>
@include('frontView.home.meta')
@include('frontView.home.scripts')

<form method="post" style="" action="{{action('DestinationsController@insertAction')}}" >
    <br>
    <h1>Vložiť pobyt</h1>
    <div class="form-group-lg">
        <br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Štát:</label>
            <input type="text" name="stat"  class="form-control"  >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Typ pobytu:</label>
            <input type="text" name="typ" class="form-control"   >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Popis:</label>
            <input type="text" name="popis" class="form-control"   >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Dátum:</label>
            <input type="date" name="datum" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Základné Info:</label>
            <input type="text" name="zakladne_info" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Miesto vyhlásenia:</label>
            <input type="text" name="vyhlasenie_kde" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Dátum vyhlásenia:</label>
            <input type="date" name="vyhlasenie_kedy" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Prianie:</label>
            <input type="text" name="vyhlasenie_prianie" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Meno vyhlasovatela:</label>
            <input type="text" name="vyhlasenie_kto" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Vyhlásenie:</label>
            <input type="text" name="vyhlasenie" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Tlačivá pred odjazdom:</label>
            <input type="text" name="pred_odjazdom" class="form-control">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Tlačivá po návrate:</label>
            <input type="text" name="po_navrate" class="form-control">
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
    <button type="submit" style="margin-left: 20px" class="btn btn-success">Vložiť</button>
    <a href="destinations" style="margin-left: 130px" class="btn btn-success" role="button" aria-pressed="true">Zobraziť pobyty</a>

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






