<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <meta content="text/html"; charset=utf-8 />
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
                <blockquote><label>7/8</label>
            </div>
        </div>

        <div id="conteudo">
			<div id ="fonta"><h2>Estresse</h2></div><br>
            <FORM method="post" action="16-estresse2.php">
                <center>
				<div id="tabelaQuestionario">
				<TABLE border="1">
				
                    <TR>
                        <TD><strong><center>Itens</TD>
                        <TD><strong><center>Estresse</TD>
                        <TD><strong><center>Nunca</TD>
                        <TD><strong><center>Às vezes</TD>
                        <TD><strong><center>Quase Sempre</TD>
                        <TD><strong><center>Sempre</TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>1.</TD>
                        <TD>Quando eu não posso fazer alguma coisa do meu jeito, eu simplesmente me adapto e faço do modo que é possível.</TD>
                        <INPUT type="hidden" value="" id="q1" name="q1"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q1" name="q1"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q1" name="q1"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q1" name="q1"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q1" name="q1" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>2.</TD>
                        <TD>Fico nervoso quando dirijo ou estou num carro atrás de alguém que vai muito devagar.</TD>
                        <INPUT type="hidden" value="" id="q2" name="q2"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q2" name="q2"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q2" name="q2"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q2" name="q2"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q2" name="q2" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>3.</TD>
                        <TD>Fico incomodado quando meus planos dependem de outras pessoas.</TD>
                        <INPUT type="hidden" value="" id="q3" name="q3"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q3" name="q3"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q3" name="q3"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q3" name="q3"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q3" name="q3" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>4.</TD>
                        <TD>Sempre que posso evito lugares onde há muitas pessoas</TD>
                        <INPUT type="hidden" value="" id="q4" name="q4"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q4" name="q4"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q4" name="q4"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q4" name="q4"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q4" name="q4" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>5.</TD>
                        <TD>Sinto-me desconfortável quando tenho que esperar em longas filas.</TD>
                        <INPUT type="hidden" value="" id="q5" name="q5"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q5" name="q5"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q5" name="q5"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q5" name="q5"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q5" name="q5" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>6.</TD>
                        <TD>Discussões me deixam alterado.</TD>
                        <INPUT type="hidden" value="" id="q6" name="q6"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q6" name="q6"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q6" name="q6"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q6" name="q6"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q6" name="q6" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>7.</TD>
                        <TD>Fico ansioso quando meus planos não saem do modo como planejei.</TD>
                        <INPUT type="hidden" value="" id="q7" name="q7"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q7" name="q7"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q7" name="q7"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q7" name="q7"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q7" name="q7" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>8.</TD>
                        <TD>Preciso de muito espaço nos lugares onde vivo ou trabalho.</TD>
                        <INPUT type="hidden" value="" id="q8" name="q8"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q8" name="q8"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q8" name="q8"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q8" name="q8"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q8" name="q8" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>9.</TD>
                        <TD>Odeio ser interrompido quando estou ocupado em uma tarefa.</TD>
                        <INPUT type="hidden" value="" id="q9" name="q9"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q9" name="q9"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q9" name="q9"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q9" name="q9"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q9" name="q9" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>10.</TD>
                        <TD>Acredito que vale a pena ser otimista e esperar por boas coisas.</TD>
                        <INPUT type="hidden" value="" id="q10" name="q10"/>
                        <TD><center><INPUT type="radio" value="Nunca" id="q10" name="q10"/></TD>
                        <TD><center><INPUT type="radio" value="às Vezes" id="q10" name="q10"/></TD>
                        <TD><center><INPUT type="radio" value="Quase Sempre" id="q10" name="q10"/></TD>
                        <TD><center><INPUT type="radio" value="Sempre" id="q10" name="q10" required/></TD>
                    </TR>
                </TABLE>
				</div>
					</center>
					Fonte: Adaptado de Nahas (2013, p. 263).
					<br/> <br /> <br /> <br /> <br /> <br /> 
                                  <?php
                       $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?>

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
						        	<?php
				mysqli_close($con);
            ?>
     

            </FORM>
        </div>

        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
		<br/> 
    </div>
</body>
</html>