<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <h1>Glyph icons</h1>
                <p><span class="glyphicon glyphicon-search" aria-hidden="true"></span></p>
                <p><span class="glyphicon glyphicon-education" aria-hidden="true" style="font-size: 40px;"></span></p>
                <p><span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 40px; color: blue;"></span></p>
                <p><span class="glyphicon glyphicon-user text-danger" aria-hidden="true" style="font-size: 40px;"></span></p>
                <p><button class="btn btn-success glyphicon glyphicon-ok " aria-hidden="true" style="font-size: 40px;"></button></p>
            </div>

            <div class="row">
                <h1>Dropdown</h1>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Dropdown
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Link1</a></li>
                        <li><a href="#">Link2</a></li>
                        <li><a href="#">Link3</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h1>Dropup</h1>
                <div class="dropup">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropup
                        <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#">Link1</a></li>
                        <li><a href="#">Link2</a></li>
                        <li><a href="#">Link3</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </section>
</main>