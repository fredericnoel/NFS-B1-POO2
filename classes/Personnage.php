<?php

abstract class Personnage
{
    protected $magie = 0;
    protected $vie = 100;
    protected $intelligence = 0;
    protected $force = 0;

    public function __construct(int $m, int $i, int $f)
    {
        $this->magie = $m;
        $this->intelligence = $i;
        $this->force = $f;
    }
}
