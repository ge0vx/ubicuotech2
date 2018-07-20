<?php
    class Model_get extends CI_Model{
        function getData($lang){
            $json_file = base_url() . "assets/json_data/".$lang.".json";
            $str = file_get_contents($json_file);
            return json_decode($str, true);
        }
    }