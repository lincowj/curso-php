<?php

namespace Alura\Leilao\Model;

use DomainException;

class Leilao
{
    /** @var Lance[] */
    private $lances;
    private string $descricao;
    private bool $finalizado;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [];
        $this->finalizado = false;
    }

    public function recebeLance(Lance $lance)
    {
        if (!empty($this->lances) && $this->ehDoUltimoUsuario($lance)) {
            throw new DomainException("Usuário não pode propor dois lances consecutivos");
            
        }
        /*
        $totalLancesUsuario = $this->qtdLancesPorUsuario($lance->getUsuario());

        if ($totalLancesUsuario >= 5) {
            throw new DomainException("Usuário não pode propor mais de 5 lances por leilão");
        }
        */
        $this->lances[] = $lance;
    }

    /**
     * @return Lance[]
     */
    public function getLances(): array
    {
        return $this->lances;
    }

    public function finaliza()
    {
        $this->finalizado = true;
    }

    public function estaFinalizado(): bool
    {
        return $this->finalizado;
    }

    private function ehDoUltimoUsuario(Lance $lance): bool
    {
        $ultimoLance = $this->lances[count($this->lances) - 1];
        return $lance->getUsuario() == $ultimoLance->getUsuario();
    }

    private function qtdLancesPorUsuario(Usuario $usuario): int
    {
        $totalLancesUsuario = array_reduce(
            $this->lances, 
            function(int $totalAcumulado = 0, Lance $lanceAtual) use ($usuario){
                if ($lanceAtual->getUsuario() == $usuario){
                    return $totalAcumulado + 1;
                }

                return $totalAcumulado;
            },
        );

        return $totalLancesUsuario;
    }
}
