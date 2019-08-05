<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <link rel="stylesheet" href="style.css">
	</head>
		<body  style= "background:rgb(82,82,82)">
		<div id="tudo">

			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
		</div>
				
				
        <script language='JavaScript'>
			function formatar(mascara, documento){
				var i = documento.value.length;
				var saida = mascara.substring(0,1);
				var texto = mascara.substring(i)
  
				if (texto.substring(0,1) != saida){
					documento.value += texto.substring(0,1);
				}
			}      
	  function SomenteNumero(e){
            var tecla=(window.event)?event.keyCode:e.which;   
            if((tecla>47 && tecla<58)) return true;
            else{
                if (tecla==8 || tecla==0) return true;
            else  return false;
            }
        }
</script>

        <div id="conteudo">
            <div id='fonta'>
			<h2>Cadastro</h2>
			</div>
		
                <div id="tabela">
				<TABLE align="center">
					<form name="form" action="cadastra2.php" method="POST" >
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
	
					<TR>
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome completo:</TD>
                        <TD><INPUT type="text" id="nome_aluno" name="nome_aluno" required /></TD>
                    </TR>
                    <TR> 
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPF: </TD>
                        <TD><INPUT type="text" id="cpf" name="cpf"  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required /></TD>
                    </TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
                </TABLE>
				</div>
				
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

            </FORM>
        </div>
		

    <br><br><br><br><br><br><br> <br><br><br><br><br><br>
	.
       <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
		<br>
		</div>
</body>
</html>