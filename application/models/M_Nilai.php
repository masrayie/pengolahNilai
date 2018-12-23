<?php

class M_Nilai extends CI_Model
{
    private $id_nilai;
    private $n_id_kelas;
    private $n_nis;
    private $id_mapel;
    private $nilai_tugas;
    private $nilai_uh;
    private $nilai_uts;
    private $nilai_uts2;
    private $nilai_uas;
    private $nilai_uas2;
    private $sikap;
    private $status;

    function __construct($id_nilai=null, $n_id_kelas=null, $n_nis=null, $id_mapel=null, $nilai_tugas=null, $nilai_uh=null, $nilai_uts=null, $nilai_uts2=null, $nilai_uas=null, $nilai_uas2=null, $sikap=null, $status=null)
    {
        $this->id_nilai     = $id_nilai;
        $this->n_id_kelas   = $n_id_kelas;
        $this->n_nis        = $n_nis;
        $this->id_mapel     = $id_mapel;
        $this->nilai_tugas  = $nilai_tugas;
        $this->nilai_uh     = $nilai_uh;
        $this->nilai_uts    = $nilai_uts;
        $this->nilai_uts2   = $nilai_uts2;
        $this->nilai_uas    = $nilai_uas;
        $this->nilai_uas2   = $nilai_uas2;
        $this->sikap        = $sikap;
        $this->status       = $status;
    }

    public function getIdNilai()
    {
        return $this->id_nilai;
    }

    public function setIdNilai($id_nilai)
    {
        $this->id_nilai = $id_nilai;
    }

    public function getIdKelas()
    {
        return $this->n_id_kelas;
    }

    public function setIdKelas($n_id_kelas)
    {
        $this->n_id_kelas = $n_id_kelas;
    }

    public function getNis(){
        $this->n_nis;
    }

    public function setNis($n_nis){
        $this->n_nis = $n_nis;
    }

    public function getIdMapel(){
        $this->id_mapel;
    }

    public function setMapel($id_mapel){
        $this->id_mapel = $id_mapel;
    }

    public function getNilaiTugas(){
        $this->nilai_tugas;
    }

    public function setNilaiTugas($nilai_tugas){
        $this->nilai_tugas = $nilai_tugas;
    }
    
    public function getNilaiUh(){
        $this->nilai_uh;
    }

    public function setNilaiUh($nilai_uh){
        $this->nilai_uh = $nilai_uh;
    }

    public function getNilaiUts(){
        $this->nilai_uts;
    }

    public function setNilaiUts($nilai_uts){
        $this->nilai_uts = $nilai_uts;
    }

    public function getNilaiUts2(){
        $this->nilai_uts2;
    }

    public function setNilaiUts2($nilai_uts2){
        $this->nilai_uts2 = $nilai_uts2;
    }

    public function getNilaiUas(){
        $this->nilai_uas;
    }

    public function setNilaiUas($nilai_uas){
        $this->nilai_uas = $nilai_uas;
    }

    public function getNilaiUas2(){
        $this->nilai_uas2;
    }

    public function setNilaiUas2($nilai_uas2){
        $this->nilai_uas2 = $nilai_uas2;
    }

    public function getSikap(){
        $this->sikap;
    }

    public function setSikap($sikap){
        $this->sikap = $sikap;
    }

    public function getStatus(){
        $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}

?>