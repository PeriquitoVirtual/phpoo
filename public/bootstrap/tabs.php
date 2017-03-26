<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">

            <div class="row">
                <h1>Tabs</h1>
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">Images</a></li>
                    <li role="presentation"><a href="#">Blog</a></li>
                </ul>
                <br/>
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">Images</a></li>
                    <li role="presentation"><a href="#">Blog</a></li>
                </ul>
                <br/>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">Images</a></li>
                    <li role="presentation"><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="row">
                <h1>Usage</h1>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Home</a></li>
                    <li><a href="#images" aria-controls="images" data-toggle="tab" >Images</a></li>
                    <li><a href="#blog" aria-controls="blog" data-toggle="tab" >Blog</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">Home</div>
                    <div role="tabpanel" class="tab-pane" id="images">Images</div>
                    <div role="tabpanel" class="tab-pane" id="blog">Blog</div>
                </div>
            </div>


        </div>
    </section>
</main>