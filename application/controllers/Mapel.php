<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

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
        $this->load->model('M_Mapel', '', TRUE);
    }

	public function index()
	{
		if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objMapel'] = null;
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
                $obj = new ModelDB();
                $result = $obj->readDataAll('mata_pelajaran');
                if(!$result==null){
                    foreach($result as $row){
                        $data['objMapel'][] = new M_Mapel($row->id_mapel, $row->nama_mapel);
                    }
                }
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('mapel_view', $data);
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
    
    public function inputMapel(){
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
				$data['objUser'] = $session_data;
                $jabatan = $session_data['jabatan'];
                
				// print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('inputmapel_view', $data);
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
        $id_mapel   = $this->input->post('id_mapel');
        $nama_mapel = $this->input->post('nama_mapel');

        $data = array(
            'id_mapel'      => $id_mapel,
            'nama_mapel'    => $nama_mapel
        );

        $this->ModelDB->insertData($data, 'mata_pelajaran');
        redirect(base_url('/index.php/Mapel'), 'refresh');
    }

    public function put($id_mapel){
        $nama_mapel = $this->input->post('nama_mapel');
        $objMapel = new Mapel($id_mapel, $nama_mapel);
        $data = array(
            'nama_mapel' => $objMapel->getNamaMapel()
        );
        $this->ModelDB->editData('id_mapel', $id_mapel, 'mata_pelajaran', $data);
        redirect(base_url('/index.php/Mapel'), 'refresh');
    }

    public function edit($id_mapel){
        $obj    = new ModelDB();
        $result = $obj->readDataWhere('id_mapel', $id_mapel, 'mata_pelajaran')[0];
        if($this->session->userdata('logged_in'))
		   {
				$session_data = $this->session->userdata('logged_in');
                $data['objUser'] = $session_data;
                $data['objMapel'] = new M_Mapel($result->id_mapel, $result->nama_mapel);
				$jabatan = $session_data['jabatan'];
                // print_r($session_data);
				if($jabatan == 3){
					$this->load->view('HeaderFooter/Header3', $data);
					$this->load->view('editmapel_view', $data);
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

    public function destroy($id_mapel){
        $obj = new ModelDB();
        $result = $obj->deleteData('id_mapel', $id_mapel, 'mata_pelajaran');
        redirect(base_url('index.php/Mapel'), 'refresh');
    }
}
