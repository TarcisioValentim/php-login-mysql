<?php

//protege contra sqlinjection
function DBEscape($dados){
    $link = DBConnect();

    if (!is_array($dados)) 
        $dados = mysqli_real_escape_string($link, $dados);
    else {
        $arr = $dados;
        foreach ($arr as $key => $value){
            $key    = mysqli_real_escape_string($link, $key);
            $value  = mysqli_real_escape_string($link, $value);

            $dados[$key] = $value;
        }
    }

    DBClose($link);
    return $dados;
}

//funcao fecha conexao com phpAdmin
function DBClose($link){
    @mysqli_close($link) or die(mysqli_error($link));
}

//funcao abre conexao com phpAdmin
function DBConnect() {
    $link = @mysqli_connect(HOST, USUARIO, PASSWORD, DB) or die (mysqli_connect_error());
    mysqli_set_charset($link, DB_charset) or die(mysqli_error($link));

    return $link;
}