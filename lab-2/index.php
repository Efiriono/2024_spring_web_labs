<?php
// Вариант №7
$xn = 0.1;
$xk = 1;
$N = 12;

echo '<table border = 1 >
        <tr>
            <th>x</th>
            <th>Y(x)</th>
            <th>S(x)</th>   
        </tr>';  

$h = ($xk - $xn) / 10;

for ($x = $xn; $x <= $xk; $x += $h) {
    $y = (1 + pow($x, 2) * atan($x))/2 - $x/2;
    $s = 0;
    for ($n = 1; $n <= $N; $n++) {
        $s += pow((-1), $n + 1) * pow($x, 2 * $n + 1) / (4 * pow($n, 2) - 1);
    } 
    echo '<tr>
            <td>'.$x.'</td>
            <td>'.$y.'</td>
            <td>'.$s.'</td>   
          </tr>'; 
}
echo '</table>';
?>