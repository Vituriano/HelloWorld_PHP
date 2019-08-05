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
       <div id="tudo">

			<div id="cabeca">
		<figure align= "left">
			<img src= "COLA.png">
		</figure>
        </div>
        <div id="conteudo">
		<FORM method="post" action="agradecimento_tale.php">
            <h2>Termo de Assentimento Livre e Esclarecido</h2>
            <p>
              Você está sendo convidado (a) como voluntário (a) a participar da pesquisa
“AVALIAÇÃO DIGITAL DA QUALIDADE DE VIDA DE ESTUDANTES DO ENSINO
BÁSICO, TÉCNICO E TECNÓLOGICO”. Nesta pesquisa pretendemos analisar as
contribuições da informatização de ferramentas avaliativas do estilo de vida, hábitos
alimentares e nível de estresse, no processo educativo de jovens de curso técnico integrado
ao ensino médio.
            </p>
            <ul>
                <li>
                    Os riscos de sua participação podem ser representados num constrangimento quando da abordagem, da coleta de dados e, no momento em
                     que os dados interpretados forem publicados, você nele se reconhecer. No entanto, os benefícios serão representados na
                     interpretação dos resultados gerados pelo programa sobre a situação específica do pesquisado, que poderá mudar seus hábitos
                     alimentares e suas atividades físicas, o que poderá levá-lo a ter melhor controle do estresse e a consequente qualidade de vida;
                </li>
            </ul>
            <p>
                Caso tenha qualquer dúvida em relação à pesquisa, por favor, entre em contato com os pesquisadores pelo e-mail ou telefone do
                pesquisador principal. <BR />
            </p>

            <br />
            <div id="localdata">
                <script type="text/javascript" language="JavaScript">
                    var now = new Date();

                    mydate = new Date();
                    myday = mydate.getDay();
                    mymonth = mydate.getMonth();
                    myweekday = mydate.getDate();
                    weekday = myweekday;
                    myyear = mydate.getFullYear();

                    // Tratamento dos Dias da Semana
                    if(myday == 0)
                        day = " Domingo, "
                    else if(myday == 1)
                        day = " Segunda Feira, "
                    else if(myday == 2)
                        day = " Terça Feira, "
                    else if(myday == 3)
                        day = " Quarta Feira, "
                    else if(myday == 4)
                        day = " Quinta Feira, "
                    else if(myday == 5)
                        day = " Sexta Feira, "
                    else if(myday == 6)
                        day = " Sábado, "

                    //Tratamento dos Meses
                    if(mymonth == 0)
                        month = " de Janeiro de "
                    else if(mymonth ==1)
                        month = " de Fevereiro de "
                    else if(mymonth ==2)
                        month = " de Março de "
                    else if(mymonth ==3)
                        month = " de April de "
                    else if(mymonth ==4)
                        month = " de Maio de "
                    else if(mymonth ==5)
                        month = " de Junho de "
                    else if(mymonth ==6)
                        month = " de Julho de "
                    else if(mymonth ==7)
                        month = " de Agosto de "
                    else if(mymonth ==8)
                        month = " de Setembro de "
                    else if(mymonth ==9)
                        month = " de Outubro de "
                    else if(mymonth ==10)
                        month = " de Novembro de "
                    else if(mymonth ==11)
                        month = " de Dezembro de "

                    document.write('Porto Velho, ' + myweekday + month + myyear);
                </script>
          </div>

		   </div>
			 <br>
			<p>

            <center>
			 <br><br><br><br>


										<table border=0>
							   <tr>
								 <td>
								  <?php $id_identidade = $_POST['pk_id_identifica'];?>
									<INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" />
								    <INPUT type="submit" class='N_concordo' value="NÃO CONCORDO" name="submit" />
									 </FORM>
								 </td>
								 <td>
								 </td>
								 <td>
								 <FORM method="post" action="5-afh1.php">
								 <?php $id_identidade = $_POST['pk_id_identifica'];?>
									<INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identidade; ?>" />
								 <INPUT type="submit" class='botao01' value="CONCORDO" name="submit" />
								 </FORM>
								 </td>
							   </tr>
						</table>
			</FORM>
			</center>
            </p>
				<?php mysqli_close($con);?>
				</div>
        <br><br><br><br>
		<div id="rodape">
            <?php include 'rodape.php';?>
        </div>
<br>
</body>
</html>