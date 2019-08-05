<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
</head>
				


<body  style= "background:rgb(82,82,82)">

    <div id="tudo">
        <?php include 'conexao.php';?>
        <div id="cabeca">
		<figure align= "left">	
		<img src= "COLA.png">
		</figure>
            <div id="numeracao">
               <blockquote>  <label>2/8</label>
            </div>
        </div>
        <div id="conteudo">
		<div id='fonta'>
            <h2>Atividades Físicas Habituais</h2>
			</div>
            <FORM method="post" action="6-afh2.php">
                <center>
				<div id="tabelaQuestionario">
				<TABLE border="1" align='center'>
                    <TR>
                        <TD colspan='2'></TD>
                        <TD colspan='2'><strong>Respostas</TD>
                    </TR>
                    <TR>
                        <TD><strong>Item</TD>
                        <TD><strong><center>Atividades Ocupacionais Diárias</TD>
                        <TD><strong>Sim</TD>
                        <TD><strong>Não</TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>1. </TD>
                        <TD>Eu geralmente vou e volto do trabalho (ou do instituto) caminhando ou de bicicleta (ao menos 800 metros cada percurso)</TD>
                        <INPUT type="hidden" value="" id="q1" name="q1"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q1" name="q1" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q1" name="q1" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>2. </TD>
                        <TD>Eu geralmente uso as escadas ao invés do elevador</TD>
                        <INPUT type="hidden" value="" id="q2" name="q2"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q2" name="q2" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q2" name="q2" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>3. </TD>
                        <TD>Minhas atividades diárias podem ser descritas como:</TD>
                        <TD colspan='2'></TD>
                    </TR>
                    <TR>
						<TD></TD>
						<TD> a. Passo a maior parte do tempo sentado e, quando muito, caminho distâncias curtas.</TD>
                        <INPUT type="hidden" value="" id="q3a" name="q3a"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q3a" name="q3a" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q3a" name="q3a" required/></TD>
                    </TR>
                    <TR id="cinza">
						<TD></TD>
						<TD> b. Na maior parte do dia realizo atividades físicas moderadas, como caminhar rápido ou executar tarefas manuais.</TD>
                        <INPUT type="hidden" value="" id="q3b" name="q3b"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q3b" name="q3b" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q3b" name="q3b" required/></TD>
                    </TR>
                    <TR>
                        <TD></TD>
						<TD>c. Diariamente realizo atividades físicas intensas (trabalho pesado).</TD>
                        <INPUT type="hidden" value="" id="q3c" name="q3c"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q3c" name="q3c" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q3c" name="q3c" required/></TD>
                    </TR>
                  

                        

                    <TR id="cinza">
                        <TD><strong>Item</TD>
                       <TD><STRONG><center>Atividades de Lazer</TD>
                        <TD> </TD>
                        <TD> </TD>
                    </TR>
                   
                    <TR>
                        <TD><center>4. </TD>
                        <TD>Meu lazer inclui atividades físicas leves, como passear de bicicleta ou caminhar (duas ou mais vezes por semana)</TD>
                        <INPUT type="hidden" value="" id="q4" name="q4"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q4" name="q4" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q4" name="q4" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>5. </TD>
                        <TD>Ao menos uma vez por semana participo de algum tipo de dança</TD>
                        <INPUT type="hidden" value="" id="q5" name="q5"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q5" name="q5" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q5" name="q5" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>6. </TD>
                        <TD>Quando sob tensão, faço exercícios para relaxar</TD>
                        <INPUT type="hidden" value="" id="q6" name="q6"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q6" name="q6" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q6" name="q6" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>7. </TD>
                        <TD>Ao menos duas vezes por semana faço ginástica localizada</TD>
                        <INPUT type="hidden" value="" id="q7" name="q7"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q7" name="q7" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q7" name="q7" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>8. </TD>
                        <TD>Participo de aulas de ioga ou tai-chi-chuan regularmente</TD>
                        <INPUT type="hidden" value="" id="q8" name="q8"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q8" name="q8" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q8" name="q8" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>9. </TD>
                        <TD>Faço musculação duas ou mais vezes por semana</TD>
                        <INPUT type="hidden" value="" id="q9" name="q9"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q9" name="q9" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q9" name="q9" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>10. </TD>
                        <TD>Jogo tênis, basquete, futebol ou outro esporte recreacional, 30 minutos ou mais por jogo:</TD>
                        <TD colspan='2'></TD>
                    </TR>
                    <TR id="cinza">
                        <TD></TD>
                        <TD>a. uma vez por semana</TD>
                        <INPUT type="hidden" value="" id="q10a" name="q10a"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q10a" name="q10a" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q10a" name="q10a" required/></TD>
                    </TR>
                    <TR>
                        <TD></TD>
                        <TD>b. duas vezes por semana</TD>
                        <INPUT type="hidden" value="" id="q10b" name="q10b"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q10b" name="q10b" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q10b" name="q10b" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD></TD>
                        <TD>c. três ou mais vezes por semana</TD>
                        <INPUT type="hidden" value="" id="q10c" name="q10c"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q10c" name="q10c" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q10c" name="q10c" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>11. </TD>
                        <TD>Participo de exercícios aeróbicos fortes (correr, pedalar, remar, nadar) 20 minutos ou mais por sessão:</TD>
                        <TD colspan='2'></TD>
                    </TR>
                    <TR id="cinza">
                        <TD></TD>
                        <TD>a. uma vez por semana</TD>
                        <INPUT type="hidden" value="" id="q11a" name="q11a"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q11a" name="q11a" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q11a" name="q11a" required/></TD>
                    </TR>
                    <TR>
                        <TD></TD>
                        <TD>b. duas vezes por semana</TD>
                        <INPUT type="hidden" value="" id="q11b" name="q11b"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q11b" name="q11b" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q11b" name="q11b" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD></TD>
                        <TD>c. três ou mais vezes por semana</TD>
                        <INPUT type="hidden" value="" id="q11c" name="q11c"/>
                        <TD><center><INPUT type="radio" value="Sim" id="q11c" name="q11c" required/></TD>
                        <TD><center><INPUT type="radio" value="Nao" id="q11c" name="q11c" required/></TD>
                    </TR>
                </TABLE>
				</div>
				Fonte: Nahas (2013, p. 55).
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;
				</center>
  
                  			<?php
                        $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?> 
					
					</div>
						<center>
							<table border="0">
							   <tr>
								 <div id="botaoResponsivo">
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 </div>
								 <td>
								  <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" />
								 </td>
								 <div id="botaoResponsivo">
								 <td>
								 <INPUT type="submit" class='botao01' value="Continuar" name="submit" />
								 </td>
								 </div>
							   </tr>
							  </table>
						</center>
					
                <?php mysqli_close($con); ?>
            </FORM>
        

        <div id="rodape">
                <?php include 'rodape.php';?>
   	   </div>
	   <br>
    </div>
</body>
</html>