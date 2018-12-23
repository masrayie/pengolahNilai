<?php

class M_Mapel extends CI_Model
{
    private $id_mapel;
    private $namaMapel;

    function __construct($id_mapel=null, $namaMapel=null)
    {
        $this->id_mapel = $id_mapel;
        $this->namaMapel = $namaMapel;
    }

    public function getIdMapel()
    {
        return $this->id_mapel;
    }

    public function setIdMapel($id_mapel)
    {
        $this->id_mapel = $id_mapel;
    }

    public function getNamaMapel()
    {
        return $this->namaMapel;
    }

    public function setNamaMapel($namaMapel)
    {
        $this->namaMapel = $namaMapel;
    }
}

?>