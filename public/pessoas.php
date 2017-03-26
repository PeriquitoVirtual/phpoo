<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
require_once "header.php";

$listPessoas = $container['ServicePessoa']->list();
?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <h3>CLIENTES CADASTRADOS</h3>
                <div class="col-md-12">
                    <?php require_once "view/list.pessoas.php"; ?>
                </div>
            </div>


        </div>
    </section>

</main>
