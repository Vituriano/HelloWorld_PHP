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
               <blockquote> <label>3/8</label>
            </div>
        </div>
		<div id="conteudoo">
			
			<div id="fonta">
            <center><h2 align="left">Questionário de Prontidão Para a Atividade Física (Q-PAF)</h2></center> <br />
			</div>
			<blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
            <?php
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];
                $q7 = $_POST['q7'];
                $id_identifica = $_POST['pk_id_identifica'];
                
                $query = "INSERT INTO tb_qpaf (q1, q2, q3, q4, q5, q6, q7, pk_id_identifica)
                VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$id_identifica')";
                
                if (mysqli_query($con, $query)) {
                    //echo $id_identifica;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);
            
                $resultado=0;
                if ($q1=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q2=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q3=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q4=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q5=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q6=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q7=="Sim") {
                    $resultado = $resultado+1;
                }
            ?>
				<div id="tabelaa" >
				<br />
				<?php   
					$t = "<font size=5 face=Arial>";
					$y = "</font>";
					$table = "<table align='center'>";
					$ftable = '</table>';
					$tr = '<tr>';
					$ftr = '</tr>';
					$td = '<td>';
					$ftd = '</td>';
					$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';				
                    if ($resultado>0) {
                       echo $t.$table;
					   echo $tr .$tr .$tr .$tr .$tr .$td.$nbsp.'Consulte seu médico antes de tornar-se mais'.$ftd.$ftr.$tr.$td.$nbsp.'ativo(a) fisicamente.'.$ftd.$ftr.$tr .$tr .$tr.$tr;
					   echo $ftable.$y ;
                    } else{
						echo $table;
						echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Você pode considerar-se razoavelmente apto para'.$y.$ftd.$ftr;
						echo $tr.$td.$tr.$td.$nbsp.$t.'praticar atividades físicas, iniciando com moderação'.$y.$ftd.$ftr;
						echo $tr.$td.$tr.$td.$nbsp.$t.'e aumentando gradualmente o que você fizer.'.$y.$ftd.$ftr;
						echo $tr.$td.$tr.$td.$nbsp.$t.'Assim é mais seguro e mais fácil.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
					
					}
                ?>
            </div>

			<br /><br />
			
				 <div id="li">
				 <li font-size: 0.8em;>Se você respondeu SIM a uma ou mais questões, consulte seu médico antes de tornar-se mais ativo(a) fisicamente. <br /></li>
				 <li font-size: 0.8em;>Se você respondeu NÃO a todas as questões, você pode considerar-se razoavelmente apto para praticar atividades físicas, iniciando com moderação e aumentando gradualmente o que você fizer - assim é mais seguro e mais fácil.</li>
				 
			<br/> 
			
			Fonte: Nahas (2013, p. 68).
			</div>
			<br /><br /><br /><br /><br><br><br><br>
			<FORM method="post" action='9-alimenta1.php'>
			<center>
						<table border="0">
						   <tr>
							 <td>
								 <input type="button"  class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
							 </td>
							 <td>
							  <INPUT TYPE="hidden"  NAME="pk_id_identifica" VALUE='<?php echo $id_identifica;?>' />
							 </td>
							 <td>
							  <INPUT type="submit"  class='botao01' value="Continuar"/>
							 </td>
						   </tr>
						  </table>
                </center>
            </FORM>
       </div>
    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	  </div>
</body>
</html>