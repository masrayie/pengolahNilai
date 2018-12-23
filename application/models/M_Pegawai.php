<?php
/**
 *id
 */
class M_Pegawai extends CI_Model
{
  private $nip;
  private $username;
  private $namalengkap;
  private $ttl;
  private $jenkel;
  private $alamat;
  private $telepon;
  private $pendidikan;
  private $p_jabatan;
  private $info_peg;

  function __construct($nip=null, $username=null, $namalengkap=null, $ttl=null, $jenkel=null, $alamat=null, $telepon=null, $pendidikan=null, $p_jabatan=null, $info_peg=null)
  {
      $this->nip = $nip;
      $this->username = $username;
      $this->namalengkap = $namalengkap;
      $this->ttl = $ttl;
      $this->jenkel = $jenkel;
      $this->alamat = $alamat;
      $this->telepon = $telepon;    
      $this->pendidikan = $pendidikan;    
      $this->p_jabatan = $p_jabatan;    
      $this->info_peg = $info_peg;    
  }

  public function getNip()
  {
    return $this->nip;
  }

  public function setNip($nip)
  {
    $this->nip = $nip;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getNamaLengkap()
  {
    return $this->namalengkap;
  }

  public function setNamaLengkap($namalengkap)
  {
    $this->namalengkap = $namalengkap;
  }
  
  public function getAlamat()
  {
    return $this->alamat;
  }

  public function setAlamat($alamat)
  {
    $this->alamat = $alamat;
  }

  public function getJenkel()
  {
    return $this->jenkel;
  }

  public function setJenkel($jenkel)
  {
    $this->jenkel = $jenkel;
  }

  public function getTtl()
  {
    return $this->ttl;
  }

  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }

  public function getJabatan()
  {
    return $this->p_jabatan;
  }

  public function setJabatan($p_jabatan)
  {
    $this->p_jabatan = $p_jabatan;
  }

  public function getTelepon()
  {
    return $this->telepon;
  }

  public function setTelepon($telepon)
  {
    $this->telepon = $telepon;
  }

  public function getPendidikan()
  {
    return $this->pendidikan;
  }

  public function setPendidikan($pendidikan)
  {
    $this->pendidikan = $pendidikan;
  }

  public function getInfoPeg()
  {
    return $this->info_peg;
  }

  public function setInfoPeg($info_peg)
  {
    $this->info_peg = $info_peg;
  }

}

 ?>
