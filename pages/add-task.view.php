<?php require 'views/_partials/head.view.php';?>
<?php

use ToDo\Validation;
?>

<div class="container">
    <div class="card">
        <form method="post">
            <div class="form-group">
                <input type="name" class="form-control" name="pavadinimas" placeholder="Įmonės pavadinimas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kodas" placeholder="Įmonės kodas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pvm_kodas" placeholder="Unikalus mokėtojo kodas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="adresas" placeholder="Adresas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telefonas" placeholder="Telefono numeris">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="pastas" placeholder="El. Paštas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="veikla" placeholder="Veiklos aprašymas">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="vadovas" placeholder="Įmonės vadovas">
            </div>
        <button type="submit" class="btn btn-primary" name="save">SUBMIT</button>
        </form>
    </div>
</div>
<?php require 'views/_partials/htmlEnd.php';?>