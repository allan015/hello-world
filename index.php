<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gerenciamento Escolar</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        <?php require "conexao.php" ?>
    </head>
    <body>
        <div id="login">
            <?php
            if (isset($_POST['botao'])){
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                
                if ($nome == ''){
                    echo '<h2> Digite o nome de acesso</h2>';
                }
                    else if($senha == ''){
                        echo '<h2> Digite a senha</h2>';
                    } else {
                        $sql = "SELECT * FROM login WHERE nome = '$nome' AND senha = '$senha'";
                        $result = mysqli_query($conexao, $sql);
                        if(mysqli_num_rows($result)>0){
                            echo 'Existe um registro';
                        }else{
                            echo 'dados incorretos';
                        }
                    }
            }
            ?>
            <form name="form" method="post" action="" enctype="multpart/form-data"><br> 
                Nome<input type="text" name="nome" placeholder="Digite o Nome"/><br><br> 
                Senha<input type="password" name="senha" placeholder="Digite a Senha"/><br><br> 
                <input type="submit" name="botao" value="Entrar"/>
            </form>
        </div>
    </body>
</html>
