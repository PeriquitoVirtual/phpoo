<div class="row">
<table class="table table-bordered table-hover">
    <tr>
        <td><b>ID</b></b></td>
        <td><b>PERFIL</b></b></td>
        <td><b>NOME</b></b></td>
        <td><b>ENDEREÇO</b></b></td>
        <td><b>BAIRRO</b></b></td>
        <td><b>TELEFONE</b></b></td>
        <td><b>EMAIL</b></b></td>
        <td><b>CIDADE</b></b></td>
    </tr>

    <?php

        foreach ($listPessoas as $pessoa):

            ?>

        <tr>
            <td><?=$pessoa['id']?></td>
            <td><?=$pessoa['perfil']?></td>
            <td><?=$pessoa['nome']?></td>
            <td><?=$pessoa['endereco']?></td>
            <td><?=$pessoa['bairro']?></td>
            <td><?=$pessoa['telefone']?></td>
            <td><?=$pessoa['email']?></td>
            <td><?=$pessoa['cidade']?></td>
        </tr>

    <?php endforeach; ?>


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
                        <input type="hidden" name="acao" value="incluir">
                        <button type="submit" class="btn btn-info" value="inserir">Enviar</button>
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
