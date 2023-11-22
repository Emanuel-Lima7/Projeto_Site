<h1>Lista de Usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print"<table class='table table-hover table-bordered'>";
        print "<tr>";
            print "<th>id</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print   "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-outline-success'>Editar</button>

                        <button onclick=\"if(confirm('Deseja excluir permanentemente?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-outline-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-dander'>Sem resultados...</p>";
    }

?>