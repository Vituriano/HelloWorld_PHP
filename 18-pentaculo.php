<?php
//					** CORES E IMAGEM **
{

$imagem = ImageCreate(2080,1000);
$branco = ImageColorAllocate($imagem, 255, 255, 255);
	$verde = ImageColorAllocate($imagem, 0, 139, 0); 
	$verdeFundo = ImageColorAllocate($imagem, 154, 255, 154);
$preto = ImageColorAllocate($imagem, 0, 0, 0);
	$azul = ImageColorAllocate($imagem, 0 ,191 ,255);
	$azulFundo = ImageColorAllocate($imagem, 176, 226, 255);
	$laranja = ImageColorAllocate($imagem, 255, 69 ,0	);
	$laranjaFundo = ImageColorAllocate($imagem, 255, 127, 36);
$red = ImageColorAllocate($imagem, 255, 0, 0);
$vermelhoFundo = ImageColorAllocate($imagem, 255 ,100, 100);
$pink=ImageColorAllocate($imagem,255, 255, 0);
$pinkFundo=ImageColorAllocate($imagem,	255 ,246 ,143);
}			
{
				$q1 = $_POST['a1'];
                $q2 = $_POST['a2'];
                $q3 = $_POST['a3'];
				$q4 = $_POST['a4'];
                $q5 = $_POST['a5'];
                $q6 = $_POST['a6'];
                
                $q7 = $_POST['b1'];
                $q8 = $_POST['b2'];
                $q9 = $_POST['b3'];
                $q10 = $_POST['b4'];
                $q11 = $_POST['b5'];
                $q12 = $_POST['b6'];
                
                $q13 = $_POST['c1'];
                $q14 = $_POST['c2'];
                $q15 = $_POST['c3'];
                $q16 = $_POST['c4'];
                $q17 = $_POST['c5'];
                $q18 = $_POST['c6'];

                $q19 = $_POST['d1'];
                $q20 = $_POST['d2'];
                $q21 = $_POST['d3'];
                $q22 = $_POST['d4'];
                $q23 = $_POST['d5'];
                $q24 = $_POST['d6'];
                
                $q25 = $_POST['e1'];
                $q26 = $_POST['e2'];
                $q27 = $_POST['e3'];
                $q28 = $_POST['e4'];
                $q29 = $_POST['e5'];
                $q30 = $_POST['e6'];

                $id_identifica = $_POST['pk_id_identifica'];
        

               
}             

	//polignos
	{
		//pergunta 1
		{
		$E1P1 = array(1025, 470, // 1
			  979, 409, //2
			  979, 395, //3
			  990, 402);
		$E2P1 = array(1025, 470, //1
			  960, 335, //2
			  936, 325, //3
			  936, 350);
		$E3P1 = array(1025, 470, // 1
			  900, 300, //2
			 914, 270, //3
			 935, 285);
	
                $res_a=0;
                if ($q1=="nunca") {
					$res_a = $res_a+0;
					ImagePolygon($imagem, $E2P1, 4, $preto);
					ImagePolygon($imagem, $E1P1, 4, $preto);
					ImagePolygon($imagem, $E3P1, 4, $preto);
                } elseif ($q1=="as vezes") {
					$res_a = $res_a+1;
					ImagefilledPolygon($imagem, $E1P1, 4, $verde);
					ImagePolygon($imagem, $E2P1, 4, $preto);
					ImagePolygon($imagem, $E1P1, 4, $preto);
					ImagePolygon($imagem, $E3P1, 4, $preto);
                } elseif ($q1=="quase sempre") {
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P1, 4, $verde);
					ImagePolygon($imagem, $E2P1, 4, $preto);
					ImagePolygon($imagem, $E1P1, 4, $preto);
					ImagePolygon($imagem, $E3P1, 4, $preto);
					
                } elseif ($q1=="sempre") {
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P1, 4, $verde);
					ImagePolygon($imagem, $E2P1, 4, $preto);
					ImagePolygon($imagem, $E1P1, 4, $preto);
					ImagePolygon($imagem, $E3P1, 4, $preto);
			  }
					
			   
			//pergunta 2
			$E1P2 = array(	1025, 470,  
				992, 404,
				997, 390,
				1007, 398);
			$E2P2 = array(	1025, 470, // centro
				991, 324, //direito
				968, 310, //ponta
				960, 335); //esquerdo
			$E3P2 = array(	1025, 470,
				935, 285,
				952, 255,
				980, 275);
				
			if ($q2=="nunca") {
                    	ImagePolygon($imagem, $E2P2, 4, $preto);
					ImagePolygon($imagem, $E1P2, 4, $preto);
					ImagePolygon($imagem, $E3P2, 4, $preto);
					$res_a = $res_a+0;
                } elseif ($q2=="as vezes") {
					$res_a = $res_a+1;
					ImagefilledPolygon($imagem, $E1P2, 4, $verde);
					ImagePolygon($imagem, $E2P2, 4, $preto);
					ImagePolygon($imagem, $E1P2, 4, $preto);
					ImagePolygon($imagem, $E3P2, 4, $preto);					
                } elseif ($q2=="quase sempre") {      
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P2, 4, $verde);
					ImagePolygon($imagem, $E2P2, 4, $preto);
					ImagePolygon($imagem, $E1P2, 4, $preto);
					ImagePolygon($imagem, $E3P2, 4, $preto);					
                } elseif ($q2=="sempre") {   
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P2, 4, $verde);
					ImagePolygon($imagem, $E2P2, 4, $preto);
					ImagePolygon($imagem, $E1P2, 4, $preto);
					ImagePolygon($imagem, $E3P2, 4, $preto);
				}
			   
				//pergunta 3
				$E1P3 = array(1025, 470, // 1
				1009, 396, //2
				1015, 383, //3
				1025, 395,);

				$E2P3 = array(1025, 470, // 1
				991, 323, //2
				1005, 300, //3
				1025, 320,);

				$E3P3 = array(1025, 470, // 1
				980, 275, //2
				1000, 250, //3
				1025, 270,);
				if ($q3=="nunca") {
					$res_a = $res_a+0;
                    ImagePolygon($imagem, $E2P3, 4, $preto);
					ImagePolygon($imagem, $E1P3, 4, $preto);
					ImagePolygon($imagem, $E3P3, 4, $preto);
                } elseif ($q3=="as vezes") {
					$res_a = $res_a+1; 
					ImagefilledPolygon($imagem, $E1P3, 4, $verde);
					ImagePolygon($imagem, $E2P3, 4, $preto);
					ImagePolygon($imagem, $E1P3, 4, $preto);
					ImagePolygon($imagem, $E3P3, 4, $preto);					
                } elseif ($q3=="quase sempre") {        
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P3, 4, $verde);
					ImagePolygon($imagem, $E2P3, 4, $preto);
					ImagePolygon($imagem, $E1P3, 4, $preto);
					ImagePolygon($imagem, $E3P3, 4, $preto);					
                } elseif ($q3=="sempre") {   
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P3, 4, $verde);
					ImagePolygon($imagem, $E2P3, 4, $preto);
					ImagePolygon($imagem, $E1P3, 4, $preto);
					ImagePolygon($imagem, $E3P3, 4, $preto);
				}
				
				//pergunta 4
				$E1P4 = array(1025, 470, // 1
				1026, 396, //2
				1034, 383, //3
				1040, 394);
				$E2P4 = array(1025, 470, // 1
				1025, 320, //2
				1040, 300, //3
				1053, 320);
				$E3P4 = array(1025, 470, // 1
				1025, 269, //2
				1042, 248, //3
				1064, 270);
				if ($q4=="nunca") {
					$res_a = $res_a+0;
                    ImagePolygon($imagem, $E2P4, 4, $preto);
					ImagePolygon($imagem, $E1P4, 4, $preto);
					ImagePolygon($imagem, $E3P4, 4, $preto);
                } elseif ($q4=="as vezes") {
					$res_a = $res_a+1;
					ImagefilledPolygon($imagem, $E1P4, 4, $verde);
					ImagePolygon($imagem, $E2P4, 4, $preto);
					ImagePolygon($imagem, $E1P4, 4, $preto);
					ImagePolygon($imagem, $E3P4, 4, $preto);					
                } elseif ($q4=="quase sempre") {                  
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P4, 4, $verde);
					ImagePolygon($imagem, $E2P4, 4, $preto);
					ImagePolygon($imagem, $E1P4, 4, $preto);
					ImagePolygon($imagem, $E3P4, 4, $preto);					
                } elseif ($q4=="sempre") {   
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P4, 4, $verde);
					ImagePolygon($imagem, $E2P4, 4, $preto);
					ImagePolygon($imagem, $E1P4, 4, $preto);
					ImagePolygon($imagem, $E3P4, 4, $preto);
				}
				
				
				//pergunta 5
				$E1P5 = array(1025, 470,
				1039, 398, 
				1051, 390, 
				1054, 402 
				);
				$E2P5 = array(	1025, 470,
				1054, 323,
				1078, 309, 
				1085, 334);
				$E3P5 = array(	1025, 470,
				1064, 270,
				1090, 250,
				1110, 279);
				if ($q5=="nunca") {
					$res_a = $res_a+0;
					ImagePolygon($imagem, $E2P5, 4, $preto);
					ImagePolygon($imagem, $E1P5, 4, $preto);
					ImagePolygon($imagem, $E3P5, 4, $preto);
                } elseif ($q5=="as vezes") {
					$res_a = $res_a+1;
					ImagefilledPolygon($imagem, $E1P5, 4, $verde);
					ImagePolygon($imagem, $E2P5, 4, $preto);
					ImagePolygon($imagem, $E1P5, 4, $preto);
					ImagePolygon($imagem, $E3P5, 4, $preto);					
                } elseif ($q5=="quase sempre") {                  
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P5, 4, $verde);
					ImagePolygon($imagem, $E2P5, 4, $preto);
					ImagePolygon($imagem, $E1P5, 4, $preto);
					ImagePolygon($imagem, $E3P5, 4, $preto);					
                } elseif ($q5=="sempre") {   
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P5, 4, $verde);
					ImagePolygon($imagem, $E2P5, 4, $preto);
					ImagePolygon($imagem, $E1P5, 4, $preto);
					ImagePolygon($imagem, $E3P5, 4, $preto);
				}
				
				//pergunta 6
				$E1P6 = array(	1025, 470,
				1055, 402,
				1070, 395,
				1068, 412, 
				);
				$E2P6 = array(	1025, 470,	
				1085, 332,
				1110, 320,
				1115, 350, 
				);
				$E3P6 = array(	1025, 470, // centro
				1109, 280, // esquerda
				1133, 269, // ponta de cima 
				1150, 300);// direita
				if ($q6=="nunca") {
					$res_a = $res_a+0;
                    ImagePolygon($imagem, $E2P6, 4, $preto);
					ImagePolygon($imagem, $E1P6, 4, $preto);
					ImagePolygon($imagem, $E3P6, 4, $preto);
                } elseif ($q6=="as vezes") {
					$res_a = $res_a+1;
					ImagefilledPolygon($imagem, $E1P6, 4, $verde);
					ImagePolygon($imagem, $E2P6, 4, $preto);
					ImagePolygon($imagem, $E1P6, 4, $preto);
					ImagePolygon($imagem, $E3P6, 4, $preto);					
                } elseif ($q6=="quase sempre") {                  
					$res_a = $res_a+2;
					ImagefilledPolygon($imagem, $E2P6, 4, $verde);
					ImagePolygon($imagem, $E2P6, 4, $preto);
					ImagePolygon($imagem, $E1P6, 4, $preto);
					ImagePolygon($imagem, $E3P6, 4, $preto);					
                } elseif ($q6=="sempre") {   
					$res_a = $res_a+3;
					ImagefilledPolygon($imagem, $E3P6, 4, $verde);
					ImagePolygon($imagem, $E2P6, 4, $preto);
					ImagePolygon($imagem, $E1P6, 4, $preto);
					ImagePolygon($imagem, $E3P6, 4, $preto);
				}
		}
	
				//pergunta 7
				{
				$E1P7 = array(	1025, 470, //centro (da bola)
				1070, 409, //esquerda
				1085, 405, //ponta de cima
				1082, 420); //direita
				$E2P7 = array(	1025, 470, //centro (da bola)
				1115, 348, //esquerda
				1144, 343, //ponta de cima
				1138, 371); //direita
				$E3P7 = array(	1025, 470,
				1150,300,
				1183, 306,
				1175, 340);
				$res_b =0;
				if ($q7=="nunca") {
					$res_b = $res_b+0;
                   ImagePolygon($imagem, $E2P7, 4, $preto);
					ImagePolygon($imagem, $E1P7, 4, $preto);
					ImagePolygon($imagem, $E3P7, 4, $preto);
                } elseif ($q7=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P7, 4, $laranja);
					ImagePolygon($imagem, $E2P7, 4, $preto);
					ImagePolygon($imagem, $E1P7, 4, $preto);
					ImagePolygon($imagem, $E3P7, 4, $preto);					
                } elseif ($q7=="quase sempre") {    
					$res_b = $res_b+2;
					ImagefilledPolygon($imagem, $E2P7, 4, $laranja);
					ImagePolygon($imagem, $E2P7, 4, $preto);
					ImagePolygon($imagem, $E1P7, 4, $preto);
					ImagePolygon($imagem, $E3P7, 4, $preto);					
                } elseif ($q7=="sempre") {   
					$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P7, 4, $laranja);
					ImagePolygon($imagem, $E2P7, 4, $preto);
					ImagePolygon($imagem, $E1P7, 4, $preto);
					ImagePolygon($imagem, $E3P7, 4, $preto);
				}
				
				//pergunta 8
				$E1P8 = array(	1025, 470, //centro (da bola)
				1092, 435, //direita
				1099, 420, //ponta de cima
				1082, 420); //esquerda
				$E2P8 = array(	1025, 470, //centro (da bola)
				1138, 371, //esquerda
				1169, 369, //ponta de cima
				1158, 401); //direita
				$E3P8 = array(	1025, 470, 
				1175, 340,
				1211, 346,
				1199, 380);
				if ($q8=="nunca") {
					$res_b = $res_b+0;
                   ImagePolygon($imagem, $E2P8, 4, $preto);
					ImagePolygon($imagem, $E1P8, 4, $preto);
					ImagePolygon($imagem, $E3P8, 4, $preto);
                } elseif ($q8=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P8, 4, $laranja);
					ImagePolygon($imagem, $E2P8, 4, $preto);
					ImagePolygon($imagem, $E1P8, 4, $preto);
					ImagePolygon($imagem, $E3P8, 4, $preto);					
                } elseif ($q8=="quase sempre") {    
					$res_b = $res_b+2;				
					ImagefilledPolygon($imagem, $E2P8, 4, $laranja);
					ImagePolygon($imagem, $E2P8, 4, $preto);
					ImagePolygon($imagem, $E1P8, 4, $preto);
					ImagePolygon($imagem, $E3P8, 4, $preto);					
                } elseif ($q8=="sempre") {  
					$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P8, 4, $laranja);
					ImagePolygon($imagem, $E2P8, 4, $preto);
					ImagePolygon($imagem, $E1P8, 4, $preto);
					ImagePolygon($imagem, $E3P8, 4, $preto);
				}
				
				//pergunta 9
				$E1P9 = array(	1025, 470, //centro (da bola)
				1099, 452, //direita
				1111, 438, //ponta de cima
				1092, 435); //esquerda
				$E2P9 = array(	1025, 470, //centro (da bola)
				1158, 401, //esquerda
				1192, 409, //ponta de cima
				1172, 434); //direita
				$E3P9 = array(	1025, 470, //centro (da bola)
				1199, 380, //direita
				1234, 395, //ponta de cima
				1210, 425); //esquerda
				if ($q9=="nunca") {
					$res_b = $res_b+0;
                   ImagePolygon($imagem, $E2P9, 4, $preto);
					ImagePolygon($imagem, $E1P9, 4, $preto);
					ImagePolygon($imagem, $E3P9, 4, $preto);
                } elseif ($q9=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P9, 4, $laranja);
					ImagePolygon($imagem, $E2P9, 4, $preto);
					ImagePolygon($imagem, $E1P9, 4, $preto);
					ImagePolygon($imagem, $E3P9, 4, $preto);					
                } elseif ($q9=="quase sempre") {        
					$res_b = $res_b+2;
					ImagefilledPolygon($imagem, $E2P9, 4, $laranja);
					ImagePolygon($imagem, $E2P9, 4, $preto);
					ImagePolygon($imagem, $E1P9, 4, $preto);
					ImagePolygon($imagem, $E3P9, 4, $preto);					
                } elseif ($q9=="sempre") {   
				$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P9, 4, $laranja);
					ImagePolygon($imagem, $E2P9, 4, $preto);
					ImagePolygon($imagem, $E1P9, 4, $preto);
					ImagePolygon($imagem, $E3P9, 4, $preto);
				}
				
				//pergunta 10
				$E1P10 = array(	1025, 470, //centro (da bola)
				1105, 469, //direita
				1116, 458, //ponta de cima
				1099, 452); //esquerda
				$E2P10 = array(	1025, 470, //centro (da bola)
				1172, 434, //esquerda
				1201, 449, //ponta de cima
				1180, 468); //direita
				$E3P10 = array(	1025, 470, //centro (da bola)
				1210, 425, //direita
				1240, 442, //ponta de cima
				1215, 466); //esquerda
				if ($q10=="nunca") {
					$res_b = $res_b+0;
                    ImagePolygon($imagem, $E2P10, 4, $preto);
					ImagePolygon($imagem, $E1P10, 4, $preto);
					ImagePolygon($imagem, $E3P10, 4, $preto);
                } elseif ($q10=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P10, 4, $laranja);
					ImagePolygon($imagem, $E2P10, 4, $preto);
					ImagePolygon($imagem, $E1P10, 4, $preto);
					ImagePolygon($imagem, $E3P10, 4, $preto);					
                } elseif ($q10=="quase sempre") {    
					$res_b = $res_b+2;
					ImagefilledPolygon($imagem, $E2P10, 4, $laranja);
					ImagePolygon($imagem, $E2P10, 4, $preto);
					ImagePolygon($imagem, $E1P10, 4, $preto);
					ImagePolygon($imagem, $E3P10, 4, $preto);					
                } elseif ($q10=="sempre") {   
				$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P10, 4, $laranja);
					ImagePolygon($imagem, $E2P10, 4, $preto);
					ImagePolygon($imagem, $E1P10, 4, $preto);
					ImagePolygon($imagem, $E3P10, 4, $preto);
				}
				
				
				//pergunta 11
				$E1P11 = array(	1025, 470, //centro (da bola)
				1100, 486, //direita
				1116, 478, //ponta de cima
				1099, 470); //esquerda
				$E2P11 = array(	1025, 470, //centro (da bola)
				1176, 467, //esquerda
				1204, 489, //ponta de cima
				1172, 501); //direita
				$E3P11 = array(	1025, 470, //centro (da bola)
				1215, 467, //direita
				1243, 489, //ponta de cima
				1213, 509); //esquerda
				if ($q11=="nunca") {
					$res_b = $res_b+0;
                   ImagePolygon($imagem, $E2P11, 4, $preto);
					ImagePolygon($imagem, $E1P11, 4, $preto);
					ImagePolygon($imagem, $E3P11, 4, $preto);
                } elseif ($q11=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P11, 4, $laranja);
					ImagePolygon($imagem, $E2P11, 4, $preto);
					ImagePolygon($imagem, $E1P11, 4, $preto);
					ImagePolygon($imagem, $E3P11, 4, $preto);					
                } elseif ($q11=="quase sempre") {  
				$res_b = $res_b+2;                
					ImagefilledPolygon($imagem, $E2P11, 4, $laranja);
					ImagePolygon($imagem, $E2P11, 4, $preto);
					ImagePolygon($imagem, $E1P11, 4, $preto);
					ImagePolygon($imagem, $E3P11, 4, $preto);					
                } elseif ($q11=="sempre") {   
				$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P11, 4, $laranja);
					ImagePolygon($imagem, $E2P11, 4, $preto);
					ImagePolygon($imagem, $E1P11, 4, $preto);
					ImagePolygon($imagem, $E3P11, 4, $preto);
				}
				
				
				//pergunta 12
				$E1P12 = array(	1025, 470, //centro (da bola)
				1100, 486, //esquerda
				1112, 498, //ponta de cima
				1093, 498); //direita
				$E2P12 = array(	1025, 470, //centro (da bola)
				1172, 501, //esquerda
				1200, 524, //ponta de cima
				1163, 527); //direita
				$E3P12 = array(	1025, 470, //centro (da bola)
				1213, 509, //direita
				1241, 530, //ponta de cima
				1220,550); //esquerda
				if ($q12=="nunca") {
					$res_b = $res_b+0;
                   ImagePolygon($imagem, $E2P12, 4, $preto);
					ImagePolygon($imagem, $E1P12, 4, $preto);
					ImagePolygon($imagem, $E3P12, 4, $preto);
                } elseif ($q12=="as vezes") {
					$res_b = $res_b+1;
					ImagefilledPolygon($imagem, $E1P12, 4, $laranja);
					ImagePolygon($imagem, $E2P12, 4, $preto);
					ImagePolygon($imagem, $E1P12, 4, $preto);
					ImagePolygon($imagem, $E3P12, 4, $preto);					
                } elseif ($q12=="quase sempre") {      
					$res_b = $res_b+2;
					ImagefilledPolygon($imagem, $E2P12, 4, $laranja);
					ImagePolygon($imagem, $E2P12, 4, $preto);
					ImagePolygon($imagem, $E1P12, 4, $preto);
					ImagePolygon($imagem, $E3P12, 4, $preto);					
                } elseif ($q12=="sempre") {   
				$res_b = $res_b+3;
					ImagefilledPolygon($imagem, $E3P12, 4, $laranja);
					ImagePolygon($imagem, $E2P12, 4, $preto);
					ImagePolygon($imagem, $E1P12, 4, $preto);
					ImagePolygon($imagem, $E3P12, 4, $preto);
				}
				}
				//	PERGUNTA 18
				{
				$E1P18 = array(	1025, 470,	
				1087, 514,
				1103, 513,
				1095, 498);
				$E2P18 = array(	1025, 470,	
				1149, 558,
				1178, 555,
				1165, 528);
				$E3P18 = array(	1025, 470,	
				1195, 590,
				1227,586,
				1220,550);
				 $res_c=0;
				if ($q13=="nunca") {
					 $res_c = $res_c+0;
                ImagePolygon($imagem, $E2P18, 4, $preto);
				ImagePolygon($imagem, $E1P18, 4, $preto);
				ImagePolygon($imagem, $E3P18, 4, $preto);
                } elseif ($q13=="as vezes") {
					 $res_c = $res_c+1;
					ImagefilledPolygon($imagem, $E1P18, 4, $azul);
					ImagePolygon($imagem, $E2P18, 4, $preto);
					ImagePolygon($imagem, $E1P18, 4, $preto);
					ImagePolygon($imagem, $E3P18, 4, $preto);					
                } elseif ($q13=="quase sempre") {    
					$res_c = $res_c+2;				
					ImagefilledPolygon($imagem, $E2P18, 4, $azul);
					ImagePolygon($imagem, $E2P18, 4, $preto);
					ImagePolygon($imagem, $E1P18, 4, $preto);
					ImagePolygon($imagem, $E3P18, 4, $preto);					
                } elseif ($q13=="sempre") {   
				 $res_c = $res_c+3;
					ImagefilledPolygon($imagem, $E3P18, 4, $azul);
					ImagePolygon($imagem, $E2P18, 4, $preto);
					ImagePolygon($imagem, $E1P18, 4, $preto);
					ImagePolygon($imagem, $E3P18, 4, $preto);
				}
				//	PERGUNTA 17
				
$E1P17 = array(	1025, 470,	
				1076, 524,
				1093, 527,
				1085, 512);

$E2P17 = array(	1025, 470,	
				1132, 580,
				1155, 580,
				1150, 557);

$E3P17 = array(	1025, 470,	
				1170, 620,
				1200, 630,
				1195, 590);


				if ($q14=="nunca") {
					$res_c = $res_c+0;
                   ImagePolygon($imagem, $E2P17, 4, $preto);
					ImagePolygon($imagem, $E1P17, 4, $preto);
					ImagePolygon($imagem, $E3P17, 4, $preto);
                } elseif ($q14=="as vezes") {
					$res_c = $res_c+1;
					ImageFilledPolygon($imagem, $E1P17, 4, $azul);
					ImagePolygon($imagem, $E2P17, 4, $preto);
					ImagePolygon($imagem, $E1P17, 4, $preto);
					ImagePolygon($imagem, $E3P17, 4, $preto);
                } elseif ($q14=="quase sempre") {
					$res_c = $res_c+2;
                    ImagePolygon($imagem, $E2P17, 4, $preto);
					ImagePolygon($imagem, $E1P17, 4, $preto);
					ImagePolygon($imagem, $E3P17, 4, $preto);
					ImageFilledPolygon($imagem, $E2P17, 4, $azul);
                } elseif ($q14=="sempre") {
					$res_c = $res_c+3;
					ImagefilledPolygon($imagem, $E3P17, 4, $azul);
                    ImagePolygon($imagem, $E2P17, 4, $preto);
					ImagePolygon($imagem, $E1P17, 4, $preto);
					ImagePolygon($imagem, $E3P17, 4, $preto);
                }
				//	PERGUNTA 16
$E1P16 = array(	1025, 470,	
				1065, 532,
				1080, 540,
				1078, 525
				);

$E2P16 = array(	1025, 470,	
				1108, 598,
				1132, 605,
				1132, 580
				);

$E3P16 = array(	1025, 470,	
				1140, 650,
				1175, 660,
				1170, 620
				);


				if ($q15=="nunca") {
					$res_c = $res_c+0;
                    ImagePolygon($imagem, $E3P16, 4, $preto);
					ImagePolygon($imagem, $E2P16, 4, $preto);
					ImagePolygon($imagem, $E1P16, 4, $preto);
                } elseif ($q15=="as vezes") {
					$res_c = $res_c+1;
				ImageFilledPolygon($imagem, $E1P16, 4, $azul);
				ImagePolygon($imagem, $E3P16, 4, $preto);
				ImagePolygon($imagem, $E2P16, 4, $preto);
				ImagePolygon($imagem, $E1P16, 4, $preto);
                } elseif ($q15=="quase sempre") {
					$res_c = $res_c+2;

ImageFilledPolygon($imagem, $E2P16, 4, $azul);
					ImagePolygon($imagem, $E3P16, 4, $preto);
ImagePolygon($imagem, $E2P16, 4, $preto);
ImagePolygon($imagem, $E1P16, 4, $preto);
                } elseif ($q15=="sempre") {
					$res_c = $res_c+3;
ImagefilledPolygon($imagem, $E3P16, 4, $azul);
				  ImagePolygon($imagem, $E3P16, 4, $preto);
ImagePolygon($imagem, $E2P16, 4, $preto);
ImagePolygon($imagem, $E1P16, 4, $preto);
                }
//	PERGUNTA 15
$E1P15 = array(	1025, 470,	
				1052, 540,
				1065, 550,
				1065, 532, 
				);

$E2P15 = array(	1025, 470,	
				1080, 610,
				1105, 625,
				1105, 595, 
				);

$E3P15 = array(	1025, 470,	
				1105, 675,
				1140, 685,
				1140, 650, 
				);


				 if ($q16=="nunca") {
					 $res_c = $res_c+0;
                   ImagePolygon($imagem, $E2P15, 4, $preto);
ImagePolygon($imagem, $E3P15, 4, $preto);
ImagePolygon($imagem, $E1P15, 4, $preto);
                } elseif ($q16=="as vezes") {
					$res_c = $res_c+1;
				ImageFilledPolygon($imagem, $E1P15, 4, $azul);
				ImagePolygon($imagem, $E2P15, 4, $preto);
ImagePolygon($imagem, $E3P15, 4, $preto);
ImagePolygon($imagem, $E1P15, 4, $preto);

                } elseif ($q16=="quase sempre") {
					$res_c = $res_c+2;
				ImageFilledPolygon($imagem, $E2P15, 4, $azul);
				ImagePolygon($imagem, $E2P15, 4, $preto);
ImagePolygon($imagem, $E3P15, 4, $preto);
ImagePolygon($imagem, $E1P15, 4, $preto);

                } elseif ($q16=="sempre") {
					$res_c = $res_c+3;
				ImageFilledPolygon($imagem, $E3P15, 4, $azul);
				ImagePolygon($imagem, $E2P15, 4, $preto);
ImagePolygon($imagem, $E3P15, 4, $preto);
ImagePolygon($imagem, $E1P15, 4, $preto);

                }//	PERGUNTA 14
$E1P14 = array(	1025, 470,	
				1037, 545,
				1048, 555,
				1052, 539, 
				);


$E2P14 = array(	1025, 470,	
				1049, 620,
				1069, 635,
				1080, 612, 
				);


$E3P14 = array(	1025, 470,	
				1060, 695,
				1090, 710,
				1105, 675, 
				);


				if ($q17=="nunca") {
					$res_c = $res_c+0;
                    ImagePolygon($imagem, $E1P14, 4, $preto);
ImagePolygon($imagem, $E3P14, 4, $preto);
ImagePolygon($imagem, $E2P14, 4, $preto);
                } elseif ($q17=="as vezes") {
					$res_c = $res_c+1;
ImageFilledPolygon($imagem, $E1P14, 4, $azul);
                   ImagePolygon($imagem, $E1P14, 4, $preto);
ImagePolygon($imagem, $E3P14, 4, $preto);
ImagePolygon($imagem, $E2P14, 4, $preto);
                } elseif ($q17=="quase sempre") {
					$res_c = $res_c+2;
ImageFilledPolygon($imagem, $E2P14, 4, $azul);
                  ImagePolygon($imagem, $E1P14, 4, $preto);
ImagePolygon($imagem, $E3P14, 4, $preto);
ImagePolygon($imagem, $E2P14, 4, $preto);
                } elseif ($q17=="sempre") {
					$res_c = $res_c+3;
ImageFilledPolygon($imagem, $E3P14, 4, $azul);
                 ImagePolygon($imagem, $E1P14, 4, $preto);
ImagePolygon($imagem, $E3P14, 4, $preto);
ImagePolygon($imagem, $E2P14, 4, $preto);
                }//	PERGUNTA 13
$E1P13 = array(	1025, 470,	
				1038, 539,
				1031, 558,
				1024, 548, 
				);

$E2P13 = array(	1025, 470,	
				1022, 620,
				1035, 640,
				1048, 620, 
				);

$E3P13 = array(	1025, 470,	
				1020,720,
				1045, 730,
				1060, 695, 
				);


				if ($q18=="nunca") {
					$res_c = $res_c+0;
                   ImagePolygon($imagem, $E3P13, 4, $preto);
ImagePolygon($imagem, $E1P13, 4, $preto);
ImagePolygon($imagem, $E2P13, 4, $preto);
                } elseif ($q18=="as vezes") {
					$res_c = $res_c+1;
ImagefilledPolygon($imagem, $E1P13, 4, $azul);
	
                  ImagePolygon($imagem, $E3P13, 4, $preto);
ImagePolygon($imagem, $E1P13, 4, $preto);
ImagePolygon($imagem, $E2P13, 4, $preto);
                } elseif ($q18=="quase sempre") {
					$res_c = $res_c+2;
					ImageFilledPolygon($imagem, $E2P13, 4, $azul);
                    ImagePolygon($imagem, $E3P13, 4, $preto);
					ImagePolygon($imagem, $E1P13, 4, $preto);
					ImagePolygon($imagem, $E2P13, 4, $preto);
                } elseif ($q18=="sempre") {
					$res_c = $res_c+3;
					ImageFilledPolygon($imagem, $E3P13, 4, $azul);
					ImagePolygon($imagem, $E3P13, 4, $preto);
					ImagePolygon($imagem, $E1P13, 4, $preto);
					ImagePolygon($imagem, $E2P13, 4, $preto);
                }
				}
					// P37
					{
	$E1P37 = array(1025, 470,	
				1023, 545,
				1014, 558,
				1009, 542);	
	$E2P37 = array(	1025, 470,	
				992, 620,
				1005, 640,
				1022, 620, 
				);
	$E3P37 = array(	1025, 470,	
				975,695,
				990, 731,
				1020, 720);
	$res_d=0;
	if ($q19=="nunca") {
		$res_d = $res_d+0;
	ImagePolygon($imagem, $E2P37, 4, $preto);
	ImagePolygon($imagem, $E1P37, 4, $preto);
	ImagePolygon($imagem, $E3P37, 4, $preto);
                } elseif ($q19=="as vezes") {
					$res_d = $res_d+1;
	
	ImageFilledPolygon($imagem, $E1P37, 4, $pink);	
	ImagePolygon($imagem, $E2P37, 4, $preto);
	ImagePolygon($imagem, $E1P37, 4, $preto);
	ImagePolygon($imagem, $E3P37, 4, $preto);
                } elseif ($q19=="quase sempre") {
					$res_d = $res_d+2;
	ImageFilledPolygon($imagem, $E2P37, 4, $pink);
	ImagePolygon($imagem, $E2P37, 4, $preto);
	ImagePolygon($imagem, $E1P37, 4, $preto);
	ImagePolygon($imagem, $E3P37, 4, $preto);
                } elseif ($q19=="sempre") {
					$res_d = $res_d+3;
	ImageFilledPolygon($imagem, $E3P37, 4, $pink);
	ImagePolygon($imagem, $E2P37, 4, $preto);
	ImagePolygon($imagem, $E1P37, 4, $preto);
	ImagePolygon($imagem, $E3P37, 4, $preto);
                }
				// P38
	$E1P38 = array(1025, 470,	
				1009, 542,
				998, 554,
				997, 537,);		
	$E2P38 = array(	1025, 470,	
				965, 610,
				970, 640,
				992, 615);
	$E3P38 = array(	1025, 470,	
				940,670,
				945, 710,
				975, 695);

	 if ($q20=="nunca") {
		 $res_d = $res_d+0;
		ImagePolygon($imagem, $E2P38, 4, $preto);
		ImagePolygon($imagem, $E1P38, 4, $preto);
		ImagePolygon($imagem, $E3P38, 4, $preto);
    } elseif ($q20=="as vezes") {
		$res_d = $res_d+1;
	ImagefilledPolygon($imagem, $E1P38, 4, $pink);
        ImagePolygon($imagem, $E2P38, 4, $preto);
		ImagePolygon($imagem, $E1P38, 4, $preto);
		ImagePolygon($imagem, $E3P38, 4, $preto);
     } elseif ($q20=="quase sempre") {
		 $res_d = $res_d+2;
	ImagefilledPolygon($imagem, $E2P38, 4, $pink);
		ImagePolygon($imagem, $E2P38, 4, $preto);
		ImagePolygon($imagem, $E1P38, 4, $preto);
		ImagePolygon($imagem, $E3P38, 4, $preto);
     } elseif ($q20=="sempre") {
		 $res_d = $res_d+3;
	ImagefilledPolygon($imagem, $E3P38, 4, $pink);
		ImagePolygon($imagem, $E2P38, 4, $preto);
		ImagePolygon($imagem, $E1P38, 4, $preto);
		ImagePolygon($imagem, $E3P38, 4, $preto);
                }
				// P39
		$E1P39 = array(1025, 470,	
				997, 537,
				983, 545,
				982, 530,);	
	$E2P39 = array(	1025, 470,	
				940, 590,
				940, 620,
				965, 610, 
				);
	$E3P39 = array(	1025, 470,	
				905,640,
				905, 685,
				940, 670, 
				);
				if ($q21=="nunca") {
					$res_d = $res_d+0;
	ImagePolygon($imagem, $E3P39, 4, $preto);
	ImagePolygon($imagem, $E1P39, 4, $preto);
	ImagePolygon($imagem, $E2P39, 4, $preto);
                } elseif ($q21=="as vezes") {
					$res_d = $res_d+1;
	ImageFilledPolygon($imagem, $E1P39, 4, $pink);
	ImagePolygon($imagem, $E3P39, 4, $preto);
	ImagePolygon($imagem, $E1P39, 4, $preto);
	ImagePolygon($imagem, $E2P39, 4, $preto);
                } elseif ($q21=="quase sempre") {
					$res_d = $res_d+2;
	ImageFilledPolygon($imagem, $E2P39, 4, $pink);
	ImagePolygon($imagem, $E3P39, 4, $preto);
	ImagePolygon($imagem, $E1P39, 4, $preto);
	ImagePolygon($imagem, $E2P39, 4, $preto);
                } elseif ($q21=="sempre") {
					$res_d = $res_d+3;
	ImageFilledPolygon($imagem, $E3P39, 4, $pink);
	ImagePolygon($imagem, $E3P39, 4, $preto);
	ImagePolygon($imagem, $E1P39, 4, $preto);
	ImagePolygon($imagem, $E2P39, 4, $preto);
                }
				//P40
	$E1P40 = array(1025, 470,	
				980, 532,
				968, 535,
				972, 520,);	

	$E2P40 = array(	1025, 470,	
				915, 578,
				910, 600,
				935,595, 
				);

	$E3P40 = array(	1025, 470,	
				870,620,  
				866, 662,  
				905, 640, 
				);


	if ($q22=="nunca") {
		$res_d = $res_d+0;
	ImagePolygon($imagem, $E1P40, 4, $preto);
	ImagePolygon($imagem, $E3P40, 4, $preto);
	ImagePolygon($imagem, $E2P40, 4, $preto);
                } elseif ($q22=="as vezes") {
					$res_d = $res_d+1;
	ImageFilledPolygon($imagem, $E1P40, 4, $pink);
	ImagePolygon($imagem, $E1P40, 4, $preto);
	ImagePolygon($imagem, $E3P40, 4, $preto);
	ImagePolygon($imagem, $E2P40, 4, $preto);
                } elseif ($q22=="quase sempre") {
					$res_d = $res_d+2;
	ImageFilledPolygon($imagem, $E2P40, 4, $pink);
	ImagePolygon($imagem, $E1P40, 4, $preto);
	ImagePolygon($imagem, $E3P40, 4, $preto);
	ImagePolygon($imagem, $E2P40, 4, $preto);
                } elseif ($q22=="sempre") {
					$res_d = $res_d+3;
	ImageFilledPolygon($imagem, $E3P40, 4, $pink);
	ImagePolygon($imagem, $E1P40, 4, $preto);
	ImagePolygon($imagem, $E3P40, 4, $preto);
	ImagePolygon($imagem, $E2P40, 4, $preto);
                }
				//P41
	$E1P41 = array(1025, 470,	
				960, 510,
				956, 525,
				970, 522,);	
	$E2P41 = array(	1025, 470,	
				898, 552,
				888, 575,
				915,575 );
	$E3P41 = array(	1025, 470,	
				835,590,  
				830, 635,  
				870, 620);

                if ($q23=="nunca") {
					$res_d = $res_d+0;
	ImagePolygon($imagem, $E3P41, 4, $preto);
	ImagePolygon($imagem, $E1P41, 4, $preto);
	ImagePolygon($imagem, $E2P41, 4, $preto);
                } elseif ($q23=="as vezes") {
					$res_d = $res_d+1;
	ImageFilledPolygon($imagem, $E1P41, 4, $pink);
	ImagePolygon($imagem, $E3P41, 4, $preto);
	ImagePolygon($imagem, $E1P41, 4, $preto);
	ImagePolygon($imagem, $E2P41, 4, $preto);
                } elseif ($q23=="quase sempre") {
					$res_d = $res_d+2;
	ImageFilledPolygon($imagem, $E2P41, 4, $pink);
	ImagePolygon($imagem, $E3P41, 4, $preto);
	ImagePolygon($imagem, $E1P41, 4, $preto);
	ImagePolygon($imagem, $E2P41, 4, $preto);
                } elseif ($q23=="sempre") {
					$res_d = $res_d+3;
	ImageFilledPolygon($imagem, $E3P41, 4, $pink);
	ImagePolygon($imagem, $E3P41, 4, $preto);
	ImagePolygon($imagem, $E1P41, 4, $preto);
	ImagePolygon($imagem, $E2P41, 4, $preto);
                }
				
	//P42
	$E1P42 = array(1025, 470,	
				960, 510,
				945, 510,
				954, 496,);	
	$E2P42 = array(	1025, 470,	
				880, 520,
				865, 545,
				898,550, 
				);
	$E3P42 = array(	1025, 470,	
				835,590,  
				794, 595,  
				799, 550, );
	                if ($q24=="nunca") {
						$res_d = $res_d+0;
	ImagePolygon($imagem, $E3P42, 4, $preto);
	ImagePolygon($imagem, $E1P42, 4, $preto);
	ImagePolygon($imagem, $E2P42, 4, $preto);
                } elseif ($q24=="as vezes") {
					$res_d = $res_d+1;
	ImagefilledPolygon($imagem, $E1P42, 4, $pink);
	ImagePolygon($imagem, $E3P42, 4, $preto);
	ImagePolygon($imagem, $E1P42, 4, $preto);
	ImagePolygon($imagem, $E2P42, 4, $preto);
                } elseif ($q24=="quase sempre") {
					$res_d = $res_d+2;
	ImagefilledPolygon($imagem, $E2P42, 4, $pink);
	ImagePolygon($imagem, $E3P42, 4, $preto);
	ImagePolygon($imagem, $E1P42, 4, $preto);
	ImagePolygon($imagem, $E2P42, 4, $preto);
                } elseif ($q24=="sempre") {
					$res_d = $res_d+3;
	ImagefilledPolygon($imagem, $E3P42, 4, $pink);
	ImagePolygon($imagem, $E3P42, 4, $preto);
	ImagePolygon($imagem, $E1P42, 4, $preto);
	ImagePolygon($imagem, $E2P42, 4, $preto);
                }
					}
				//PERGUNTA 1
				{
$AE1P1 = array(	1025, 470,// centro
				954, 496, //baixo
				940, 490, //ponta
				950, 482);//cima

$AE2P1 = array(	1025, 470,// centro
				877, 494, //cima
				860, 512, //ponta
				885, 520);//baixo

$AE3P1 = array(	1025, 470,// centro
				810, 505, //cima
				780, 528,//ponta
				799, 550);//baixo
				            $res_e=0;
     if ($q25=="nunca") {
		  $res_e = $res_e+0;
			ImagePolygon($imagem, $AE1P1, 4, $preto);
			ImagePolygon($imagem, $AE3P1, 4, $preto);
			ImagePolygon($imagem, $AE2P1, 4, $preto);
                } elseif ($q25=="as vezes") {
					 $res_e = $res_e+1;
$AE1P1 = array(	1025, 470,// centro
				954, 496, //baixo
				940, 490, //ponta
				950, 482);//cima
ImagefilledPolygon($imagem, $AE1P1, 4, $red);
ImagePolygon($imagem, $AE1P1, 4, $preto);
ImagePolygon($imagem, $AE3P1, 4, $preto);
ImagePolygon($imagem, $AE2P1, 4, $preto);
                } elseif ($q25=="quase sempre") {
					 $res_e = $res_e+2;
$AE2P1 = array(	1025, 470,// centro
				877, 494, //cima
				860, 512, //ponta
				885, 520);//baixo
ImagefilledPolygon($imagem, $AE2P1, 4, $red);
ImagePolygon($imagem, $AE1P1, 4, $preto);
ImagePolygon($imagem, $AE3P1, 4, $preto);
ImagePolygon($imagem, $AE2P1, 4, $preto);
                } elseif ($q25=="sempre") {
					 $res_e = $res_e+3;
$AE3P1 = array(	1025, 470,// centro
				810, 505, //cima
				780, 528,//ponta
				799, 550);//baixo
ImagefilledPolygon($imagem, $AE3P1, 4, $red);

ImagePolygon($imagem, $AE1P1, 4, $preto);
ImagePolygon($imagem, $AE3P1, 4, $preto);
ImagePolygon($imagem, $AE2P1, 4, $preto);
                }
//PERGUNTA 2

$AE1P2 = array(	1025, 470,// centro
				952, 466, //cima
				940, 472, //ponta
				952, 481);//baixo
$AE2P2 = array(	1025, 470,// centro
				876, 463, //cima
				855, 479, //ponta
				877, 494);//baixo
$AE3P2 = array(	1025, 470,// centro
				815, 460, //cima
				785, 480,//ponta
				810,505);//baixo

				if ($q26=="nunca") {
					 $res_e = $res_e+0;
ImagePolygon($imagem, $AE1P2, 4, $preto );
ImagePolygon($imagem, $AE2P2, 4, $preto );
ImagePolygon($imagem, $AE3P2, 4, $preto );
                } elseif ($q26=="as vezes") {
					 $res_e = $res_e+1;
ImagefilledPolygon($imagem, $AE1P2, 4, $red);
ImagePolygon($imagem, $AE1P2, 4, $preto );
ImagePolygon($imagem, $AE2P2, 4, $preto );
ImagePolygon($imagem, $AE3P2, 4, $preto );
                } elseif ($q26=="quase sempre") {
					 $res_e = $res_e+2;
ImagefilledPolygon($imagem, $AE2P2, 4, $red);
ImagePolygon($imagem, $AE1P2, 4, $preto );
ImagePolygon($imagem, $AE2P2, 4, $preto );
ImagePolygon($imagem, $AE3P2, 4, $preto );
                } elseif ($q26=="sempre") {
					 $res_e = $res_e+3;
ImagefilledPolygon($imagem, $AE3P2, 4, $red );
ImagePolygon($imagem, $AE1P2, 4, $preto );
ImagePolygon($imagem, $AE2P2, 4, $preto );
ImagePolygon($imagem, $AE3P2, 4, $preto );
                }
				//PERGUNTA 3
$AE1P3 = array(	1025, 470,// centro
				952, 466, //baixo
				940, 458, //ponta 
				955, 452);//cima
$AE2P3 = array(	1025, 470,// centro
				876, 463, //baixo
				860, 445, //ponta
				882, 433);//cima
$AE3P3 = array(	1025, 470,// centro
				815, 460, //baixo  
				793, 435,//ponta
				827,420);//cima
ImagePolygon($imagem, $AE3P3, 4, $red );

				if ($q27=="nunca") {
					 $res_e = $res_e+0;
ImagePolygon($imagem, $AE3P3, 4, $preto );
ImagePolygon($imagem, $AE1P3, 4, $preto );
ImagePolygon($imagem, $AE2P3, 4, $preto );
                } elseif ($q27=="as vezes") {
					 $res_e = $res_e+1;
ImagefilledPolygon($imagem, $AE1P3, 4, $red);
ImagePolygon($imagem, $AE3P3, 4, $preto );
ImagePolygon($imagem, $AE1P3, 4, $preto );
ImagePolygon($imagem, $AE2P3, 4, $preto );
                } elseif ($q27=="quase sempre") {
					 $res_e = $res_e+2;
ImagefilledPolygon($imagem, $AE2P3, 4, $red);
ImagePolygon($imagem, $AE3P3, 4, $preto );
ImagePolygon($imagem, $AE1P3, 4, $preto );
ImagePolygon($imagem, $AE2P3, 4, $preto );
                } elseif ($q27=="sempre") {
					 $res_e = $res_e+3;
ImagefilledPolygon($imagem, $AE3P3, 4, $red );
ImagePolygon($imagem, $AE3P3, 4, $preto );
ImagePolygon($imagem, $AE1P3, 4, $preto );
ImagePolygon($imagem, $AE2P3, 4, $preto );
                }
//PERGUNTA 4
$AE1P4 = array(	1025, 470,// centro
				955, 452, //baixo
				945, 438, //ponta
				960, 437);//cima
$AE2P4 = array(	1025, 470,// centro
				882, 433, //2
				870, 412,//ponta
				895, 407);//baixo
$AE3P4 = array(	1025, 470,// centro
				827, 420, //baixo
				805, 393,//ponta
				840,380);//cima
				if ($q28=="nunca") {
					 $res_e = $res_e+0;
ImagePolygon($imagem, $AE3P4, 4, $preto );
ImagePolygon($imagem, $AE1P4, 4, $preto );
ImagePolygon($imagem, $AE2P4, 4, $preto );
                } elseif ($q28=="as vezes") {
					 $res_e = $res_e+1;
ImagefilledPolygon($imagem, $AE1P4, 4, $red);
ImagePolygon($imagem, $AE3P4, 4, $preto );
ImagePolygon($imagem, $AE1P4, 4, $preto );
ImagePolygon($imagem, $AE2P4, 4, $preto );
                } elseif ($q28=="quase sempre") {
					 $res_e = $res_e+2;
ImagefilledPolygon($imagem, $AE2P4, 4, $red);
ImagePolygon($imagem, $AE3P4, 4, $preto );
ImagePolygon($imagem, $AE1P4, 4, $preto );
ImagePolygon($imagem, $AE2P4, 4, $preto );
                } elseif ($q28=="sempre") {
					 $res_e = $res_e+3;
ImagefilledPolygon($imagem, $AE3P4, 4, $red );
ImagePolygon($imagem, $AE3P4, 4, $preto );
ImagePolygon($imagem, $AE1P4, 4, $preto );
ImagePolygon($imagem, $AE2P4, 4, $preto );
                }
				//PERGUNTA 5

$AE1P5 = array(	1025, 470,// centro
				960, 437,//baixo
				953, 425, //ponta
				969, 424);//cima
$AE2P5 = array(	1025, 470,// centro
				913, 379, //cima
				885, 382, //ponta
				895, 407);//baixo
$AE3P5 = array(	1025, 470,// centro
				840, 380,//baixo
				825, 345,//ponta
				865,340);//cima
ImagePolygon($imagem, $AE3P5, 4, $red );

                if ($q29=="nunca") {
					 $res_e = $res_e+0;
ImagePolygon($imagem, $AE3P5, 4, $preto );
ImagePolygon($imagem, $AE1P5, 4, $preto );
ImagePolygon($imagem, $AE2P5, 4, $preto );
                } elseif ($q29=="as vezes") {
					 $res_e = $res_e+1;
ImagefilledPolygon($imagem, $AE1P5, 4, $red);
ImagePolygon($imagem, $AE3P5, 4, $preto );
ImagePolygon($imagem, $AE1P5, 4, $preto );
ImagePolygon($imagem, $AE2P5, 4, $preto );
                } elseif ($q29=="quase sempre") {
					 $res_e = $res_e+2;
ImagefilledPolygon($imagem, $AE2P5, 4, $red);
ImagePolygon($imagem, $AE3P5, 4, $preto );
ImagePolygon($imagem, $AE1P5, 4, $preto );
ImagePolygon($imagem, $AE2P5, 4, $preto );
                } elseif ($q29=="sempre") {
					 $res_e = $res_e+3;
ImagefilledPolygon($imagem, $AE3P5, 4, $red );
ImagePolygon($imagem, $AE3P5, 4, $preto );
ImagePolygon($imagem, $AE1P5, 4, $preto );
ImagePolygon($imagem, $AE2P5, 4, $preto );
                }
				
//PERGUNTA 6
$AE1P6 = array(	1025, 470,// centro
				981, 410, //cima
				965, 405, //ponta
				969, 424);//baixo

$AE2P6 = array(	1025, 470,// centro
				913, 378, //baixo
				912, 347, //ponta
				937, 350);//cima
$AE3P6 = array(	1025, 470,// centro
				865, 340, //baixo
				856, 308,//ponta
				900, 300);//cima
	             if ($q30=="nunca") {
					  $res_e = $res_e+0;
ImagePolygon($imagem, $AE2P6, 4, $preto );
ImagePolygon($imagem, $AE1P6, 4, $preto );
ImagePolygon($imagem, $AE3P6, 4, $preto );
                } elseif ($q30=="as vezes") {
					 $res_e = $res_e+1;
ImagefilledPolygon($imagem, $AE1P6, 4, $red);
ImagePolygon($imagem, $AE2P6, 4, $preto );
ImagePolygon($imagem, $AE1P6, 4, $preto );
ImagePolygon($imagem, $AE3P6, 4, $preto );
                } elseif ($q30=="quase sempre") {
					 $res_e = $res_e+2;
ImagefilledPolygon($imagem, $AE2P6, 4, $red);
ImagePolygon($imagem, $AE2P6, 4, $preto );
ImagePolygon($imagem, $AE1P6, 4, $preto );
ImagePolygon($imagem, $AE3P6, 4, $preto );
                } elseif ($q30=="sempre") {
					 $res_e = $res_e+3;
ImagefilledPolygon($imagem, $AE3P6, 4, $red );
ImagePolygon($imagem, $AE2P6, 4, $preto );
ImagePolygon($imagem, $AE1P6, 4, $preto );
ImagePolygon($imagem, $AE3P6, 4, $preto );
                }
				}
	}
	// 					** PINTANDO FUNDO DA ESTRELA ** 			
	//		PONTA SUPERIOR
	{
		$fundo1 = array( 1020,50,
					 914, 270,
					 935, 285, 
					 952, 255,
					 980, 275,
					 1000, 250,
					 1025, 270,
					 1042, 248,
					 1064, 270,
					 1090, 250,
					 1110, 279,
					 1134, 270);
		ImageFilledPolygon($imagem, $fundo1, 12, $verdeFundo);
	}
	//		PONTA SUPERIOR DIREITA
	{
		$fundo2 = array(1430,350,
						1183, 306,
						1175, 340, //PONTA DOIS
						1211, 346,
						1199, 380,
						1234, 395,
						1210, 425,
						1240, 442,
						1215, 467,
						1243, 489,
						1213, 509, 
						1241, 530
						);	
		ImageFilledPolygon($imagem, $fundo2, 12, $laranjaFundo);
	}
	//		PONTA INFERIOR DIREITA
	{
		$fundo3 = array(1276,820,
						1045, 730,
						1060, 695,
						1090, 710,
						1105, 675,
						1140, 685,
						1140, 650,
						1175, 660,
						1170, 620,
						1200, 630,
						1195, 590,
						1227,586);
		ImageFilledPolygon($imagem, $fundo3, 12, $azulFundo);
	}
	//		PONTA SUPERIOR ESQUERDA
	{
		$fundo4 = array( 856, 308,//1
						610,350,//2
						780, 528,//3
						810, 505, //4
						785, 480,//5
						815, 460,//6
						793, 435,//7
						827, 420,//8
						805, 393,//9
						840, 380,//10
						825, 345,//11
						865, 340);
		ImageFilledPolygon($imagem, $fundo4,12, $vermelhoFundo);
	}
	//PONTA INFERIOR ESQUERDA
	{
	$fundo5=array(	760,820, //1 DA esquerda para direita
					795, 595,
					835, 590,
					830, 635,
					870, 620,
					866, 662,
					905, 640,
					905, 685,
					940, 670, 
					945, 710,
					975, 695,
					990, 730,
					);	
		ImageFilledPolygon($imagem,$fundo5,12,$pinkFundo);				
	}

//					** LINHAS INTERIORES DA ESTRELA **
{
//			5 LINHAS INTERIORES
	{
		imageline($imagem, 1025, 470, 900,300, $preto); 
		imageline($imagem, 1025, 470, 800,550, $preto); 
		imageline($imagem, 1025, 470, 1020,720, $preto); 
		imageline($imagem, 1025, 470, 1220,550, $preto);
		imageline($imagem, 1025, 470, 1150,300, $preto);
	}
//			PONTA SUPERIOR
	{
		imageline($imagem, 1025, 470,935, 285, $preto); //LINHA 1
		imageline($imagem, 935, 285,914, 270, $preto); //TOPO LINHA1
		imageline($imagem, 1025, 470, 980, 275, $preto); //LINHA 2
		imageline($imagem, 935, 285, 952, 255, $preto); //TOPO LINHA 2
		imageline($imagem, 952, 255, 980, 275, $preto); //TOPO LINHA 2 SEGUNDA LINHA
		imageline($imagem, 1025, 470, 1025, 270, $preto); //LINHA 3
		imageline($imagem, 980, 275, 1000, 250, $preto); //TOPO LINHA 3
		imageline($imagem, 1000, 250, 1025, 270, $preto); //TOPO LINHA 3 SEGUNDA LINHA
		imageline($imagem, 1025, 470, 1064, 270, $preto); // LINHA 4
		imageline($imagem, 1025, 270, 1042, 248, $preto); //TOPO LINHA 4
		imageline($imagem, 1042, 248, 1064, 270, $preto); //TOPO LINHA 4 SEGUNDA LINHA
		imageline($imagem, 1025, 470, 1110, 279, $preto); // LINHA 5
		imageline($imagem, 1064, 270, 1090, 250, $preto); //TOPO LINHA 5
		imageline($imagem, 1090, 250, 1110, 279, $preto); //TOPO LINHA 5 SEGUNDA LINHA
		imageline($imagem, 1110, 279, 1134, 270, $preto); //TOPO LINHA 6
	}
//			PONTA DA DIREITA INFERIOR (FERNANDA)
	{
		imageline($imagem, 1025, 470, 1060, 695, $preto); //LINHA 1
		imageline($imagem, 1025, 470, 1105, 675, $preto); //LINHA 2
		imageline($imagem, 1025, 470, 1140, 650, $preto); //LINHA 3
		imageline($imagem, 1025, 470, 1170, 620, $preto); //LINHA 4
		imageline($imagem, 1025, 470, 1195, 590, $preto); //LINHA 5
		imageline($imagem, 1045, 730, 1060, 695, $preto); //TOPO LINHA 1
		imageline($imagem, 1060, 695, 1090, 710, $preto); //TOPO LINHA 2
		imageline($imagem, 1090, 710, 1105, 675, $preto); //TOPO LINHA 2
		imageline($imagem,  1105, 675, 1140, 685, $preto); //TOPO LINHA 3
		imageline($imagem,  1140, 685, 1140, 650, $preto); //TOPO LINHA 3
		imageline($imagem,  1140, 650, 1175, 660, $preto); //TOPO LINHA 4
		imageline($imagem,  1175, 660, 1170, 620, $preto); //TOPO LINHA 4	
		imageline($imagem,  1170, 620, 1200, 630, $preto); //TOPO LINHA 5
		imageline($imagem,  1200, 630, 1195, 590, $preto); //TOPO LINHA 5
		imageline($imagem,  1195, 590, 1227,586, $preto); //TOPO LINHA 6
	}
//			PONTA SUPERIOR ESQUERDA (VITURIANO)
	{
		imageline($imagem, 1025, 470, 810, 505, $preto); 
		imageline($imagem, 810, 505, 780, 528, $preto); //TOPO LINHA1
		imageline($imagem, 780, 528, 799, 550, $preto); //TOPO LINHA1
		imageline($imagem, 1025, 470, 815, 460, $preto); 
		imageline($imagem, 815, 460, 785, 480, $preto); //TOPO LINHA 2
		imageline($imagem, 785, 480, 810, 505, $preto); //TOPO LINHA 2 SEGUNDA LINHA
		imageline($imagem, 1025, 470, 827, 420, $preto); 
		imageline($imagem, 827, 420, 793, 435, $preto); //TOPO LINHA 3
		imageline($imagem, 793, 435, 815, 460, $preto); //TOPO LINHA 3 SEGUNDA LINHA
		imageline($imagem, 1025, 470, 840, 380, $preto);
		imageline($imagem, 840, 380, 805, 393, $preto); // LINHA 4
		imageline($imagem, 827, 420, 805, 393, $preto); //TOPO LINHA 4
		imageline($imagem, 1025, 470,865, 340, $preto);
		imageline($imagem, 865, 340, 825, 345, $preto); //TOPO LINHA 5
		imageline($imagem, 840, 380, 825, 345, $preto); //TOPO LINHA 5 SEGUNDA LINHA
		imageline($imagem, 865, 340,856, 308, $preto); //TOPO LINHA 6
		imageline($imagem, 900, 300, 856, 308, $preto); //TOPO LINHA 6 SEGUNDA LINHA
	}
//			PONTA SUPERIOR DIREITA (NICOLAS)
	{
	imageline($imagem, 1025, 470, 1175, 340, $preto); //LINHA 1 (CONTADA DE CIMA PARA BAIXO)
	imageline($imagem, 1175, 340, 1183, 306, $preto); //TOPO LINHA 1
	imageline($imagem, 1175, 340, 1211, 346, $preto); //TOPO LINHA 1/2
	imageline($imagem, 1025, 470, 1199, 380, $preto); //LINHA 2
	imageline($imagem, 1199, 380, 1211, 346, $preto); //TOPO LINHA 2/1
	imageline($imagem, 1199, 380, 1234, 395, $preto); //TOPO LINHA 2/3
	imageline($imagem, 1025, 470, 1210, 425, $preto); //LINHA 3
	imageline($imagem, 1210, 425, 1234, 395, $preto); //TOPO LINHA 3/2
	imageline($imagem, 1210, 425, 1240, 442, $preto); //TOPO LINHA 3/4
	imageline($imagem, 1025, 470, 1215, 467, $preto); //LINHA 4
	imageline($imagem, 1215, 467, 1240, 442, $preto); //LINHA 4/3
	imageline($imagem, 1215, 467, 1243, 489, $preto); //LINHA 4/5
	imageline($imagem, 1025, 470, 1213, 509, $preto); //LINHA 5
	imageline($imagem, 1213, 509, 1243, 489, $preto); //TOPO LINHA 5/4
	imageline($imagem, 1213, 509, 1241, 530, $preto); //TOPO LINHA 5
	}
	//  PONTA INFERIOR ESQUERDA (MIGUEL)
	{
imageline($imagem, 1025, 470, 835, 590, $preto); //linha 1
imageline($imagem, 835, 590, 795, 595, $preto); //topo 1 linha 1
imageline($imagem, 1025, 470, 870, 620, $preto); //linha 2
imageline($imagem, 870, 620, 830, 635, $preto); //topo 1 linha 2
imageline($imagem, 830, 635, 835, 590, $preto); //topo 2 linha 2
imageline($imagem, 1025, 470, 905, 640, $preto); //linha 3
imageline($imagem, 905, 640, 866, 662, $preto); //topo 1 linha 3
imageline($imagem, 866, 662, 870, 620, $preto); //topo 2 linha 3
imageline($imagem, 1025, 470, 940, 670, $preto); //linha 4
imageline($imagem, 940, 670, 905, 685, $preto); //topo 1 linha 4
imageline($imagem, 905, 685, 905, 640, $preto); //topo 2 linha 4
imageline($imagem, 1025, 470, 975, 695, $preto); //linha 5
imageline($imagem, 975, 695, 945, 710, $preto); //topo 1 linha 5
imageline($imagem, 945, 710, 940, 670, $preto); //topo 2 linha 5
imageline($imagem, 975, 695, 990, 730, $preto); //topo 3 linha 5 

}
}
//					** ESTRELA ** 		"TEM QUE SER POR ULTIMO"
{					
$estrela = array( 1020,50,   //1
				 900,300,  //2
				 610,350,  //3
				 800,550,  //4
				 760,820,  //5
				 1020,720,  //6
				 1276,820, //7
				 1220,550, //8
				 1430,350, //9
				 1150,300); //10
ImagePolygon($imagem, $estrela, 10, $preto);
}
//NOME PONTAS
{
$font = imageloadfont("verdana24.gdf");
imagestring($imagem, $font, 970, 170, "Atividade" , $preto);
imagestring($imagem, $font, 990, 200, "FÌsica" , $preto);
imagestring($imagem, $font, 1240, 370, "AlimentaÁ„o" , $preto);
imagestring($imagem, $font, 1140, 690, "Controle" , $preto);
imagestring($imagem, $font, 1170, 715, "de" , $preto);
imagestring($imagem, $font, 1140, 740, "Estresse" , $preto);
imagestring($imagem, $font, 790, 710, "Relacionamentos" , $preto);
imagestring($imagem, $font, 650, 350, "Comportamento" , $preto);
imagestring($imagem, $font, 680, 380, "Preventivo" , $preto);
}

//LEGENDA DE PONTOS
{

	
	
	
	
$fontb = imageloadfont("verdanapretinm.gdf");

$fonta = imageloadfont("microsoft18.gdf");
	if ($res_a <= 6){
		imagestring($imagem, $fontb, 1050, 45 , "Atividade FÌsica: ".$res_a." pontos" , $preto);
		imagestring($imagem, $fontb, 1170, 75 , "Alerta!", $preto);
		imagestring($imagem, $font , 1095, 105, "(Recomendamos mudanÁas", $preto);
		imagestring($imagem, $font , 1075, 125, "de comportamento urgentes)", $preto);
	}
	else if ($res_a >= 7 && $res_a <= 12){
		imagestring($imagem, $fontb, 1050, 45 , "Atividade FÌsica: ".$res_a." pontos" , $preto);
		imagestring($imagem, $fontb, 1145, 75 , "Pode melhorar!", $preto);
		imagestring($imagem, $font , 1105, 105, "(Recomendamos melhorar" , $preto);
		imagestring($imagem, $font , 1075, 125, "os comportamentos avaliados)", $preto);
	}
	else{
		imagestring($imagem, $fontb, 1120, 45 , "Atividade FÌsica: ".$res_a." pontos" , $preto);
		imagestring($imagem, $fontb, 1220, 75 , "V· em frente!", $preto);
		imagestring($imagem, $font , 1080, 105,"(Recomendamos continuar nessa direÁ„o)", $preto);
	}
	

	if ($res_b <= 6){
		imagestring($imagem, $fontb, 1445, 335, "AlimentaÁ„o: ".$res_b." pontos" , $preto);
		imagestring($imagem, $fontb, 1545, 365, "Alerta!", $preto);
		imagestring($imagem, $font , 1465, 395, "(Recomendamos mudanÁas", $preto);
		imagestring($imagem, $font , 1445, 415, "de comportamento urgentes)", $preto);
	}
	else if ($res_b >= 7 && $res_b <= 12){
		imagestring($imagem, $fontb, 1445, 335, "AlimentaÁ„o: ".$res_b." pontos" , $preto);
		imagestring($imagem, $fontb, 1497, 365, "Pode melhorar!", $preto);
		imagestring($imagem, $font , 1455, 395, "(Recomendamos melhorar" , $preto);
		imagestring($imagem, $font , 1425, 415, "os comportamentos avaliados)", $preto);
	}
	else{
		imagestring($imagem, $fontb, 1475, 335, "AlimentaÁ„o: ".$res_b." pontos" , $preto);
		imagestring($imagem, $fontb, 1540, 365, "V· em frente!", $preto);
		imagestring($imagem, $font , 1400, 395, "(Recomendamos continuar nessa direÁ„o)", $preto);
	}

	if ($res_c <= 6){
		imagestring($imagem, $fontb, 1295, 760, "Controle de Estresse: ". $res_c." pontos", $preto);
		imagestring($imagem, $fontb, 1460, 790, "Alerta!", $preto);
		imagestring($imagem, $font , 1385, 820, "(Recomendamos mudanÁas", $preto);
		imagestring($imagem, $font , 1365, 840, "de comportamento urgentes)", $preto);
	}
	else if ($res_c >= 7 && $res_c <= 12){
		imagestring($imagem, $fontb, 1295, 760, "Controle de Estresse: ". $res_c." pontos", $preto);
		imagestring($imagem, $fontb, 1410, 790, "Pode melhorar!", $preto);
		imagestring($imagem, $font , 1370, 820, "(Recomendamos melhorar" , $preto);
		imagestring($imagem, $font , 1340, 840, "os comportamentos avaliados)", $preto);
	}
	else{
		imagestring($imagem, $fontb, 1295, 760, "Controle de Estresse: ". $res_c." pontos", $preto);
		imagestring($imagem, $fontb, 1420, 790, "V· em frente!", $preto);
		imagestring($imagem, $font , 1285, 820, "(Recomendamos continuar nessa direÁ„o)", $preto);
	}

	if ($res_d <= 6){
		imagestring($imagem, $fontb, 400, 760, "Relacionamentos: ".$res_d." pontos" , $preto);
		imagestring($imagem, $fontb, 530, 790, "Alerta!", $preto);
		imagestring($imagem, $font , 455, 820, "(Recomendamos mudanÁas", $preto);
		imagestring($imagem, $font , 435, 840, "de comportamento urgentes)", $preto);
	}
	else if ($res_d >= 7 && $res_d <= 12){
		imagestring($imagem, $fontb, 400, 760, "Relacionamentos: ".$res_d." pontos" , $preto);
		imagestring($imagem, $fontb, 480, 790, "Pode melhorar!", $preto);
		imagestring($imagem, $font , 440, 820, "(Recomendamos melhorar" , $preto);
		imagestring($imagem, $font , 410, 840, "os comportamentos avaliados)", $preto);
	}
	else{
		imagestring($imagem, $fontb, 355, 760, "Relacionamentos: ".$res_d." pontos" , $preto);
		imagestring($imagem, $fontb, 440, 790, "V· em frente!", $preto);
		imagestring($imagem, $font , 300, 820, "(Recomendamos continuar nessa direÁ„o)", $preto);
	}
	if ($res_e <= 6){
		imagestring($imagem, $fontb, 100, 335, "Comportamento Preventivo: ".$res_e." pontos" , $preto);
		imagestring($imagem, $fontb, 290, 365, "Alerta!", $preto);
		imagestring($imagem, $font , 215, 395, "(Recomendamos mudanÁas", $preto);
		imagestring($imagem, $font , 195, 415, "de comportamento urgentes)", $preto);
	}
	else if ($res_e >= 7 && $res_e <= 12){
		imagestring($imagem, $fontb, 100, 335, "Comportamento Preventivo: ".$res_e." pontos" , $preto);
		imagestring($imagem, $fontb, 250, 365, "Pode melhorar!", $preto);
		imagestring($imagem, $font , 210, 395, "(Recomendamos melhorar" , $preto);
		imagestring($imagem, $font , 180, 415, "os comportamentos avaliados)", $preto);
	}
	else{
		imagestring($imagem, $fontb,  95, 335, "Comportamento Preventivo: ".$res_e." pontos" , $preto);
		imagestring($imagem, $fontb, 250, 365, "V· em frente!", $preto);
		imagestring($imagem, $font , 110, 395, "(Recomendamos continuar nessa direÁ„o)", $preto);
	}
	//imagestring($imagem, $fontb, 0, 600 ,"<form name='sair' action='introducao.php' method='post'>
    //<input type='image' src='pentaculo.php' onClick='this.form.submit()'> </form>", $preto);

}

//					** N√O MODIICAR **

{
ImageJPEG($imagem, "pentaculo"."$id_identifica".".jpeg");
ImageDestroy($imagem);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script LANGUAGE="JavaScript">

function printPage() {
  if (window.print)
    window.print()
  else
    alert("Sinto Muito, seu navegador n√£o suporta estas caracter√≠sticas.");
}

</SCRIPT>
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <meta content="text/html"; charset=utf-8 />
    <link rel="stylesheet" href="style.css">
	
	</head>
             


<body style= "background: rgb(255,255,255);">


        <?php include 'conexao.php';?>
        <div id="cabeca">
            <figure align= "left" 	style="width: 63%"style="min-width: 1160px" style="margin: auto" style="height:auto">	
			<img src= "COLA.png">
			</figure>
        </div>
			<div id="tudo">
		 <div id ="fonta"><h2>Perfil do Estilo de Vida</h2></div>
		 </div>
<?php
$NovoPentaculo="<center><div id='pentaculo'><img id='inua' src='pentaculo$id_identifica.jpeg' ></div></center>";
print $NovoPentaculo;
?>

	<div id="tudo">
		<br>
		<div id ="fonta"><h2>Obrigado pela sua participa√ß√£o na pesquisa!</h2></div>
		<br><br>
		                  			<center>
									<?php
                        $id_identidade = $_POST['pk_id_identifica'];
                        //echo $id_identidade;
						 $query = "INSERT INTO tb_estilo (a1, a2, a3, a4, a5, a6, b1, b2, b3, b4, b5, b6, c1, c2, c3, c4, c5, c6, d1, d2, d3, d4, d5, d6, e1, e2, e3, e4, e5, e6, pk_id_identifica)
						VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10', '$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21', '$q22','$q23', '$q24', '$q25','$q26','$q27','$q28','$q29', '$q30', '$id_identifica')";  
                    
					                if (mysqli_query($con, $query)) {
								//echo $id_identifica;
								} else {
								echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);
					?> 
						
							<table border="0">
							   <tr>
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 <td>
								 <A HREF="javascript:printPage()" class='nao'>imprimir pent√°culo</A>
								 </td>
								 <td>
								 <a  href="1-introducao.php" class='sair'>Sair</a>
								 </td>
							   </tr>
							  </table>
						</center>

	<br>
    <div id="rodape">
        <?php include 'rodape.php';?>
</div>
	</div>
	<br>
	    
		</div
</body>
</html>
