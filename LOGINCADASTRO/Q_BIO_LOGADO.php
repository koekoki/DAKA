<?php

include("conexao.php");
session_start(); 

?>
<html lang="pt-br"></html>
    <head>
	<style>
    <?php include "css/CSS_dos_questionarios.css" ?>
  </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Biológicas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
<body>

        <header style="height: 100px;">
            <a class="logo" ><img src="https://cdn.discordapp.com/attachments/802254748782690314/811000616654471238/logo_nova.png" style="width: 250px;margin-right: 80px;"></a>
            <a class="cta" href="escolhalogado.php">Voltar</a>
			<a class="email">  <?php  if(isset($_SESSION['Email'])){
			echo $_SESSION['Email'];}?></a>
            <nav>
            </nav>
        </header>
        <h2 class="title title-second">BiOLÓGICAS</h2>

			<div class="container">
				

				<form method="POST" action="gabaritoBio.php" style="font-family: 'Open Sans', sans-serif;
    			font-weight: bold;
   				 margin-left: 10%;
   				 margin-right: 10%;
					text-align: justify;">	
				<?php 

					for($i=1;$i<100;$i++){
					$l = 1;

					$ansid = $i;

					$sql1 = "SELECT * FROM questao where IdQuestao = $i and idMateria = 6";
					$result1 = mysqli_query($connect, $sql1);
						if(mysqli_num_rows($result1)>0){
							while($row1 = mysqli_fetch_assoc($result1)){
				?>
					<div class="linha"></div>
					<div class="enunciado">
						<p><p class="Numeroquestao"> Questão <?php echo $i-60 .". "?></p><?php echo $row1['Enunciado'];?> </p>
					</div>
					
					<?php
				
					$sql = "SELECT * FROM alternativa where IdQuestao = $i";
					$result = mysqli_query($connect, $sql);
							if(mysqli_num_rows($result)>0){
								while($row = mysqli_fetch_array($result)){
						?>
						<div class="alternativa">
						<input type="radio" name="choice[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['Certa']; ?>" required>
						<?php echo $row['resposta']; ?>
						</div>
						
						<?php
                        
					} } 
					$ansid = $ansid + $l;
					} } }		
					 ?>
					 <div class= "box">
					<input type="submit" name="submit" Value="Enivar tudo e terminar" class="Enviar"/>	
					</div>	
					</form>			
                				
			</div>
								
    
</body>
        
