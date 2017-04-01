<?php


require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
require_once "header.php";

$listPessoas = $container['ServicePessoa']->list();

$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';

if ($acao == 'incluir'){


    $cliente = $container['pessoa'];



    $cliente->setPerfil["2"]
        ->setNome["Rose"]
        ->setEndereco["Rua 32-A, Qd. 36"]
        ->setBairro["Setor Aeroporto"]
        ->setTelefone["30931324"]
        ->setEmail["rose@gmail.com"]
        ->setCidade["11"];



    $service = $container['ServicePessoa'];

    print_r($service->save());



    echo "foi";
}
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



    <?php require_once "footer.php" ?>




