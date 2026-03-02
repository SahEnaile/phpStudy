<?php

class Filme {
    public string $nome;
    public int $anoLancamento;
    public float $notaFilme;
    public string $genero;
    public array $notas = []; 

    public function avaliarFilme(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        return $somaNotas / count($this->notas);
    }
}