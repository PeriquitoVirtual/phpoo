<?php

$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';

if ($acao == 'incluir') {

    $cod = $_POST['nome'];
    $id = preg_replace("/[^0-9]/","", $cod);

    //echo $id."<br>";

    $data = $_POST['data'];
    $data = date("Y-m-d",strtotime(str_replace('/','-',$data)));

    $dataEntrega = $_POST['dataEntrega'];
    $dataEntrega = date("Y-m-d",strtotime(str_replace('/','-',$dataEntrega)));


    $pedido = $container['pedido'];

    $pedido->setDataPedido($data);
    $pedido->setDataEntrega($dataEntrega);
    $pedido->setIdPessoa($id);


    $servicePedido = $container['ServicePedido'];


    $idPedido = $servicePedido->save();


    $listPedidos = $container['ServicePedido']->list();

    //cadastra os itens pedidos

    $itemPedido = $container['itemPedido'];


    $idItem = 10;
    $quantidade = 5;


    $itemPedido->setIdItem($idItem);
    $itemPedido->setQuantidade($quantidade);
    $itemPedido->setIdPedido($idPedido);


    $serviceItemPedido = $container['ServiceItemPedido'];

    //var_dump($cliente);
    print_r($serviceItemPedido->save());


    //header('Location: pedidoMultiplo.php?id=$cod');



    //$teste = array();
    //$teste = $_POST['campo'];

    //foreach($_POST['campo'] AS $produto) {
       // echo $produto;
      // echo "<br>";
  //  }

    //var_dump($teste);

   // $service = $container['ServicePedido'];

    //var_dump($cliente);
    //print_r($service->save());
    //header('Location: pessoas.php');

    //echo date('Y-m-d', strtotime($data))."<br>";


    //print_r($id);
}
?>
<div class="row">
<table class="table table-bordered table-hover">
    <tr>
        <td><b>PEDIDO</b></b></td>
        <td><b>ITEM</b></b></td>
        <td><b>QUANT</b></b></td>
        <td><b>PEDIDO</b></b></td>
        <td><b>ENTREGA</b></b></td>
        <td><b>CLIENTE</b></b></td>
    </tr>

    <?php

        foreach ($listPedidos as $pedido):
        $datepega = $pedido['dataPedido'];
        $datepega = date("d-m-Y",strtotime($datepega));

            $datentrega = $pedido['dataEntrega'];
            $datentrega = date("d-m-Y",strtotime($datentrega));
            ?>

        <tr>
            <td><?=$pedido['id']?></td>
            <td><?=$pedido['item']?></td>
            <td><?=$pedido['quantidade']?></td>
            <td><?=$datepega ?></td>
            <td><?=$datentrega ?></td>
            <td><?=$pedido['nome']?></td>
        </tr>

    <?php endforeach; ?>


</table>
</div>

<div class="row">

    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mymodal">
        Cadastrar Pedido
    </button>
    <div id="mymodal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cadastrar Pedido</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Escreva o nome" />
                            <div id="listaNomes"></div>




                        </div>
                        <div class="form-group">
                            <label>Data do Pedido</label>
                            <input type="date" class="form-control" name="data" placeholder="Data Pedido">

                        </div>
                        <div class="form-group">
                            <label>Data entrega</label>
                            <input type="date" class="form-control" name="dataEntrega" placeholder="Data Pedido">

                        </div>
                        <div class="form-group">
                            <label>Item</label>
                            <input type="text" name="item" id="item" class="form-control" placeholder="Escreva o item" />
                            <div id="listaItens"></div>
                         </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <input type="hidden" name="acao" value="incluir">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
