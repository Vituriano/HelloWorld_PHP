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
			<blockquote><label>6/8</label>
			</div>
        </div>

        <div id="conteudo">
            <div id="fonta"><h2>Estágios de Mudança de Comportamento - Atividade Física</h2></div><br><br>
            			<div id="tabelaa" >
					
					<?php  
									$table = "<table align='center'>";
					$ftable = '</table>';
					$tr = '<tr>';
					$ftr = '</tr>';
					$td = '<td>';
					$ftd = '</td>';
					$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';		
				$t = "<center><font size='5' face='Comic Sans MS'> ";
				$y= "</font></center>";
				if (!empty($_POST['pratica'])){
					$pratica = $_POST['pratica'];
					if($pratica == "s"){
						echo $table;
						echo $tr.$td.$nbsp.$t."Você está no Estágio de Manutenção<br/><br/><div id='emoji'><img src='feliz.png'></div>".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						$comportamento="Estágio de Manutenção";
					}else if($pratica == "n"){
						echo $table;
						echo $tr.$td.$nbsp.$t."Você está no Estágio de Ação  <br/><br/><div id='emoji'><img src='feliz.png'>".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						$comportamento="Estágio de Ação";
					}
				}
				
				if (!empty($_POST['importante'])){
					$importante = $_POST['importante'];
					if($importante == "n"){
						echo $table;
						echo $tr.$td.$nbsp.$t."Você está no Estágio de pré-contemplação <br/><br/><div id='emoji'><img src='triste.jpg'>".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						$comportamento="Estágio de pré-contemplação";
					}
				}
				
				if (!empty($_POST['Pretende'])){
					$Pretende = $_POST['Pretende'];
					if($Pretende== "s"){
						echo $table;
						echo $tr.$td.$nbsp.$t."Você está no Estágio de preparação <br/><br/><div id='emoji'><img src='serio.png'>".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						$comportamento="Estágio de preparação";
					}else if($Pretende == "n"){
						echo $table;
						echo $tr.$td.$nbsp.$t."Você está no Estágio contemplação <br/><br/><div id='emoji'><img src='serio.png'>".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						$comportamento="Estágio de contemplação";
				}
				}
				if (!empty($_POST['importante'])){
					$importante = $_POST['importante'];
				}
				 $id_identifica = $_POST['pk_id_identifica'];
                
                $query = "INSERT INTO tb_comportamento (comportamento, pk_id_identifica) 
                VALUES ('$comportamento', '$id_identifica')";
              
			 
			 			
              if (mysqli_query($con, $query)) {
                    //echo $id_identifica;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);
			
		     ?>
            </div>
            <p><br /><br />Considere-se fisicamente ativo se:</p>
            <div id="tabelp">
			<ol style="list-style: lower-alpha">
                <li>Praticar exercícios físicos (ginástica, musculação, corrida, natação) ou esportes vigorosos (futebol, basquete, futsal) três ou mais vezes por semana, por 20 minutos ou mais por sessão;</li>
                <li>Acumular 30 minutos ou mais de atividades físicas moderadas (como caminhar rápido, lavar o carro, subir escadas, fazer faxina etc.) em cinco ou mais dias da semana. Isto inclui atividades em casa, no trabalho ou no deslocamento de um local para o outro durante o dia. Pode ser feito de uma só vez (30 ou mais minutos), em duas sessões de 15 minutos ou três vezes de 10 minutos ao longo do dia;</li>
                <li>Acumular ao longo da semana 150 minutos ou mais de atividades físicas moderadas e vigorosas em pelo menos 3 dias da semana.</li>
            </ol>
            <p>Fonte: Nahas (2013, p. 163).</p>
			</div>
             
</div>
            <FORM method="post" action='15-estresse1.php' id="continuar">
						<center>
							<table border="0">
							   <tr>
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 <td>
								  <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identifica; ?>" />
								 </td>
								 <td>
								 <INPUT type="submit" class='botao01' value="Continuar" name="submit" />
								 </td>
							   </tr>
							  </table>
						</center>
            </FORM>
        



    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	
	<br>
	    </div>
</body>
</html>