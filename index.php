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
            echo "uma frase criativa"."<br>";
            $servidor = "localhost";
            $usuario = "eumesmo";
            $senha = "1234";
            $nomedb = "eumesmo";

            $conn = new mysqli($servidor, $usuario, $senha, $nomedb);

            if($conn -> connect_error) {
                die("Conexão Falhou:".$conn -> connect_error);
            }
            echo "Conectado ao DB"."<br>";

            $sql="SELECT Nome ,Sobrenome,Telefone from agenda";
            $result=$conn->query ($sql);
            echo

           " <table>
            <thead>
                <th>Nome</th>
                <th>sobrenome</th>
                <th>telefone</th>
            </thead>
            <tbody>";
                
            

            if($result -> num_rom>0){
                while($rom=$result ->fetch_assor()){
                    echo 
                   "<tr>"
                        . " <td>".rom["Nome"]."</td>"
                        . " <td>".rom["Sobrenome"]."</td>"
                        . " <td>".rom["Telefone"]."</td>"
                    ."</tr>";
                    echo
                    "</tbody>
                     </table>";
                }
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