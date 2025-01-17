<?php

class Mall_model extends CI_model {
    public function showAllMall() {
        return $this->db->get('malls')->result_array();
    }

    public function showCountMall() {
        return $this->db->get('malls')->num_rows();
    }

    public function addMall()
    {
       
        $data = [
            "thumbnail" => $this->upload->data('file_name'),
            "namaMall" => $this->input->post('namaMall',true),
            "alamatMall" => $this->input->post('alamatMall',true),
            "jamBukaMall" => $this->input->post('jamBukaMall',true),
            "jamTutupMall" => $this->input->post('jamTutupMall',true),
            "active" => $this->input->post('active',true),
        ];

        $this->db->insert('malls',$data);

	}
        

    public function editMall($data)
    {
        $datas = [
            "idMall" => $data['idMall'],
            "namaMall" => $data['namaMall'],
            "alamatMall" => $data['alamatMall'],
            "active" => $data['active'],
        ];
        
        $this->db->where('idMall', $data['idMall']);
        $this->db->update('malls', $datas);
    }
}