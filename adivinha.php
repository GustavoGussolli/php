<?php

$chute = 0;
$sorteado = rand(1 , 100);
$tentativas = 0;

while($chute != $sorteado){

$chute = (int) readLine("DIGITE UM NÚMERO: ");
$tentativas = $tentativas + 1;


if($chute == $sorteado){
        print "Você venceu \n";
} else{
    if($chute > $sorteado){
            print "Muito alto \n";
    }   else{
        print "Muito baixo \n";
    }

}
}
print "FiM DO JOGO \n";
print "$tentativas";
