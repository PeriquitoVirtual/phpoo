
<table style="width: 50%">
    <tr>
        <td><b>ID</b></b></td>
        <td><b>DATA PEDIDO</b></b></td>
        <td><b>DATA ENTREGA</b></b></td>
        <td><b>CLIENTE</b></b></td>
    </tr>

    <?php foreach ($listPedidos as $pedido): ?>

        <tr>
            <td><?=$pedido['id']?></td>
            <td><?=$pedido['dataPedido']?></td>
            <td><?=$pedido['dataEntrega']?></td>
            <td><?=$pedido['idpessoa']?></td>
        </tr>

    <?php endforeach; ?>


</table>
