<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
require_once "header.php";

$listPedidos = $container['ServicePedido']->list();
?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <h3>PEDIDOS EFETUADOS</h3>
                <div class="col-md-12">
                    <?php require_once "view/list.pedidos.php"; ?>
                </div>
            </div>


        </div>
    </section>

</main>

<?php require_once "footer.php" ?>