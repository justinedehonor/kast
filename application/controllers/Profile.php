<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function Trialcontacts(){
    $this->load->view('trial-build-contacts.php');
  }

  public function Trialmessage(){
    $this->load->view('trial-create-message.php');
  }

	public function Trialsched(){
    $this->load->view('trial-schedule-broadkast.php');
  }

	public function register(){
    $this->load->view('live-account-registration.php');
  }

	public function index(){
		$this->load->view('live-account-home.php');
	}

	public function contacts(){
		$this->load->view('live-build-contacts.php');
	}

	public function message(){
		$this->load->view('live-create-message.php');
	}

	public function sched(){
		$this->load->view('live-schedule-broadkast.php');
	}

	public function broadcastConfirmation(){
		$this->load->view('live-broadkast-confirmation.php');
	}

}
