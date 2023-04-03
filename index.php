<!DOCTYPE html>
<html>
    <head>
        <title>sorriso solto</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <style>
            <?php
                include 'estilo.css';
            ?>
        </style>
        <h1>2 maluco no pedaço</h1>
         <!-- Formulário -->
         <form method="POST" action="">
            <fieldset>
                <legend>Adicionar Aluno</legend>
                <label>
                    Nome:
                    <input type="text" name="name" required/>
                </label>
                <label>
                    Sobrenome:
                    <input type="text" name="uppername" required/>
                </label>
                <label>
                    Telefone:
                    <input type="text" name="phone" required/>
                </label> <br/>
                <input type="submit" name="add-data" value="Adicionar"/>
            </fieldset>
        </form>
        
        <!-- Adição de novas linhas ao Banco de Dados -->
        <?php
             $servidor = "localhost";
             $usuario = "id20491942_admin";
             $senha = "vgJ7Cc1Z\8Wqcve-";
             $nomedb = "id20491942_eumesmo";
 
            $conn = new mysqli($servidor, $usuario, $senha, $nomedb);

            if(isset($_POST['add-data'])) {
                $name = $_POST["name"];
                $uppername = $_POST["uppername"];
                $phone = $_POST["phone"];

                $sql = "INSERT INTO agenda (Nome, Sobrenome, Telefone)
                VALUES ('$name', '$uppername', '$phone')";

                $conn->query($sql);
                echo "<meta http-equiv='refresh'content='0'/>";
            }
        ?>
        <?php
        //KAUE, th Fé
            
            $servidor = "localhost";
            $usuario = "id20491942_admin";
            $senha = "vgJ7Cc1Z\8Wqcve-";
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
                
            

            if($result->num_rows>0){
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