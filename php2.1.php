<?php
        $sum = 0;
        $sr = 0;
        for ($i = 0; $i<10; $i++)
        {
            $liczba = rand(50,100);
            $sum += $liczba;
        }
        $sr = $sum / 10;
        echo("Suma: ${sum} | Średnia: ${sr}");

?>