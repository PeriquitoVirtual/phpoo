<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <h1>Grid System</h1>
            </div>
            <div class="row">
                <h1>Teste</h1>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
            </div>

            <div class="row">
                <div class="col-md-3">col-md-3</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
                <div class="col-md-1">col-md-1</div>
            </div>

            <div class="row">
                <h1>Desktop, tablet, mobile</h1>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    col-md-3 col-sm-6 col-xs-12
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    col-md-3 col-sm-6 col-xs-12
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    col-md-3 col-sm-6 col-xs-12
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    col-md-3 col-sm-6 col-xs-12
                </div>
            </div>

            <div class="row">
                <h1>Offset</h1>
                <div class="col-md-3 col-md-offset-3">col-md-3</div>
                <div class="col-md-3">col-md-3</div>
                <div class="col-md-3">col-md-3</div>
            </div>

            <div class="row">
                <h1>Responsive utilities</h1>
                <div class="visible-xs">Phones (<768px) visible-xs</div>
                <div class="visible-sm">Tablets (≥768px) visible-sm</div>
                <div class="visible-md">Desktops (≥992px) visible-md</div>
                <div class="visible-lg">Desktops (≥1200px) visible-lg</div>
            </div>
        </div>
    </section>
</main>