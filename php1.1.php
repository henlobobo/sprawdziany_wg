<?php
    const LICZBA = 66569;
    
    $tab = array();
    $i = 4;

    $zmienna = LICZBA;
    $suma_cyfr = 0;

    while($zmienna > 0){
        $a = $zmienna % 10;
        if($a%2 == 0){
            $tab[$i] = "Parzysta";
            $i--;
        }
        else{
            $tab[$i] = "Nieparzysta";
            $i--;
        } 
        $zmienna = $zmienna / 10;
        $suma_cyfr += $a;
    }
    for($i = 0; $i < 5; $i++){
        echo ($tab[$i]);
        echo ("\n");
    }
    if($suma_cyfr>13)
        echo ("Suma cyfr jest większa niz 13.");
    else
        echo ("Suma cyfr jest mniejsza niz 13.");

    $punkty = $argv[1];
    if($punkty>=0 && $punkty<=29)
        echo("Ocena niedostateczna");
    else if($punkty>=30 && $punkty<=59)
        echo("Ocena dopuszczająca");
    else if($punkty>=60 && $punkty<=74)
        echo("Ocena dostateczna");
    else if($punkty>=75 && $punkty<=89)
        echo("Ocena dobra");
    else if($punkty>=90 && $punkty<=99)
        echo("Ocena bardzo dobra");
    else if($punkty==100)
        echo("Ocena celująca");
    else
        echo("Podano niewlasciwa liczbe punktow");
?>