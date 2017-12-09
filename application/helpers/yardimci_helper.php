<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function generate_uri($slug, $id=FALSE) {
    $CI =& get_instance();
    $CI->load->helper('text');
    if ($id === FALSE){
        return url_title(convert_accented_characters(mb_strtolower($slug)));
    }else{
        return url_title(convert_accented_characters(mb_strtolower($slug))).'-'.$id;
    }
}