<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
require_once "header.php";


$listProdutos = $container['ServiceProduto']->list();


?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <h3>PRODUTOS</h3>
                <div class="col-md-12">
                    <?php require_once "view/list.produtos.php"; ?>
                </div>
            </div>


        </div>
    </section>

</main>

<?php require_once "footer.php" ?>