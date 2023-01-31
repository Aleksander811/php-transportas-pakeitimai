<?php

namespace TRANSPORT;

class Item
{
    protected $id;
    protected $marke;
    protected $kaina;
    protected $svoris;

    public function addBaseInfo($id, $marke, $kaina, $svoris){
        $this->id = $id;
        $this->marke = $marke;
        $this->kaina = $kaina;
        $this->svoris = $svoris;
    }

    public function __construct($id, $marke, $kaina, $svoris)
    {
        $this->id = $id;
        $this->marke = $marke;
        $this->kaina = $kaina;
        $this->svoris = $svoris;
    }

    public function getItem()
    {
        return [
            $this->id,
            $this->kaina,
            $this->svoris,
        ];
    }

    static public function generateItemList($data)
    {
        echo "<ul>";
        foreach ($data as $item) {
            echo "<li> $item</li>";
        }
        echo "</ul>";
    }

}
