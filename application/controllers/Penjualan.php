<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Penjualan_model");
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }

    public function beli_pulsa()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_pembelian');
        $this->load->view('template/footer');
    }

    public function simpan_data()
    {
        $simpan_data = $this->Penjualan_model;
        $hasil = $simpan_data->save();
    if($hasil){
        $this->session->set_flashdata('message', 'success');
        redirect('penjualan/data_penjualan');
        }else{
        $this->session->set_flashdata('message', 'error');
        redirect('penjualan/beli_pulsa');
        }
    }
    public function data_penjualan()
    {
        $data = $this->Penjualan_model;
        $hasil['data'] = $data->select();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('data_penjualan',$hasil);
        $this->load->view('template/footer');
    }
    public function update_penjualan()
    {
        $data = $this->Penjualan_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_update',$hasil);
        $this->load->view('template/footer');
    }
    public function update_data()
    {
        $data = $this->Penjualan_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('penjualan/data_penjualan');
            }else{
            $this->session->set_flashdata('message', 'error');
            redirect('penjualan/data_penjualan');
            }
        }
    public function delete_penjualan()
    {
        $data = $this->penjualan_model;
        $delete = $data->delete($this->input->get('id'));
        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('penjualan/data_penjualan');
            }else{
            $this->session->set_flashdata('message', 'error');
            redirect('penjualan/data_penjualan');
            }
    }
}

/* End of file Pembelian.php and path \application\controllers\Pembelian.php */
