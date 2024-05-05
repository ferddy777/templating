<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('formbiodata');
        $this->load->view('layout/footer');
    }

    public function tampil()
    {

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'tgl_lahir' => $this->input->post('tgl_lahir')
        );
        
        
        $this->load->view('layout/header');
        $this->load->view('tampilan-biodata', $data);
        $this->load->view('layout/footer');
    }
}