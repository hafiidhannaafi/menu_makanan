<?php

class Menu extends CI_Controller {
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
      
        $data['judul'] = 'Daftar Menu';
        $data['menu'] = $this->Menu_model->getAllMenu();
        $this->load->view('templates/header', $data);
		$this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Formulir tambah menu';

        $this->form_validation->set_rules('id_makanan','ID makanan', 'required|numeric');
        $this->form_validation->set_rules('nama_makanan','name food', 'required');
        $this->form_validation->set_rules('harga_makanan','price', 'required|numeric');
        $this->form_validation->set_rules('catatan','notes', 'required');
          
        if ($this->form_validation->run()==FALSE)
               {
                $this->load->view('templates/header', $data);
                $this->load->view('menu/tambah');
                $this->load->view('templates/footer');
        
                }
                else{
                 $this->Menu_model->tambahDataMenu();
                 $this->session->set_flashdata('flash', 'ditambahkan');
                 redirect('menu');
                }
  
    }

}
