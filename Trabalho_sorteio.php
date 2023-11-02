<?php

$jogo = readline("Escolha o jogo (Mega-Sena, Lotofácil, Quina e Lotomania): ");

while($jogo != "Mega-Sena" && $jogo != "Lotofácil" && $jogo != "Quina" && $jogo != "Lotomania" ) {

    echo "Informe um jogo \n";
    $jogo = readline("Escolha o jogo (Mega-Sena, Lotofácil, Quina e Lotomania): ");

}

if ($jogo == "Mega-Sena") {

    $valor_mega_sena = 4.50;

    $numapostas = readline("Quantas apostas você deseja: ");

    while ($numapostas <= 0) {
        echo "Informe um valor acima de zero\n";
        $numapostas = readline("Quantas apostas você deseja: ");
    }

    $numdezenas = readline("Números de dezenas desejadas: ");

    while ($numdezenas < 6 || $numdezenas > 20) {
        echo "Informe uma quantidade de dezenas entre 6 e 20\n";
        $numdezenas = readline("Números de dezenas desejadas: ");
    }

    for ($i = 0; $i < $numapostas; $i++) {
        $posicao = $i + 1;
        echo "\n" . $posicao . "° Sorteio: ";

        $sorteios = array();

        while (count($sorteios) < $numdezenas) {
            $sorteio = rand(1, 60);
            if (!in_array($sorteio, $sorteios)) {
                $sorteios[] = $sorteio;
            }
        }

        sort($sorteios);

        foreach ($sorteios as $sorteio) {
            echo $sorteio . " ";
        }
    }

    $valor_total = $valor_mega_sena * $numapostas;
    echo "\nO valor total que deve ser pago é R$$valor_total\n";
}

if ($jogo == "Lotofácil") {

    $valor_Lotofacil = 2.50;

    $numapostas = readline("Quantas apostas você deseja: ");

    while ($numapostas <= 0) {
        echo "Informe um valor acima de zero\n";
        $numapostas = readline("Quantas apostas você deseja: ");
    }

    $numdezenas = readline("Números de dezenas desejadas: ");

    while ($numdezenas < 6 || $numdezenas > 20) {
        echo "Informe uma quantidade de dezenas entre 6 e 20\n";
        $numdezenas = readline("Números de dezenas desejadas: ");
    }

    for ($i = 0; $i < $numapostas; $i++) {
        $posicao = $i + 1;
        echo "\n" . $posicao . "° Sorteio: ";

        $sorteios = array();

        while (count($sorteios) < $numdezenas) {
            $sorteio = rand(1, 60);
            if (!in_array($sorteio, $sorteios)) {
                $sorteios[] = $sorteio;
            }
        }

        sort($sorteios);

        foreach ($sorteios as $sorteio) {
            echo $sorteio . " ";
        }
    }

    $valor_total = $valor_Lotofacil * $numapostas;
    echo "\nO valor total que deve ser pago é R$$valor_total\n";
}

if ($jogo == "Lotomania") {

    $valor_Lotomania = 2.50;

    $numapostas = readline("Quantas apostas você deseja: ");

    while ($numapostas <= 0) {
        echo "Informe um valor acima de zero\n";
        $numapostas = readline("Quantas apostas você deseja: ");
    }

    $numdezenas = readline("Números de dezenas desejadas: ");

    while ($numdezenas < 6 || $numdezenas > 20) {
        echo "Informe uma quantidade de dezenas entre 6 e 20\n";
        $numdezenas = readline("Números de dezenas desejadas: ");
    }

    for ($i = 0; $i < $numapostas; $i++) {
        $posicao = $i + 1;
        echo "\n" . $posicao . "° Sorteio: ";

        $sorteios = array();

        while (count($sorteios) < $numdezenas) {
            $sorteio = rand(1, 60);
            if (!in_array($sorteio, $sorteios)) {
                $sorteios[] = $sorteio;
            }
        }

        sort($sorteios);

        foreach ($sorteios as $sorteio) {
            echo $sorteio . " ";
        }
    }

    $valor_total = $valor_Lotomania * $numapostas;
    echo "\nO valor total que deve ser pago é R$$valor_total\n";
}

if ($jogo == "Quina") {

    $valor_Quina = 2.00;

    $numapostas = readline("Quantas apostas você deseja: ");

    while ($numapostas <= 0) {
        echo "Informe um valor acima de zero\n";
        $numapostas = readline("Quantas apostas você deseja: ");
    }

    $numdezenas = readline("Números de dezenas desejadas: ");

    while ($numdezenas < 6 || $numdezenas > 20) {
        echo "Informe uma quantidade de dezenas entre 6 e 20\n";
        $numdezenas = readline("Números de dezenas desejadas: ");
    }

    for ($i = 0; $i < $numapostas; $i++) {
        $posicao = $i + 1;
        echo "\n" . $posicao . "° Sorteio: ";

        $sorteios = array();

        while (count($sorteios) < $numdezenas) {
            $sorteio = rand(1, 60);
            if (!in_array($sorteio, $sorteios)) {
                $sorteios[] = $sorteio;
            }
        }

        sort($sorteios);

        foreach ($sorteios as $sorteio) {
            echo $sorteio . " ";
        }
    }

    $valor_total = $valor_Quina * $numapostas;
    echo "\nO valor total que deve ser pago é R$$valor_total\n";
}
