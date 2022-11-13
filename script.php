<?php
    
    $dados = implode(" -- ", $_POST);
    $dados = $dados . "\n";
    $nomedoarquivo = "dadosCadastro.txt";
    $modo = 'a+';

    $arquivo = fopen ($nomedoarquivo, $modo);

    if ($arquivo == false) die('Não foi possível criar o arquivo.');

    fwrite($arquivo, $dados);

    header('Location: listaCadastros.php');
?> 