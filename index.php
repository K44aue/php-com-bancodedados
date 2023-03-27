<!DOCTYPE html>
<html>
    <head>
        <title>Página sem nome</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Título da Página</h1>
        <?php
        //KAUE, 
            
            $servidor = "localhost";
            $usuario = "id20491942_admin";
            $senha = "\8WrsN0-Y2bY0S=l";
            $nomedb = "id20491942_eumesmo";

            $conn = new mysqli($servidor, $usuario, $senha, $nomedb);

            if($conn->connect_error) {
                die("Conexão Falhou:".$conn->connect_error);
            }
            echo "Conectado ao DB"."<br>";

            $sql="SELECT Nome, Sobrenome, Telefone FROM agenda";
            $result=$conn->query($sql);
            echo

           "<table>
            <thead>
                <th>Nome</th>
                <th>sobrenome</th>
                <th>telefone</th>
            </thead>
            <tbody>";
                
            

            if($result->num_row>0){
                while($row=$result->fetch_assoc()){
                    echo 
                   "<tr>"
                        . " <td>".$row["Nome"]."</td>"
                        . " <td>".$row["Sobrenome"]."</td>"
                        . " <td>".$row["Telefone"]."</td>"
                    ."</tr>";
                }
                echo
                    "</tbody>
                     </table>";
            } else{
                echo
                "<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> ";
                echo
                "</tbody>
                 </table> </br>";
                 echo "<h4>0 resultados encontrados. A tabela está vazia.</h4>";

            }

           

        ?>
    </body>
</html>