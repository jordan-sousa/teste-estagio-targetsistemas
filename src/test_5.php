<?php

function inverte_string($x)
{
    $string = str_split($x);

    $a = 0;
    $b = count($string) - 1;
    while ($a < $b) {
        $temp = $string[$a];
        $string[$a] = $string[$b];
        $string[$b] = $temp;
        $a++;
        $b--;
    }

    $string_invertida = implode('', $string);
    return $string_invertida;
}

$string_normal = "Minha vaga de Estágio!";
$string_invertida = inverte_string($string_normal);

echo "Texto normal: " . $string_normal . PHP_EOL;
echo "Texto invertido: " . $string_invertida ;