
<?php





$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';

if ($acao == 'incluir'){


    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];


   $cliente = $container['pessoa'];

   $cliente->setPerfil("2");
   $cliente->setNome($nome);
   $cliente->setEndereco($endereco);
   $cliente->setCEP($cep);
   $cliente->setTelefone($telefone);
   $cliente->setEmail($email);
   $cliente->setCidade($cidade);

   $service = $container['ServicePessoa'];

    //var_dump($cliente);
    print_r($service->save());

   echo "<br><br>";

    $listCliente = $container['ServicePessoa']->list();
    foreach ($listCliente as $client):
    $cod = $client['cod'];
    endforeach;
    echo $cod;



    //header('Location: pessoas.php');
}
?>

<div class="row">
<table class="table table-bordered table-hover">
    <tr class="active">
        <td><b>ID</b></b></td>
        <td><b>PERFIL</b></b></td>
        <td><b>NOME</b></b></td>
        <td><b>ENDEREÇO</b></b></td>
        <td><b>CEP</b></b></td>
        <td><b>TELEFONE</b></b></td>
        <td><b>EMAIL</b></b></td>
        <td><b>CIDADE</b></b></td>
    </tr>

    <?php
    //$total = count($container['ServicePessoa']);
    $i=0;
    foreach ($listPessoas as $pessoa):

            if($i % 2 == 0) {
            $class = "class=\"success\"";
            } else $class = "";

                ?>

            <tr <?php echo $class; ?> >

            <td><?=$pessoa['cod']?></td>
            <td><?=$pessoa['perfil']?></td>
            <td><?=$pessoa['pessoa']?></td>
            <td><?=$pessoa['endereco']?></td>
            <td><?=$pessoa['cep']?></td>
            <td><?=$pessoa['telefone']?></td>
            <td><?=$pessoa['email']?></td>
            <td><?=$pessoa['cidade']?></td>

        </tr>

    <?php
        $i++;
         endforeach; ?>


</table>
</div>

<div class="row">

    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mymodal">
        Novo cliente
    </button>
    <div id="mymodal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cadastrar Cliente</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">

                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome">

                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control" name="endereco" placeholder="Endereco">

                        </div>
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" class="form-control" name="cep" placeholder="CEP">

                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="telefone" placeholder="Telefone">

                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="cidade" placeholder="Cidade">

                        </div>


                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <input type="hidden" name="acao" value="incluir">
                        <button type="submit" class="btn btn-info" value="inserir">Enviar</button>
                    </form>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <a class=" btn btn-success" onClick="loadiframe('pedido.php')" data-toggle="modal" data-target="#myModal">VER PEDIDOS</a><!--link to iframe-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header" style="border:hidden">
                    <button type="button" class="close" onClick="unloadiframe()" data-dismiss="modal" aria-label="Close"><span aria-   hidden="true">&times;</span></button>
                </div>

                <div class="modal-body" style="padding-top:10px; padding-left:5px; padding-right:0px; padding-bottom:0px;">

                    <iframe src="" frameborder="0" id="targetiframe" style=" height:500px; width:100%;" name="targetframe" allowtransparency="true"></iframe> <!-- target iframe -->

                </div> <!--modal-body-->

                <div class="modal-footer" style="margin-top:0px;">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal" onClick="unloadiframe()">close</button>
                </div>

            </div>
        </div>
    </div>


</div>
