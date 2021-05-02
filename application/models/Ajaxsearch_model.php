<?php
class Ajaxsearch_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("business");
  if($query != '')
  {
   $this->db->like('biz_title', $query);
   $this->db->or_like('biz_tags', $query);
   $this->db->or_like('biz_contact', $query);
   $this->db->or_like('biz_city', $query);
   $this->db->or_like('biz_street', $query);
  }
  $this->db->order_by('biz_id', 'DESC');
  return $this->db->get();
 }
}
?>