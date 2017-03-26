<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">

            <div class="row">
                <h1>Media</h1>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="../img/image.jpg" alt="image" style="width: 64px;height: 64px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Middle aligned media</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="../img/image.jpg" alt="image" style="width: 64px;height: 64px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Middle aligned media</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                    </div>
                </div>
            </div>

            <div class="row">
                <h1>Alert</h1>
                <div class="alert alert-success">Ok! Success.</div>
                <div class="alert alert-info">Ok! Info.</div>
                <div class="alert alert-warning">Ok! Warning.</div>
                <div class="alert alert-danger">Ok! Danger.</div>
            </div>


        </div>
    </section>
</main>