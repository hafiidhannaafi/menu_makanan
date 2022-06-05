<?php

class Menu_model extends CI_model {
    public function getAllMenu()
    {
        return $this->db->get('menu')->result_array();  
      

}
    public function tambahDataMenu()
    {
        $data =[
            "id_makanan" => $this->input->post('id_makanan', true),
            "nama_makanan" => $this->input->post('nama_makanan',true),
            "ukuran_makanan" => $this->input->post('ukuran_makanan', true),
            "harga_makanan" => $this->input->post('harga_makanan', true),
            "catatan" => $this->input->post('catatan', true),
        ];

        $this->db->insert('menu', $data);
    }

}