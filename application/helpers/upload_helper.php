<?php
	public function do_upload()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('video'))
            {
                $error = array('error' => $this->upload->display_errors());
				return false;
                
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
				return true;
            }
    }

?>