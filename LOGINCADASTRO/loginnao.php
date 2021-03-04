<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginnao.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <!-- Coluna de introdução-->
        <div class="content first-content"> 
            <div class="first-column">
                <a href="https://ibb.co/1vkJJbF"><img src="https://i.ibb.co/Gxq33Fz/Whats-App-Image-2021-02-15-at-19-01-27.jpg" alt="Whats-App-Image-2021-02-15-at-19-01-27" border="0" height="200px"></a> <!-- Imagem DAKA-->
                <p class="description description-primary">DAKA é um site desenvolvido para ajudar os vestibulandos na hora dos estudos. Responda um questionário com os temas mais recorrentes nos vestibulares e teste seus conhecimentos nas áreas de humanas, exatas, linguagens e biológicas.</p> <!-- Texto de introdução-->
            
            </div>    
            <div class="second-column">

                <!-- Quadrado de Login-->
                <form action= 'logar.php' method="POST" class="form" style="border: solid 2px #012;"> <!-- bordinha do quadrado de login-->
                    <h2 class="title title-second">         </h2> <!-- espaço aleatório-->
                    <h2 class="title title-second">LOGIN</h2>

                    <!-- Email e senha (retângulo e troca de icone)-->
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Preencha todos os campos" maxlength="255"> 
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Preencha todos os campos" maxlength="32">
                    </label>
                    
                    <!-- Botão de entrar com link pra outra pag-->
                    <button type="submit" value="EntRar" class="btn btn-second" >Entrar</button>
                    <a class="btn btn-second"  href="cadastro.php" >Criar Conta</button>
                </form>

                <!-- Link para página de escolhas-->
                <a class="contsemlogin" href="escolha.php">Continuar sem login</a>
    </div>

</body>
</html>