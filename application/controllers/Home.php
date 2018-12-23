<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('M_Mapel', '', TRUE);
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
				$data['objUser'] = $session_data;
				$jabatan = $session_data['jabatan'];
				// print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('viewEditSiswa', $data);
				} else if($jabatan == 2 OR $jabatan == 1) {
					$this->load->view('HeaderFooter/Header1', $data);
					$this->load->view('index', $data);
				} else if($jabatan == 4) {
					$this->load->view('HeaderFooter/Header2', $data);
					$this->load->view('index', $data);
				} else if($jabatan == 0) {
					$this->load->view('HeaderFooter/Header2', $data);
					$this->load->view('index', $data);
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
		//
	}

	public function put($id){
		//
	}

	public function delete($id){
		//
	}

	public function viewUserProfile(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
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
}
