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
	public function index()
	{
		$this->load->view('index.php');
	}

	public function explore(){
		$this->load->view('explore.php');
	}

	public function register(){
		$this->load->view('register.php');
	}


	public function confirmation(){
		//echo "wew";
		//echo $this->input->post('clientName');
		$data['code'] = array('code'=>'sms');
		$dataFile = array(
			'name' 			=> $this->input->post("clientName"),
			'msid' 			=> $this->input->post("mobileNumber"),
			'emailAddress' 		=> $this->input->post("email"),
			'password' 	=> $this->input->post("password")
		);
		$data['data'] = json_encode($dataFile);
		//	print_r($data);
		//die();

		//print_r($dataFile);
		$this->load->view('confirmation.php', $data);
	}

	public function savedata(){
		$data = $this->input->post('data');
		$data = json_decode($data);
		//print_r($data);

		//Saving data to database
		$dataSave = Array(
		'name'=> htmlentities($data->name),
		'msid' => htmlentities($data->msid),
		'emailAddress' => htmlentities($data->emailAddress),
		'password' => md5($data->password),
    'accountType' => 'Trial'
	);
	//die();
	$this->db->insert('tbl_user', $dataSave);
	if($this->db->affected_rows() > 0)
	{
    redirect('/profile');
		//$this->load->view('trial-build-contacts.php');
		//$this->load->view('thankyou-page');
	}
	else{
		$data['code'] = array('code'=>'sms');
		$dataFile = array(
			'name' 			=> $this->input->post("clientName"),
			'msid' 			=> $this->input->post("mobileNumber"),
			'emailAddress' 		=> $this->input->post("email"),
			'password' 	=> $this->input->post("password")
		);
		$data['data'] = json_encode($dataFile);
		$this->load->view('confirmation.php', $data);
		//$this->load->view('index');
	}

}

}
