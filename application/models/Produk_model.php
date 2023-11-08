<?php

class Produk_model extends CI_Model
{

    function fetch_data($table, $where = null)
    {
        $this->db->select('* ');
        $this->db->from($table);
        if ($where) {
            $this->db->where($where);
        }
        $this->db->order_by('id asc');
        return $this->db->get();
    }

    public function create_user($phone_number, $otp_code, $otp_expiry)
    {
        $data = array(
            'phone_number' => $phone_number,
            'otp_code' => $otp_code,
            'otp_expiry' => $otp_expiry
        );
        $this->db->insert('users', $data);
    }

    public function get_user_by_phone_number($phone_number)
    {
        $this->db->where('phone_number', $phone_number);
        return $this->db->get('users')->row();
    }
}
