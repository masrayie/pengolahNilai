<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
        parent::__construct();
        $this->load->model('ModelDB', '', TRUE);
        $this->load->model('M_Siswa', '', TRUE);
        $this->load->model('M_Guru', '', TRUE);
    }

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objNilai'] = null;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->readDataAll('Nilai');
                if(!$result==null){
                    foreach($result as $row){
                        $data['objNilai'][] = new M_Nilai(
                            $row->id_nilai, 
                            $row->n_id_kelas,
                            $row->n_nis,
                            $row->nilai_tugas,
                            $row->nilai_uh,
                            $row->nilai_uts,
                            $row->nilai_uts2,
                            $row->nilai_uas,
                            $row->nilai_uas2,
                            $row->sikap,
                            $row->status
                        );
                    }
                }
				if($jabatan == 2){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewNilaiAll', $data);
				} else {
					return false;
				}
		   }
		   else
		   {
		     //If no session, redirect to login page
		     	redirect(base_url(), 'refresh');
		   }
    }

    public function searchNilai(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objNilai'] = null;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 2){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewSearchNilai', $data);
				} else {
					return false;
				}
		   }
		   else
		   {
		     //If no session, redirect to login page
		     	redirect(base_url(), 'refresh');
		   }
    }

    public function nilaiKelas($id_kelas){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objNilai'] = null;
                $query = "select n.id_nilai, n.n_nis, s.nama, n.n_id_kelas, k.nama_kelas, n.n_id_mapel, 
                        m.nama_mapel, n.nilai_tugas, n.nilai_uh, n.nilai_uts, n.nilai_uts_2,
                        n.nilai_uas, n.nilai_uas_2, n.sikap, n.status from nilai_pelajaran n 
                        inner join siswa s on n.n_nis = s.nis
                        inner join kelas k on n.n_id_kelas = s.s_id_kelas 
                        inner join mata_pelajaran m on n.n_id_mapel = m.id_mapel
                        where n.n_id_kelas = '".$id_kelas."'";
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->freeQuery($query);
                if(!$result==null){
                    foreach($result as $row){
                        $data['objNilai'][] = array(
                            'id_nilai' => $row->id_nilai,
                            'nis' => $row->n_nis,
                            'nama' => $row->nama,
                            'id_kelas' => $row->n_id_kelas,
                            'kelas' => $row->nama_kelas,
                            'id_mapel' => $row->n_id_mapel,
                            'nama_mapel' => $row->nama_mapel,
                            'nilai_tugas' => $row->nilai_tugas,
                            'nilai_uh' => $row->nilai_uh,
                            'nilai_uts' => $row->nilai_uts,
                            'nilai_uts2' => $row->nilai_uts2,
                            'nilai_uas' => $row->nilai_uas,
                            'nilai_uas2' => $row->nilai_uas2,
                            'sikap' => $row->sikap,
                            'status' => $row->status
                        );
                    }
                }
				if($jabatan == 2){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewSearchNilaiKelas', $data);
				} else {
					return false;
				}
		   }
		   else
		   {
		     //If no session, redirect to login page
		     	redirect(base_url(), 'refresh');
		   }
    }

    public function nilaiMapel($id_mapel){
        if($this->session->userdata('logged_in'))
        {    
             $id_kelas = $this->input->get('id_kelas');
             $id_mapel = $this->input->get('id_mapel');
             $session_data = $this->session->userdata('logged_in');
             $query = "select n.id_nilai, n.n_nis, s.nama, k.nama_kelas, n.n_id_mapel, 
                        m.nama_mapel, n.nilai_tugas, n.nilai_uh, n.nilai_uts, n.nilai_uts_2,
                        n.nilai_uas, n.nilai_uas_2, n.sikap, n.status from nilai_pelajaran n 
                        inner join siswa s on n.n_nis = s.nis
                        inner join kelas k on n.n_id_kelas = s.s_id_kelas 
                        inner join mata_pelajaran m on n.n_id_mapel = m.id_mapel
                        where n.n_id_kelas = '".$id_kelas."' and n.id_mapel = '".$id_mapel."'";
             $data['objUser'] = $session_data;
             $data['objNilai'] = null;
             $jabatan = $session_data['jabatan'];
             // print_r($session_data);
             $obj = new ModelDB();
             $result = $obj->readDataAll('Kelas');
             $resultset = $obj->freeQuery($query);
             if(!$result==null){
                 foreach($result as $row){
                     $data['objNilai'][] = array(
                        'id_nilai' => $row->id_nilai,
                        'nis' => $row->n_nis,
                        'nama' => $row->nama,
                        'id_kelas' => $row->n_id_kelas,
                        'kelas' => $row->nama_kelas,
                        'id_mapel' => $row->n_id_mapel,
                        'nama_mapel' => $row->nama_mapel,
                        'nilai_tugas' => $row->nilai_tugas,
                        'nilai_uh' => $row->nilai_uh,
                        'nilai_uts' => $row->nilai_uts,
                        'nilai_uts2' => $row->nilai_uts2,
                        'nilai_uas' => $row->nilai_uas,
                        'nilai_uas2' => $row->nilai_uas2,
                        'sikap' => $row->sikap,
                        'status' => $row->status
                     );
                 }
             }
             if($jabatan == 2){
                 $this->load->view('HeaderFooter/Header1', $data);
                 $this->load->view('viewSearchNilaiMapel', $data);
             } else {
                 return false;
             }
        }
        else
        {
          //If no session, redirect to login page
              redirect(base_url(), 'refresh');
        }
    }

    public function store(){

    }

    public function edit(){

    }

    public function put(){

    }

    public function delete(){
        
    }
}
