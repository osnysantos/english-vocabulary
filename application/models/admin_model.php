<?php
class Admin_model extends CI_Model {
  function __construct(){
    parent::__construct();
  }
  function gravar_palavra($data){
    return $this->db->insert('palavras',$data);
  }
  function gravar_grupo($data){
    return $this->db->insert('grupos',$data);
  }
  function gravar_nivel($data){
    return $this->db->insert('niveis',$data);
  }
  function listar(){
    $this->db->order_by('id','random');
    $this->db->where('status',1);
    $query = $this->db->get('palavras');
    return $query->result();
  }
  function listar_palavras(){
    $this->db->select('palavras.*, grupos.nome as nome_grupo, niveis.nome as nome_nivel');
    $this->db->from('palavras');
    $this->db->join('grupos', 'palavras.grupo = grupos.id', 'left');
    $this->db->join('niveis', 'palavras.nivel = niveis.id', 'left');
    $this->db->order_by('palavras.id','desc');
    $query = $this->db->get();
    return $query->result();
  }
  function listar_grupos(){
    $this->db->order_by('id','desc');
    $query = $this->db->get('grupos');
    return $query->result();
  }
  function listar_niveis(){
    $this->db->order_by('id','desc');
    $query = $this->db->get('niveis');
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
