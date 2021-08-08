<?php

class AuthModel extends CI_Model
{



 public function cek_login($where)
 {
  
  return $this->db->get_where('user', $where);
 }
}
