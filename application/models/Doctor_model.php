<?php

class Doctor_model extends CI_Model
{
    public function getAllDoctor()
    {
        return $this->db->get('doctor')->result_array();
    }

    public function getDoctorById($id)
    {
        return $this->db->get_where('doctor', ['id' => $id])->row_array();
    }
    public function tambahDataDoctor()
    {
        // $data = [

        //     "doctor_id" => $this->input->post('doctor'),
        //     "day" => $this->input->post('day'),
        //     "shift_start" => $this->input->post('shift-start'),
        //     "shift_end" => $this->input->post('shift-end'),
        //     'insert_date' => time()
        // ];

        // $this->db->insert('schedule', $data);
    }
}
