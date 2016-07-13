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

    public function community(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $this->load->view('community.php');
      }
    }

    public function feedback(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $this->load->view('feedback.php');
      }
    }

    public function video(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $this->load->view('live-video-broadkast.php');
      }
    }

    public function send_sms(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $data['code'] = array('code'=>'sms');
        $dataFile = array(
          'campaignName' 			   => $this->input->post("campaignName"),
          'purpose' 			       => $this->input->post("purpose"),
          'campaignStart' 		   => $this->input->post("campaignStart"),
          'campaignEnd' 	       => $this->input->post("campaignEnd"),
          'campaignEnd' 	       => $this->input->post("campaignEnd"),
          'reach' 	             => $this->input->post("reach"),
          'videoElement' 	       => $this->input->post("videoElement"),
          'caption' 	           => $this->input->post("caption"),
          'videoUrl' 	           => $this->input->post("videoUrl"),
        );
        $data['data'] = json_encode($dataFile);
        $this->load->view('live-video-broadkast-2.php',$data);
      }
    }

    public function contacts(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('live-build-contacts.php');
      }
    }

    public function hyper(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('live-hyper-targeted-contacts.php');
      }
    }

    public function location(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('live-location-based-contacts.php');
      }
    }

    public function promo(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('promo.php');
      }
    }



    public function thankyou(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('live-hyper-targeted-confirmation.php');
      }
    }


    public function reach(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
          $this->load->view('choose-your-reach.php');
      }
    }


    public function feedback_submit(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $dataSave = Array(
        'message'             => $this->input->post('message'),
        'whoWillPay'          => $this->input->post('willPay') ,
        'confirmationMessage' => $this->input->post('confirmMessage') ,
        'loadIncentive'       => $this->input->post('YES') ,
        'provider'            => $this->input->post('provider') ,
        'providerLoad'        => $this->input->post('load') ,
        'launchDate'          => $this->input->post('launchDate')

      );

        $this->db->insert('tbl_feedback', $dataSave);
        if($this->db->affected_rows() > 0)
        {

          //$this->session->set_userdata('user_input',$this->db->insert_id());
          redirect('/profile/thankyou');
          //$this->load->view('trial-build-contacts.php');
          //$this->load->view('thankyou-page');
        }
      }

    }

     public function community_submit(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $dataSave = Array(
        'message'                   => $this->input->post('message'),
        'whoWillPay'                => $this->input->post('willPay') ,
        'confirmationMessageOptIn'  => $this->input->post('confirmMessageIn') ,
        'confirmationMessageOptOut'  => $this->input->post('confirmMessageOut') ,
        'loadIncentive'             => $this->input->post('YES') ,
        'provider'                  => $this->input->post('provider') ,
        'providerLoad'              => $this->input->post('load') ,
        'launchDate'                => $this->input->post('launchDate')

      );

        $this->db->insert('tbl_community', $dataSave);
        if($this->db->affected_rows() > 0)
        {

          //$this->session->set_userdata('user_input',$this->db->insert_id());
          redirect('/profile/thankyou');
          //$this->load->view('trial-build-contacts.php');
          //$this->load->view('thankyou-page');
        }
      }

    }

    public function promo_submit(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{
        $dataSave = Array(
        'promoType'           => $this->input->post('promoType'),
        'promoTitle'          => $this->input->post('promoTitle') ,
        'provider'            => $this->input->post('provider') ,
        'promoStart'          => $this->input->post('promoStart') ,
        'promoEnd'            => $this->input->post('promoEnd') ,
        'confirmationMessage' => $this->input->post('confirmationMessage') ,
        'keyword'             => $this->input->post('keyword'),
        'denomination'        => $this->input->post('denomination'),
        'launchDate'          => $this->input->post('launchDate'),
        'raffleEntry'         => $this->input->post('rafle-entry'),

      );

        $this->db->insert('tbl_promo', $dataSave);
        if($this->db->affected_rows() > 0)
        {

          //$this->session->set_userdata('user_input',$this->db->insert_id());
          redirect('/profile/thankyou');
          //$this->load->view('trial-build-contacts.php');
          //$this->load->view('thankyou-page');
        }
      }

    }


    public function video_submit(){
      if(!$this->session->userdata('user_input')){
        redirect('/home');
      }else{


        $data = $this->input->post('data');
        $data = json_decode($data);
        //print_r($data);

        //Saving data to database
        $dataSave = Array(
        'campaignName'=> $data->campaignName,
        'purpose' => $data->purpose,
        'campaignStart' => $data->campaignStart,
        'campaignEnd' => 	$data->campaignEnd,
        'reach' => 	$data->reach,
        'videoElement' => 	$data->videoElement,
        'caption' => 	$data->caption,
        'videoUrl' => 	$data->videoUrl,
        'promoSenderName' => $this->input->post('promoSenderName'),
        'promoSenderMessage' => $this->input->post('promoSenderMessage'),
      );



        $this->db->insert('tbl_video_broadcast', $dataSave);
        if($this->db->affected_rows() > 0)
        {

          //$this->session->set_userdata('user_input',$this->db->insert_id());
          redirect('/profile/thankyou');
          //$this->load->view('trial-build-contacts.php');
          //$this->load->view('thankyou-page');
        }
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



    //
    // public function sched(){
    //   $this->load->view('live-schedule-broadkast.php');
    // }
    //
    public function broadcastConfirmation($referenceKey){
      $query = $this->db->get_where('tbl_user', array('userId' => $this->session->userdata('user_input')));
      $results = $query->result()[0];
      foreach ($results as $r => $value) {
        $data[$r] = $value;
      }
      $data['referenceKey'] = $referenceKey;
      $accountType = $data['accountType'];
      if($accountType == "Trial") {
        $this->load->view('trial-broadkast-confirmation.php', $data);
      } else {
        $this->load->view('live-broadkast-confirmation.php', $data);
      }

    }

    public function broadcast(){

      $alias = $this->input->post('alias') == null ? 'KAST' : $this->input->post('alias');

      $dt = new DateTime();
      $referenceKey = $this->generateRandomString();
      $broadcast = array(
        'userId' => $this->session->userdata('user_input'),
        'alias' => $alias,
        'message' => $this->input->post('messages'),
        'scheduleDate' => $this->input->post('pickAdate') . " " . $this->input->post('pickAtime'),
        'accountType' => $this->input->post('accounttype'),
        'timestamp' => $dt->format('Y-m-d H:i:s'),
        'referenceKey' => $referenceKey
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
        $this->broadcastConfirmation($referenceKey);
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


    function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

    public function logout(){
      $this->session->sess_destroy();
      redirect('/home');
    }

  }
