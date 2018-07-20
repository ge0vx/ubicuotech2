<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('upload', NULL);
    }

    function upload_file() {
        $filename = str_replace(" ","-",$_FILES['file']['name']);;

        $config = array();
        $config['upload_path'] = 'uploads/';
        $config['file_name'] = $filename;
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = FALSE;
        $config['max_size'] = '2048'; //1 MB

        if (isset($filename)) {
            if (0 < $_FILES['file']['error']) {
                $response = array("error", 'Error during file upload' . $_FILES['file']['error']);
                echo json_encode($response);
            }else{
                if (file_exists('uploads/' . $filename)) {
                    $response = array('warning', $filename);
                    echo json_encode($response);
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        $response = array('error', $this->upload->display_errors());
                        echo json_encode($response);
                    } else {
                        $response = array('success', $filename);
                        echo json_encode($response);
                    }
                }
            }
        } else {
            $response = array('error', 'Please choose a file');
            echo json_encode($response);
        }
    }

}