<html>
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <link rel="stylesheet" href="style.css">
	</head>
		<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
		<?php include 'conexao.php';?>
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
		</div>
			<div id="conteudo">
			<FORM method="post" action="4-tcle.php">
		<br /><br /><br /><br />
		<center>
		<div id="tabelaa">
            <table>
			<TR></TR><TR></TR><TR></TR><TR></TR><TR></TR><TR><TD><h2>Sua participação é muito importante para o desenvolvimento da pesquisa. Solicitamos a gentileza de, assim que possível, 
						você volte e responda aos questionários. </h2></TD></TR>
						
						<TR><TD><h2>Obrigado!</h2></TD></TR> 

							</table>
		</div>
				
				
				<br /><br /><br /><br /><br /><br /><br />
				
					
				<p>
				<center>
				<p>
				 	<?php $id_identidade = $_POST['pk_id_identifica'];
                     //echo $id_identidade; 
					 ?> 
				<center>

					 
			 <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" />								 
			 <INPUT type="submit" class='hi' value="iniciar pesquisa" name="submit" />
			</form>
				</center>
				</p>
	
			
			
				<br /><br /><br /><br />
			
			</div> 

		 <div id="rodape" >
            <?php include 'rodape.php';?>
		 </div>
		<br>
		
		</div>
	</body>
</html>