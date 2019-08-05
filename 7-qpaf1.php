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
            <?php include 'conexao.php';?>
        <div id="cabeca">
		<figure align= "left">	
		<img src= "COLA.png">
		</figure>
            <div id="numeracao">
               <blockquote> <label>3/8</label>
            </div>
        </div>
        <div id="conteudo">
		<div id='fonta'>
            <h2>Questionário de Prontidão Para a Atividade Física (Q-PAF)</h2>
			</div>
            <FORM method="post" action="8-qpaf2.php">
               <div id="tabelaQuestionario">
			  <center> <TABLE border="1">
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
                        <TD><center>1. </TD>
                        <TD>Algum médico já disse que você tem problemas de coração e que só deveria fazer atividades físicas com orientação médica?</TD>
                        <INPUT type="hidden" value="" id="q1" name="q1"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q1" name="q1" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q1" name="q1" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>2. </TD>
                        <TD>Você sente dores no peito quando pratica atividades físicas?</TD>
                        <INPUT type="hidden" value="" id="q2" name="q2"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q2" name="q2" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q2" name="q2" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>3. </TD>
                        <TD>No último mês você teve dores no peito sem que estivesse fazendo atividade física?</TD>
                        <INPUT type="hidden" value="" id="q3" name="q3"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q3" name="q3" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q3" name="q3" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>4. </TD>
                        <TD>Você perde o equilíbrio quando sente tonturas ou você alguma vez perdeu os sentidos (desmaiou)?</TD>
                        <INPUT type="hidden" value="" id="q4" name="q4"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q4" name="q4" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q4" name="q4" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>5. </TD>
                        <TD>Você tem algum problema nas articulações ou nos ossos que poderia piorar se você praticar mais atividades físicas?</TD>
                        <INPUT type="hidden" value="" id="q5" name="q5"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q5" name="q5" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q5" name="q5" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>6. </TD>
                        <TD>Você toma algum remédio para pressão alta ou problemas cardíacos?</TD>
                        <INPUT type="hidden" value="" id="q6" name="q6"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q6" name="q6" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q6" name="q6" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>7. </TD>
                        <TD>Existe qualquer outra razão pela qual você deveria evitar atividades físicas?</TD>
                        <INPUT type="hidden" value="" id="q7" name="q7"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q7" name="q7" required/></TD>
                        <TD><center> <INPUT type="radio" value="Nao" id="q7" name="q7" required/></TD>
                    </TR>
                </TABLE>
				</div>	
					
					<center>
					Fonte: Nahas (2013, p. 68).
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
					</center>
                <br /><?php
                        $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?>
					

				<br>
				 <center>
						<table border="0">
						   <tr>
							 <td>
								<input type="button" class='botao01'  value="Voltar" onClick="JavaScript: window.history.back();">
							 </td>
							 <td>
							 <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" /></a>
							 </td>
							 <td>
							  <INPUT type="submit" class='botao01'  value="Continuar" name="submit" />
							 </td>
						   </tr>
						  </table>
                </center>
					
					<?php mysqli_close($con) ?>

			</FORM>
			<br><br>
</div>
        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
    <br>
</body>
</html>