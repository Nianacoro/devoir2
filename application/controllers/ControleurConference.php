<?php

class ControleurConference extends CI_Controller {

	public function AfficherConference()
 {
    $this->load->model('Model_Conference');
	$tab['numConference']=$this->Model_Conference->getAllConference($_GET['iDCONFERENCE']);
    $this->load->view("view_conference",$tab);
 }
 
}
?>
