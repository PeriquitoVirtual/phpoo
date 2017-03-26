
<div class="row">
<table class="table table-bordered table-hover">
    <tr>
        <td><b>PEDIDO</b></b></td>
        <td><b>ITEM</b></b></td>
        <td><b>QUANTIDADE</b></b></td>
        <td><b>DATA PEDIDO</b></b></td>
        <td><b>DATA ENTREGA</b></b></td>
        <td><b>CLIENTE</b></b></td>
    </tr>

    <?php

        foreach ($listPedidos as $pedido):
        $datepega = $pedido['dataPedido'];
        $datepega = date("d-m-Y H:i:s",strtotime($datepega));
            ?>

        <tr>
            <td><?=$pedido['idpedido']?></td>
            <td><?=$pedido['item']?></td>
            <td><?=$pedido['quantidade']?></td>
            <td><?=$datepega ?></td>
            <td><?=$pedido['dataEntrega']?></td>
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
                    <form>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
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
