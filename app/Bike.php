<?php

namespace TRANSPORT;

class Bike extends Item{
    private $begiai;
    private $kategorija;


    public function __construct($id, $marke, $kaina, $svoris, $begiai, $kategorija)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->begiai = $begiai;
        $this->kategorija = $kategorija;
    }
    
    public function getItem()
    {
      $data = parent::getItem();
      $data[]=$this->begiai;
      $data[]=$this->kategorija;

      return $data;
    }


}
