<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
</head>
<?php                 $id_identifica = $_POST['pk_id_identifica'];
?>
<body  style= "background:rgb(82,82,82)">
    <div id="tudo">
            <?php include 'conexao.php';?>
        <div id="cabeca">
		<figure align= "left">	
		<img src= "COLA.png">
		</figure>
            <div id="numeracao">
               <blockquote> <label>2/8</label>
            </div>
        </div>

        <div id="conteudo">
		<div id="fonta">
            <h2>Atividades Físicas Habituais</h2>
			</div>
			
            <?php
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3a = $_POST['q3a'];
                $q3b = $_POST['q3b'];
                $q3c = $_POST['q3c'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];
                $q7 = $_POST['q7'];
                $q8 = $_POST['q8'];
                $q9 = $_POST['q9'];
                $q10a = $_POST['q10a'];
                $q10b = $_POST['q10b'];
                $q10c = $_POST['q10c'];
                $q11a = $_POST['q11a'];
                $q11b = $_POST['q11b'];
                $q11c = $_POST['q11c'];
                
                $query = "INSERT INTO tb_afh (q1, q2, q3a, q3b, q3c, q4, q5, q6, q7, q8, q9, q10a, q10b, q10c, q11a, q11b, q11c, pk_id_identifica)
                VALUES ('$q1', '$q2', '$q3a', '$q3b', '$q3c', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10a', '$q10b', '$q10c', '$q11a', '$q11b', '$q11c', '$id_identifica')";
                
                if (mysqli_query($con, $query)) {
                    //echo $id_identifica;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);

                $resultado=0;
                if ($q1=="Sim") {
                    $resultado = $resultado+3;
                }
                if ($q2=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q3a=="Sim") {
                    $resultado = $resultado+0;
                }
                if ($q3b=="Sim") {
                    $resultado = $resultado+4;
                }
                if ($q3c=="Sim") {
                    $resultado = $resultado+9;
                }
                if ($q4=="Sim") {
                    $resultado = $resultado+2;
                }
                if ($q5=="Sim") {
                    $resultado = $resultado+2;
                }
                if ($q6=="Sim") {
                    $resultado = $resultado+1;
                }
                if ($q7=="Sim") {
                    $resultado = $resultado+3;
                }
                if ($q8=="Sim") {
                    $resultado = $resultado+2;
                }
                if ($q9=="Sim") {
                    $resultado = $resultado+4;
                }
                if ($q10a=="Sim") {
                    $resultado = $resultado+2;
                }
                if ($q10b=="Sim") {
                    $resultado = $resultado+4;
                }
                if ($q10c=="Sim") {
                    $resultado = $resultado+7;
                }
                if ($q11a=="Sim") {
                    $resultado = $resultado+3;
                }
                if ($q11b=="Sim") {
                    $resultado = $resultado+6;
                }
                if ($q11c=="Sim") {
                    $resultado = $resultado+10;
                }
            ?>
            
			 <blockquote> <blockquote> 
			<div id="tabelaa" >
                <?php 
					$t = "<font size=5em face=Arial>";
					$y = "</font>";
					$table = "<table align='center'>";
					$ftable = '</table>';
					$tr = '<tr>';
					$ftr = '</tr>';
					$td = '<td>';
					$ftd = '</td>';
					$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				if ($resultado<=5) {                   
					echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t."Sua pontuação total: " . $resultado.$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Você está inativo. Precisa praticar atividades físicas.".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;
				} else if ($resultado<=11) {                 
					echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t."Sua pontuação total: " . $resultado . "<br>".$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Você está pouco ativo.".$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Precisa praticar mais atividades físicas.".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;
                } else if ($resultado<=20) {                   
					echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t."Sua pontuação total: " . $resultado . "<br>".$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Você está moderavelmente ativo.".$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Continue assim para manter sua saúde.".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;
                } else if ($resultado>=21) {
					echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t."Sua pontuação total: " . $resultado . "<br>".$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t."Você está muito ativo. Parabéns!".$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;
                }
				
                ?>
			</div>
            <br /><br /><br />
             
				<center>
				<div id="tabelg">
				<table border="0">
				<tr><td><li>De 00 a 05: Inativo</li></td></tr>
                <tr><td> <li>De 06 a 11: Pouco ativo</li></td></tr>
                <tr><td><li>De 12 a 20: Moderadamente Ativo</li></td></tr>
                <tr><td><li>Superior a 20: Muito Ativo</li></td></tr>
				<tr><td>Fonte: Nahas (2013, p. 55).</td></tr>
				</table>
				</div>
				</center>
				
			
			
 
            <br />
			
			 </div>
			<FORM method="post" action='7-qpaf1.php' >
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
			

       
   
<br>

    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	 </div>
</body>
</html>