<?php
//Ler Registros
function DBRead($table, $params = null, $fields = '*'){
    $table  = DB_prefix.'_'.$table;
    $params = ($params) ? " {$params}" : null;

    $query  = "SELECT {$fields} FROM { $table }{$params}";
    $result = DBExecute($query);

    if(mysqli_num_rows($result))
        return false;
        else{
            while ($res = msqli_fetch_assoc($result)){
                $data[] = $res;
            }
            return $data;
        }
}

//Gravar querys
function DBCreate($table, array $data){
    $table = DB_prefix.'_'.$table;
    $data  = DBEscape($data);

    $fields = implode(', ', array_keys($data));
    $values = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
    
    return $query;
    
    return DBExecute($query);
}

//Executa Querys
function DBExecute($query){
    $link   = DBConnect();
    $result = @mysqli_query($link, $query) or die(@mysqli_error());

    DBClose($link);
    return $result;
}