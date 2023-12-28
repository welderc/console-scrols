<h1>Listar Marca</h1>
<?php
    $sql = "SELECT * from marca";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
        print "<div class='tabela-container'>"; // Envolve a tabela com a div
        print "<table class='tabela-com-overflow'>";
        print "<tr>";
        print "<td>#</td>";
        print "<td>Nome da Marca</td>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_marca."</td>";
            print "<td>".$row->nome_marca."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=marca-editar&id_marca=".$row->id_marca."';\" class='btn btn-primary'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=marca-salvar&acao=excluir&id_marca=".$row->id_marca."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
        print "</div>"; // Fecha a div que envolve a tabela
    } else {
        print "Não encontrou resultado";
    }
?>