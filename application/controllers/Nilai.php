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
        $this->load->model('M_Nilai', '', TRUE);
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
                $result = $obj->readDataAll('nilai_pelajaran');
                if(!$result==null){
                    foreach($result as $row){
                        $data['objNilai'][] = new M_Nilai(
                            $row->id_nilai, 
                            $row->n_id_kelas,
                            $row->n_nis,
                            $row->nilai_tugas,
                            $row->nilai_uh,
                            $row->nilai_uts,
                            $row->nilai_uts_2,
                            $row->nilai_uas,
                            $row->nilai_uas_2,
                            $row->sikap,
                            $row->status
                        );
                    }
                }
				if($jabatan == 2 or $jabatan==1){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewAllNilai', $data);
				} else if($jabatan==3){
                    $this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewAllNilai', $data);
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
                $obj = new ModelDB();
                $result = $obj->readDataAll('kelas');
                if(!$result==null){
                    foreach($result as $row){
                        $data['objKelas'][] = array(
                            'id_kelas' => $row->id_kelas,
                            'nama_kelas' => $row->nama_kelas,
                            'status_kelas' => $row->status_kelas
                        );
                    }
                }
                // print_r($session_data);
				if($jabatan == 2 or $jabatan==1){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewSearchNilai', $data);
				} else if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewSearchNilai', $data);
				}else {
					return false;
				}
		   }
		   else
		   {
		     //If no session, redirect to login page
		     	redirect(base_url(), 'refresh');
		   }
    }

    public function nilaiKelas(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data     = $this->session->userdata('logged_in');
                $data['objUser']  = $session_data;
                $data['objNilai'] = null;
                $id_kelas = $this->input->get('id_kelas');
                $query = "select n.id_nilai, n.n_nis, s.nama, n.n_id_kelas, k.nama_kelas, n.n_id_mapel, 
                        m.nama_mapel, n.nilai_tugas, n.nilai_uh, n.nilai_uts, n.nilai_uts_2,
                        n.nilai_uas, n.nilai_uas_2, n.sikap, n.status from nilai_pelajaran n 
                        inner join siswa s on n.n_nis = s.nis
                        inner join kelas k on n.n_id_kelas = k.id_kelas 
                        inner join mata_pelajaran m on n.n_id_mapel = m.id_mapel
                        where n.n_id_kelas = '".$id_kelas."'";
                $jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->freeQuery($query);
                $result2 = $obj->readDataWhere('id_kelas',$id_kelas,'kelas')[0];
                $result3 = $obj->readDataAll('mata_pelajaran');
                $data['kelas'] = array(
                    'id_kelas' => $result2->id_kelas,
                    'nama_kelas' => $result2->nama_kelas
                );
                if(!$result3==null){
                    foreach($result3 as $row){
                        $data['mapel'][] = array(
                            'id_mapel'  => $row->id_mapel,
                            'nama_mapel' => $row->nama_mapel
                        );
                    }
                }
                if(!$result==null){
                    foreach($result as $row){
                        $data['objNilai'][] = array(
                            'id_nilai'      => $row->id_nilai,
                            'nis'           => $row->n_nis,
                            'nama'          => $row->nama,
                            'id_kelas'      => $row->n_id_kelas,
                            'kelas'         => $row->nama_kelas,
                            'id_mapel'      => $row->n_id_mapel,
                            'nama_mapel'    => $row->nama_mapel,
                            'nilai_tugas'   => $row->nilai_tugas,
                            'nilai_uh'      => $row->nilai_uh,
                            'nilai_uts'     => $row->nilai_uts,
                            'nilai_uts2'    => $row->nilai_uts_2,
                            'nilai_uas'     => $row->nilai_uas,
                            'nilai_uas2'    => $row->nilai_uas_2,
                            'sikap'         => $row->sikap,
                            'status'        => $row->status
                        );
                    }
                }
				if($jabatan == 2 or $jabatan == 1){
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewNilaiKelas', $data);
				} if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewNilaiKelas', $data);
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

    public function nilaiMapel(){
        if($this->session->userdata('logged_in'))
        {    
             $id_kelas = $this->input->get('id_kelas');
             $id_mapel = $this->input->get('id_mapel');
             $session_data = $this->session->userdata('logged_in');
             $query = "select n.id_nilai, n.n_nis, s.nama, k.nama_kelas, n.n_id_mapel, 
                        m.nama_mapel, n.nilai_tugas, n.nilai_uh, n.nilai_uts, n.nilai_uts_2,
                        n.nilai_uas, n.nilai_uas_2, n.sikap, n.status from nilai_pelajaran n 
                        inner join siswa s on n.n_nis = s.nis
                        inner join kelas k on n.n_id_kelas = k.id_kelas 
                        inner join mata_pelajaran m on n.n_id_mapel = m.id_mapel
                        where n.n_id_kelas = '".$id_kelas."' and n.n_id_mapel = ".$id_mapel."";
             $data['objUser'] = $session_data;
             $data['objNilai'] = null;
             $jabatan = $session_data['jabatan'];
             // print_r($session_data);
             $obj = new ModelDB();
             $result = $obj->readDataAll('Kelas');
             $result2 = $obj->readDataWhere('id_mapel',$id_mapel,'mata_pelajaran')[0];
             $result3 = $obj->readDataWhere('id_kelas',$id_kelas,'kelas')[0];
             $data['mapel'] = array(
                    'id_mapel' => $result2->id_mapel,
                    'nama_mapel' => $result2->nama_mapel
             );
             $data['kelas'] = array(
                'id_kelas' => $result3->id_kelas,
                'nama_kelas' => $result3->nama_kelas
             );
             $resultset = $obj->freeQuery($query);
             if(!$result==null){
                //  print_r($resultset);
                 for($i=0; $i < sizeof($resultset); $i++){
                     $data['objNilai'][$i] = array(
                        'id_nilai' => $resultset[$i]->id_nilai,
                        'nis' => $resultset[$i]->n_nis,
                        'nama' => $resultset[$i]->nama,
                        'id_kelas' => $id_kelas,
                        'kelas' => $resultset[$i]->nama_kelas,
                        'id_mapel' => $resultset[$i]->n_id_mapel,
                        'nama_mapel' => $resultset[$i]->nama_mapel,
                        'nilai_tugas' => $resultset[$i]->nilai_tugas,
                        'nilai_uh' => $resultset[$i]->nilai_uh,
                        'nilai_uts' => $resultset[$i]->nilai_uts,
                        'nilai_uts2' => $resultset[$i]->nilai_uts_2,
                        'nilai_uas' => $resultset[$i]->nilai_uas,
                        'nilai_uas2' => $resultset[$i]->nilai_uas_2,
                        'sikap' => $resultset[$i]->sikap,
                        'status' => $resultset[$i]->status
                     );
                 }
             }
             if($jabatan == 2){
                 $this->load->view('HeaderFooter/Header1', $data);
                 $this->load->view('viewNilaiMapel', $data);
             } else if($jabatan==3){
                $this->load->view('HeaderFooter/Header3', $data);
                $this->load->view('viewNilaiMapel', $data);
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

    public function newNilai(){
        $id_kelas = $this->input->get('id_kelas');
        $id_mapel = $this->input->get('id_mapel');
        // echo $id_kelas;
        $obj = new ModelDB();
        $sis = $obj->readDataWhere('s_id_kelas', $id_kelas, 'siswa');
        if(!$sis==null){
            for($i=0;$i<sizeof($sis);$i++){
                $data = array(
                    'id_nilai' => '',
                    'n_id_kelas' => $id_kelas,
                    'n_nis' => $sis[$i]->nis,
                    'n_id_mapel' => $id_mapel
                );
                $this->ModelDB->insertData($data,'nilai_pelajaran');
            }
        } else {
            echo "tdk bisa";
        }

        redirect(base_url('index.php/Nilai/nilaiMapel/?id_kelas='.$id_kelas.'&id_mapel='.$id_mapel),'refresh');
    }

    public function store(){
        $id_nilai = $this->input->post('id_nilai');
        $id_kelas = $this->input->post('id_kelas');
        $id_mapel = $this->input->post('id_mapel');
        $tugas = $this->input->post('n_tugas');
        $uh = $this->input->post('n_uh');
        $uts= $this->input->post('n_uts');
        $uas = $this->input->post('n_uas');
        $sikap = $this->input->post('sikap');
        $status = $this->input->post('status');
        $model = new ModelDB();
        for($i=0; $i<sizeof($id_nilai); $i++){
          $data = array(
                'nilai_tugas'       => $tugas[$i],
                'nilai_uh'       => $tugas[$i],
                'nilai_uts'         => $uts[$i],
                'nilai_uas'         => $uas[$i],
                'sikap'         => $sikap[$i],
                'status'         => $status[$i]
          );
          $model->editData('id_nilai', $id_nilai[$i], 'nilai_pelajaran', $data);
        }
        redirect(base_url('index.php/Nilai/nilaiMapel/?id_kelas='.$id_kelas.'&id_mapel='.$id_mapel),'refresh');
    }

    public function edit(){

    }

    public function put(){

    }

    public function delete(){
        
    }
}
