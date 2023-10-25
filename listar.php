<?php

   echo "***Top 5 herois do mundo*** \n";

   $herois = array("Spider-Man","Hulk","Batman","Cavaleiro da Lua","Super-Man");
   $herois[5]= "Thor" ; 
   $herois[] = "DeadPool";
   $posicao = 1;

   array_unshift($herois , "Pantera negra");
   //shuffle($herois); = Embaralhar a ordem
   //sort($herois); = Coloca em ordem alfabetica

        for ($i=0; $i < sizeof($herois); $i++) { 

            print($posicao . "° Lugar: " . $herois[$i] . "\n");

            $posicao++;

        }
