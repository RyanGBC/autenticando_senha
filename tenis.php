<?php 
    $tenis = $_POST ["cxtenis"];
    $tam = $_POST ["cxtam"];
    include_once "factory/conexao.php";
    $consulta = "SELECT * FROM tbtenis WHERE tenis LIKE '%$cod%'";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);

    if($tenis == "Nike" || $tam == "23")
    {
        echo "Parabens tenis encontrado";
    }
    else
    {
        echo "Tenis não encontrdo [ERRO 500!]";
    }
?>