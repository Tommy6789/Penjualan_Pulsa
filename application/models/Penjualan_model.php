<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Penjualan_model extends CI_Model 
{
    private $table='data_penjualan';

    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    } 

    public function save()
    {
        $data = array(
            "tanggal_penjualan" => $this->input->post('tanggal_penjualan'),
            "nomor_telepon" => $this->input->post('nomor_telepon'),
            "nominal" => $this->input->post('nominal')
        );
        
        return $this->db->insert($this->table, $data);
    }
    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update()
    {
        $data = array(
            "tanggal_penjualan" => $this->input->post('tanggal_penjualan'),
            "nomor_telepon" => $this->input->post('nomor_telepon'),
            "nominal" => $this->input->post('nominal')
        );
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update($this->table,$data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }                
}


/* End of file Penjualan_model.php and path \application\models\Penjualan_model.php */
