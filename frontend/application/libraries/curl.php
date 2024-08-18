<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Curl {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('curl');
    }

    public function create($url) {
        $this->CI->curl->create($url);
    }

    public function http_method($method) {
        $this->CI->curl->http_method($method);
    }

    public function post($data) {
        $this->CI->curl->post($data);
    }

    public function execute() {
        return $this->CI->curl->execute();
    }

    public function http_header($key, $value) {
        $this->CI->curl->http_header($key, $value);
    }
}
