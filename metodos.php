<?php
class Operaciones{
    function sumar(...$valores){
        $rst = 0;
        foreach($valores as $val){
            $rst += $val;
    }
    return $rst;
}

    function multiplicar($factorA,$factorB){
        return $factorA * $factorB;
    }

    function dividir($dividend,$divisor){
        if($dividend== 0){
            return 'No se puede dividir por 0';
        }
        return $dividend / $divisor;
    }
}
?>