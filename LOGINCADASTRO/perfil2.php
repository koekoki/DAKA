<?php
    include("conexao.php");
    $sql = "SELECT * FROM usuario WHERE idUsuario =4";
    $resultado = $connect->query($sql);
    while ($linha = mysqli_fetch_array($resultado)) {
        $teste[] = $linha;
    }

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/perfil2.css">
        <script
        src="https://kit.fontawesome.com/6726683f80.js"
        crossorigin="anonymous"
  ></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <img href = "https://i2.wp.com/www.multarte.com.br/wp-content/uploads/2018/12/fundo-branco8-1024x548.jpg?resize=696%2C372&ssl=1">
        <div class="container">

            <div class = "box">

                <div class="img-sidebar">
                    <?php 
                    foreach($teste as $foto){
                        ?>   
                        <div class="round">
                        <img src="<?php echo "css/Imagens/".$foto["Foto"]?>" class="portrait"/>
                        </div>
                    <?php }
                ?>
                    <form method="POST" action="proc_upload.php" enctype="multipart/form-data">
                    <input name = "arquivo" type = "file">  </input>
                    
                   
                </div>
                <div class = "nome">
                    <input class="text0" type="text"  placeholder="Novo nome"></input>
                </div>
                <div class = "minibox">
                    <label> Email: </label>
                    <input class = "text"  placeholder="Novo email">  </input>
                    <label> Senha atual: </label>
                    <input class = "text"  placeholder="Insira sua senha atual"> </input>
                    
                </div>
                <div class = "box-button">
                            <button class = "Salvar" type = "submit" value="Cadastrar"> Salvar </button>
                            </form>
                            <button class = "Excluir" type="submit"> Excluir conta </button>
                            <button class = "Cancelar" type="submit"> Cancelar </button>
                        </div>
            </div><!--box-->
            
        </div><!--container-->

</body>