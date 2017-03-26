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
                                <td><a href="produtos.php?produto=<?php echo $produto['id']; ?>"><?=$produto['item']?></a></td>
                                <td><?=$produto['nome']?></td>
                            </tr>

                        <?php endforeach; ?>


                    </table>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="produtos.php?pagina=00" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php
                            //printf($num_total);

                            for ($i=0;$i<$num_paginas;$i++){
                                $estilo = "";
                                if ($pagina == $i*10)
                                    $estilo = "class=\"active\"";
                                ?>
                            <li <?php echo $estilo; ?> ><a href="produtos.php?pagina=<?php echo $i; ?>0"><?php echo $i+1; ?></a></li>
                            <?php } ?>
                            <li>
                                <a href="produtos.php?pagina=<?php echo $num_paginas-1; ?>0" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <?php } ?>