<?php

class PendidikanModel extends CI_Model
{



 public function get_all_sd()
 {
  $query = "SELECT * FROM sd";
  return $this->db->query($query)->result_array();
 }
 public function get_all_smp()
 {
  $query = "SELECT * FROM smp";
  return $this->db->query($query)->result_array();
 }
 public function get_all_smk()
 {
  $query = "SELECT * FROM smk";
  return $this->db->query($query)->result_array();
 }
 public function get_all_univ()
 {
  $query = "SELECT * FROM univ";
  return $this->db->query($query)->result_array();
 }
}
