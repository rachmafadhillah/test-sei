<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    private $api_url;

    public function __construct() {
        parent::__construct();
        $this->api_url = 'http://localhost:8080/proyek';
    }

    public function get_all() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        if ($http_code != 200) {
            show_error('Gagal mengambil data dari API. HTTP status code: ' . $http_code);
        }
        
        return json_decode($response, true);
    }

    public function get_by_id($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/get?id=' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        if ($http_code != 200) {
            show_error('Gagal mengambil data dari API. HTTP status code: ' . $http_code);
        }
    
        return json_decode($response, true);
    }

    public function create($data) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        if ($http_code == 201 || ($http_code == 200 && strpos($response, 'success') !== false)) {
            return true;
        } else {
            log_message('error', 'Gagal membuat data baru. HTTP status code: ' . $http_code . '. Response: ' . $response);
            return false;
        }
    }
    

    public function update($id, $data) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/' . $id); // Correct URL structure for PUT
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Ensure PUT method is used
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        if ($http_code != 204) {
            show_error('Gagal memperbarui data. HTTP status code: ' . $http_code . '. Response: ' . $response);
        }
    
        return json_decode($response, true);
    }    
      

    public function delete($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($http_code != 204) {
            show_error('Gagal menghapus data. HTTP status code: ' . $http_code . '. Response: ' . $response);
        }

        return json_decode($response, true);
    }
}
