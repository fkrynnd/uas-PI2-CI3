<?php

class ContactModel extends CI_Model
{



 public function get_all_contact()
 {
  $query = "SELECT * FROM contact";
  return $this->db->query($query)->result_array();
 }
}
