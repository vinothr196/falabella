<?php

/**
 * Process the given number and return processed output
 *
 * @param int $num
 * @return int|string $num|$text
 */
function process($num)
{
    $diff3 = $num % 3;
    $diff5 = $num % 5;
    if ($diff3 == 0 || $diff5 == 0) {
        $text = null;
        switch (($num % 3) <=> ($num % 5)) {
            case -1:
                $text = 'Linio';
                break;
            case 1:
                $text = 'IT';
                break;
            default:
                $text = 'Linianos';
        }
        return $text;
    }
    return $num;
}

/**
 * Loop to iterate 1 to 100
 */
for ($i = 1; $i<=100; $i++) {
    echo process($i)."\n";
}
