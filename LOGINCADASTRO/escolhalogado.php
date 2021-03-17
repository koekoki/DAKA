<?php
include('verificalogin.php');


?>
<html lang="pt-br"></html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Áreas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/escolhalogado.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    </head>
    <body>
    <header style="height: 100px;">
            <a class="logo" ><img src="https://cdn.discordapp.com/attachments/802254748782690314/811000616654471238/logo_nova.png" style="width: 250px;margin-right: 80px;"></a>
                       
            <a class="cta" href="escolhalogado.php">Voltar</a>
            
            <a class="abc" href="historico.php" >historico </a>
            <a>
                <form action="logout.php">
            <input type="submit" name="logout-submit" value="Sair" 
                      style="
                      border: none;
                      color: white;
                      padding: 10px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 18px;
                      font-weight: bold;
                      margin: 4px 2px;
                      transition-duration: 0.4s;
                      cursor: pointer;
                      border-radius: 5px;
                      background: rgb(2, 0, 36);
                    ">
                    </form>
            </a>
        </header>


        <h2 class="title title-second">Escolha a área que deseja estudar:</h2>


        <a class="humanas" href="Q_HUMANAS_LOGADO.php" 
        style="
        text-decoration: none;
        color: #012;
        box-shadow: 0 0 10px rgb(125, 137, 146);
        width: 250px;
        height: 250px;
        border-radius: 80%;
        border-color: #012;
        background-color:#d6ddeb;">HUMANAS</a>

        <a class="exatas" href="Q_EXATAS_LOGADO.php" 
        style="
        text-decoration: none;
        box-shadow: 0 0 10px rgb(125, 137, 146);
        color: #012;
        width: 250px;
        height: 250px;
        border-radius: 80%;
        border-color: #012;
        background-color:#d6ddeb;">EXATAS</a>

        <a class="biologicas" href="Q_BIO_LOGADO.php" 
        style="
        text-decoration: none;
        color: #012;
        box-shadow: 0 0 10px rgb(125, 137, 146);
        width: 250px;
        height: 250px;
        border-radius: 80%;
        border-color: #012;
        background-color:#d6ddeb;">BIOLÓGICAS</a>

        <a class="linguagens" href="Q_LINGUAGEM_LOGADO.php" 
        style="
        text-decoration: none;
        color: #012;
        box-shadow: 0 0 10px rgb(125, 137, 146);
        width: 250px;
        height: 250px;
        border-radius: 80%;
        border-color: #012;
        background-color:#d6ddeb;">LINGUAGENS</a>


        <a class="bonequinho"><img src="css/Imagens/loguinho.png" style = "padding-left: 1000px"> </a>

        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>