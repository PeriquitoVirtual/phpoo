<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <h1>Image Responsive</h1>
                <img src="img/image.jpg" alt="image" class="img-responsive center-block">

                <h1>Image shape</h1>
                <img src="img/image.jpg" alt="image" class="img-rounded">
                <img src="img/image.jpg" alt="image" class="img-circle">
                <img src="img/image.jpg" alt="image" class="img-thumbnail">
            </div>


        </div>
    </section>
</main>