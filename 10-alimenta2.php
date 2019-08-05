<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">		<link rel="stylesheet" href="style.css">
</head>

    <div id="tudo">
        <?php include 'conexao.php';?>
		<body  style= "background:rgb(82,82,82)">
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
			</figure>	
            <div id="numeracao">
               <blockquote> <label>4/8</label>
            </div>
        </div>
			
			
			
		

        <div id="conteudo">
            <div id="fonta"><h2>Você se alimenta bem?</h2></div>






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
                $q11 = $_POST['q11'];
                $q12 = $_POST['q12'];
                $q13 = $_POST['q13'];
                $q14 = $_POST['q14'];
                $q15 = $_POST['q15'];
                $q16 = $_POST['q16'];
                $q17 = $_POST['q17'];
                $q18 = $_POST['q18'];
                $q19 = $_POST['q19'];
                $q20 = $_POST['q20'];
                $id_identidade = $_POST['pk_id_identifica'];
                
                $query = "INSERT INTO tb_alimenta (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, pk_id_identifica)
                VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$id_identidade')";
                
                if (mysqli_query($con, $query)) {
                    //echo $id_identidade;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);


                $resultado=0;
                if ($q1=="a") {
                    $resultado = $resultado+10;
                } elseif ($q1=="b") {
                    $resultado = $resultado+5;
                } elseif ($q1=="c") {
                    $resultado = $resultado+1;
                } elseif ($q1=="d") {
                    $resultado = $resultado+0;
                }

                if ($q2=="a") {
                    $resultado = $resultado+10;
                } elseif ($q2=="b") {
                    $resultado = $resultado+5;
                } elseif ($q2=="c") {
                    $resultado = $resultado+1;
                } elseif ($q2=="d") {
                    $resultado = $resultado+0;
                }

                if ($q3=="a") {
                    $resultado = $resultado+2;
                } elseif ($q3=="b") {
                    $resultado = $resultado+4;
                } elseif ($q3=="c") {
                    $resultado = $resultado+8;
                } elseif ($q3=="d") {
                    $resultado = $resultado+10;
                }
                
                if ($q4=="a") {
                    $resultado = $resultado+0;
                } elseif ($q4=="b") {
                    $resultado = $resultado+0;
                } elseif ($q4=="c") {
                    $resultado = $resultado+5;
                } elseif ($q4=="d") {
                    $resultado = $resultado+10;
                }

                if ($q5=="a") {
                    $resultado = $resultado+10;
                } elseif ($q5=="b") {
                    $resultado = $resultado+8;
                } elseif ($q5=="c") {
                    $resultado = $resultado+5;
                } elseif ($q5=="d") {
                    $resultado = $resultado+0;
                }

                if ($q6=="a") {
                    $resultado = $resultado+0;
                } elseif ($q6=="b") {
                    $resultado = $resultado+5;
                } elseif ($q6=="c") {
                    $resultado = $resultado+7;
                } elseif ($q6=="d") {
                    $resultado = $resultado+10;
                }

                if ($q7=="a") {
                    $resultado = $resultado+10;
                } elseif ($q7=="b") {
                    $resultado = $resultado+5;
                } elseif ($q7=="c") {
                    $resultado = $resultado+0;
                } elseif ($q7=="d") {
                    $resultado = $resultado+0;
                }

                if ($q8=="a") {
                    $resultado = $resultado+10;
                } elseif ($q8=="b") {
                    $resultado = $resultado+5;
                } elseif ($q8=="c") {
                    $resultado = $resultado+0;
                } elseif ($q8=="d") {
                    $resultado = $resultado+0;
                }

                if ($q9=="a") {
                    $resultado = $resultado+0;
                } elseif ($q9=="b") {
                    $resultado = $resultado+2;
                } elseif ($q9=="c") {
                    $resultado = $resultado+4;
                } elseif ($q9=="d") {
                    $resultado = $resultado+10;
                }

                if ($q10=="a") {
                    $resultado = $resultado+10;
                } elseif ($q10=="b") {
                    $resultado = $resultado+8;
                } elseif ($q10=="c") {
                    $resultado = $resultado+4;
                } elseif ($q10=="d") {
                    $resultado = $resultado+0;
                }
                
                if ($q11=="a") {
                    $resultado = $resultado+0;
                } elseif ($q11=="b") {
                    $resultado = $resultado+2;
                } elseif ($q11=="c") {
                    $resultado = $resultado+8;
                } elseif ($q11=="d") {
                    $resultado = $resultado+10;
                }

                if ($q12=="a") {
                    $resultado = $resultado+0;
                } elseif ($q12=="b") {
                    $resultado = $resultado+0;
                } elseif ($q12=="c") {
                    $resultado = $resultado+5;
                } elseif ($q12=="d") {
                    $resultado = $resultado+10;
                }

                if ($q13=="a") {
                    $resultado = $resultado+10;
                } elseif ($q13=="b") {
                    $resultado = $resultado+8;
                } elseif ($q13=="c") {
                    $resultado = $resultado+2;
                } elseif ($q13=="d") {
                    $resultado = $resultado+0;
                }

                if ($q14=="a") {
                    $resultado = $resultado+10;
                } elseif ($q14=="b") {
                    $resultado = $resultado+8;
                } elseif ($q14=="c") {
                    $resultado = $resultado+2;
                } elseif ($q14=="d") {
                    $resultado = $resultado+0;
                }

                if ($q15=="a") {
                    $resultado = $resultado+0;
                } elseif ($q15=="b") {
                    $resultado = $resultado+0;
                } elseif ($q15=="c") {
                    $resultado = $resultado+5;
                } elseif ($q15=="d") {
                    $resultado = $resultado+10;
                }

                if ($q16=="a") {
                    $resultado = $resultado+0;
                } elseif ($q16=="b") {
                    $resultado = $resultado+0;
                } elseif ($q16=="c") {
                    $resultado = $resultado+5;
                } elseif ($q16=="d") {
                    $resultado = $resultado+10;
                }
                
                if ($q17=="a") {
                    $resultado = $resultado+10;
                } elseif ($q17=="b") {
                    $resultado = $resultado+5;
                } elseif ($q17=="c") {
                    $resultado = $resultado+2;
                } elseif ($q17=="d") {
                    $resultado = $resultado+0;
                }

                if ($q18=="a") {
                    $resultado = $resultado+0;
                } elseif ($q18=="b") {
                    $resultado = $resultado+2;
                } elseif ($q18=="c") {
                    $resultado = $resultado+4;
                } elseif ($q18=="d") {
                    $resultado = $resultado+10;
                }

                if ($q19=="a") {
                    $resultado = $resultado+0;
                } elseif ($q19=="b") {
                    $resultado = $resultado+2;
                } elseif ($q19=="c") {
                    $resultado = $resultado+4;
                } elseif ($q19=="d") {
                    $resultado = $resultado+10;
                }

                if ($q20=="a") {
                    $resultado = $resultado+0;
                } elseif ($q20=="b") {
                    $resultado = $resultado+2;
                } elseif ($q20=="c") {
                    $resultado = $resultado+4;
                } elseif ($q20=="d") {
                    $resultado = $resultado+10;
                }
                if ($resultado<120) {
                    $interpreta="O seu resultado precisa melhorar.";
                } elseif ($resultado<160) {
                    $interpreta="O seu resultado está bom, mas pode melhorar.";
                } else{
                    $interpreta="O seu resultado está excelente.";
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
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Sua pontuação total: ' . $resultado.$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t.$interpreta.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;  ?>
            </div>   
				
          <br><br>
			<div id="tabelg" >
            <center>
			<table border="0">
               <tr></tr>
               <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> Entre 160 e 200 pontos - Excelente</li></td></tr> 
               <tr><td><li> Entre 120 e 159 pontos - Bom, mas pode melhorar </li></td></tr>
               <tr><td><li> Inferior a 120 pontos - Precisa melhorar bastante</li></td> </tr>
            <tr><td>Fonte: Adaptado de Nahas (2013, p. 243).</td></tr>
			 <tr></tr>
            </table>
			</center>
			</div> 
            <br /><br /><FORM method="post" action='11-adcf1.php' id="continuar">
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
       
   

<br><br><br><br><br>
    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	 </div>
</body>
</html>