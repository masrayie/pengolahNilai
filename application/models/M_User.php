<?php

class M_User extends CI_Model{
    private $id_user;
    private $username;
    private $password;
    private $jabatan;
    private $info_user;

    function __construct($id_user=null, $username=null, $password=null, $jabatan=null, $info_user=null)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->password = $password;
        $this->jabatan = $jabatan;
        $this->info_user = $info_user;
    }

    public function getId()
    {
        return $this->id_user;
    }

    public function setId($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getInfoUser()
    {
        return $this->info_user;
    }

    public function setInfoUser($info_user)
    {
        $this->info_user = $info_user;
    }

    public function getJabatan()
    {
        return $this->jabatan;
    }

    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }
}

?>