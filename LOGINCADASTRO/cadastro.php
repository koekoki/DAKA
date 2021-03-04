
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <a href="https://ibb.co/1vkJJbF"><img src="https://i.ibb.co/Gxq33Fz/Whats-App-Image-2021-02-15-at-19-01-27.jpg" alt="Whats-App-Image-2021-02-15-at-19-01-27" border="0" height="200px"></a>
                
            
            </div>    
            <div class="second-column">
                
                <form class="form" method= "POST" action="processa.php" style="border: solid 2px #012;">
                    <h2 class="title title-second">         </h2>
                    <h2 class="title title-second">CADASTRO</h2>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="Nome" name="nome" placeholder="Nome" maxlength="255">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email" maxlength="255">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha" maxlength="32">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="confsenha" placeholder="Repita a senha" maxlength="32">
    
                    </label>

                    
                        <button type="submit" value="Criar conta" class="btn btn-second" >Criar Conta</button>
                    

                    <a class="btn btn-second" id="btn" method= "POST" href="login.php">Voltar</button>
                </form>

                
                <a class="." href="#"></a>
                <div class="termosclass" style="margin-left: 35%;">
                   
                  </div>
        
    </div>
    <script src="js/app.js"></script>

    <script src="js/app.js"></script> <!-- link com javascript-->
</body>
</html>
