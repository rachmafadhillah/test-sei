<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all();
        $this->load->view('lokasi/index', $data);
    }

    public function get_by_id($id) {
        $data['lokasi'] = $this->Lokasi_model->get_by_id($id);
    
        if (!$data['lokasi']) {
            show_404();
        }
    
        $this->load->view('lokasi/edit', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'namaLokasi'     => $this->input->post('namaLokasi'),
                'negara'         => $this->input->post('negara'),
                'provinsi'       => $this->input->post('provinsi'),
                'kota'           => $this->input->post('kota')
            );

            $response = $this->Lokasi_model->create($data);

            if ($response) {
                redirect('lokasi');
            } else {
                $this->session->set_flashdata('error', 'Gagal membuat data baru.');
                redirect('lokasi/create');
            }
        } else {
            $this->load->view('lokasi/create');
        }
    }

    public function edit($id) {
        $data['lokasi'] = $this->Lokasi_model->get_by_id($id);
    
        if (!$data['lokasi']) {
            show_404();
        }
    
        if ($this->input->post()) {
            $data_update = array(
                'namaLokasi' => $this->input->post('namaLokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
            );
            $this->Lokasi_model->update($id, $data_update);
            redirect('lokasi');
        } else {
            $this->load->view('lokasi/edit', $data);
        }
    }    
    

    public function delete($id) {
        $response = $this->Lokasi_model->delete($id);
    
        if ($response) {
            redirect('lokasi');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
            redirect('lokasi');
        }
    }    
}
