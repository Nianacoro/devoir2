<?php

class ControleurConference extends CI_Controller {

	public function Index()
 {
    $this->load->model('Model_Conference');
	$tab['lstConference']=$this->Model_Conference->getAllConference();
    $this->load->view("view_conference",$tab);
 }
 
}
?>
