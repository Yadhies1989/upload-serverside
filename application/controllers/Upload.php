<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UploadModel');
    }

    public function index()
    {
        $data['title'] = 'Single Upload';
        $data['images'] = $this->UploadModel->getDataImage();
        $this->load->view('single_upload', $data);
    }

    public function file()
    {
        $upload = $_FILES['imagepabjn']['name'];

        if ($upload) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['max_width']     = '1024';
            $config['max_height']    = '768';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagepabjn')) {
                $image_name = $this->upload->data('file_name');
                $data = [
                    'image' => $image_name,
                    'title' => $image_name,
                    'date_created' => time()
                ];

                if ($this->UploadModel->uploadData($data) > 0) {
                    $this->session->set_flashdata('status', 'Berhasil Diupload');
                    redirect('upload');
                } else {
                    $this->session->set_flashdata('status', 'Server Error');
                    redirect('upload');
                }
            } else {
                $this->session->set_flashdata('status', 'salah tidak ada gambar ');
                redirect('upload');
            }
        } else {
            $this->session->set_flashdata('status', 'tidak ada gambar');
            redirect('upload');
        }
    }
}
