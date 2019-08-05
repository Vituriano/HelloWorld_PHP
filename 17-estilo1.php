<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
	</head>
<body  style= "background:rgb(82,82,82)">

    <div id="tudo" align="center">
        <?php include 'conexao.php';?>
        <div id="cabeca">
           <figure align= "left">	
			<img src= "COLA.png">
		</figure>	
            <div id="numeracao">
               <blockquote> <label>8/8</label>
            </div>
        </div>
       
			<div id ="fonta"><h2>Perfil do Estilo de Vida</h2></div>
            <FORM method="post" action="18-pentaculo.php">
                <h3>Você...</h3>
				
                <div id="tabelaQuestionario">
				<TABLE border="1" align="center">
                    <TR>
                        <TD align="center"><strong>Atividade Física</TD>
                        <TD><strong>Nunca</TD>
                        <TD><strong>Às vezes</TD>
                        <TD><strong>Quase sempre</TD>
                        <TD><strong>Sempre</TD>
                    </TR>
                    <tr></tr><tr></tr>
                    <TR id="cinza">
                        <TD>... caminha ou pedala como meio de transporte</TD>
                        <INPUT type="hidden" value="" id="a1" name="a1"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a1" name="a1" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a1" name="a1"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a1" name="a1"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a1" name="a1"/></TD>
                    </TR>
                   <TR>
                        <TD>.... realiza atividades físicas moderadas no seu lazer (caminhar, pedalar, dançar)</TD>
                        <INPUT type="hidden" value="" id="a2" name="a2"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a2" name="a2" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a2" name="a2"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a2" name="a2"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a2" name="a2"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... pratica exercícios físicos ou esportes</TD>
                        <INPUT type="hidden" value="" id="a3" name="a3"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a3" name="a3" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a3" name="a3"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a3" name="a3"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a3" name="a3"/></TD>
                    </TR>
                   <TR>
                       <TD>... pratica exercícios físicos ou esportes no instituto </TD>
                        <INPUT type="hidden" value="" id="a4" name="a4"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a4" name="a4" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a4" name="a4"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a4" name="a4"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a4" name="a4"/></TD>
                    </TR>
                   <TR id="cinza">
                         <TD>... valoriza a prática regular de atividades físicas para a sua saúde</TD>
                        <INPUT type="hidden" value="" id="a5" name="a5"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a5" name="a5" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a5" name="a5"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a5" name="a5"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a5" name="a5"/></TD>
                    </TR>
                   <TR>
                        <TD>... faz exercícios de alongamento muscular</TD>
						<INPUT type="hidden" value="" id="a6" name="a6"/>
                        <TD><center><INPUT type="radio" value="nunca" id="a6" name="a6" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="a6" name="a6"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a6" name="a6"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="a6" name="a6"/></TD>
                    </TR>

                    <tr></tr><tr></tr><tr></tr><tr></tr>
                   <TR id="cinza">
                       <TD align="center"><strong>Alimentação</TD>
                        <td colspan="4"></td>
                    </TR>
                    <tr></tr><tr></tr>
                    <TR>
                         <TD>... inclui frutas e sucos naturais em sua alimentação diária</TD>
                        <INPUT type="hidden" value="" id="b1" name="b1"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b1" name="b1" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b1" name="b1"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="b1" name="b1"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b1" name="b1"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... inclui verduras e saladas verdes em sua alimentação diária</TD>
                        <INPUT type="hidden" value="" id="b2" name="b2"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b2" name="b2" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b2" name="b2"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="b2" name="b2"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b2" name="b2"/></TD>
                    </TR>
                   <TR>
                        <TD>... evita ingerir alimentos gordurosos (carnes gordas, frituras, salgadinhos)</TD>
                        <INPUT type="hidden" value="" id="b3" name="b3"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b3" name="b3" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b3" name="b3"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="b3" name="b3"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b3" name="b3"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... evita ingerir alimentos defumados ou com muito sal</TD>
                        <INPUT type="hidden" value="" id="b4" name="b4"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b4" name="b4" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b4" name="b4"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="b4" name="b4"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b4" name="b4"/></TD>
                    </TR>
                   <TR>
                        <TD>... faz suas refeições principais em local calmo, saboreando os alimentos</TD>
                        <INPUT type="hidden" value="" id="b5" name="b5"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b5" name="b5" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b5" name="b5"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="b5" name="b5"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b5" name="b5"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... toma café da manhã completo (não só café preto com pão)</TD>
                        <INPUT type="hidden" value="" id="b6" name="b6"/>
                        <TD><center><INPUT type="radio" value="nunca" id="b6" name="b6" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="b6" name="b6"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="a6" name="b6"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="b6" name="b6"/></TD>
                    </TR>
                    <tr></tr><tr></tr><tr></tr><tr></tr>
                   <TR>
                        <TD align="center"><strong>Controle de Estresse</TD>
                        <td colspan="4"></td>
                    </TR>
                    <tr></tr><tr></tr>
                    <TR id="cinza">
                       <TD>... reserva tempo para relaxar (ao menos 5 minutos todos os dias)</TD>
                        <INPUT type="hidden" value="" id="c1" name="c1"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c1" name="c1" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c1" name="c1"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c1" name="c1"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c1" name="c1"/></TD>
                    </TR>
                   <TR>
                         <TD>.... mantém uma discussão sem alterar-se, mesmo quando contrariado</TD>
                        <INPUT type="hidden" value="" id="c2" name="c2"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c2" name="c2" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c2" name="c2"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c2" name="c2"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c2" name="c2"/></TD>
                    </TR>
                   <TR id="cinza">
                       <TD>... equilibra o tempo dedicado ao trabalho com o tempo dedicado ao lazer</TD>
                        <INPUT type="hidden" value="" id="c3" name="c3"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c3" name="c3" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c3" name="c3"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c3" name="c3"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c3" name="c3"/></TD>
                    </TR>
                   <TR>
                        <TD>... evita levar tarefas para casa ou reduzir o horário de almoço para executá-las</TD>
                        <INPUT type="hidden" value="" id="c4" name="c4"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c4" name="c4" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c4" name="c4"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c4" name="c4"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c4" name="c4"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... evita comer exageradamente por motivos emocionais, como ansiedade ou tristeza</TD>
                        <INPUT type="hidden" value="" id="c5" name="c5"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c5" name="c5" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c5" name="c5"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c5" name="c5"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c5" name="c5"/></TD>
                    </TR>
                   <TR>
                        <TD>... procura organizar-se e priorizar suas tarefas</TD>
                        <INPUT type="hidden" value="" id="c6" name="c6"/>
                        <TD><center><INPUT type="radio" value="nunca" id="c6" name="c6" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="c6" name="c6"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="c6" name="c6"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="c6" name="c6"/></TD>
                    </TR>
                    <tr></tr><tr></tr><tr></tr><tr></tr>


                   <TR id="cinza">
                        <TD align="center"><strong>Relacionamentos</TD>
                        <td colspan="4"></td>
                    </TR>
                    <tr></tr><tr></tr>
                    <TR>
                        <TD>... respeita e busca estar em contato com a natureza</TD>
                        <INPUT type="hidden" value="" id="d1" name="d1"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d1" name="d1" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d1" name="d1"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d1" name="d1"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d1" name="d1"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... procura cultivar amigos e está satisfeito com seus relacionamentos</TD>
                        <INPUT type="hidden" value="" id="d2" name="d2"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d2" name="d2" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d2" name="d2"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d2" name="d2"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d2" name="d2"/></TD>
                    </TR>
                   <TR>
                        <TD>... procura ser ativo em sua comunidade, sentindo-se útil no seu ambiente social</TD>
                        <INPUT type="hidden" value="" id="d3" name="d3"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d3" name="d3" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d3" name="d3"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d3" name="d3"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d3" name="d3"/></TD>
                    </TR>
                   <TR id="cinza">
                       <TD>... tem procurado cultivar o bom relacionamento com colegas de trabalho</TD>
                        <INPUT type="hidden" value="" id="d4" name="d4"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d4" name="d4" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d4" name="d4"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d4" name="d4"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d4" name="d4"/></TD>
                    </TR>
                   <TR>
                         <TD>... é capaz de apreciar as pequenas coisas da vida</TD>
                        <INPUT type="hidden" value="" id="d5" name="d5"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d5" name="d5" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d5" name="d5"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d5" name="d5"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d5" name="d5"/></TD>
                    </TR>
                   <TR id="cinza">
                        <TD>... está satisfeito com a vida que leva</TD>
                        <INPUT type="hidden" value="" id="d6" name="d6"/>
                        <TD><center><INPUT type="radio" value="nunca" id="d6" name="d6" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="d6" name="d6"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="d6" name="d6"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="d6" name="d6"/></TD>
                    </TR>
                    <tr></tr><tr></tr><tr></tr><tr></tr>


                   <TR>
                        <TD align="center"><strong>Comportamento Preventivo</TD>
                        <td colspan="4"></td>
                    </TR>
                    <tr></tr><tr></tr>
                    <TR id="cinza">
                        <TD>... evita fumar</TD>
                        <INPUT type="hidden" value="" id="e1" name="e1"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e1" name="e1" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e1" name="e1"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e1" name="e1"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e1" name="e1"/></TD>
                    </TR>
                   <TR>
                      <TD>... evita beber</TD>
                        <INPUT type="hidden" value="" id="e2" name="e2"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e2" name="e2" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e2" name="e2"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e2" name="e2"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e2" name="e2"/></TD>
                    </TR>
                   <TR id="cinza">
                         <TD>... respeita as normas de trânsito (como pedestre, ciclista ou motorista)</TD>
                        <INPUT type="hidden" value="" id="e3" name="e3"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e3" name="e3" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e3" name="e3"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e3" name="e3"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e3" name="e3"/></TD>
                    </TR>
                   <TR>
                        <TD>... utiliza os equipamentos de proteção e evita expor-se a acidentes de trabalho</TD>
                        <INPUT type="hidden" value="" id="e4" name="e4"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e4" name="e4" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e4" name="e4"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e4" name="e4"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e4" name="e4"/></TD>
                    </TR>
                   <TR id="cinza">
                         <TD>... controla sua pressão arterial e seus níveis de colesterol</TD>
                        <INPUT type="hidden" value="" id="e5" name="e5"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e5" name="e5" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e5" name="e5"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e5" name="e5"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e5" name="e5"/></TD>
                    </TR>
                   <TR>
                        <TD>... tem o hábito de usar filtro solar quando vai à praia ou trabalha exposto(a) ao sol</TD>
                        <INPUT type="hidden" value="" id="e6" name="e6"/>
                        <TD><center><INPUT type="radio" value="nunca" id="e6" name="e6" required/></TD>
                        <TD><center><INPUT type="radio" value="as vezes" id="e6" name="e6"/></TD>
                        <TD><center><INPUT type="radio" value="quase sempre" id="e6" name="e6"/></TD>
                        <TD><center><INPUT type="radio" value="sempre" id="e6" name="e6"/></TD>
                    </TR>
                </TABLE>
				</div>
                
								 				<center>
				<div id="tabelp">
				<table border="0" style="width: 800px">
            <tr><td>Fonte: Adaptado de Nahas, apud Barros, Souza e Cardoso (2008, pp. 49-51).</td></tr>
							</table>
				</div>
                </center>
				
				
				<br /><br /><br /><br /><br />
           
                    <?php
                        $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
                    ?><center>
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
			


        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
	<br>
    </div>
</body>
</html>