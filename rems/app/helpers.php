<?php

function Price($Valor, $Parcelas, $Juros) {

    $Juros = bcdiv($Juros,100,15);
    $E=1.0;
    $cont=1.0;
    
    for($k=1;$k<=$Parcelas;$k++)
    {
    $cont= bcmul($cont,bcadd($Juros,1,15),15);
    $E=bcadd($E,$cont,15);
    }
    $E=bcsub($E,$cont,15);
    
    $Valor = bcmul($Valor,$cont,15);
    return bcdiv($Valor,$E,15);
}