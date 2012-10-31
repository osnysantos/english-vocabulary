<?php
class Admin_model extends CI_Model {
  function __construct(){
    parent::__construct();
  }
  function gravar($data){
      return $this->db->insert('palavras',$data);
  }
  function listar(){
    $this->db->order_by('id','random');
    $query = $this->db->get('palavras');
    return $query->result();
  }
  function listar_order_by(){
    $this->db->order_by('id','desc');
    $query = $this->db->get('palavras');
    return $query->result();
  }
  function excluir($id){
    $this->db->where('id',$id);
    return $this->db->delete('palavras');
  }
  function alterar($id){
    $this->db->where('id',$id);
    $query = $this->db->get('palavras');
    return $query->result();
  }
  function gravar_alteracao($data){
    $this->db->where('id',$data['id']);
    return $this->db->update('palavras',$data);
  }
}

?>
