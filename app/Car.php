<?php

namespace TRANSPORT;

class Car extends Item{
    private $modelis;
    private $spalva;
    private $variklis;
    private $tipas;

    public function __construct($id, $marke, $kaina, $svoris, $modelis, $spalva, $variklis, $tipas)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->modelis = $modelis;
        $this->variklis = $variklis;
    }
    
}