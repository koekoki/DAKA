<?php
session_start();
include("conexao.php")


?>
<html lang="pt-br"></html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Linguagem</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/CSS_dos_historicos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
    <header style="height: 100px;">
            <a class="logo" ><img src="https://cdn.discordapp.com/attachments/802254748782690314/811000616654471238/logo_nova.png" style="width: 250px;margin-right: 80px;"></a>
           
            <a class="cta" href="historico.php">Voltar</a>

            <a style="   font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: bolder;">  <?php  if(isset($_SESSION['Email'])){
			echo $_SESSION['Email'];
           $Email = $_SESSION['Email'];}?></a>
            <nav>
            </nav>
        </header>
        <h2 class="title title-second">Linguagem</h2>
        <div class = "container">

        <div class = "box">
        
            <?php
                                       $q3= "SELECT COUNT(IdQuestao) FROM historico WHERE Email LIKE '$Email' and idArea = 4";
                                       $ansresults3 = mysqli_query($connect,$q3);
                                       $certa= "SELECT COUNT(Acertou) FROM historico WHERE Email LIKE '$Email' and Acertou = 1 and idArea = 4";
                                       $certao = mysqli_query($connect,$certa);
                                       while( $totalQuestoes = mysqli_fetch_array($ansresults3)){
                                           $i = mysqli_fetch_array($certao);?>
                                        <p class = "Total"> <?php echo $totalQuestoes['COUNT(IdQuestao)']." Questões respondidas<br> totais de acerto: ".$i['COUNT(Acertou)']; }?></p>
                
                    <?php
                    
            		$q= "SELECT *  FROM historico where Email Like '$Email'";
                    $ansresults = mysqli_query($connect,$q);
                    
                    while($rows = mysqli_fetch_array($ansresults)){
                    $number = $rows['IdQuestao'];
                    $q2= "SELECT * FROM questao where IdQuestao = $number and idArea = 4";
                    $ansresults2 = mysqli_query($connect,$q2);
                    $q4= "SELECT * FROM historico where IdQuestao = $number and Email LIKE '$Email' and idArea = 4";
                    $ansresults4 = mysqli_query($connect,$q4);
                    while($rows1 = mysqli_fetch_array($ansresults2)){
                            $rows4 = mysqli_fetch_array($ansresults4);
                       ?> 
                    <?php ?><?php if ($rows4['Acertou'] == 1){
                        ?><div class = "EnunciadoAcertou"> <?php echo $rows1['Enunciado']; ?><br> 
                          <p class =Acertou> Você acertou!</p> </div>
                          <?php
                            } ?>
                            <?php if ($rows4['Acertou'] == 0){
                                ?>
                                <div class = "EnunciadoErrou"> <?php echo $rows1['Enunciado']; ?><br>
                                  <p class =Acertou> Você errou!</p>  </div>
                                  <?php
                                    } ?>
                
                    <?php
                    }
                    }
                    ?>
        


        </div>

        </div>