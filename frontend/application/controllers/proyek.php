<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $data['proyek'] = $this->Proyek_model->get_all();
        $this->load->view('proyek/index', $data);
    }

    public function get_by_id($id) {
        $data['proyek'] = $this->Proyek_model->get_by_id($id);
    
        if (!$data['proyek']) {
            show_404();
        }
    
        $this->load->view('proyek/edit', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'namaProyek'     => $this->input->post('namaProyek'),
                'client'         => $this->input->post('client'),
                'tglMulai'       => $this->input->post('tglMulai'),
                'tglSelesai'     => $this->input->post('tglSelesai'),
                'pimpinanProyek' => $this->input->post('pimpinanProyek'),
                'keterangan'     => $this->input->post('keterangan')
            );

            $response = $this->Proyek_model->create($data);

            if ($response) {
                redirect('proyek');
            } else {
                $this->session->set_flashdata('error', 'Gagal membuat data baru.');
                redirect('proyek/create');
            }
        } else {
            $this->load->view('proyek/create');
        }
    }

    public function edit($id) {
        $data['proyek'] = $this->Proyek_model->get_by_id($id);
    
        if (!$data['proyek']) {
            show_404();
        }
    
        if ($this->input->post()) {
            $data_update = array(
                'namaProyek' => $this->input->post('namaProyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tglMulai'),
                'tglSelesai' => $this->input->post('tglSelesai'),
                'pimpinanProyek' => $this->input->post('pimpinanProyek'),
                'keterangan' => $this->input->post('keterangan')
            );
            $this->Proyek_model->update($id, $data_update);
            redirect('proyek');
        } else {
            $this->load->view('proyek/edit', $data);
        }
    }    
    

    public function delete($id) {
        $response = $this->Proyek_model->delete($id);
    
        if ($response) {
            redirect('proyek');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
            redirect('proyek');
        }
    }    
}
