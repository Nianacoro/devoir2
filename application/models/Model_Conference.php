<?php
class Model_Conference extends CI_Model
{
  function getAllConference()
  {
     $sql = $this->db->query("select iDCONFERENCE, TITRE, CONTENU, IDNIVEAU from conference");
     return $sql->result();
  }

}
?>