<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

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
		$this->load->model('M_Pegawai', '', TRUE);
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objPegawai'] = null;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->readDataAll('pegawai');
                if(!$result==null){
                    foreach($result as $row){
                        $data['objPegawai'][] = new M_Pegawai(
                            $row->nip, 
                            $row->username,
                            $row->nama_lengkap,
                            $row->ttl,
                            $row->jenkel,
                            $row->alamat,
                            $row->telepon,
                            $row->pendidikan,
                            $row->p_jabatan,
                            $row->info_peg
                        );
                    }
                }
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('pegawaiall_view', $data);
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

    public function viewProfile($nip){
        $obj    = new ModelDB();
        $result = $obj->readDataWhere('nip', $nip, 'pegawai')[0];
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objPegawai'] = new M_Pegawai(
                    $result->nip, 
                    $result->username,
                    $result->nama_lengkap,
                    $result->ttl,
                    $result->jenkel,
                    $result->alamat,
                    $result->telepon,
                    $result->pendidikan,
                    $result->p_jabatan,
                    $result->info_peg
                );
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewProfile', $data);
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

    public function inputPegawai(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('inputpegawai_view', $data);
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
        $nip            = $this->input->post('nip');
        $namalengkap    = $this->input->post('namalengkap');
        $ttl            = $this->input->post('ttl');
        $jenkel         = $this->input->post('jenkel');
        $alamat         = $this->input->post('alamat');
        $telepon        = $this->input->post('telepon');
        $pendidikan     = $this->input->post('pendidikan');
        $p_jabatan      = $this->input->post('p_jabatan');
        $info_peg       = $this->input->post('info_peg');
        $objPg = new M_Pegawai(
            $nip, null, $namalengkap, $ttl, $jenkel, $alamat, $telepon, $pendidikan,
            $p_jabatan, $ingo_peg
        );
        $data = array(
            'nip'           => $objPg->getNip(),
            'nama_lengkap'  => $objPg->getNamaLengkap(),
            'ttl'           => $objPg->getTtl(),
            'jenkel'        => $objPg->getJenkel(),
            'alamat'        => $objPg->getAlamat(),
            'telepon'       => $objPg->getTelepon(),
            'pendidikan'    => $objPg->getPendidikan(),
            'p_jabatan'     => $objPg->getJabatan(),
            'info_peg'      => $objPg->getInfoPeg()
        );
        $this->ModelDB->insertData($data, 'pegawai');
        redirect(base_url('/index.php/Pegawai'), 'refresh');
    }

    public function edit($nip){
        $obj    = new ModelDB();
        $result = $obj->readDataWhere('nip', $nip, 'pegawai')[0];
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objPegawai'] = new M_Pegawai(
                    $result->nip, 
                    $result->username,
                    $result->nama_lengkap,
                    $result->ttl,
                    $result->jenkel,
                    $result->alamat,
                    $result->telepon,
                    $result->pendidikan,
                    $result->p_jabatan,
                    $result->info_peg
                );
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewEditProfile', $data);
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

    public function put($nip){
        $nip            = $nip;
        $username       = $this->input->post('username');
        $namalengkap    = $this->input->post('namalengkap');
        $ttl            = $this->input->post('ttl');
        $jenkel         = $this->input->post('jenkel');
        $alamat         = $this->input->post('alamat');
        $telepon        = $this->input->post('telepon');
        $pendidikan     = $this->input->post('pendidikan');
        $p_jabatan      = $this->input->post('p_jabatan');
        $info_peg       = $this->input->post('info_peg');
        $objPg = new M_Pegawai(
            $nip, $username, $namalengkap, $ttl, $jenkel, $alamat, $telepon, $pendidikan,
            $p_jabatan, $ingo_peg
        );
        $data = array(
            'nip'           => $objPg->getNip(),
            'username'      => $objPg->getUsername(),
            'nama_lengkap'  => $objPg->getNamaLengkap(),
            'ttl'           => $objPg->getTtl(),
            'jenkel'        => $objPg->getJenkel(),
            'alamat'        => $objPg->getAlamat(),
            'telepon'       => $objPg->getTelepon(),
            'pendidikan'    => $objPg->getPendidikan(),
            'p_jabatan'     => $objPg->getJabatan(),
            'info_peg'      => $objPg->getInfoPeg()
        );
        $this->ModelDB->editData('nip', $nip, 'pegawai', $data);
        redirect(base_url('/index.php/Pegawai'), 'refresh');
    }

    public function destroy($nip){
        $obj = new ModelDB();
        $result = $obj->deleteData('nip', $nip, 'pegawai');
        redirect(base_url('index.php/Pegawai'), 'refresh');
    }

    
}
