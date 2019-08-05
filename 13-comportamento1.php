<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <meta content="text/html"; charset=utf-8 />
    <link rel="stylesheet" href="style.css">
</head>
  <div id="tudo" align="center">
  <?php include 'conexao.php';?>
<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
			            <div id="numeracao">
               <blockquote> <label>6/8</label>
            </div>
		</div>

  

       
            <div id ="fonta"><h2>Estágios de Mudança de Comportamento - Atividade Física</h2></div>
<br>
			 <FORM method="post" action="14-comportamento2.php">
						<script>	 
							 function primeiro(campo){
								 if(campo == "n"){
									 //apaga o radio button
									 document.getElementById("importante").disabled = false;
									 document.getElementById("importante1").disabled = false;
									 document.getElementById("pratica").disabled = true;
									 document.getElementById("pratica1").disabled = true;
									 //cores
									 document.getElementById("branco-importante").style = false;
									 document.getElementById("claro-pratica").style = "color:rgb(220, 220, 220)";
									 document.getElementById("branco-Pretende").style = "color:#FFF";
									 //desmarca os radio buttons
									 document.getElementById("pratica").checked = false;
									 document.getElementById("pratica1").checked = false;

								 }else{
									 //apaga o radio button
									 document.getElementById("importante").disabled = true;
									 document.getElementById("importante1").disabled = true;
									 document.getElementById("pratica").disabled = false;
									 document.getElementById("pratica1").disabled = false;
									 document.getElementById("Pretende").disabled = true;
									 document.getElementById("Pretende1").disabled = true;
									 //cores
									 document.getElementById("branco-importante").style = "color:#FFF";
									 document.getElementById("claro-pratica").style = false;
									 document.getElementById("branco-Pretende").style = "color:#FFF";
									 //desmarca os radio buttons
									 document.getElementById("Pretende").checked =  false; 
									 document.getElementById("Pretende1").checked =  false;
									 document.getElementById("importante").checked = false;
									 document.getElementById("importante1").checked = false;
								 }
							 }
							 function segundo(camp){
								 if(camp == "s"){
									 //apaga o radio button
									 document.getElementById("Pretende").disabled = false;
									 document.getElementById("Pretende1").disabled = false;
									 //cores
									 document.getElementById("branco-Pretende").style = false;
									 document.getElementById("claro-pratica").style = "color:rgb(220, 220, 220)";
									 //desmarca os radio buttons
									 document.getElementById("Pretende").checked =  false; 
									 document.getElementById("Pretende1").checked =  false;
								 }else{
									 //apaga o radio button
									 document.getElementById("Pretende").disabled = true;
									 document.getElementById("Pretende1").disabled = true;
									 //cores
									 document.getElementById("branco-Pretende").style = "color:#FFF";
									 document.getElementById("claro-pratica").style = "color:rgb(220, 220, 220)";
									 //desmarca os radio buttons
									 document.getElementById("Pretende").checked =  false; 
									 document.getElementById("Pretende1").checked =  false;
								 }
							 }
						 </script> 
         
				<center>
				<blockquote><blockquote> <blockquote> <blockquote> <blockquote> <blockquote> <blockquote> <blockquote>
				<div id="tabelaQuestionario">
				 <TABLE border="1">
					 <TR>
						 <TD> <center><strong>Questões</strong></TD>
						 <TD> <center><strong>Sim</strong></TD>
						 <TD> <center><strong>Não</strong></TD>
					 </TR >
					 <tr></tr><tr></tr>
					 <TR id="cinza">
						 <TD>Você tem um estilo de vida fisicamente ativo?</TD>
						 <TD><input name="vida-ativa" id="vida-ativa" type="radio" value="s" onChange="primeiro(this.value)"></TD> 
						 <TD><input name="vida-ativa" type="radio" value="n" onChange="primeiro(this.value)" required/></TD>
						
					 </TR>
					 
					 <TR>
						 <TD id="branco-importante" style="color:#FFF">Você considera a atividade física importante para a sua saúde e bem-estar em geral?</TD> 
						 <TD><input name="importante" id="importante" type="radio" value="s" onChange="segundo(this.value)" disabled = "disabled"></TD> 
						 <TD><input name="importante" id="importante1" type="radio" value="n" onChange="segundo(this.value)" disabled= "disabled" required/></TD>
					 </TR>	
					 
					 <TR id="cinza">
						  <TD id="claro-pratica" style="color:rgb(220, 220, 220)">Você pratica há mais de seis meses?</TD> 
						 <TD><input name="pratica" id="pratica" type="radio" value="s"  disabled= "disabled"></TD> 
						 <TD><input name="pratica" id="pratica1" type="radio" value="n" disabled= "disabled" required/></TD>
					 </TR>	
					 
					 <TR>
						  <TD  id="branco-Pretende" style="color:#FFF">Você pretende começar a prática de atividades físicas nos próximos meses?</TD> 
						 <TD><input name="Pretende" id="Pretende" type="radio" value="s" disabled= "disabled"></TD> 
						 <TD><input name="Pretende" id="Pretende1" type="radio" value="n" disabled= "disabled" required/></TD>
				 </TABLE>
				 </div>				 
				
				<div id="tabelp">
				<table border="0" style="width: 600px">
            <tr><td>Fonte: Adaptado de Nahas (2013, p. 163).</td></tr>
				</table>
				</div>
                </center>
				 
				 
				 

				 
				 <br/>
                    <?php
                       $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?>
					<br><br><br>
						<center>
							<table border="0">
							   <tr>
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 <td>
								  <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" />
								 </td>
								 <td>
								 <INPUT type="submit" class='botao01' value="Continuar" name="submit" />
								 </td>
							   </tr>
							  </table>
						</center>
                 <br><br><br>
				 </div>
				 <?php mysqli_close($con) ?>
			 </FORM>
		 <br><br>
<BR>
		     <div id="rodape">
				 <?php include 'rodape.php';?>
			 </div>	
<br>			 
		 </div>
	</body>
</html>