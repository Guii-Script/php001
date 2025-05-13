<?php
echo "Olá Mundo";
?>
<br>
5+2  = <?php echo 5+2; ?> <br>
10-2  = <?php echo 10-2; ?> <br>
10/2  = <?php echo 10/2; ?> <br>
10*2  = <?php echo 10*2; ?> <br>
10%2  = <?php echo 10%2; ?> <br>
10**2 = <?php echo 10**2; ?> <br>

<?php
$salario = 5000.35;
$idade = 21;
$sobrenome = "Oliveira";
$animalEstimacao = false;


echo "<br>";
echo "Eu tenho $idade anos <br>";
echo 'Eu tenho $idade anos <br>';
echo 'Eu tenho' . $idade . ' anos <br>';
echo "Eu tenho' . $idade . ' anos <br>";

if($idade > 21){
    echo "Cuidado com o tigrinho";
}else{
    echo "Você ainda tem chance";
}
?>

