<?php

namespace TRANSPORT;

class Motorcycle extends Item{
    private $ratuSk;
    private $variklis;

    public function __construct($id, $marke, $kaina, $svoris, $ratuSk, $variklis)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->ratuSk = $ratuSk;
        $this->variklis = $variklis;  
    }
    
}