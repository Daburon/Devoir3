<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function AfficherUser()
    {
        $idUser = $_GET['idUser'];
        $this->load->model('Model_User');
        $data['lesUser'] = $this->Model_User->getUser($idUser);
        $this->load->view('AfficherRegion', $data);
    }
}
