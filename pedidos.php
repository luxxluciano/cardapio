<!--
O cardápio de uma lancheria é o seguinte:

Especificação       Código  Preço
Cachorro quente     100     4,00
Bauru simples       101     5,20
Bauru com ovo       102     5,80
Hamburger           103     4,20
Cheese burger       104     4,70
Refrigerante        105     2,50

Faça uma página de internet onde é possível informar o
código do item pedido, a quantidade e calcular o valor
a ser pago por aquele lanche. Considere que em cada
envio somente será calculado um item. Faça
consistência para evitar valores em branco.
-->

<?php

$lanches = array(100=4.00,101=5.20,102=5.80,103=4.20,104=4.70,105=2.50);

//function calcular($quantidade, $valor){
    
//}

if (isset $_POST){
    $codigo=$_POST['lanche'];
    $quantidade=$POST['quantidade'];
    for($x=100; $x<=105; $x++){
        if ($x==$codigo){
           //print("$lanches[$x]");
            $total=$quantidade*$lanches[$x];
            print("o valor a ser pago é de: ".$total)
        }
        
    }
    
}


?>

