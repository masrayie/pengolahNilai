<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objSiswa'] = null;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->readDataAll('siswa');

                if(!$result==null){
                    foreach($result as $row){
                        $data['objSiswa'][] = new M_Siswa(
                            $row->nis,
                            $row->s_id_kelas,
                            $row->nama,
                            $row->tgl_lahir,
                            $row->jk,
                            $row->agama,
                            $row->telp_sis,
                            $row->s_alamat,
                            $row->semester,
                            $row->ijazah_no,
                            $row->skhun_no
                        );
                    }
                }

				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewAllSiswa', $data);
				} else if($jabatan == 2 OR $jabatan == 1) {
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('siswaall_view', $data);
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

    public function viewProfile($nis){
        $obj    = new ModelDB();
        $result = $obj->readDataWhere('nis', $nis, 'siswa')[0];
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objSiswa'] = new M_Siswa(
                    $row->nis,
                    $row->s_id_kelas,
                    $row->nama,
                    $row->tgl_lahir,
                    $row->jk,
                    $row->agama,
                    $row->telp_sis,
                    $row->s_alamat,
                    $row->semester,
                    $row->ijazah_no,
                    $row->skhun_no
                );
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewProfileSiswa', $data);
				} else if($jabatan == 2 OR $jabatan == 1) {
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('viewProfileSiswa', $data);
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

    public function inputSiswa(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewCreateSiswa', $data);
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
        $nis            = $this->input->post('nis');
        $id_kelas       = $this->input->post('id_kelas');
        $namaSiswa      = $this->input->post('nama_siswa');
        $ttl            = $this->input->post('ttl');
        $jenkel         = $this->input->post('jenkel');
        $agama          = $this->input->post('agama');
        $telepon_siswa  = $this->input->post('telepon_siswa');
        $alamat         = $this->input->post('alamat');
        $semester       = $this->input->post('semester');
        $ijazah_no      = $this->input->post('ijazah_no');
        $skhun_no       = $this->input->post('skhun_no');
        $objSw = new M_Siswa(
            $nis, $id_kelas, $namaSiswa, $ttl, $jenkel, $agama, $telepon_siswa, $alamat,
            $semester, $ijazah_no, $skhun_no
        );
        $data = array(
            'nis'           => $objSw->getNis(),
            'nama'          => $objSw->getNamaSiswa(),
            'tgl_lahir'     => $objSw->getTtl(),
            'jk'            => $objSw->getJenkel(),
            'agama'         => $objSw->getAgama(),
            's_alamat'      => $objSw->getAlamat(),
            'telp_sis'      => $objSw->getTeleponSiswa(),
            'semester'      => $objSw->getSemester(),
            'ijazah_no'     => $objSw->getIjazah(),
            'skhun_no'      => $objSw->getSkhun()
        );
        $this->ModelDB->insertData($data, 'Siswa');
        redirect(base_url('/index.php/Siswa'), 'refresh');
    }

    public function edit($nis){
        $obj    = new ModelDB();
        $row = $obj->readDataWhere('nis', $nis, 'siswa')[0];
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objSiswa'] = new M_Siswa(
                    $row->nis,
                    $row->s_id_kelas,
                    $row->nama,
                    $row->tgl_lahir,
                    $row->jk,
                    $row->agama,
                    $row->telp_sis,
                    $row->s_alamat,
                    $row->semester,
                    $row->ijazah_no,
                    $row->skhun_no
                );
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewEditSiswa', $data);
				}  else {
                    return false;
                }
		   }
		   else
		   {
		     //If no session, redirect to login page
		     	redirect(base_url(), 'refresh');
		   }
    }

    public function put($nis){
        $nis            = $nis;
        $id_kelas       = $this->input->post('id_kelas');
        $namaSiswa      = $this->input->post('nama_siswa');
        $ttl            = $this->input->post('ttl');
        $jenkel         = $this->input->post('jenkel');
        $agama          = $this->input->post('agama');
        $telepon_siswa  = $this->input->post('telepon_siswa');
        $alamat         = $this->input->post('alamat');
        $semester       = $this->input->post('semester');
        $ijazah_no      = $this->input->post('ijazah_no');
        $skhun_no       = $this->input->post('skhun_no');
        $objSw = new M_Siswa(
            $nis, $id_kelas, $namaSiswa, $ttl, $jenkel, $agama, $telepon_siswa, $alamat,
            $semester, $ijazah_no, $skhun_no
        );
        $data = array(
            'nis'           => $objSw->getNis(),
            'nama'          => $objSw->getNamaSiswa(),
            'tgl_lahir'     => $objSw->getTtl(),
            'jk'            => $objSw->getJenkel(),
            'agama'         => $objSw->getAgama(),
            's_alamat'      => $objSw->getAlamat(),
            'telp_sis'      => $objSw->getTeleponSiswa(),
            'semester'      => $objSw->getSemester(),
            'ijazah_no'     => $objSw->getIjazah(),
            'skhun_no'      => $objSw->getSkhun()
        );
        $this->ModelDB->editData('nis', $nis, 'siswa', $data);
        redirect(base_url('/index.php/Siswa'), 'refresh');
    }

    public function destroy($nis){
        $obj = new ModelDB();
        $result = $obj->deleteData('nis', $nis, 'siswa');
        redirect(base_url('index.php/Siswa'), 'refresh');
    }

    
}
