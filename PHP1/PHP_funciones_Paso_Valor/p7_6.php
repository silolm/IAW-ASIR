<?php
function avgArray($array){
    var_dump($array);
    $sum = 0;
    
    for ($i=0; $i < count($array); $i++) 
        $sum += $array[$i];
    
    $media = $sum / count($array);
    echo '<br><b> La media es: ' . number_format($media, 2) . '</b>';
}

$nums = [532, 84, 364];

avgArray($nums);