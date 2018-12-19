<?php 

/**
* 
*/
class controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('html');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Model');
	}

	public function Login()
	{
		$this->load->view('login_form');
		
	}

	public function insert(){
		$npm = $this->input->post('npm');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
		$tgl_lahir = $this->input->post('tanggallahir');
		$tmp_lahir = $this->input->post('tempatlahir');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$id_line = $this->input->post('idline');
		$bdg_minat = $this->input->post('bidangminat');
		$pekerjaan = $this->input->post('pekerjaan');
		$tmp_kerja = $this->input->post('tempatkerja');
		$email = $this->input->post('email');
		
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'jk' => $jk,
			'agama' => $agama,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'hp' => $hp,
			'id_line' => $id_line,
			'bdg_minat' => $bdg_minat,
			'pekerjaan' => $pekerjaan,
			'tmp_kerja' => $tmp_kerja
		);

		$this->load->model('Model');
		
		if($this->Model->insertData($data)){
			redirect('controller/viewCrud');
		}else{
			echo "gagal menambahkan data";
		}
	}

	public function login_proces()
	{

        // if ($this->form_validation->run() == FALSE) {
                
        //     $this->load->view('login_form');
           
        // } else {
            $data = array(
                'npm' => $this->input->post('npm'),
                'password' => $this->input->post('password')
            );
			$result = $this->Model->login($data);
            
            if ($result == true) {
				$npm = $this->input->post('npm');
				$res = $this->Model->read_user_information($npm);
                if ($res) {
                    foreach ($res as $row){
						$datanpm = $row->npm;  
					}
                    $session_data = array(
                        'npm' => $datanpm
                    );
    
                    // Add user data in session
				   $this->session->set_userdata($session_data);
				   
                    if ($this->session->npm == 'admin') {
				  //  	redirect('Home/Admin');
						$this->load->view('crud/index.php');
                    	
                    }else{	
                    //	redirect('Home/Index');
                    	$this->load->view('home');
                    }
                }
            } else {
/*                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
*/
                // echo '<script>alert("Username dan Password anda tidak cocok");</script>';
                redirect('controller/Login','refresh');
            }
        // }
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function logout()
	{
		$this->load->view('login_form');
	}

	public function biodelphi()
	{

		$this->db->select('*');
		$this->db->from('biodata');
		
		$data['postdelphi'] = $this->db->get();
		$this->load->view('biodelphi', $data);
	}

	public function delphinfo()
	{
		$this->load->view('delphinfo');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function addView(){
		$this->load->view('crud/add');
	}

	public function viewCrud(){
		$this->load->view('crud/index.php');
	}

	public function hapus($npm){
		$where = array('npm'=>$npm);
		$this->Model->hapus_data($where,'biodata');
		// redirect('crud/index.php');
		echo "data sudah dihapus";
    }
}

