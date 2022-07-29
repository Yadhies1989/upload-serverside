<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadModel extends CI_Model
{
    public function uploadData($data)
    {
        $this->db->insert('tbl_image', $data);
        return $this->db->affected_rows();
    }

    public function getDataImage()
    {
        return $this->db->get('tbl_image')->result_array();
    }
}
