<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">    <link rel="stylesheet" href="style.css">
</head>
<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
		</div>
    <div id="tudo">
        <?php include 'conexao.php';?>
        <div id="cabeca">
            <div id="numeracao">
                <blockquote><label>4/8</label>
            </div>
        </div>
        <div id="conteudo">
         <div id="fonta">   <h2>Você se alimenta bem?</h2></div>
            <FORM method="post" action="10-alimenta2.php">
			
			
			     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Observação:<br/></strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;a. <strong>Diariamente<br/></strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;b. <strong> 3 a 6 vezes por semana <br/></strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;c. <strong> 1 a 2 vezes por semana<br/></strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;d. <strong>3 vezes ao mês<br/></strong>
                <br>
				<center>
				<br/>
                <div id="tabelaQuestionario">
				<TABLE border="1">
                    <TR>
                        <TD><strong>Itens</TD>
                        <TD><strong><center>Com que frequência você: </TD>
                        <TD><center><strong>a</strong></TD>
                        <TD><center><strong>b</strong></TD>
                        <TD><center><strong>c</strong></TD>
                        <TD><center><strong>d</strong></TD>
                    </TR>
					
                    <TR id="cinza">
                        <TD><center>1. </TD>
                        <TD>Consome três ou mais porções de frutas frescas ou sucos de fruta natural?</TD>
                        <INPUT type="hidden" value="" id="q1" name="q1"/>
                        <TD><INPUT type="radio" value="a" id="q1" name="q1" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q1" name="q1" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q1" name="q1" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q1" name="q1" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>2. </TD>
                        <TD>Consome folhas verdes cruas ou cozidas?</TD>
                        <INPUT type="hidden" value="" id="q2" name="q2"/>
                        <TD><INPUT type="radio" value="a" id="q2" name="q2" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q2" name="q2" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q2" name="q2" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q2" name="q2" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>3. </TD>
                        <TD>Consome carnes vermelhas magras?</TD>
                        <INPUT type="hidden" value="" id="q3" name="q3"/>
                        <TD><INPUT type="radio" value="a" id="q3" name="q3" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q3" name="q3" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q3" name="q3" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q3" name="q3" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>4. </TD>
                        <TD>Consome carnes vermelhas gordas?</TD>
                        <INPUT type="hidden" value="" id="q4" name="q4"/>
                        <TD><INPUT type="radio" value="a" id="q4" name="q4" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q4" name="q4" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q4" name="q4" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q4" name="q4" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>5. </TD>
                        <TD>Consome peito de frango, peixes, peito de peru ou refeições(sem carne) com feijão, lentilha, ervilha, grão de bico ou soja?</TD>
                        <INPUT type="hidden" value="" id="q5" name="q5"/>
                        <TD><INPUT type="radio" value="a" id="q5" name="q5" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q5" name="q5" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q5" name="q5" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q5" name="q5" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>6. </TD>
                        <TD>Consome doces?</TD>
                        <INPUT type="hidden" value="" id="q6" name="q6"/>
                        <TD><INPUT type="radio" value="a" id="q6" name="q6" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q6" name="q6" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q6" name="q6" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q6" name="q6" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>7. </TD>
                        <TD>Consome pelo menos um copo de leite, um pote de iogurte ou uma fatia de queijo</TD>
                        <INPUT type="hidden" value="" id="q7" name="q7"/>
                        <TD><INPUT type="radio" value="a" id="q7" name="q7" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q7" name="q7" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q7" name="q7" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q7" name="q7" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>8. </TD>
                        <TD>Consome pelo menos duas porções de vegetais crus, cozidos ou assados (exceto frito)</TD>
                        <INPUT type="hidden" value="" id="q8" name="q8"/>
                        <TD><INPUT type="radio" value="a" id="q8" name="q8" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q8" name="q8" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q8" name="q8" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q8" name="q8" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>9. </TD>
                        <TD>Consome refrigerante?</TD>
                        <INPUT type="hidden" value="" id="q9" name="q9"/>
                        <TD><INPUT type="radio" value="a" id="q9" name="q9" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q9" name="q9" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q9" name="q9" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q9" name="q9" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>10. </TD>
                        <TD>Consome pelo menos quatro porções de pães, cereais matinais</TD>
                        <INPUT type="hidden" value="" id="q10" name="q10"/>
                        <TD><INPUT type="radio" value="a" id="q10" name="q10" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q10" name="q10" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q10" name="q10" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q10" name="q10" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>11. </TD>
                        <TD>Consome mais caloria do que seu corpo precisa?</TD>
                        <INPUT type="hidden" value="" id="q11" name="q11"/>
                        <TD><INPUT type="radio" value="a" id="q11" name="q11" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q11" name="q11" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q11" name="q11" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q11" name="q11" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>12. </TD>
                        <TD>Consome frituras ou outros alimentos gordurosos?</TD>
                        <INPUT type="hidden" value="" id="q12" name="q12"/>
                        <TD><INPUT type="radio" value="a" id="q12" name="q12" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q12" name="q12" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q12" name="q12" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q12" name="q12" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>13. </TD>
                        <TD>Consome folhas verdes escuras, cenoura, mamão, manga, abóbora?</TD>
                        <INPUT type="hidden" value="" id="q13" name="q13"/>
                        <TD><INPUT type="radio" value="a" id="q13" name="q13" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q13" name="q13" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q13" name="q13" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q13" name="q13" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>14. </TD>
                        <TD>Consome alimentos integrais (arroz, outros cereais integrais, farelo de trigo, pão integral, massas integrais)?</TD>
                        <INPUT type="hidden" value="" id="q14" name="q14"/>
                        <TD><INPUT type="radio" value="a" id="q14" name="q14" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q14" name="q14" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q14" name="q14" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q14" name="q14" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>15. </TD>
                        <TD>Consome mais de duas colheres de sopa por dia de açúcar nas suas bebidas (sucos, chá, leite ou café)?</TD>
                        <INPUT type="hidden" value="" id="q15" name="q15"/>
                        <TD><INPUT type="radio" value="a" id="q15" name="q15" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q15" name="q15" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q15" name="q15" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q15" name="q15" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>16. </TD>
                        <TD>Consome mais de três xícaras pequenas de café?</TD>
                        <INPUT type="hidden" value="" id="q16" name="q16"/>
                        <TD><INPUT type="radio" value="a" id="q16" name="q16" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q16" name="q16" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q16" name="q16" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q16" name="q16" /></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>17. </TD>
                        <TD>Consome pelo menos três a quatro refeições por dia?</TD>
                        <INPUT type="hidden" value="" id="q17" name="q17"/>
                        <TD><INPUT type="radio" value="a" id="q17" name="q17" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q17" name="q17" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q17" name="q17" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q17" name="q17" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>18. </TD>
                        <TD>Consome mais do que 120g - um bife (mulheres) ou 180g - um bife e meio (homens) de carne, frango, peru, peixe, etc.?</TD>
                        <INPUT type="hidden" value="" id="q18" name="q18"/>
                        <TD><INPUT type="radio" value="a" id="q18" name="q18" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q18" name="q18" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q18" name="q18" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q18" name="q18" required/></TD>
                    </TR>
                    <TR id="cinza">
                        <TD><center>19. </TD>
                        <TD>Pula o café da manhã?</TD>
                        <INPUT type="hidden" value="" id="q19" name="q19"/>
                        <TD><INPUT type="radio" value="a" id="q19" name="q19" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q19" name="q19" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q19" name="q19" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q19" name="q19" required/></TD>
                    </TR>
                    <TR>
                        <TD><center>20. </TD>
                        <TD>Consome sanduíches em lanchonetes fast food?</TD>
                        <INPUT type="hidden" value="" id="q20" name="q20"/>
                        <TD><INPUT type="radio" value="a" id="q20" name="q20" required/></TD>
                        <TD><INPUT type="radio" value="b" id="q20" name="q20" required/></TD>
                        <TD><INPUT type="radio" value="c" id="q20" name="q20" required/></TD>
                        <TD><INPUT type="radio" value="d" id="q20" name="q20" required/></TD>
                    </TR>
                </TABLE>
				</div>
				</center>
				
				Fonte: Nahas (2013, p. 243).

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
					
                <?php mysqli_close($con) ?>
            </FORM>

        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
		<br>
    </div>
</body>
</html>