<?php

/**
 * Essa classe possui o metodo getQtdeNotas ele não está completo e cabe a você concluí-lo de acordo com os requisitos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     * @param float $reais
     * @return array
     */
    public function getQtdeNotas(float $reais): array
    {
        $notas_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        /*
         * Coloque o seu código aqui.
         * Você é livre para criar classes, arquivos e funções da maneira que achar melhor.
         * Esse método deve retornar a quantidade de notas e moedas necessária para o valor em reais passado para ele
         *
         * Exemplo:
         * getQtdeNotas(100.00); // Deve retornar algo como ['100' => 1]
         */

        $notas = [100, 50, 20, 10, 5, 2, 1, "0.5", "0.25", "0.1", "0.05", "0.01"];

        for ($i = 0; $i < count($notas); $i++) {
            $troco = intval($reais / $notas[$i]);
            $reais = $reais - ($troco * $notas[$i]);
            $notas_qtd[$notas[$i]] = $troco;
        }

        return $notas_qtd;
    }
}
