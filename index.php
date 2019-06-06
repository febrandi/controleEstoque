<?php
    require_once('functions.php'); //garante que o arquivo só foi incluido uma vez
    include_once('header.php'); //inculi header na pagina
?>


    <main class="container">
    <h1>Controle de Estoque</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th class="text-right">Preço</th>
                    <th class="text-right">Quantidade</th>
                    <th class="text-right">Qtd Minima</th>
                    <th class="text-right">Status</th>
                    <th class="text-right">Total</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach ($produtos as $indice => $valor) {
                    $class = ($valor["estoque"] < $valor["min"]) == true ? "vermelho" : "";

                    echo "<tr class='$class' >";
                    echo "<td>".$valor["nome"]."</td>";
                    echo "<td class='text-right'> R$ ".$valor["preço"]."</td>";
                    echo "<td class='text-right'>".$valor["estoque"]."</td>";
                    echo "<td class='text-right'>".$valor["min"]."</td>";
                    echo "<td class='text-right'>".($valor["status"] == true ? "Ativo" : "Desativado")."</td>";
                    echo "<td class='text-right'> R$ ". number_format(totalProduto($valor['preço'], $valor['estoque']), 2, ',', '.')."</td>";
                    echo "</tr>";
                }
            ?>
                <!-- lista em HTML -->
                <!-- <tr>
                    <td>Camiseta</td>
                    <td>R$50</td>
                    <td>100</td>
                    <td>20</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <td>Calça</td>
                    <td>R$100</td>
                    <td>50</td>
                    <td>15</td>
                    <td>Ativo</td>
                </tr> -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        Total em Estoque
                    </td>
                    <td colspan="3" class="text-right"> 
                        <?php echo "R$ ".number_format(totalEstoque(),2, ',', '.') ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>

<?php 
    include_once('footer.php');
?>