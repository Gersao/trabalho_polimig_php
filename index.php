<?php

    // O método próximo número demanda tempo de processamento de alguns números,
    //	para evitar erros aumentamos o tempo de retorno.
    set_time_limit(99*99*99*100);

	/*
	* Clase Miscelanea
	*
    *	Métodos:
    *	próximo perfeito, primo, perfeito, próximo primo,
    *	geekName, Letra AscII, Binário, Exadecimal, Octal,
    *	Aleatorio, Raiz, Potencia, Delta.
	*/
	
	class Miscelanea{
		//raiz do numero feito por pedro e samael
		Public function raiz($numero){
 			$raiz = sqrt($numero);
 			echo "A raiz de: " . $numero . " é: " . $raiz;
		}
	//Delta -Yuri Sancle--Bernardo
	public function delta($a,$b,$c){
		 $delta = ($b*$b)-((4*$a)*$c);
		 echo "O delta de $a, $b e $c é :" . $delta ;
	 }	
		
	
	    /*
		* Método para encontra o próximo número perfeito
		* @param $numero
		*/
		public function proximoPerfeito ($numero){
			
			$total = 0;
			$perfeito = 0;
			$num = 0;

			while($perfeito != 1){
				$num++;
				$proximoNumero = $numero+$num;
				// Verifica os divisores inteiros do numero, e soma a variavel total para validar posterormente
				for ($i = 1;$i < $proximoNumero; $i++){
					if(($proximoNumero%$i) == 0){
						$total = $total+$i;
					}
				}
                //Verifica se a soma dos divisores e igual ao número
				if($proximoNumero == $total) {
					$perfeito = 1;
					print_r('Pr&oacute;ximo n&uacute;mero perfeito:'.$proximoNumero);
				}
				$total = 0;
			}
					
		}
	
	}
	//Números primos, feito por Daniel e Bruno
		$num-$_POST['num'];
		$n - $num;
		for ($m=2; $m <- $n; $m++)
				$primo - true;
		for ($x - 2; 4x < $n; $x++){
			if ($num % $x -- 0){
				$primo - false;
					break;
			}
		}
		if ($primo) {
			echo "$num é primo";
	}
		else
	{
		echo "$num não é primo!!!";
	}
	//Proximo numero primo, feito por Gabriel Moises e Gabriel Simiao
		public function proximoPrimo ($numero){
			
		$numero = $_POST['numero'];
		$numero++;
		while ($teste = n){
		if (gmp_prob_prime($numero)) {
		print $numero' É o proximo primo';
		$teste = s;
		} else {
		$numero++;
		$teste = n;
		}

		}
	
	}	
?>

	//Números aleatórios,Pablo e Maxwell
		$q = $_GET[‘quantidade’];
		for ($i=1;$i<=$q;$i++) {
			 echo rand(1,100000) .” “;
	}
?>
