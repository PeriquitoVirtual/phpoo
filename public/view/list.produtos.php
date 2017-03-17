<?php
?>



                    <?php if ($listProdutos > 0){ ?>
                    <table class="table table-bordered table-hover">

                        <tr>
                            <td><b>ID</b></b></td>
                            <td><b>PRODUTO</b></b></td>
                            <td><b>TIPO</b></b></td>
                        </tr>

                        <?php foreach ($listProdutos as $produto): ?>

                            <tr>
                                <td><?=$produto['id']?></td>
                                <td><?=$produto['item']?></td>
                                <td><?=$produto['nome']?></td>
                            </tr>

                        <?php endforeach; ?>


                    </table>
    <nav>
        <ul class="pagination">
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
                    <?php } ?>