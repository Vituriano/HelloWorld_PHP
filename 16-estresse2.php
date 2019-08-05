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
            <?php
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];
                $q7 = $_POST['q7'];
                $q8 = $_POST['q8'];
                $q9 = $_POST['q9'];
                $q10 = $_POST['q10'];
                $id_identifica = $_POST['pk_id_identifica'];
                
                $query = "INSERT INTO tb_estresse (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, pk_id_identifica) 
                VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$id_identifica')";
                
                if (mysqli_query($con, $query)) {
                    //echo $id_identifica;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);


                $resultado=0;
                if ($q1=="Sempre") {
                    $resultado = $resultado+4;
                } elseif ($q1=="Quase Sempre") {
                    $resultado = $resultado+3;
                } elseif ($q1=="às Vezes") {
                    $resultado = $resultado+2;
                } elseif ($q1=="Nunca") {
                    $resultado = $resultado+1;
                }

                if ($q2=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q2=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q2=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q2=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q3=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q3=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q3=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q3=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q4=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q4=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q4=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q4=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q5=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q5=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q5=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q5=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q6=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q6=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q6=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q6=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q7=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q7=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q7=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q7=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q8=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q8=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q8=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q8=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q9=="Sempre") {
                    $resultado = $resultado+1;
                } elseif ($q9=="Quase Sempre") {
                    $resultado = $resultado+2;
                } elseif ($q9=="às Vezes") {
                    $resultado = $resultado+3;
                } elseif ($q9=="Nunca") {
                    $resultado = $resultado+4;
                }
                
                if ($q10=="Sempre") {
                    $resultado = $resultado+4;
                } elseif ($q10=="Quase Sempre") {
                    $resultado = $resultado+3;
                } elseif ($q10=="às Vezes") {
                    $resultado = $resultado+2;
                } elseif ($q10=="Nunca") {
                    $resultado = $resultado+1;
                }
                ?>
            
			 <blockquote> <blockquote> 
			<div id="tabelaa" >
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
					
					echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Sua pontuação total: ' . $resultado .$y.'<br />';
					if ($resultado<15) {
						echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Inferiores a 15 pontos indicam vulnerabilidade a'.$y.$ftd.$ftr; 
						echo $tr.$td.$tr.$td.$nbsp.$t.'este tipo de estresse.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
				   } elseif ($resultado<25) {
						echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'veja em que situações você deve procurar reagir'.$y.$ftd.$ftr;
						echo $tr.$td.$tr.$td.$nbsp.$t.'de forma mais tranquila.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
				   } else{
						echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Está no caminho certo!'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
					}
				?>
							</div>
            <br>
							<center>
				<div id="tabelp">
				<table border="0">
            <tr><td>Fonte: Adaptado de Nahas (2013, p. 263).</td></tr>
							</table>
				</div>
				</center>
				<br />
				<br/>
            <FORM method="post" action='17-estilo1.php' id="continuar">
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
        </div>
   <br><br><br><br>


    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br/> 
	 </div>
</body>
</html>