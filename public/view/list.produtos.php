<?php

$itens_por_pagina = 10;
$mysqli = new mysqli("localhost", "root", "root", "fruta");

$result = $mysqli->query("SELECT item.id, item.item, item.id_subcategoria, nome from item 
                  JOIN subcategoria 
                  WHERE item.id_subcategoria = subcategoria.id");

$num_total = $result->num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);

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
                            <?php
                            //printf($num_paginas);

                            for ($i=0;$i<$num_paginas;$i++){  ?>
                            <li><a href="produtos.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                            <?php } ?>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <?php } ?>