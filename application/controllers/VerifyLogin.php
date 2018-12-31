<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('ModelDB','',TRUE);
   $this->load->model('M_User','',TRUE);
   $this->load->model('M_Pegawai','',TRUE);
   $this->load->model('M_Guru','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   $passwordlogin = md5($this->input->post('password'));
   $username = $this->input->post('username');
   if($this->check_database($username, $passwordlogin) == FALSE)
   {
     redirect(base_url(), 'refresh');
   }
   else
   {
     //Go to private area
     redirect('Home', 'refresh');
   }

 }

 function check_database($username, $password)
 {
   //Field validation succeeded.  Validate against database
   $model = new ModelDB();
   $result = $model->readDataWhere('username', $username, 'user');
   if($result){
    foreach ($result as $row) {
         $id_user = $row->id_user;
         $usernamecek = $row->username;
         $passwordcek = $row->password;
         $p_jabatan = $row->p_jabatan;
         $info_user = $row->info_user;
     }

     $objUser = new M_User($id_user, $usernamecek, $passwordcek, $p_jabatan, $info_user);
     if($objUser->getUsername() == $username && $objUser->getPassword() == $password){
          $model = new ModelDB();
          $result = $model->readDataWhere('username', $username, 'pegawai')[0];
          $objUser = null;
          if($result->p_jabatan == 3 OR $result->p_jabatan == 0){
            $obj = new M_Pegawai(
              $result -> nip, 
              $result -> username,
              $result -> nama_lengkap,
              $result -> ttl,
              $result -> jenkel,
              $result -> alamat,
              $result -> telepon,
              $result -> pendidikan,
              $result -> p_jabatan,
              $result -> info_peg
            );
            $objUser = array(
                'nip'         => $obj->getNip(),
                'username'    => $obj->getUsername(),
                'namalengkap' => $obj->getNamaLengkap(),  
                'ttl'         => $obj->getTtl(),
                'jenkel'      => $obj->getJenkel(),
                'alamat'      => $obj->getAlamat(),
                'telepon'     => $obj->getTelepon(),
                'pendidikan'  => $obj->getPendidikan(),
                'jabatan'     => $obj->getJabatan(),
                'info_peg'    => $obj->getInfoPeg()
            );
          } else if($result->p_jabatan == 2) {
            $resultguru = $model->readDataWhere('g_nip', $result->nip, 'guru')[0];
            $resultwali = $model->readDataWhere('nip_wk', $result->nip, 'wali_kelas')[0];
            $obj = new M_Guru(
              $resultguru -> id_guru,
              $result -> nip,
              $resultwali -> id_walikelas,
              $result -> nama_lengkap,
              $result -> ttl,
              $result -> jenkel,
              $result -> p_jabatan,
              $result -> pendidikan,
              $result -> alamat,
              $result -> telepon
            );
            $objUser = array(
              'id_guru'     => $obj->getIdGuru(),
              'nip'         => $obj->getNip(),
              'id_wk'       => $obj->getWalikelas(),  
              'namalengkap' => $obj->getNamaGuru(),
              'ttl'         => $obj->getTtl(),
              'jenkel'      => $obj->getJenkel(),
              'jabatan'     => $obj->getJabatan(),
              'pendidikan'  => $obj->getPendidikan(),
              'alamat'      => $obj->getAlamat(),
              'telepon'     => $obj->getTelepon()
          );
          } else if($result->p_jabatan == 1) {
            $resultguru = $model->readDataWhere('g_nip', $result->nip, 'guru')[0];
            $obj = new M_Guru(
              $resultguru -> id_guru,
              $result -> nip,
              null,
              $result -> nama_lengkap,
              $result -> ttl,
              $result -> jenkel,
              $result -> p_jabatan,
              $result -> pendidikan,
              $result -> alamat,
              $result -> telepon
            );
            $objUser = array(
              'id_guru'     => $obj->getIdGuru(),
              'nip'         => $obj->getNip(),
              'namalengkap' => $obj->getNamaGuru(),
              'ttl'         => $obj->getTtl(),
              'jenkel'      => $obj->getJenkel(),
              'jabatan'     => $obj->getJabatan(),
              'pendidikan'  => $obj->getPendidikan(),
              'alamat'      => $obj->getAlamat(),
              'telepon'     => $obj->getTelepon()
          );
          } else {
            return false;
          }
          $datasession = $objUser;
          $this->session->set_userdata('logged_in', $datasession);
          return TRUE;
       }
        else {
          $this->form_validation->set_message('check_database', 'Invalid username or password');
          return false;
        }
   } else {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
 
 public function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Home', 'refresh');
  }

}
?>
