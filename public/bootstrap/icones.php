<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">

            <div class="row">
                <h1>Thumbnail</h1>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                    </a>
                </div>
            </div>

            <div class="row">
                <h1>Cards</h1>
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Text thumbnail</p>
                            <p>
                                <button class="btn btn-default">Button</button>
                                <button class="btn btn-info">Button</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Text thumbnail</p>
                            <p>
                                <button class="btn btn-default">Button</button>
                                <button class="btn btn-info">Button</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail">
                        <img src="../img/image.jpg" alt="image">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Text thumbnail</p>
                            <p>
                                <button class="btn btn-default">Button</button>
                                <button class="btn btn-info">Button</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>