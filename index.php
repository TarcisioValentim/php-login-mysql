<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <H3><BR></BR></H3>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <div class="box">
                        <form action="" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                    <h3 class="title has-text-grey">
                    <a href="https://tarcisiovalentim.github.io/js-portfolio" target="_blank">
                    <img src="images/Logo3.png" alt="images">
                    </a>
                    </h3>
                </div>
            </div>
        </div>
    </section>

<?php

    require 'config.php';
    require 'connection.php';
    require 'database.php';
    
    $funcionarios = DBRead('funcionarios', "WHERE idade != 1 AND nome != 'leila'", 'usuario, senha, idade');
    var_dump($funcionarios);
  
/*
   $funcionario = array(
        'id'        => '1',
        'usuario'   => 'leila',
        'senha'     => 'leila',
        'idade'     => 21
    );

    $grava = DBCreate('funcionarios', $funcionario);
    if($grava)
        echo 'OK';
    else
        echo ':/';

  //$nome = DBEscape($nome);
    //var_dump("SELECT * FROM usuarios where nome = '$nome'");
    //echo "SELECT * FROM usuarios where nome = '$nome'";
    //var_dump(DBEscape($dados));
    //$query = "INSERT INTO `usuario`(`id`, `usuario`, `senha`) VALUES (4, 'jemi', 'jemi')";
    //var_dump(DBExecute($query));
    */
?>

</body>

</html>