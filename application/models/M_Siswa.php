<?php
/**
 *id
 */
class M_Siswa extends CI_Model
{
  private $nis;
  private $id_kelas;
  private $namaSiswa;
  private $ttl;
  private $jenkel;
  private $agama;
  private $telepon_siswa;
  private $alamat;
  private $semester;
  // private $nama_ortu;
  // private $telepon_ortu;
  private $ijazah_no;
  private $skhun_no;

  function __construct($nis=null, $id_kelas=null, $namaSiswa=null, $ttl=null, $jenkel=null, $agama=null, $telepon_siswa=null, $alamat=null, $semester=null, $ijazah_no=null, $skhun_no=null)
  {
      $this->nis        = $nis;
      $this->id_kelas   = $id_kelas;
      $this->namaSiswa  = $namaSiswa;
      $this->ttl        = $ttl;
      $this->jenkel     = $jenkel;
      $this->agama     = $agama;
      $this->telepon_siswa    = $telepon_siswa; 
      $this->alamat    = $alamat; 
      $this->semester   = $semester; 
      $this->ijazah_no  = $ijazah_no;   
      $this->skhun_no   = $skhun_no;   
  }

  public function getNis()
  {
    return $this->nis;
  }

  public function setNis($nis)
  {
    $this->nis = $nis;
  }

  public function getTtl()
  {
    return $this->ttl;
  }

  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }

  public function getAgama()
  {
    return $this->agama;
  }

  public function setAgama($agama)
  {
    $this->agama = $agama;
  }

  public function getIjazah()
  {
    return $this->ijazah_no;
  }

  public function setIjazah($ijazah_no)
  {
    $this->ijazah_no = $ijazah_no;
  }

  public function getSkhun()
  {
    return $this->skhun_no;
  }

  public function setSkhun($skhun_no)
  {
    $this->skhun_no = $skhun_no;
  }

  public function getNamaSiswa()
  {
    return $this->namaSiswa;
  }

  public function setNamaSiswa($namaSiswa)
  {
    $this->namaSiswa = $namaSiswa;
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

  public function getIdKelas()
  {
    return $this->id_kelas;
  }

  public function setIdKelas($id_kelas)
  {
    $this->id_kelas = $id_kelas;
  }

  public function getTeleponSiswa()
  {
    return $this->telepon_siswa;
  }

  public function setTeleponSiswa($telepon_siswa)
  {
    $this->telepon_siswa = $telepon_siswa;
  }

  public function getSemester()
  {
    return $this->semester;
  }

  public function setSemester($semester)
  {
    $this->semester = $semester;
  }

  // public function getNamaOrtu()
  // {
  //   return $this->nama_ortu;
  // }

  // public function setNamaOrtu($nama_ortu)
  // {
  //   $this->nama_ortu = $nama_ortu;
  // }

  // public function getTeleponOrtu()
  // {
  //   return $this->telepon_ortu;
  // }

  // public function setTeleponOrtu($telepon_ortu)
  // {
  //   $this->telepon_ortu = $telepon_ortu;
  // }
}

 ?>
