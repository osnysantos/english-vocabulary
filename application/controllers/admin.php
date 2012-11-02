<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->listar();

    $this->load->view('layout/header');
    $this->load->view('home',$data);
  }
  public function palavras()
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->listar_palavras();

    $this->load->view('layout/header');
    $this->load->view('admin/palavras',$data);
  }
  public function grupos()
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->listar_grupos();

    $this->load->view('layout/header');
    $this->load->view('admin/grupos',$data);
  }
  public function niveis()
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->listar_niveis();

    $this->load->view('layout/header');
    $this->load->view('admin/niveis',$data);
  }
  public function cadastrar_palavra()
  {
    $this->load->model('admin_model');
    $data['grupo'] = $this->admin_model->listar_grupos();
    $data['nivel'] = $this->admin_model->listar_niveis();

    $this->load->view('layout/header');
    $this->load->view('admin/cadastrar_palavra',$data);
  }
  public function cadastrar_grupo()
  {
    $this->load->view('layout/header');
    $this->load->view('admin/cadastrar_grupo');
  }
  public function cadastrar_nivel()
  {
    $this->load->view('layout/header');
    $this->load->view('admin/cadastrar_nivel');
  }
  public function alterar($id)
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->alterar($id);
    $data['grupo'] = $this->admin_model->listar_grupos();
    $data['nivel'] = $this->admin_model->listar_niveis();

    $this->load->view('layout/header');
    $this->load->view('admin/alterar',$data);
  }
  public function excluir($id){
    $this->load->model('admin_model');

    if($this->admin_model->excluir($id)){
      redirect(base_url().'admin/gerenciar', 'refresh');
    } else{
      echo "Erro ao excluir palavra";
    }
  }
  function gravar_palavra(){
    $this->form_validation->set_rules('portugues', 'Português', 'required');
    $this->form_validation->set_rules('ingles', 'Inglês', 'required');

    if($this->form_validation->run() == FALSE){
      echo"oi";
    } else {
      $data['portugues'] = $this->input->post('portugues');
      $data['ingles'] = $this->input->post('ingles');
      $data['grupo'] = $this->input->post('grupo');
      $data['nivel'] = $this->input->post('nivel');

      $this->load->model('admin_model');
      if($this->admin_model->gravar_palavra($data)){
        redirect(base_url().'admin/palavras', 'refresh');
      } else {
        echo "Erro ao alterar usu?rio";
      }
    }
  }
  function gravar_grupo(){
    $this->form_validation->set_rules('nome', 'Nome do grupo', 'required');

    if($this->form_validation->run() == FALSE){
      echo"oi";
    } else {
      $data['nome'] = $this->input->post('nome');

      $this->load->model('admin_model');
      if($this->admin_model->gravar_grupo($data)){
        redirect(base_url().'admin/grupos', 'refresh');
      } else {
        echo "Erro ao alterar usu?rio";
      }
    }
  }
  function gravar_nivel(){
    $this->form_validation->set_rules('nome', 'Nome do grupo', 'required');

    if($this->form_validation->run() == FALSE){
      echo"oi";
    } else {
      $data['nome'] = $this->input->post('nome');

      $this->load->model('admin_model');
      if($this->admin_model->gravar_nivel($data)){
        redirect(base_url().'admin/niveis', 'refresh');
      } else {
        echo "Erro ao alterar usu?rio";
      }
    }
  }
  function gravar_alteracao()
  {
    $this->load->model('admin_model');

    $this->form_validation->set_rules('portugues', 'Português', 'required');
    $this->form_validation->set_rules('ingles', 'Inglês', 'required');

    if($this->form_validation->run() == FALSE){
      echo "oi";
    } else {
      $data['id'] = $this->input->post('id');
      $data['portugues'] = $this->input->post('portugues');
      $data['ingles'] = $this->input->post('ingles');
      $data['status'] = $this->input->post('status');

      if($this->admin_model->gravar_alteracao($data)){
        redirect(base_url().'admin/gerenciar', 'refresh');
      } else {
        echo "erro";
      }
    }
  }
}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
