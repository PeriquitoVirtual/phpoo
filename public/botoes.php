<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <h1>Buttons</h1>
                <button type="submit" class="btn btn-default">Default</button>
                <button type="submit" class="btn btn-primary">Primary</button>
                <button type="submit" class="btn btn-success">Success</button>
                <button type="submit" class="btn btn-info">Info</button>
                <button type="submit" class="btn btn-warning">Warning</button>
                <button type="submit" class="btn btn-danger">Danger</button>
                <button type="submit" class="btn btn-link">Link</button>
            </div>

            <div class="row">
                <h1>Sizes</h1>
                <button type="submit" class="btn btn-success btn-lg">Large button</button>
                <button type="submit" class="btn btn-default">Default button</button>
                <button type="submit" class="btn btn-danger btn-sm">Small button</button>
                <button type="submit" class="btn btn-warning btn-xs">Extra small button</button>
            </div>

            <div class="row">
                <h1>Block</h1>
                <button type="submit" class="btn btn-success btn-lg btn-block">Block level button</button>
            </div>
        </div>


        </div>
    </section>
</main>