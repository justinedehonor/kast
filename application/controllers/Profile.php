<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  // public function trialContacts(){
  //   $this->load->view('trial-build-contacts.php');
  // }
  //
  // public function trialMessage(){
  //   $this->load->view('trial-create-message.php');
  // }
  //
  // public function trialSched(){
  //   $this->load->view('trial-schedule-broadkast.php');
  // }
  //
  public function register(){
    if(!$this->session->userdata('user_input')){
      redirect('/home');
    }else{
      $query = $this->db->get_where('tbl_user', array('userId' => $this->session->userdata('user_input')));
      $results = $query->result()[0];
      foreach ($results as $r => $value) {
        $data[$r] = $value;
      }
      //echo $data['userId'];
      $this->load->view('live-account-registration.php', $data);
    }
  }

  public function index(){
    if(!$this->session->userdata('user_input')){
      redirect('/home');
    }else{
      $query = $this->db->get_where('tbl_user', array('userId' => $this->session->userdata('user_input')));
      $results = $query->result()[0];
      foreach ($results as $r => $value) {
        $data[$r] = $value;
      }
      $accountType = $data['accountType'];
      if($accountType == "Trial") {
        $this->load->view('trial-build-contacts.php');
      } else {
        $this->load->view('live-account-home.php');
      }
    }

    // print_r($this->session->userdata('user_input'));
    // die();

  }

  public function contacts(){
    $this->load->view('live-build-contacts.php');
  }

  public function message(){
     $this->load->view('live-create-message.php');
   }
  //
  // public function sched(){
  //   $this->load->view('live-schedule-broadkast.php');
  // }
  //
  public function broadcastConfirmation(){
    $this->load->view('live-broadkast-confirmation.php');
  }

  public function broadcast(){

    $alias = $this->input->post('alias') == null ? 'KAST' : $this->input->post('alias');

    $broadcast = array(
      'userId' => $this->session->userdata('user_input'),
      'alias' => $alias,
      'message' => $this->input->post('messages'),
      'scheduleDate' => $this->input->post('pickAdate') . " " . $this->input->post('pickAtime'),
      'accountType' => 'Trial'
    );

    $this->db->insert('tbl_broadcast', $broadcast);
    $broadcastId = $this->db->insert_id();

    $recipients = $this->input->post('recipients');
    $recipients = explode(",", $recipients);
    for ($i=0; $i < count($recipients) ; $i++) {
      $transaction = array(
        'broadcastId' => $broadcastId,
        'recipient' => $recipients[$i]
      );
      $this->db->insert('tbl_transaction', $transaction);
    }
    if($this->db->affected_rows() > 0) {
      redirect('/profile');
    }
  }
  public function savedata()
  {
    $userInfo = array(
      'name' => $this->input->post('name'),
      'msid' => $this->input->post('msid'),
      'emailAddress' => $this->input->post('emailaddress'),
      'password' => md5($this->input->post('password')),
      'companyName' => $this->input->post('companyname'),
      'billingAddress' => $this->input->post('billingaddress'),
      'birthDay' => $this->input->post('birhtday'),
      'TIN' => $this->input->post('tin'),
      'accountType' => 'Live'
    );
    $this->db->where('userId', $this->session->userdata('user_input'));
    $this->db->update('tbl_user', $userInfo);

    redirect('/profile');
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('/home');
  }
}
