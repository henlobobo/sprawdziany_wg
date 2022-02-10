<?php
        $tab = array();
        for ($i = 0; $i < 50; $i++)
        {
            array_push($tab, rand(10, 1000));
        }
        $min = 0;
        $max = 0;
        $tab = array_unique($tab);
        sort($tab);
        
        $max = array($tab[count($tab)-1], $tab[count($tab)-2], $tab[count($tab)-3]);
        $min = array($tab[0], $tab[1], $tab[2]);

        echo("Największe liczby to: ".$max[0].", ".$max[1].", ".$max[2]." | Najmniejsze liczby to: ".$min[0].", ".$min[1].", ".$min[2]);

?>