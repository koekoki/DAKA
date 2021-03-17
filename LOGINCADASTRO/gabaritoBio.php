<?php
session_start();

include("conexao.php");
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
			<a class="email" >  <?php  if(isset($_SESSION['Email'])){
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
            
            $q1= "SELECT * from alternativa where Certa = 1 and IdQuestao between 61 and 75 ";
            $ansresults = mysqli_query($connect,$q1);

			$q2= "SELECT * from questao where idMateria = 6";
            $ansresults2 = mysqli_query($connect,$q2);
			
			$q3= "SELECT DISTINCT resumo from alternativa where IdQuestao between 61 and 75";
            $ansresults3 = mysqli_query($connect,$q3);

            $i = 61;
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
				$rows2 = mysqli_fetch_array($ansresults3);
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
								  $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $i, '1', '3')";
								  $salvar = mysqli_query($connect, $sql);	
										  
						  }else{
							  $counter++;
							  ?>
							  
							<li class="espaçoEnunciado"><p class = "EnunciadoErrado"><?php echo $rows1['Enunciado'];?><br></p>
							  Desculpe! você errou<br>Resposta correta:<p class="negrito"><?php echo $rows['resposta']?><br><br></p><p>
							  <?php echo "Explicação: ".$rows2['resumo']?></p> <br><br></li>
							  <div class="linha"></div>
								
							
							  <?php
							  $email = $_SESSION['Email'];
							  $sql = "insert into historico (Email, IdQuestao, Acertou, idArea) values ('$email', $i, '0', '3')";
							  $salvar = mysqli_query($connect, $sql);	
						  }					
					  $i++;		
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
			  <a  href="escolhalogado.php">Voltar</a>
</div>
	
            </div>
    		


	  </div>
   </body>
</html>

