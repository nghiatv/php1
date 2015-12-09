<?php
    function can(float $num, int $lvl): float{
        $lvl = 1/$lvl;
        $num = pow($num, $lvl);
        return $num;
}
echo can(27, 5);
?>