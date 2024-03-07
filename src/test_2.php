<?php

function pertence_sequencia_fibonacci($num)
{
    $x = 0;
    $y = 1;
    while ($x <= $num) {
        if($x == $num) {
            return true;
        }

        $temp = $x;
        $x = $y;
        $y = $temp + $y;
    }
    return  false;
}

$num_informado = 5;

if (pertence_sequencia_fibonacci($num_informado)) {
    echo "O número $num_informado pertence a sequencia de Fibonacci.";
} else {
    echo "O número $num_informado não pertence a sequencia de Fibonacci.";
}

// Na linha 19, infoma um valor a variavel $num_informado.