<!-- Primeiro PHP !-->

<?php 

	echo "Teste";
	echo "<br> Teste 1";
	echo "<br> Teste 2";

 ?>

<!-- Segunda PHP !-->

<?php 
	$data = "28 de agosto de 2020";
	$salario = 850.00;
	$cargo = "Estagiário";
	$idade = 18;
	$resultado = true;

	echo "<br> <br> Arquivo iniciado em $data <br> ";
	printf("Salário atual: %.2f <br>", $salario);
	printf("Cargo: %s <br>", $cargo);
	$texto = sprintf("Nosso ".$cargo." recebe ".$salario." por mês e têm ".$idade." anos");
	echo $texto;

	if($resultado)
	{
		echo "<br> Validade: Verdadeiro!";
	}

 ?>

 <!-- Terceiro PHP !-->

 <?php 

 $fundo = "azul";
 $FUNDO = "Vermelho";
 $Fundo = "Rosa";
 
 echo "<br> <br> João tem uma casa com o fundo ".$fundo." Já Maria tem a casa com o fundo ".$Fundo." e por ultimo Carlos tem a casa com fundo ".$FUNDO;
 ?>

 <!-- Quarto PHP !--> 

<?php

$ano = 2020;

 function Exibir($parametro)
 {
 	$parametro += 4;
 	return $parametro;
 }

 echo " <br> <br> Estamos em 2020, daqui a 4 anos o mundo vai acabar mas, será ".Exibir($ano);


 ?>

 <!-- Quinto PHP !--> 

<?PHP

function Incremento()
{
	STATIC $valor = 2020;
	$valor++;
	return $valor;
}

echo "<br> ".Incremento();
echo "<br> ".Incremento();
echo "<br> ".Incremento();
echo "<br> ".Incremento();


?>

<!-- Sexto PHP !--> 

<?PHP 

 echo "<br>";
 $n = 500;

 do{

    echo "<br>".$n;

    $n += 2;
 }while($n <= 550);

?>

<!-- Setimo PHP !--> 

<?PHP 


for($x = 0; $x < 10; $x++){
	echo "<br> ".$x;
	if($x == 5)
	{
		echo "<br>";
	}
}


?>