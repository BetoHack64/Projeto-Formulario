<?php include_once"conexao.php";?>
<html>
    <body>
        <?php 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $iddiscord = $_POST["iddiscord"];
            $techs = $_POST["techs"];

            $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
            mysqli_select_db($conn,'$dbname');
            $sql = "INSERT INTO Registros (nome,email,ID_Discord,techs) VALUES ('$nome', '$email', '$iddiscord', '$techs')";
            if (mysqli_query($conn, $sql)) {
            echo "Dados salvos com sucesso !";

            }else{
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
         <a href="index.php">Voltar</a>
    </body>
</html>
