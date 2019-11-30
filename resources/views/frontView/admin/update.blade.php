<?php

?>
@include('frontView.home.meta')
@include('frontView.home.scripts')

<form method="post" style="" action="{{action('UserController@updateAction',['id'=>$user->id])}}" class="" >
    <br>
   <h1>Upraviť používateľa</h1>
    <div class="form-group-lg">
        <br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Meno:</label>
            <input type="text" name="first_name"  class="form-control"  value="{{$user->first_name}}">
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Priezvisko:</label>
            <input type="text" name="last_name" class="form-control"  value="{{$user->last_name}}" >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Používateľské meno</label>
            <input type="text" name="user_name" class="form-control" value="{{$user->user_name}}"  >
        </div>
        <br><br><br><br>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">E-mail</label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}">
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
