<?php

class Magicien extends Personnage
{
    public function __construct(int $m, int $i, int $f)
    {
        parent::__construct($m, $i, $f);
    }

    /**
     * @return int
     */
    public function getMagie(): int
    {
        return $this->magie;
    }

    /**
     * @param int $magie
     */
    public function setMagie(int $magie): void
    {
        $this->magie = $magie;
    }

    /**
     * @return int
     */
    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }

    /**
     * @return int
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return int
     */
    public function getForce(): int
    {
        return $this->force;
    }

    /**
     * @param int $force
     */
    public function setForce(int $force): void
    {
        $this->force = $force;
    }
}