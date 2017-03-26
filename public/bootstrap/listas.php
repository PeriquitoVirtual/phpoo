<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "header.php";

?>

<main>
    <section>
        <div class="container">

            <div class="row">
                <h1>List</h1>
                <ul class="list-group">
                    <li class="list-group-item">Text default ...</li>
                    <li class="list-group-item">Text default ...</li>
                    <li class="list-group-item">Text default ...</li>
                    <li class="list-group-item">Text default ...</li>
                    <li class="list-group-item">Text default ...</li>
                </ul>
            </div>

            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">13</span>
                        Text default ...
                    </li>
                    <li class="list-group-item">
                        <span class="badge">3</span>
                        Text default ...
                    </li>
                    <li class="list-group-item">
                        <span class="badge">44</span>
                        Text default ...
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Link text</a>
                    <a href="#" class="list-group-item">Link text</a>
                    <a href="#" class="list-group-item">Link text</a>
                    <a href="#" class="list-group-item">Link text</a>
                    <a href="#" class="list-group-item">Link text</a>
                    <a href="#" class="list-group-item">Link text</a>
                </div>
            </div>
        </div>
    </section>
</main>