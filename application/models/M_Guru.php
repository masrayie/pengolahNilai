<?php
/**
 *id
 */
class M_Guru extends CI_Model
{
  private $id_guru;
  private $nip;
  private $walikelas;
  private $namaGuru;
  private $ttl;
  private $jenkel;
  private $jabatan;
  private $pendidikan;
  private $alamat;
  private $telepon;

  function __construct($id_guru=null, $nip=null, $walikelas=null, $namaGuru=null, $ttl=null, $jenkel=null, $jabatan=null ,$pendidikan=null, $alamat=null, $telepon=null)
  {
      if(!empty($walikelas)){
        $this->id_guru = $id_guru;
        $this->nip = $nip;
        $this->walikelas = $walikelas;
        $this->namaGuru = $namaGuru;
        $this->ttl = $ttl;
        $this->jenkel = $jenkel;
        $this->jabatan = $jabatan;
        $this->pendidikan = $pendidikan;
        $this->alamat = $alamat;
        $this->telepon = $telepon; 
      }  else {
        $this->id_guru = $id_guru;
        $this->nip = $nip;
        $this->namaGuru = $namaGuru;
        $this->ttl = $ttl;
        $this->jenkel = $jenkel;
        $this->jabatan = $jabatan;
        $this->pendidikan = $pendidikan;
        $this->alamat = $alamat;
        $this->telepon = $telepon; 
      }
  }

  public function getIdGuru()
  {
    return $this->id_guru;
  }

  public function setIdGuru($id_guru)
  {
    $this->id_guru = $id_guru;
  }

  public function getNip()
  {
    return $this->nip;
  }

  public function setNip($nip)
  {
    $this->nip = $nip;
  }

  public function getNamaGuru()
  {
    return $this->namaGuru;
  }

  public function setNamaGuru($namaGuru)
  {
    $this->namaGuru = $namaGuru;
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

  public function getJabatan()
  {
    return $this->jabatan;
  }

  public function setJabatan($jabatan)
  {
    $this->jabatan = $jabatan;
  }

  public function getTelepon()
  {
    return $this->telepon;
  }

  public function setTelepon($telepon)
  {
    $this->telepon = $telepon;
  }

  public function getTtl()
  {
    return $this->ttl;
  }

  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }

  public function getPendidikan()
  {
    return $this->pendidikan;
  }

  public function setPendidikan($pendidikan)
  {
    $this->pendidikan = $pendidikan;
  }

  public function getWalikelas()
  {
    return $this->walikelas;
  }

  public function setWalikelas($walikelas)
  {
    $this->walikelas = $walikelas;
  }
}

 ?>
