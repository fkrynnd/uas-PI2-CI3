<?php

class AboutModel extends CI_Model
{



 public function get_all_about()
 {
  $query = "SELECT * FROM about";
  return $this->db->query($query)->result_array();
 }
}
