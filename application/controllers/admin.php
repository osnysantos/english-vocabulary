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
  public function gerenciar()
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->listar_order_by();

    $this->load->view('layout/header');
    $this->load->view('admin/gerenciar',$data);
  }
  public function cadastrar()
  {
    $this->load->view('layout/header');
    $this->load->view('admin/cadastrar');
  }
  public function alterar($id)
  {
    $this->load->model('admin_model');
    $data['user'] = $this->admin_model->alterar($id);

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
   function gravar(){
      $this->form_validation->set_rules('portugues', 'Português', 'required');
      $this->form_validation->set_rules('ingles', 'Inglês', 'required');

      if($this->form_validation->run() == FALSE){
        echo"oi";
      } else {
        $data['portugues'] = $this->input->post('portugues');
        $data['ingles'] = $this->input->post('ingles');

        $this->load->model('admin_model');
        if($this->admin_model->gravar($data)){
          redirect(base_url().'admin/gerenciar', 'refresh');
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
