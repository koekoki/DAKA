<?php
include("conexao.php");
session_start();
   ?>
<!DOCTYPE html>
<html>
   <head>
   <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	  <style>
    <?php include "css/gabarito.css" ?>
  </style>



</style>

   </head>
   <body>
   <header style="height: 100px;">
            <a class="logo" ><img src="https://cdn.discordapp.com/attachments/802254748782690314/811000616654471238/logo_nova.png" style="width: 250px;margin-right: 80px;"></a>
            <a class="cta" href="escolhalogado.php">Voltar</a>
			<a class="emai">  <?php  if(isset($_SESSION['Email'])){
			echo $_SESSION['Email'];}?></a>
            <nav>
            </nav>
        </header>
     	<br><br>
    	<br><br><br><br>
		<div class = "container">
      

	         <?php
        	 $counter = 0;
        	 $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['choice'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['choice']);
            // print_r($_POST);
            ?>

        	<td>
            <?php
            echo $checked_count; ?>
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['choice'];

			$r= "SELECT DISTINCT resumo from alternativa where IdQuestao between 1 and 45";
            $resumao = mysqli_query($connect,$r);

			$r1= "SELECT DISTINCT resumo from alternativa where IdQuestao between 76 and 90";
            $resumao1 = mysqli_query($connect,$r1);

            
            $q1= "SELECT resposta from alternativa where Certa = 1 and IdQuestao between 1 and 45 ";
            $ansresults = mysqli_query($connect,$q1);

			$q2= "SELECT Enunciado from questao where idMateria BETWEEN 1 AND 45";
            $ansresults2 = mysqli_query($connect,$q2);
	
            $i = 1;

			$q3= "SELECT resposta from alternativa where Certa = 1 and IdQuestao between 76 and 90 ";
            $ansresults3 = mysqli_query($connect,$q3);

			$q4= "SELECT Enunciado from questao where IdQuestao between 76 and 90";
            $ansresults4 = mysqli_query($connect,$q4);
			$j=76;
			?>
			  
			<div style="
			font-family: 'Open Sans', sans-serif;
			font-weight: bold;
			margin-left: 10%;
			margin-right: 10%;
			text-align: justify;">
<ul>
			<?php
	
            while($rows = mysqli_fetch_array($ansresults) ) {
				$rows1 = mysqli_fetch_array($ansresults2);
				$resumo = mysqli_fetch_array($resumao);
				  $flag = 1 == $selected[$i];
				  
						  if($flag){
							  $counter++;
							  $Resultans++;
							  ?>
							  
							  <li class="espaçoEnunciado"><p class = "EnunciadoCerto"><?php echo $rows1['Enunciado'];?><br></p>
							  <?php echo "Muito bem! Resposta está correta!" ?> <br><br>
							  <p class="negrito"><?php echo $rows['resposta']."<br>"?></p></li>
							  <div class="linha"></div>
							 
							  <?php
							   $email = $_SESSION['Email'];
							   $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $i, '1', '1')";
							   $salvar = mysqli_query($connect, $sql);
							  
						  }else{
							  $counter++;
							  ?>
							  
							<li class="espaçoEnunciado"><p class = "EnunciadoErrado"><?php echo $rows1['Enunciado'];?><br></p>
							  Desculpe! você errou<br>Resposta correta:<p class="negrito"><?php echo $rows['resposta']?><br><br></p><p>
							  <?php echo "Explicação: ".$resumo['resumo']?></p> <br><br></li>
							  <div class="linha"></div>
							  <?php
							   $email = $_SESSION['Email'];
							   $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $i, '0', '1')";
							   $salvar = mysqli_query($connect, $sql);
						  }					
					  $i++;		
				  }
				  ?>
				  <?php
				  while($rows = mysqli_fetch_array($ansresults3) ) {
					$rows1 = mysqli_fetch_array($ansresults4);
					$resumo1 = mysqli_fetch_array($resumao1);
					  $flag = 1 == $selected[$j];
					  
							  if($flag){
								  $counter++;
								  $Resultans++;
								  ?>
								  
								  <li class="espaçoEnunciado"><p class = "EnunciadoCerto"><?php echo $rows1['Enunciado'];?><br></p>
								  <?php echo "Muito bem! Resposta está correta!" ?> <br><br>
								  <p class="negrito"><?php echo $rows['resposta']."<br>"?></p></li>
								  <div class="linha"></div>
								 
								  <?php
								   $email = $_SESSION['Email'];
								   $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $j, '1', '1')";
								   $salvar = mysqli_query($connect, $sql);
								  
							  }else{
								  $counter++;
								  ?>
								  
								<li class="espaçoEnunciado"><p class = "EnunciadoErrado"><?php echo $rows1['Enunciado'];?><br></p>
							  Desculpe! você errou<br>Resposta correta:<p class="negrito"><?php echo $rows['resposta']?><br><br></p><p>
							  <?php echo "Explicação: ".$resumo1['resumo']?></p> <br><br></li>
								  <div class="linha"></div>
								  <?php
								   $email = $_SESSION['Email'];
								   $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $j, '0', '1')";
								   $salvar = mysqli_query($connect, $sql);
							  }					
						  $j++;		
					  }
				
            	?></ul>
				<div class="centralizarResultado">
		<table class="resultado">
      	<tr>
      		<th colspan="2"> <h1 class="text-white"> Resultado</h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Total de questoes respondidas
		      	</td>
				  <td colspan="2">
	    	<?php 
	            echo $counter;
	          ?>
	          </td>
			</tr>
			<tr>
    			<td>
    				Sua nota
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo $Resultans;
	            }
	            } 
	          ?>
	          </td>
          	 </tr>
     		 </table>
</div>
			  
            </div>
    		
	  </div>
   </body>
</html>
