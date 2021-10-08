<?php
for ($i = 0; $i < 24; $i++) {
    for ($j = 0; $j <= 55; $j += 5) {
        if ($i < 10 && $j <= 5) printf("0%s:0%s", $i, $j);
        elseif ($i < 10 && $j > 5) printf("0%s:%s", $i, $j);
        elseif ($i >= 10 && $j <= 5) printf("%s:0%s", $i, $j);
        elseif ($i >= 10 && $j > 5) printf("%s:%s", $i, $j);

        echo "<br>";
    }
}
