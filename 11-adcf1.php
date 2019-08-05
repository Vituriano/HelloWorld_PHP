<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">    <meta content="text/html"; charset=utf-8 />
    <link rel="stylesheet" href="style.css">
</head>

		<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
		 <?php include 'conexao.php';?>
					<div id="cabeca">
				<figure align= "left">	
					<img src= "COLA.png">
				</figure>	
                <div id="numeracao">
				<blockquote><label>5/8</label>
				</div>
				</div>


        <div id="conteudo">
            <div id="fonta"><h2>Avaliação da Condição Física</h2></div>
            <FORM method="post" action="12-adcf2.php">
                <div id="tabelaQuestionario">
    <TABLE border="1" align="center">
                    <TR>
                        <TD colspan='2'></TD>
                        <TD colspan='2'><strong>Respostas</TD>
                    </TR>
                    <TR>
                        <TD><center><strong>Itens</TD>
                        <TD><center><strong>Questões</TD>   
                        <TD><strong>Sim</TD>
                        <TD><strong>Não</TD>
                    </TR>
					
					<TR id="cinza">
                        
						
						<TD><center>1.</TD>
                        <TD>Após um período de sono normal, você acorda indisposto?</TD>
                        <INPUT type="hidden" value="" id="q1" name="q1"/>
                        <TD><INPUT type="radio" value="Sim" id="q1" name="q1" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q1" name="q1"/></TD>
                    </TR>
                    <TR>
						 <TD><center>2.</TD>
                        <TD>Você detesta fazer ginástica após se levantar?</TD>
                        <INPUT type="hidden" value="" id="q2" name="q2"/>
                        <TD><INPUT type="radio" value="Sim" id="q2" name="q2" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q2" name="q2"/></TD>
                    </TR>
                    <TR id="cinza">
						 <TD><center>3.</TD>
                        <TD>Ao fazer uma pequena caminhada, sente-se cansado?</TD>
                        <INPUT type="hidden" value="" id="q3" name="q3"/>
                        <TD><INPUT type="radio" value="Sim" id="q3" name="q3" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q3" name="q3"/></TD>
                    </TR>
                    <TR>
						 <TD><center>4.</TD>
                        <TD>Quando faz exercícios físicos, sente dores no corpo no dia seguinte?</TD>
                        <INPUT type="hidden" value="" id="q4" name="q4"/>
                        <TD><INPUT type="radio" value="Sim" id="q4" name="q4" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q4" name="q4"/></TD>
                    </TR>
                    <TR id="cinza">
						 <TD><center>5.</TD>
                        <TD>Após subir uma escada com muitos degraus, sente-se muito fatigado?</TD>
                        <INPUT type="hidden" value="" id="q5" name="q5"/>
                        <TD><INPUT type="radio" value="Sim" id="q5" name="q5" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q5" name="q5"/></TD>
                    </TR>
                    <TR>
						 <TD><center>6.</TD>
                        <TD>Após grande atividade física, sente dores no abdome?</TD>
                        <INPUT type="hidden" value="" id="q6" name="q6"/>
                        <TD><INPUT type="radio" value="Sim" id="q6" name="q6" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q6" name="q6"/></TD>
                    </TR>
                    <TR id="cinza">
						 <TD><center>7.</TD>
                        <TD>Durante o dia você se sente cansado e sem vontade de fazer nada?</TD>
                        <INPUT type="hidden" value="" id="q7" name="q7"/>
                        <TD><INPUT type="radio" value="Sim" id="q7" name="q7" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q7" name="q7"/></TD>
                    </TR>
                    <TR>
						<TD><center>8.</TD>
                        <TD>Após uma corrida prolongada, sente tontura e náusea?</TD>
                        <INPUT type="hidden" value="" id="q8" name="q8"/>
                        <TD><INPUT type="radio" value="Sim" id="q8" name="q8" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q8" name="q8"/></TD>
                    </TR>
                    <TR id="cinza">
						<TD><center>9.</TD>
                        <TD>Nas suas horas de folga prefere dormir em vez de praticar uma atividade física?</TD>
                        <INPUT type="hidden" value="" id="q9" name="q9"/>
                        <TD><INPUT type="radio" value="Sim" id="q9" name="q9" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q9" name="q9"/></TD>
                    </TR>
                    <TR>
						<TD><center>10.</TD>
                        <TD>10. Você detesta se movimentar constantemente?</TD>
                        <INPUT type="hidden" value="" id="q10" name="q10"/>
                        <TD><INPUT type="radio" value="Sim" id="q10" name="q10" required/></TD>
                        <TD><INPUT type="radio" value="Nao" id="q10" name="q10"/></TD>
                    </TR>
                </TABLE>
				</div>
				<center>
				<div id="tabelp">
				<table border="0" style="width: 625px">
            <tr><td>Fonte: Teixeira (1995, p. 17).</td></tr>
							</table>
				</div>
                </center>

                    <?php
                        $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?>
					
					 </div>
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
                <?php mysqli_close($con) ?>
       

        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
	<br>
    </div>
</body>
</html>