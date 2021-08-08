<?php

class PekerjaanModel extends CI_Model
{



 public function get_all_pekerjaan1()
 {
  $query = "SELECT * FROM pekerjaan1";
  return $this->db->query($query)->result_array();
 }
 public function get_all_pekerjaan2()
 {
  $query = "SELECT * FROM pekerjaan2";
  return $this->db->query($query)->result_array();
 }

}
